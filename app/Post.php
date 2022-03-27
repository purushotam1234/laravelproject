<?php

namespace App;
use App\Category;


use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'author_id',
        'heading', 
        'description', 
        'image',
        'category_id',
  ];
 public function author()
    {
        return $this-> belongsTo ('App\Author', 'author_id');
    }
 public function category()
    {
        return $this-> belongsTo ('App\Category', 'category_id');
    }
}
