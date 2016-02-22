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
            $table->longText('body');
            $table->string('user');
            $table->string('category');
            $table->timestamps();
        });

        Thread::create([
            'title' => 'Tyler',
            'body' => 'Laravel makes connecting with databases and running queries extremely simple. The database configuration for your application is located at config/database.php. In this file you may define all of your database connections, as well as specify which connection should be used by default. Examples for all of the supported database systems are provided in this file.',
            'user' => 'frank',
            'category' => 'a'
        ]);

        Thread::create([
            'title' => 'Blah',
            'body' => 'To run a set of operations within a database transaction, you may use the transaction method on the DB facade. If an exception is thrown within the transaction Closure, the transaction will automatically be rolled back. If the Closure executes successfully, the transaction will automatically be committed. You dont need to worry about manually rolling back or committing while using the transaction method:',
            'user' => 'dafsd',
            'category' => 'awea'
        ]);

        Thread::create([
            'title' => 'dsafsdsdfa',
            'body' => 'The first argument passed to the select method is the raw SQL query, while the second argument is any parameter bindings that need to be bound to the query. Typically, these are the values of the where clause constraints. Parameter binding provides protection against SQL injection.',
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
