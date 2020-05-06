<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * mass assignment
     */
    protected $fillable = [
        'parent_id',
        'author',
        'text'
    ];

    /**
     * comment relations with anser
     */
    public function answers()
    {
        return $this->hasMany(Comment::class, 'parent_id')->with('answers');
    }

    /**
     * created_at muttator
     */
    public function getCreatedAtAttribute($value)
    {
        return $value = date('d.m.Y H:i', strtotime($value));
    }

    /**
     * updated_at muttator
     */
    public function getUpdatedAtAttribute($value)
    {
        return $value = date('d.m.Y H:i', strtotime($value));
    }

    /**
     * get comments tree
     */
    public static function getTree()
    {
        return self::whereNull('parent_id')->with('answers')->latest('id');
    }
}
