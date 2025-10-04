<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Subcategoriadelito
 * 
 * @property int $id_subcategoria
 * @property int $id_categoria
 * @property string $nombre
 * 
 * @property Categoriadelito $categoriadelito
 * @property Collection|Delito[] $delitos
 *
 * @package App\Models
 */
class Subcategoriadelito extends Model
{
	protected $table = 'subcategoriadelito';
	protected $primaryKey = 'id_subcategoria';
	public $timestamps = false;

	protected $casts = [
		'id_categoria' => 'int'
	];

	protected $fillable = [
		'id_categoria',
		'nombre'
	];

	public function categoriadelito()
	{
		return $this->belongsTo(Categoriadelito::class, 'id_categoria');
	}

	public function delitos()
	{
		return $this->hasMany(Delito::class, 'id_subcategoria');
	}
}
