<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;
   public function topiccourse(){
       return $this->hasMany(Home::class,"id","course_id");
   }

}
