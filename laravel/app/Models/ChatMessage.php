<?php

namespace App\Models;

class ChatMessage extends Model
{
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
