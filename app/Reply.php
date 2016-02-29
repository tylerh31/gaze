<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
	/**
     *  Table associated with the model.
     *
     * @var  string
     */
    protected $table = 'replies';

    /**
     * Primary key associated with table
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'body', 'user', 'replyToId',
    ];
}
