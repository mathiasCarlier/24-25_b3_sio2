<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Rayon
 * 
 * @property int $idMag
 * @property int $idRay
 * @property string $libelle
 * @property int $ordre
 * 
 * @property Magasin $magasin
 * @property Collection|AppartientA[] $appartient_as
 *
 * @package App\Models
 */
class Rayon extends Model
{
	protected $table = 'rayons';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idMag' => 'int',
		'idRay' => 'int',
		'ordre' => 'int'
	];

	protected $fillable = [
		'libelle',
		'ordre'
	];

	public function magasin()
	{
		return $this->belongsTo(Magasin::class, 'idMag');
	}

	public function appartient_as()
	{
		return $this->hasMany(AppartientA::class, 'idMag');
	}
}
