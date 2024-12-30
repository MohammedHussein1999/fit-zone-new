<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classs extends Model
{
    protected $fillable=["className", "tethName", "time", "target", "startDate", "endDate", "numberClass", "discretion"];

    public function users()
    {
        return $this->morphedByMany(User::class, 'taggables', "class_id","user_id");
    }
}
