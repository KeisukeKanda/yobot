<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('zipcode')->nullable();
            $table->string('address')->nullable();
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('address3')->nullable();
            $table->string('address4')->nullable();
            $table->string('tel')->nullable();
            $table->string('institution_img')->nullable();
            $table->string('health_check')->nullable();
            $table->string('gc_barium')->nullable();
            $table->string('gc_endoscopy')->nullable();
            $table->string('lung_cancer')->nullable();
            $table->string('colon_cancer')->nullable();
            $table->string('mammography')->nullable();
            $table->string('cervical_cancer')->nullable();
            $table->string('prostate_cancer')->nullable();
            $table->string('bone')->nullable();
            $table->string('hepatitis')->nullable();
            $table->string('vaccination')->nullable();
            $table->string('smoking_counsel')->nullable();
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
        Schema::dropIfExists('institutions');
    }
}
