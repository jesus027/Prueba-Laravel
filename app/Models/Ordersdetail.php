<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ordersdetail
 *
 * @property $id
 * @property $articulo
 * @property $cantidad
 * @property $precio
 * @property $total
 * @property $created_at
 * @property $updated_at
 *
 * @property Order[] $orders
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ordersdetail extends Model
{
    
    static $rules = [
		'articulo' => 'required',
		'cantidad' => 'required',
		'precio' => 'required',
		'total' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['articulo','cantidad','precio','total'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orders()
    {
        return $this->hasMany('App\Models\Order', 'ordersdetails_id', 'id');
    }
    

}
