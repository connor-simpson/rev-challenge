<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    
    protected $table = 'stock';
    protected $appends = ['net_total', 'gross_total'];
    protected $casts = ['date' => 'date:d/m/Y'];
    protected $hidden = ['created_at', 'updated_at'];

    public function getNetTotalAttribute()
    {
        return round((($this->price * $this->quantity) / 1.2), 2);
    }

    public function getGrossTotalAttribute()
    {
        return  round(($this->price * $this->quantity), 2);
    }

}
