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
        Schema::create('attribute_tags', function (Blueprint $table) {
            $table->String('attribute_name', $length = 256)->primary();
            $table->Text('definition');
            $table->String('prefix', $length = 128);
            $table->String('data_type', $length = 128);
            $table->String('balance_type', $length = 128);
            $table->String('period_type', $length = 128);
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attribute_tags');
    }
};
