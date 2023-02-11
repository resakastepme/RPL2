<?php

use App\Models\Orangtua;
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
        // Schema::create('info_orang_tua', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('gambar');
        //     $table->string('judul');
        //     $table->text('artikel');
        //     $table->timestamps();
        // });

            Schema::table('info_orang_tua', function (Blueprint $table) {

                 $table->text('sumberpenulis')->after('artikel');

            });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('info_orang_tua');

        Schema::table('info_remaja', function(Blueprint $table){
            $table->dropColumn('sumberpenulis');
        });

    }
};
