<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EntidadController extends Controller
{
    /**
     * Obtener todas las entidades (estados)
     */
    public function index()
    {
        try {
            $entidades = DB::table('Entidades')
                ->select('id_entidad', 'nombre', 'abreviatura', 'region')
                ->orderBy('nombre')
                ->get();

            return response()->json([
                'success' => true,
                'data' => $entidades
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error al obtener entidades',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Obtener una entidad específica
     */
    public function show($id)
    {
        try {
            $entidad = DB::table('Entidades')
                ->where('id_entidad', $id)
                ->first();

            if (!$entidad) {
                return response()->json([
                    'success' => false,
                    'message' => 'Entidad no encontrada'
                ], 404);
            }

            return response()->json([
                'success' => true,
                'data' => $entidad
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error al obtener la entidad',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Obtener municipios de una entidad
     */
    public function municipios($id)
    {
        try {
            $municipios = DB::table('Municipios')
                ->where('id_entidad', $id)
                ->select('id_municipio', 'nombre', 'poblacion', 'latitud', 'longitud')
                ->orderBy('nombre')
                ->get();

            return response()->json([
                'success' => true,
                'data' => $municipios
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error al obtener municipios',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}