<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public function articles()
   {
       return $this->hasMany(Article::class);
   }

    protected $fillable = ['name', 'description', 'img'];
}
