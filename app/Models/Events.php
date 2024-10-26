<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $fillable=['title', 'description', 'date', 'location', 'category_id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function attendee(){
        return $this->hasMany(Attendee::class,'event_id');
    }
}
