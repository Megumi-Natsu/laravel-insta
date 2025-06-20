<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    # To get the info if the owner of the comment even deactivated
    public function user()
    {
        return $this->belongsTo(User::class)->withTrashed();
    }
}
