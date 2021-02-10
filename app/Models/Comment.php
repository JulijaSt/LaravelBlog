<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public $fillable = ['name', 'comment', 'blogpost_id'];

    public function blogpost(){
        return $this->belongsTo('App\Models\Blogpost');
    }

}
