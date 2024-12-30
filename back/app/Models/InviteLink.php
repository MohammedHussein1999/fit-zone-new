<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InviteLink extends Model
{
    protected $table = "invite_links";
    protected $fillable = ['cod', 'user_id'];
    public function user()
    {

        return $this->hasOne(User::class, 'id');
    }
}
