<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['customer_id', 'food_id', 'quantity'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function food()
    {
        return $this->belongsTo(Food::class);
    }
}
