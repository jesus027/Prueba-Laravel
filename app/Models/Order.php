<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 *
 * @property $id
 * @property $ordersdetails_id
 * @property $users_id
 * @property $num_orden
 * @property $fecha
 * @property $monto
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Ordersdetail $ordersdetail
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Order extends Model
{
    
    static $rules = [
		'ordersdetails_id' => 'required',
		'users_id' => 'required',
		'num_orden' => 'required',
		'fecha' => 'required',
		'monto' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ordersdetails_id','users_id','num_orden','fecha','monto','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ordersdetail()
    {
        return $this->hasOne('App\Models\Ordersdetail', 'id', 'ordersdetails_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'users_id');
    }
    

}
