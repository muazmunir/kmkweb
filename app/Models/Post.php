<?php

namespace App\Models;
use RalphJSmit\Laravel\SEO\Support\HasSEO;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasSEO;
    use HasFactory;
    protected $fillabel = ['category_id','title','image','auther','content','puplish'];
}
