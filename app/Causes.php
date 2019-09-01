<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Causes extends Model
{
    //
    protected $fillable=[
        'title',
        'content',
        'photo_id'
    ];

public function photo(){
    return $this->belongsTo(Photo::class);
}

}



