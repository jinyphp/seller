<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * 셀러 등록 요청
 */
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seller_req', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('req')->nullable(); // 요청여부
            $table->string('req_at')->nullable(); // 요청일자

            $table->string('auth')->nullable(); // 승인여부
            $table->string('auth_at')->nullable(); // 승인일자

            // 셀러id
            $table->string('user_id')->nullable();
            $table->string('email')->nullable();
            $table->string('company')->nullable();

            // 셀러 유형
            $table->string('type')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seller_req');
    }
};
