<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
    
            $table->increments('id');
			$table->string('name',64);
			$table->string('email',256); //Loginのidになる
			$table->string('password',128); //Loginのpassword
			$table->string('sex',3)->nullable();;
			$table->date('birthday')->nullable();
			$table->integer('postcode')->nullable();
			$table->integer('address_id')->nullable()->unsigned();
			$table->string('rest_address')->nullable();
			$table->integer('reminder_set')->nullable();
			$table->timestamps();
			

        //*********************************
        // Foreign KEY [ Uncomment if you want to use!! ]
        //*********************************
            //$table->foreign("address_id")->references("id")->on("addresses");



			// ----------------------------------------------------
			// -- SELECT [users]--
			// ----------------------------------------------------
			// $query = DB::table("users")
			// ->leftJoin("addresses","addresses.id", "=", "users.address_id")
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
        Schema::dropIfExists('users');
    }
}
