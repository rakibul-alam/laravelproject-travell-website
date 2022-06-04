<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackageInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('package_category_id');
            $table->string('package_name');
            $table->string('package_image');
            $table->string('package_price');
            $table->date('package_deadline');
            $table->date('package_rdate');
            $table->text('package_description');
            $table->tinyInteger('package_status');
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
        Schema::dropIfExists('package_infos');
    }
}
