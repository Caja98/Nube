<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Entidade
 * 
 * @property int $id_entidad
 * @property string $nombre
 * @property string|null $abreviatura
 * @property string|null $region
 * 
 * @property Collection|Municipio[] $municipios
 *
 * @package App\Models
 */
class Entidade extends Model
{
	protected $table = 'entidades';
	protected $primaryKey = 'id_entidad';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'abreviatura',
		'region'
	];

	public function municipios()
	{
		return $this->hasMany(Municipio::class, 'id_entidad');
	}
}
