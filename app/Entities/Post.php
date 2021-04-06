<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

      protected $fillable = [
        'user_id', 'cAccount', 'cName','cGender','cBirthday','cEmail','cExplain'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
