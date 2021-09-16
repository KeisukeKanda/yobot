<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->integer('item_id')->nullable()->unsigned();
			$table->date('done_date')->nullable();
			$table->string('result_file',256)->nullable();
			$table->text('result_comment')->nullable();
			$table->timestamps();
			

        //*********************************
        // Foreign KEY [ Uncomment if you want to use!! ]
        //*********************************
//             $table->foreign("user_id")->references("id")->on("users");
// 			$table->foreign("item_id")->references("id")->on("items");



// // 			----------------------------------------------------
// // 			-- SELECT [results]--
// // 			----------------------------------------------------
// 			$query = DB::table("results")
// 			->leftJoin("users","users.id", "=", "results.user_id")
// 			->leftJoin("items","items.id", "=", "results.item_id")
// 			->get();
// 			dd($query); //For checking
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('results');
    }
}
