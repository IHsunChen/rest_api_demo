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
        Schema::create('income_statements', function (Blueprint $table) {
            $table->String('company_name', 128);
            $table->String('ticker', 10);
            $table->String('cik', 10);
            $table->String('access_number', 25);
            $table->String('label', 256);
            $table->String('value', 20);
            $table->String('attribute_name', 256)->references('attribute_name')->on('attribute_tags');
            $table->date('period_ending');
            $table->date('file_date');
            $table->String('form_type', 10);
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->primary(array('company_name', 'ticker', 'cik', 'label', 'period_ending', 'form_type'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('income_statements');
    }
};
