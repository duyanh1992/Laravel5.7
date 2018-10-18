<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'products';

    /**
     * Run the migrations.
     * @table products
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

            $table->string('id', 15)->primary();
            $table->string('title', 255);
            $table->unsignedInteger('category_id')->nullable();
            $table->text('description');
            $table->integer('delivery_method');
            $table->decimal('stable_price', 13, 2)->nullable();
            $table->decimal('buy_now_price', 13, 2)->nullable();
            $table->dateTime('expired_date');
            $table->unsignedTinyInteger('status');
            $table->dateTime('published_date')->nullable();
            $table->unsignedInteger('user_id');
            $table->unsignedTinyInteger('selling_type');
            $table->decimal('bidding_price', 13, 2)->nullable();
            $table->unsignedInteger('bidding_count');
            $table->unsignedInteger('view_count');

            $table->timestamps();
            
            $table->index(['user_id']);
            $table->index(['category_id']);

            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('user_id')->references('id')->on('users');
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
