<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
			$table->increments('id');
			$table->string('username',20);
			$table->string('password')->notNull();
			$table->enum('gender',[1,2,3])->notNull()->default('1');
			$table->string('mobile',11);
			$table->string('email',50);
			$table->tinyInteger('role_id');
			$table->timestamps();
			$table->rememberToken();
			$table->enum('status',[1,2])->notNull()->default('2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin');
    }
}
