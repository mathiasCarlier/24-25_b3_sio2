<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Produit
 * 
 * @property int $idAlim
 * @property string $nomProduit
 * @property int $idUnit
 * 
 * @property Unite $unite
 *
 * @package App\Models
 */
class Produit extends Model
{
	protected $table = 'LC_produits';
	protected $primaryKey = 'idAlim';
	public $timestamps = false;

	protected $casts = [
		'idUnit' => 'int'
	];

	protected $fillable = [
		'nomProduit',
		'idUnit'
	];

	public function unite()
	{
		return $this->belongsTo(Unite::class, 'idUnit');
	}
}
