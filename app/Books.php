<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
	public $timestamps = false;
    protected $fillable = [
    	"title","author",'genre_id',"text","image",'user_id',
    ];
     }
