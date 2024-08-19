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
        Schema::table('tickets', function (Blueprint $table) {
            $table->string('status')->default('open'); // Default status
        });
    }
    
    public function down()
    {
        Schema::table('tickets', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
    
};