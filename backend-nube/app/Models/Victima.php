<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Victima
 * 
 * @property int $id_victima
 * @property int $id_incidencia
 * @property string $sexo
 * @property string|null $rango_edad
 * @property int|null $cantidad
 * 
 * @property Incidencium $incidencium
 *
 * @package App\Models
 */
class Victima extends Model
{
	protected $table = 'victimas';
	protected $primaryKey = 'id_victima';
	public $timestamps = false;

	protected $casts = [
		'id_incidencia' => 'int',
		'cantidad' => 'int'
	];

	protected $fillable = [
		'id_incidencia',
		'sexo',
		'rango_edad',
		'cantidad'
	];

	public function incidencium()
	{
		return $this->belongsTo(Incidencium::class, 'id_incidencia');
	}
}
