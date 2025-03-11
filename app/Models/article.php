<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    use HasFactory;

    public function tag(){
        return $this->belongsToMany(tag::class,"article_tages");
    }    
    
    public function User(){
        return $this->belongsTo(User::class);
    }
}
