<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pick extends Model
{
    public function team() {
        # Pick belongs to Team
        # Define an inverse one-to-many relationship.
        return $this->belongsTo('\App\Team');
    }
}
