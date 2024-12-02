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
        Schema::create('seller_emoney_log', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('user_id')->nullable();

            $table->string('type')->nullable(); // 유형

            $table->string('balance')->nullable();
            $table->string('withdraw')->nullable(); // 출금
            $table->string('deposit')->nullable(); // 입금

            $table->string('trans')->nullable(); // 거래 테이블
            $table->string('trans_id')->nullable(); // 거래id

            $table->text('description')->nullable();
            $table->string('status')->nullable(); // 상태
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seller_emoney_log');
    }
};
