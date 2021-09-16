<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecommendationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("recommendations", function (Blueprint $table) {
    
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->integer('item_id')->nullable()->unsigned();
			$table->integer('done')->nullable();
			$table->date('done_date')->nullable();
			$table->string('result_file',256)->nullable();
			$table->text('result_comment')->nullable();
			$table->timestamps();
			//$table->foreign("user_id")->references("id")->on("users");
			//$table->foreign("item_id")->references("id")->on("items");



			// ----------------------------------------------------
			// -- SELECT [recommendations]--
			// ----------------------------------------------------
			// $query = DB::table("recommendations")
			// ->leftJoin("users","users.id", "=", "recommendations.user_id")
			// ->leftJoin("items","items.id", "=", "recommendations.item_id")
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
        Schema::dropIfExists('recommendations');
    }
}
