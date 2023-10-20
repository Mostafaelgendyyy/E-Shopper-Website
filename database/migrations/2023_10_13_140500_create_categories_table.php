<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->integer('quantity')->default(0);
            $table->timestamps();
        });
        DB::table('categories')->insert([
            'name' => 'Jeans'
        ]);
        DB::table('categories')->insert([
            'name' => 'Shirts'
        ]);
        DB::table('categories')->insert([
            'name' => 'jackets'
        ]);
        DB::table('categories')->insert([
            'name' => 'Shoes'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
