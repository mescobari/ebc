<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pago
 * 
 * @property int $id
 * @property int|null $gestion
 * @property int $mov_financieros_id
 * @property int|null $entidad
 * @property int|null $dir_admin
 * @property string|null $num_c31
 * @property string|null $tipo_form
 * @property string|null $tipo_doc
 * @property string|null $medio_pago
 * @property int|null $num_pago
 * @property string|null $num_grupo
 * @property string|null $num_cheque
 * @property int|null $num_lote
 * @property string|null $num_doc
 * @property int|null $banco_dest
 * @property string|null $tipo_doc_pago
 * @property string|null $num_doc_pago
 * @property string|null $exp
 * @property string|null $nombre
 * @property float|null $liquido_pagable
 * @property string|null $estado_pago
 * 
 * @property MovFinanciero $mov_financiero
 *
 * @package App\Models
 */
class Pago extends Model
{
	protected $table = 'pagos';
	public $timestamps = false;

	protected $casts = [
		'gestion' => 'int',
		'mov_financieros_id' => 'int',
		'entidad' => 'int',
		'dir_admin' => 'int',
		'num_pago' => 'int',
		'num_lote' => 'int',
		'banco_dest' => 'int',
		'liquido_pagable' => 'float'
	];

	protected $fillable = [
		'gestion',
		'mov_financieros_id',
		'entidad',
		'dir_admin',
		'num_c31',
		'tipo_form',
		'tipo_doc',
		'medio_pago',
		'num_pago',
		'num_grupo',
		'num_cheque',
		'num_lote',
		'num_doc',
		'banco_dest',
		'tipo_doc_pago',
		'num_doc_pago',
		'exp',
		'nombre',
		'liquido_pagable',
		'estado_pago'
	];

	public function mov_financiero()
	{
		return $this->belongsTo(MovFinanciero::class, 'mov_financieros_id');
	}
}
