<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
   protected $fillable = 
   [
       'title',
       'body',
       'published_at'
   ];


   public function scopePublished($query)
   {
    $query->where('published_at', '<=', Carbon::now());
   }


   public function setPublishedAtAttribute($date)
   {
       $this->attributes['published-at'] = Carbon::parse($date);
   }

   public function user()
   {
       return $this->belongTo('App\User');
   }

}
