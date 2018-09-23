<?php

Post.php
class Post extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

Comment.php
class Comment extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
