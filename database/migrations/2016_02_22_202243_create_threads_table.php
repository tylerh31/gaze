<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Thread;

class CreateThreadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('threads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('body');
            $table->string('user');
            $table->string('category');
            $table->timestamps();
        });

        Thread::create([
            'title' => 'Tyler',
            'body' => 't.hansen@yashi.com',
            'user' => 'frank',
            'category' => 'a'
        ]);

        Thread::create([
            'title' => 'Blah',
            'body' => 't.fjadk;lsd@yashi.com',
            'user' => 'dafsd',
            'category' => 'awea'
        ]);

        Thread::create([
            'title' => 'dsafsdsdfa',
            'body' => 't.dafa;lsd@dsafa.com',
            'user' => 'asdfqwearf',
            'category' => 'dsafsdcas'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('threads');
    }
}
