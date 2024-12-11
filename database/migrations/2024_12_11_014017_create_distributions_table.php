<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistributionsTable extends Migration
{
    public function up()
    {
        Schema::create('distributions', function (Blueprint $table) {
            $table->id();
            $table->string('recipient_name');
            $table->string('recipient_contact')->nullable();
            $table->decimal('amount', 10, 2);
            $table->text('details');
            $table->string('item_image_path')->nullable(); // Path to item image
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('distributions');
    }
}
