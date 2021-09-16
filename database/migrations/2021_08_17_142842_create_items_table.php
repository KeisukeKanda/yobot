<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
			$table->string('item_name',64);
			$table->string('item_img',256);
			$table->text('item_content');
			$table->timestamps();



			// ----------------------------------------------------
			// -- SELECT [items]--
			// ----------------------------------------------------
			// $query = DB::table("items")
			// ->get();
			// dd($query); //For checking
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
