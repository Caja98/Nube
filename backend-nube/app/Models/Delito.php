<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Delito
 * 
 * @property int $id_delito
 * @property int|null $id_categoria
 * @property int|null $id_subcategoria
 * @property string|null $categoria
 * @property string|null $subcategoria
 * @property string|null $descripcion
 * 
 * @property Categoriadelito|null $categoriadelito
 * @property Subcategoriadelito|null $subcategoriadelito
 * @property Collection|Incidencium[] $incidencia
 *
 * @package App\Models
 */
class Delito extends Model
{
	protected $table = 'delitos';
	protected $primaryKey = 'id_delito';
	public $timestamps = false;

	protected $casts = [
		'id_categoria' => 'int',
		'id_subcategoria' => 'int'
	];

	protected $fillable = [
		'id_categoria',
		'id_subcategoria',
		'categoria',
		'subcategoria',
		'descripcion'
	];

	public function categoriadelito()
	{
		return $this->belongsTo(Categoriadelito::class, 'id_categoria');
	}

	public function subcategoriadelito()
	{
		return $this->belongsTo(Subcategoriadelito::class, 'id_subcategoria');
	}

	public function incidencia()
	{
		return $this->hasMany(Incidencium::class, 'id_delito');
	}
}
