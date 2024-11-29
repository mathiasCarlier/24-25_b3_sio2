<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Liste
 * 
 * @property int $idList
 * @property string $nomListe
 * @property Carbon $date_crea
 * @property int $id
 * 
 * @property User $user
 * @property Collection|ElementListe[] $element_listes
 *
 * @package App\Models
 */
class Liste extends Model
{
	protected $table = 'LC_listes';
	protected $primaryKey = 'idList';
	public $timestamps = false;

	protected $casts = [
		'date_crea' => 'datetime',
		'id' => 'int'
	];

	protected $fillable = [
		'nomListe',
		'date_crea',
		'id'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'id');
	}

	public function element_listes()
	{
		return $this->hasMany(ElementListe::class, 'idList');
	}
}
