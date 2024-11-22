<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Qualite
 * 
 * @property int $idQual
 * @property string $type
 *
 * @package App\Models
 */
class Qualite extends Model
{
	protected $table = 'LC_qualites';
	protected $primaryKey = 'idQual';
	public $timestamps = false;

	protected $fillable = [
		'type'
	];
}
