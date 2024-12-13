<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class LieuDeStock
 * 
 * @property int $id
 * @property int $idPlac
 * @property string $nomLieu
 * 
 * @property User $user
 * @property Collection|EstDan[] $est_dans
 *
 * @package App\Models
 */
class LieuDeStock extends Model
{
	protected $table = 'lieu_de_stocks';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'idPlac' => 'int'
	];

	protected $fillable = [
		'nomLieu'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'id');
	}

	public function est_dans()
	{
		return $this->hasMany(EstDan::class, 'id');
	}
}
