<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CurrencyLocations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currency_locations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('currency_id')->unsigned();
            $table->foreign('currency_id')->references('id')->on('currencies');
            $table->string('location',255);
            $table->string('icon',255)->nullable();
         });

         $data = [
            [
                'currency_id'   => 1,
                'location'      => 'Emirados Árabes Unidos',
                'icon'          => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Flag_of_the_United_Arab_Emirates.svg/33px-Flag_of_the_United_Arab_Emirates.svg.png',
            ],
            [
                'currency_id'   => 2,
                'location'      => 'Curaçau',
                'icon'          => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b1/Flag_of_Cura%C3%A7ao.svg/30px-Flag_of_Cura%C3%A7ao.svg.png',
            ],
            [
                'currency_id'   => 2,
                'location'      => 'São Martinho Neerlandês',
                'icon'          => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d3/Flag_of_Sint_Maarten.svg/33px-Flag_of_Sint_Maarten.svg.png',
            ],
            [
                'currency_id'   => 3,
                'location'      => 'Bolívia',
                'icon'          => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b3/Bandera_de_Bolivia_%28Estado%29.svg/33px-Bandera_de_Bolivia_%28Estado%29.svg.png',
            ],
            [
                'currency_id'   => 4,
                'location'      => 'Bolívia',
                'icon'          => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b3/Bandera_de_Bolivia_%28Estado%29.svg/33px-Bandera_de_Bolivia_%28Estado%29.svg.png',
            ],
            [
                'currency_id'   => 5,
                'location'      => 'Brasil',
                'icon'          => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/33px-Flag_of_Brazil.svg.png',
            ],
            [
                'currency_id'   => 6,
                'location'      => 'Canadá',
                'icon'          => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d9/Flag_of_Canada_%28Pantone%29.svg/33px-Flag_of_Canada_%28Pantone%29.svg.png',
            ],
            [
                'currency_id'   => 7,
                'location'      => 'Estados Unidos',
                'icon'          => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Flag_of_the_United_States.svg/33px-Flag_of_the_United_States.svg.png',
            ],
            [
                'currency_id'   => 7,
                'location'      => 'Equador',
                'icon'          => 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e8/Flag_of_Ecuador.svg/33px-Flag_of_Ecuador.svg.png',
            ],
            [
                'currency_id'   => 7,
                'location'      => 'El Salvador',
                'icon'          => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/34/Flag_of_El_Salvador.svg/30px-Flag_of_El_Salvador.svg.png',
            ],
            [
                'currency_id'   => 7,
                'location'      => 'Guam',
                'icon'          => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/07/Flag_of_Guam.svg/30px-Flag_of_Guam.svg.png',
            ],
        ];

        DB::table('currency_locations')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('currcurrency_locationsencies');
    }
}
