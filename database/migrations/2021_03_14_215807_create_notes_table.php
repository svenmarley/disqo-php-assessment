

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->increments('id');
            $table->string( 'Title', 50 );
            $table->text( 'Note' );
            $table->timestamps();
        });
    }

    /**
     * Reverse the  migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::dropIfExists('notes');
    }
}
