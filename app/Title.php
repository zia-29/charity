<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    public $table = 'title'; 

    protected $fillable = ['heading', 'title','content', ];

}
