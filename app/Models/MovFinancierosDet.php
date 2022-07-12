<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MovFinancierosDet
 * 
 * @property int $id
 * @property int $mov_finacieros_id
 * @property int|null $unidad_ejecutora
 * @property int|null $programa
 * @property int|null $proyecto
 * @property int|null $actividad
 * @property string|null $objeto
 * @property int|null $ent_transferencia
 * @property float|null $preventivo
 * @property float|null $compromiso
 * @property float|null $devengado
 * @property float|null $pagado
 * 
 * @property MovFinanciero $mov_financiero
 *
 * @package App\Models
 */
class MovFinancierosDet extends Model
{
	protected $table = 'mov_financieros_det';
	public $timestamps = false;

	protected $casts = [
		'mov_finacieros_id' => 'int',
		'unidad_ejecutora' => 'int',
		'programa' => 'int',
		'proyecto' => 'int',
		'actividad' => 'int',
		'ent_transferencia' => 'int',
		'preventivo' => 'float',
		'compromiso' => 'float',
		'devengado' => 'float',
		'pagado' => 'float'
	];

	protected $fillable = [
		'mov_finacieros_id',
		'unidad_ejecutora',
		'programa',
		'proyecto',
		'actividad',
		'objeto',
		'ent_transferencia',
		'preventivo',
		'compromiso',
		'devengado',
		'pagado'
	];

	public function mov_financiero()
	{
		return $this->belongsTo(MovFinanciero::class, 'mov_finacieros_id');
	}
}
