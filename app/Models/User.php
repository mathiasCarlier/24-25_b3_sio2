<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $comment
 * @property int $id_role
 * 
 * @property Role $role
 *
 * @package App\Models
 */
#class User extends Model
class User extends Authenticatable
{
	use HasFactory, Notifiable;

	#protected $table = 'LC_users';

	protected $casts = [
		'email_verified_at' => 'datetime',
		'id_role' => 'int'
	];

	/**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
	protected $hidden = [
		'password',
		'remember_token'
	];


	/**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
	 */
	protected $fillable = [
		'name',
		'email',
		'email_verified_at',
		'password',
		'remember_token',
		'first_name',
		'last_name',
		'comment',
		'id_role'
	];

	public function role()
	{
		return $this->belongsTo(Role::class, 'id_role');
	}

	/**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
