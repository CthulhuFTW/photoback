<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'user_id',
        'public',
        'path',
        'tags'
    ];

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    
    
}
