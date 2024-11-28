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
<<<<<<< HEAD
	protected $table = 'roles';
=======
	protected $table = 'LC_roles';
	protected $primaryKey = 'idRole';
>>>>>>> 95a99597c3abab125b8f1594ca4fcf9ccc39eb43
	public $timestamps = false;

	protected $fillable = [
		'label'
	];
}
