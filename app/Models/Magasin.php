<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Magasin
 * 
 * @property int $idMag
 * @property string $nomMag
 * 
 * @property Collection|PrefereAllerDan[] $prefere_aller_dans
 * @property Collection|Rayon[] $rayons
 *
 * @package App\Models
 */
class Magasin extends Model
{
	protected $table = 'magasins';
	protected $primaryKey = 'idMag';
	public $timestamps = false;

	protected $fillable = [
		'nomMag'
	];

	public function prefere_aller_dans()
	{
		return $this->hasMany(PrefereAllerDan::class, 'idMag');
	}

	public function rayons()
	{
		return $this->hasMany(Rayon::class, 'idMag');
	}
}
