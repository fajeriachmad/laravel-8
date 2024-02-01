<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // $fillable is used to insert into declared fields with multiple values at once
    // protected $fillable = [
    //     'title',
    //     'excerpt',
    //     'body'
    // ];

    // $guarded is used to prevent user to fill the declared field
    protected $guarded = ['id'];
}
