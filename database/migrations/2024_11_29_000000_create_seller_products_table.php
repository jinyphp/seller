<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seller_products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('enable')->nullable();

            // 셀러id
            $table->string('user_id')->nullable();
            $table->string('email')->nullable();
            $table->string('company')->nullable();

            $table->string('category')->nullable();
            $table->string('title')->nullable();
            $table->string('image')->nullable();
            $table->string('options')->nullable();
            $table->text('description')->nullable();

            $table->string('price')->nullable();
            $table->string('price_at')->nullable(); // 가격 변동일자
            $table->string('unit')->nullable(); // 단위

            $table->integer('cnt')->default(0);
            $table->integer('like')->default(0);
            $table->integer('review')->default(0);
            $table->integer('rank')->default(0);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seller_products');
    }
};
