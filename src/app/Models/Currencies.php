<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Currencies extends Model
{
    public $timestamps			= false;
	protected $primaryKey		= 'id';
	protected $table			= 'currencies';
	protected $connection		= 'appConn';

	protected $fillable			= ['code','number','decimal','currency'];

	protected $hidden			= ["id","created_at"];
	protected $attributes		= [];
	protected $casts			= [];
    protected $appends			= [];


    public function locations ()
	{
		return $this->hasMany(\App\Models\CurrencyLocations::class, 'currency_id', 'id')->orderBy('id', 'ASC');
	}
}