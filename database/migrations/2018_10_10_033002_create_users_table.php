<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'users';

    /**
     * Run the migrations.
     * @table users
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) {
            return;
        }
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->increments('id');
            $table->string('name', 127);
            $table->string('email', 127);
            $table->string('password', 127);
            $table->string('avatar_bucket', 31);
            $table->string('avatar_name', 255);
            $table->string('avatar_url', 255);
            $table->unsignedTinyInteger('role');
            $table->string('tel', 31);
            $table->float('rating', 5, 2);
            $table->unsignedInteger('review_count');

            $table->timestamps();
            
            $table->unique(['email']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->set_schema_table);
    }
}
