<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Question extends Model
{
	use HasFactory;
    protected $fillable = ['title', 'body'];

    public function user(){
    	return $this->belongsTo(User::class);
    }
    public function setTitleAttribute($value)
    {
    	//'title' => rtrim($this->faker->sentence(rand(5,10)),"."),
        $this->attributes['title'] = $value;
        $this->attributes['slug']= Str::slug($value);
        //$this->attributes['slug'] = str_slug($value);
    }
}