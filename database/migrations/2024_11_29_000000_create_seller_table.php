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
        Schema::create('seller', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('auth')->nullable(); // 승인여부
            $table->string('auth_at')->nullable(); // 승인일자


            // 셀러id
            $table->string('user_id')->nullable();
            $table->string('email')->nullable();
            $table->string('company')->nullable();

            // 셀러 유형
            $table->string('type')->nullable();

            // 적립금
            $table->string('emoney')->nullable();

            //
            $table->string('discount')->nullable();
            $table->string('margin')->nullable();

            $table->string('status')->nullable();
            $table->string('expired_at')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seller');
    }
};
