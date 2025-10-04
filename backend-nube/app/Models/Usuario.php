<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 * 
 * @property int $id_usuario
 * @property string $nombre
 * @property string $email
 * @property string $rol
 * @property string|null $password_hash
 * @property Carbon $created_at
 * 
 * @property Collection|Consulta[] $consultas
 *
 * @package App\Models
 */
class Usuario extends Model
{
	protected $table = 'usuarios';
	protected $primaryKey = 'id_usuario';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'email',
		'rol',
		'password_hash'
	];

	public function consultas()
	{
		return $this->hasMany(Consulta::class, 'id_usuario');
	}
}
