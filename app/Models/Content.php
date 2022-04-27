<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;
    public function content(){
        return $this->hasOne(Topic::class,"id","topic_id");
    }
    protected $guarded=[];
}
