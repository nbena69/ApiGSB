<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * Class Composant
 *
 * @property int $id_composant
 * @property string|null $lib_composant
 *
 * @property Collection|Constituer[] $constituers
 *
 * @package App\Models
 */
class Composant extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'composant';
	protected $primaryKey = 'id_composant';
	public $timestamps = false;

	protected $fillable = [
		'lib_composant'
	];

	public function constituers()
	{
		return $this->hasMany(Constituer::class, 'id_composant');
	}
}
