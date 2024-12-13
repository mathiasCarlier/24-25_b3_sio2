<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Qualite
 * 
 * @property int $idQual
 * @property string $type
 * 
 * @property Collection|ElementListe[] $element_listes
 *
 * @package App\Models
 */
class Qualite extends Model
{
	protected $table = 'qualites';
	protected $primaryKey = 'idQual';
	public $timestamps = false;

	protected $fillable = [
		'type'
	];

	public function element_listes()
	{
		return $this->hasMany(ElementListe::class, 'idQual');
	}
}
