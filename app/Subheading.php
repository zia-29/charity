<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subheading extends Model
{
    public $table = 'subheading'; 

    protected $fillable = [
        'title', 'content','photo_id',
    ];

    public function photo(){
        return $this->belongsTo('App\Photo');
    
    }

     

    // protected $uplode = '/images/';

    // protected $fillable = ['string'];

    // public function getFileAttribute($photo){
    //     return $this->uplode . $photo;
    // }

}
