<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->integer('institution_id')->unsigned();
			$table->integer('review_star')->nullable();
			$table->text('review')->nullable();
			$table->timestamps();
			
			$table->foreign("user_id")->references("id")->on("users");
			$table->foreign("institution_id")->references("id")->on("institutions");
	        $table->unique(['institution_id', 'user_id']);

			// ----------------------------------------------------
			// -- SELECT [reviews]--
			// ----------------------------------------------------
			// $query = DB::table("reviews")
			// ->leftJoin("users","users.id", "=", "reviews.user_id")
			// ->leftJoin("institutions","institutions.id", "=", "reviews.institution_id")
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
        Schema::dropIfExists('reviews');
    }
}
