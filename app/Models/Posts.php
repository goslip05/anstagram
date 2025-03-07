<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
    protected $fillable =[
        'image_path',
        'description',
        'date_post',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function commets(){
        return $this->hasMany(Commets::class,'post_id');
    }

    public function likes(){
        return $this->hasMany(Likes::class,'post_id');
    }
}
