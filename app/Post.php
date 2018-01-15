<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body', 'iscompleted', 'user_id'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function likes(){
        return $this->belongsTo('App\Like');

    }



    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments(){
        return $this->hasMany(Comment::class)->latest();
    }

    public function addComment($body, $user_id){
        $this->comments()->create(compact('body','user_id'));
    }


}
