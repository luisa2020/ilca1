<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Insumo
 *
 * @property $IdInsumo
 * @property $Descripcion
 * @property $StockMin
 * @property $StockMax
 * @property $Stock
 * @property $UnidadesMedida_IdUnidadMedida
 * @property $created_at
 * @property $updated_at
 *
 * @property Detallecompra[] $detallecompras
 * @property Productosinsumo[] $productosinsumos
 * @property Unidadesmedida $unidadesmedida
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Insumo extends Model
{
    
    static $rules = [
		'IdInsumo' => 'required',
		'Descripcion' => 'required',
		'StockMin' => 'required',
		'StockMax' => 'required',
		'Stock' => 'required',
		'UnidadesMedida_IdUnidadMedida' => 'required',
    ];

    protected $perPage = 20;
    protected $primaryKey = 'IdInsumo';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['IdInsumo','Descripcion','StockMin','StockMax','Stock','UnidadesMedida_IdUnidadMedida'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detallecompras()
    {
        return $this->hasMany('App\Models\Detallecompra', 'Insumos_IdInsumo', 'IdInsumo');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productosinsumos()
    {
        return $this->hasMany('App\Models\Productosinsumo', 'Insumos_IdInsumo', 'IdInsumo');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function unidadesmedida()
    {
        return $this->hasOne('App\Models\Unidadesmedida', 'IdUnidadMedida', 'UnidadesMedida_IdUnidadMedida');
    }
    

}
