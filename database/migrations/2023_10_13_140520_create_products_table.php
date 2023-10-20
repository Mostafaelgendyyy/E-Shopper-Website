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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->double('price');
            $table->integer('quantity')->default(0);
            $table->unsignedBigInteger('categoryid');
            $table->foreign('categoryid')->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps();
        });
        DB::table('products')->insert([
            'name' => 'cutting',
            'description'=> 'dirty pants',
            'price' => 54,
            'quantity'=> 20,
            'categoryid'=>1
        ]);
        DB::table('products')->insert([
            'name' => 'normal',
            'description'=> 'cotton pants',
            'price' => 45,
            'quantity'=> 20,
            'categoryid'=>1
        ]);
        DB::table('products')->insert([
            'name' => 'Brand Shirt',
            'description'=> 'colorful shirts',
            'price' => 20,
            'quantity'=> 20,
            'categoryid'=>2
        ]);
        DB::table('products')->insert([
            'name' => 'CC Shirt',
            'description'=> 'beautiful shirts',
            'price' => 28,
            'quantity'=> 20,
            'categoryid'=>2
        ]);
        DB::table('products')->insert([
            'name' => 'dirty',
            'description'=> 'dirty shirt',
            'price' => 11,
            'quantity'=> 20,
            'categoryid'=>2
        ]);
        DB::table('products')->insert([
            'name' => 'bumb',
            'description'=> 'bumby',
            'price' => 110,
            'quantity'=> 20,
            'categoryid'=>3
        ]);
        DB::table('products')->insert([
            'name' => 'whity',
            'description'=> 'whiteshoes',
            'price' => 32,
            'quantity'=> 20,
            'categoryid'=>4
        ]);
        DB::table('products')->insert([
        'name' => 'asasda',
        'description'=> 'asasda shoes',
        'price' => 16,
        'quantity'=> 20,
        'categoryid'=>4
    ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};