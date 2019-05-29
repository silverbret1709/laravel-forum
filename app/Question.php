<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Question extends Model
{

    public static function boot()
    {
        parent::boot();
        static::creating(function ($question) {
           $question->slug = Str::slug($question->title);
        });
    }
    //
    public function getRouteKeyName()
    {
        return 'slug';
    }
    protected $fillable = ['title', 'slug', 'body', 'category_id', 'user_id'];
    protected $with = ['replies'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function replies()
    {
        return $this->hasMany(Reply::class)->latest();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getPathAttribute()
    {
        return "/question/$this->slug";
    }


}
