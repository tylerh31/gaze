<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Reply;

class CreateRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('replies', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('body');
            $table->string('user');
            $table->string('replyToId'); //id that is being replied to (hopefully will work for both replies and threads)
            $table->timestamps();
        });

        Reply::create([
            'body' => 'This is a reply.',
            'user' => 'frank',
            'replyToId' => '1'
        ]);

        Reply::create([
            'body' => 'This is also a reply.',
            'user' => 'timmy',
            'replyToId' => '1'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('replies');
    }
}
