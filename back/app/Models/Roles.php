<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    public function users()
    {
        return $this->morphedByMany(User::class, 'taggable','role_id',"user_id");
    }

}
