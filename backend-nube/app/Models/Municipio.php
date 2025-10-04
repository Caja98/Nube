<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Municipio
 * 
 * @property int $id_municipio
 * @property int $id_entidad
 * @property string $nombre
 * @property int|null $poblacion
 * @property float|null $latitud
 * @property float|null $longitud
 * 
 * @property Entidade $entidade
 * @property Collection|Incidencium[] $incidencia
 * @property Collection|Poblacion[] $poblacions
 *
 * @package App\Models
 */
class Municipio extends Model
{
	protected $table = 'municipios';
	protected $primaryKey = 'id_municipio';
	public $timestamps = false;

	protected $casts = [
		'id_entidad' => 'int',
		'poblacion' => 'int',
		'latitud' => 'float',
		'longitud' => 'float'
	];

	protected $fillable = [
		'id_entidad',
		'nombre',
		'poblacion',
		'latitud',
		'longitud'
	];

	public function entidade()
	{
		return $this->belongsTo(Entidade::class, 'id_entidad');
	}

	public function incidencia()
	{
		return $this->hasMany(Incidencium::class, 'id_municipio');
	}

	public function poblacions()
	{
		return $this->hasMany(Poblacion::class, 'id_municipio');
	}
}
