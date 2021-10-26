<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $guarded=[];

    public function profileImage(){
    $imagePath= ($this->image)? $this->image :'profile/TZAq4MqboRwWRkJk81Vb0W40bxgOry3JyLv351yR.png';
    return '/storage/'.$imagePath;
    }


    public function user(){
        return $this->belongsTo(User::class);
    }
}
