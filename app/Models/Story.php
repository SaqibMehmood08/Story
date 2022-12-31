<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;
    public function user(){
        return $this->hasMany(User::class,"user_id");
        }

        // public function following(){
        //     return $this->belongsTo(Following::class,"user_id","created_by_user_id");
        //     }


}
