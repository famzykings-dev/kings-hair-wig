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
    Schema::create('orders', function (Blueprint $table) {
        $table->id();

        // customer info
        $table->string('name');
        $table->string('phone');
        $table->text('address');

        // order details
        $table->longText('cart_data'); // store cart JSON
        $table->text('note')->nullable();

        // payment
        $table->string('payment_proof')->nullable();

        // status
        $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');

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
        Schema::dropIfExists('orders');
    }
};
