<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NotesChangeCaseOnFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table( 'notes', function( Blueprint $table ) {
            $table->renameColumn( 'Title', 'title' );
            $table->renameColumn( 'Note', 'note' );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table( 'notes', function( Blueprint $table ) {
            $table->renameColumn( 'title', 'Title' );
            $table->renameColumn( 'note', 'Note' );
        });
    }
}
