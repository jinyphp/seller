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
        Schema::create('seller_orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('orderno')->nullable(); // 주문번호

            // 구매자 정보
            $table->string('user_id')->nullable();
            $table->string('email')->nullable();
            $table->string('company')->nullable();

            // 판매자 정보
            $table->string('seller_id')->nullable();
            $table->string('seller_email')->nullable();
            $table->string('seller_company')->nullable();

            // 상품 정보
            $table->string('product_id')->nullable();
            $table->string('product_title')->nullable();
            $table->string('product_options')->nullable();
            $table->string('product_price')->nullable();
            $table->string('product_unit')->nullable();


            // 할인
            $table->string('discount')->nullable();
            // 마진
            $table->string('margin')->nullable();

            $table->string('status')->nullable();

            //
            $table->string('payment')->nullable();
            $table->string('payment_at')->nullable(); // 결제일자

            $table->string('price')->nullable();
            $table->string('num')->nullable(); // 수량
            $table->string('unit')->nullable(); // 단위

            // 총액
            $table->string('total')->nullable();

            // 쿠폰
            $table->string('coupon')->nullable();
            $table->string('coupon_price')->nullable();

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

            // 주소
            $table->string('address')->nullable();
            $table->string('address_detail')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('phone')->nullable(); // 연락처



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seller_orders');
    }
};
