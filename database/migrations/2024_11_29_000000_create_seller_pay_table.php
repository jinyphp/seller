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
        Schema::create('seller_pay', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('orderno')->nullable(); // 주문번호

            // 결제 유형
            // 일시물, 분할결제, 정기결제
            $table->string('type')->nullable();

            // 정기결제
            $table->string('subscription')->nullable(); // 정기결제 여부
            $table->string('subscription_type')->nullable(); // 정기결제 유형
            $table->string('subscription_period')->nullable(); // 정기결제 기간
            $table->string('subscription_next_at')->nullable(); // 다음 결제일
            $table->string('subscription_status')->nullable(); // 정기결제 상태

            // 분할결제
            $table->string('split_pay')->nullable(); // 분할결제 여부
            $table->string('split_count')->nullable(); // 분할 횟수
            $table->string('split_price')->nullable(); // 분할 금액
            $table->string('split_status')->nullable(); // 분할결제 상태
            $table->string('split_next_at')->nullable(); // 다음 결제일

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seller_pay');
    }
};
