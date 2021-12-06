<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newstory extends Model
{
    //
    public function userbelongs()
    {
     return $this->belongsTo(User::class, 'user_id');
    }
    public function categort()
    {
     return $this->belongsTo(Category::class, 'Category');
    }



}
