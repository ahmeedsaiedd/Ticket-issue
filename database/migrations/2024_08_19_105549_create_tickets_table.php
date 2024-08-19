<?php

// database/migrations/xxxx_xx_xx_create_tickets_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    public function up()
{
    Schema::create('tickets', function (Blueprint $table) {
        $table->id();
        $table->string('trace_id');
        $table->string('company');
        $table->string('provider');
        $table->dateTime('datetime');
        $table->timestamps();
    });
}


    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
