<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Categoriadelito
 * 
 * @property int $id_categoria
 * @property string $nombre
 * 
 * @property Collection|Delito[] $delitos
 * @property Collection|Subcategoriadelito[] $subcategoriadelitos
 *
 * @package App\Models
 */
class Categoriadelito extends Model
{
	protected $table = 'categoriadelito';
	protected $primaryKey = 'id_categoria';
	public $timestamps = false;

	protected $fillable = [
		'nombre'
	];

	public function delitos()
	{
		return $this->hasMany(Delito::class, 'id_categoria');
	}

	public function subcategoriadelitos()
	{
		return $this->hasMany(Subcategoriadelito::class, 'id_categoria');
	}
}
