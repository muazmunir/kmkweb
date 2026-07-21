<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use RalphJSmit\Laravel\SEO\Support\HasSEO;

class Product extends Model
{
  use HasSEO;
    use HasFactory;
    protected $fillabel = ['category_id','name','image','auther','description','puplish',
                          'start','end','target','public','att1','att2','att3','att4','att5','att6','deleted' ,'paied'
                            ];

}
