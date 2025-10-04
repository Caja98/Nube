<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EntidadController;
use App\Http\Controllers\Api\MunicipioController;
use App\Http\Controllers\Api\DelitoController;
use App\Http\Controllers\Api\IncidenciaController;
use App\Http\Controllers\Api\EstadisticaController;

// Rutas para Entidades (Estados)
Route::apiResource('entidades', EntidadController::class);
Route::get('entidades/{id}/municipios', [EntidadController::class, 'municipios']);

// Rutas para Municipios
Route::apiResource('municipios', MunicipioController::class);
Route::get('municipios/{id}/incidencias', [MunicipioController::class, 'incidencias']);

// Rutas para Delitos
Route::apiResource('delitos', DelitoController::class);
Route::get('categorias', [DelitoController::class, 'categorias']);

// Rutas para Incidencias (con filtros)
Route::get('incidencias', [IncidenciaController::class, 'index']);
Route::get('incidencias/mapa', [IncidenciaController::class, 'mapData']);

// Rutas para Estadísticas
Route::get('estadisticas/resumen', [EstadisticaController::class, 'resumen']);
Route::get('estadisticas/comparacion', [EstadisticaController::class, 'comparacion']);
Route::get('estadisticas/evolucion', [EstadisticaController::class, 'evolucion']);
Route::get('estadisticas/por-victimas', [EstadisticaController::class, 'porVictimas']);