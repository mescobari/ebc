<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MovFinanciero
 * 
 * @property int $id
 * @property int|null $gestion
 * @property string|null $tipo_reg
 * @property int|null $entidad
 * @property int|null $dir_admin
 * @property int|null $preventivo
 * @property int|null $comprometido
 * @property int|null $devengado
 * @property int|null $pagado
 * @property int|null $sec
 * @property int|null $c_g
 * @property string|null $sisin
 * @property string|null $sigade
 * @property string|null $sist
 * @property int|null $tipo_doc_rdo
 * @property string|null $num_doc
 * @property string|null $num_pago
 * @property Carbon|null $fecha_aprobacion
 * @property Carbon|null $fecha_firma
 * @property float|null $autorizado
 * @property float|null $deduccion
 * @property float|null $multas
 * @property float|null $liquido_pagable
 * @property float $aux1
 * @property string|null $estado
 * @property int|null $fuente
 * @property int|null $organismo
 * @property int|null $banco
 * @property int|null $cuenta
 * @property int|null $libreta
 * @property string|null $resumen
 * @property int|null $unidad_ejecutora
 * @property int|null $programa
 * @property int|null $proyecto
 * @property int|null $actividad
 * @property string|null $objeto
 * @property int|null $ent_transferencia
 * @property string|null $clase_doc
 * @property string|null $tipo_rep
 * 
 * @property Collection|MovFinancierosDet[] $mov_financieros_dets
 * @property Collection|Pago[] $pagos
 *
 * @package App\Models
 */
class MovFinanciero extends Model
{
	protected $table = 'mov_financieros';
	public $timestamps = false;

	protected $casts = [
		'gestion' => 'int',
		'entidad' => 'int',
		'dir_admin' => 'int',
		'preventivo' => 'int',
		'comprometido' => 'int',
		'devengado' => 'int',
		'pagado' => 'int',
		'sec' => 'int',
		'c_g' => 'int',
		'tipo_doc_rdo' => 'int',
		'autorizado' => 'float',
		'deduccion' => 'float',
		'multas' => 'float',
		'liquido_pagable' => 'float',
		'aux1' => 'float',
		'fuente' => 'int',
		'organismo' => 'int',
		'banco' => 'int',
		'cuenta' => 'int',
		'libreta' => 'int',
		'unidad_ejecutora' => 'int',
		'programa' => 'int',
		'proyecto' => 'int',
		'actividad' => 'int',
		'ent_transferencia' => 'int'
	];

	protected $dates = [
		'fecha_aprobacion',
		'fecha_firma'
	];

	protected $fillable = [
		'gestion',
		'tipo_reg',
		'entidad',
		'dir_admin',
		'preventivo',
		'comprometido',
		'devengado',
		'pagado',
		'sec',
		'c_g',
		'sisin',
		'sigade',
		'sist',
		'tipo_doc_rdo',
		'num_doc',
		'num_pago',
		'fecha_aprobacion',
		'fecha_firma',
		'autorizado',
		'deduccion',
		'multas',
		'liquido_pagable',
		'aux1',
		'estado',
		'fuente',
		'organismo',
		'banco',
		'cuenta',
		'libreta',
		'resumen',
		'unidad_ejecutora',
		'programa',
		'proyecto',
		'actividad',
		'objeto',
		'ent_transferencia',
		'clase_doc',
		'tipo_rep'
	];

	public function mov_financieros_dets()
	{
		return $this->hasMany(MovFinancierosDet::class, 'mov_finacieros_id');
	}

	public function pagos()
	{
		return $this->hasMany(Pago::class, 'mov_financieros_id');
	}
}
