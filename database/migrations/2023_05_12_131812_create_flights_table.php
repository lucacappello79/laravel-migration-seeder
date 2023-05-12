<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();

            $table->string('azienda', 100);
            $table->string('aeroporto_di_partenza', 100);
            $table->string('aeroporto_di_arrivo', 100);
            $table->dateTime('orario_di_partenza');
            $table->dateTime('orario_di_arrivo');
            $table->string('codice_volo', 20);
            $table->Integer('numero_passeggeri')->nullable();
            $table->boolean('in_orario')->nullable();
            $table->boolean('cancellato')->default(false)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flights');
    }
};
