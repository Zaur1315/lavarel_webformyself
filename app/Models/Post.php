<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 *Class Country
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */

class Post extends Model
{
//    use HasFactory;
//    protected $table = ''
//    protected $attributes = [
//        'content' => 'Lorem Ipsum...',
//    ];

    protected $fillable = ['title', 'content'];

}