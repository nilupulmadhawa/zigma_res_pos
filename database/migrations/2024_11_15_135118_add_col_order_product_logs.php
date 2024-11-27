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
            // order_product_logs add column
            Schema::table('order_product_logs', function (Blueprint $table) {
                $table->tinyInteger('kot_status')->nullable()->default(0);
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // order_product_logs drop column
        Schema::table('order_product_logs', function (Blueprint $table) {
            $table->dropColumn('kot_status');
        });
    }
};
