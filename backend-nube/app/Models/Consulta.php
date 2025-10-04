<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Consulta
 * 
 * @property int $id_consulta
 * @property int $id_usuario
 * @property Carbon $fecha
 * @property string|null $filtros
 * @property string|null $ip_origen
 * 
 * @property Usuario $usuario
 *
 * @package App\Models
 */
class Consulta extends Model
{
	protected $table = 'consultas';
	protected $primaryKey = 'id_consulta';
	public $timestamps = false;

	protected $casts = [
		'id_usuario' => 'int',
		'fecha' => 'datetime'
	];

	protected $fillable = [
		'id_usuario',
		'fecha',
		'filtros',
		'ip_origen'
	];

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'id_usuario');
	}
}
