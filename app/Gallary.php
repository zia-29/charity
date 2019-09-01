<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallary extends Model
{
    //
    public $table = 'gallary'; 
    protected $fillable=[
        'title',
        'content',
        'photo_id'
    ];

public function photo(){
    return $this->belongsTo(Photo::class);
}

}
