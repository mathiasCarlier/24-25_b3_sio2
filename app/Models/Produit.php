<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Produit
 * 
 * @property int $idAlim
 * @property string $nomProduit
 * @property int $idUnit
 * 
 * @property Unite $unite
 * @property Collection|AppartientA[] $appartient_as
 * @property Collection|ElementListe[] $element_listes
 * @property Collection|EstDan[] $est_dans
 *
 * @package App\Models
 */
class Produit extends Model
{
	protected $table = 'produits';
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

	public function appartient_as()
	{
		return $this->hasMany(AppartientA::class, 'idAlim');
	}

	public function element_listes()
	{
		return $this->hasMany(ElementListe::class, 'idAlim');
	}

	public function est_dans()
	{
		return $this->hasMany(EstDan::class, 'idAlim');
	}
}
