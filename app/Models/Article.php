<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Category;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Tag;

class Article extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = ['title','content','category_id'];
    protected $hidden =[];


    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function tags(){
        return $this->BelongsToMany(Tag::class,"article_tag");
    }
    public function comments(){
        return $this->morphMany(Comment::class,'commentable'); //đa hình
    }
    public function getTitleAttribute($value){
        // get[ten col]Attribute
        return 'a'.$value;
    }
    public function setTitleAttribute($value){
        // set[ten col]Attribute
        $this->attributes['title'] = 'b'.$value;
    }
}
