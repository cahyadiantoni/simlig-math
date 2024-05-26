<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('latihan_campuran', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('1', 25)->nullable();
            $table->string('2', 25)->nullable();
            $table->string('3', 25)->nullable();
            $table->string('4', 25)->nullable();
            $table->string('5', 25)->nullable();
            $table->string('6', 25)->nullable();
            $table->string('7', 25)->nullable();
            $table->string('8', 25)->nullable();
            $table->string('9', 25)->nullable();
            $table->string('10', 25)->nullable();
            $table->string('11', 25)->nullable();
            $table->string('12', 25)->nullable();
            $table->string('13', 25)->nullable();
            $table->string('14', 25)->nullable();
            $table->string('15', 25)->nullable();
            $table->string('16', 25)->nullable();
            $table->string('17', 25)->nullable();
            $table->string('18', 25)->nullable();
            $table->string('19', 25)->nullable();
            $table->string('20', 25)->nullable();
            $table->string('21', 25)->nullable();
            $table->string('22', 25)->nullable();
            $table->string('23', 25)->nullable();
            $table->string('24', 25)->nullable();
            $table->string('25', 25)->nullable();
            $table->string('26', 25)->nullable();
            $table->string('27', 25)->nullable();
            $table->string('28', 25)->nullable();
            $table->string('29', 25)->nullable();
            $table->string('30', 25)->nullable();
            $table->string('31', 25)->nullable();
            $table->string('32', 25)->nullable();
            $table->string('33', 25)->nullable();
            $table->string('34', 25)->nullable();
            $table->string('35', 25)->nullable();
            $table->string('36', 25)->nullable();
            $table->string('37', 25)->nullable();
            $table->string('38', 25)->nullable();
            $table->string('39', 25)->nullable();
            $table->string('40', 25)->nullable();
            $table->string('41', 25)->nullable();
            $table->string('42', 25)->nullable();
            $table->string('43', 25)->nullable();
            $table->string('44', 25)->nullable();
            $table->string('45', 25)->nullable();
            $table->string('46', 25)->nullable();
            $table->string('47', 25)->nullable();
            $table->string('48', 25)->nullable();
            $table->string('49', 25)->nullable();
            $table->string('50', 25)->nullable();
            $table->string('51', 25)->nullable();
            $table->string('52', 25)->nullable();
            $table->string('53', 25)->nullable();
            $table->string('54', 25)->nullable();
            $table->string('55', 25)->nullable();
            $table->string('56', 25)->nullable();
            $table->string('57', 25)->nullable();
            $table->string('58', 25)->nullable();
            $table->string('59', 25)->nullable();
            $table->string('60', 25)->nullable();
            $table->string('61', 25)->nullable();
            $table->string('62', 25)->nullable();
            $table->string('63', 25)->nullable();
            $table->string('64', 25)->nullable();
            $table->string('65', 25)->nullable();
            $table->string('66', 25)->nullable();
            $table->string('67', 25)->nullable();
            $table->string('68', 25)->nullable();
            $table->string('69', 25)->nullable();
            $table->string('70', 25)->nullable();
            $table->string('71', 25)->nullable();
            $table->string('72', 25)->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('latihan_campuran');
    }
};
