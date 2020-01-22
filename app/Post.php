<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    protected $appends = [
        'short_content',
        'formatted_created_at',
    ];

    public function getShortContentAttribute(): string
    {
        return mb_substr($this->content, 0, 200);
    }

    public function getFormattedCreatedAtAttribute(): string
    {
        return $this->created_at->format('d.m.Y H:i');
    }
}
