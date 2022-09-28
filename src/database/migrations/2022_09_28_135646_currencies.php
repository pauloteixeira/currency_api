<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Currencies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currencies', function (Blueprint $table) {
            $table->increments('id');
            $table->char('code',3)->unique();
            $table->char('number',3);
            $table->tinyInteger('decimal')->nullable();
            $table->string('currency',150);
            $table->timestamp('created_at')->useCurrent();
            $table->index("code");
            $table->index("number");
        });

        $data = [
            [
                'id'        => 1,
                'code'      => 'AED',
                'number'    => '784',
                'decimal'   => 2,
                'currency'  => 'Dirham dos Emirados',                
            ],
            [
                'id'        => 2,
                'code'      => 'ANG',
                'number'    => '532',
                'decimal'   => 2,
                'currency'  => 'Florim',              
            ],
            [
                'id'        => 3,
                'code'      => 'BOB',
                'number'    => '068',
                'decimal'   => 2,
                'currency'  => 'Boliviano',              
            ],
            [
                'id'        => 4,
                'code'      => 'BOV',
                'number'    => '984',
                'decimal'   => 2,
                'currency'  => 'Boliviano Mvdol',              
            ],
            [
                'id'        => 5,
                'code'      => 'BRL',
                'number'    => '986',
                'decimal'   => 2,
                'currency'  => 'Real',              
            ],
            [
                'id'        => 6,
                'code'      => 'CAD',
                'number'    => '124',
                'decimal'   => 2,
                'currency'  => 'Dólar Canadense',              
            ],
            [
                'id'        => 7,
                'code'      => 'USD',
                'number'    => '840',
                'decimal'   => 2,
                'currency'  => 'Dólar Americano',              
            ],
        ];
        DB::table('currencies')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('currencies');
    }
}
