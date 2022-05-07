<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    /**
     * This relationship represents the user that authored this comment
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    /**
     * This relationship represents the user that receiving this comment
     */
    public function recipient()
    {
        return $this->belongsTo('App\Models\User', 'user_id_recipient');
    }
}


