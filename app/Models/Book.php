<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // protected $hidden = [
    //     'id',
    //     'created_at'
    // ]
    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }
    public function bookshops()
    {
        return $this->belongsToMany(Bookshop::class);
    }
}
