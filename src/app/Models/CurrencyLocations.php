<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CurrencyLocations extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $table = 'currency_locations';
    protected $connection = 'appConn';
    protected $fillable = ['currency_id','location','icon'];
    protected $hidden = ["id","currency_id"];
    protected $attributes = [];
    protected $casts = [];
    protected $appends = [];
}
