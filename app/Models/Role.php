<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 * 
 * @property int $idRole
 * @property string $label
 *
 * @package App\Models
 */
class Role extends Model
{
	protected $table = 'LC_roles';
	protected $primaryKey = 'idRole';
	public $timestamps = false;

	protected $fillable = [
		'label'
	];
}
