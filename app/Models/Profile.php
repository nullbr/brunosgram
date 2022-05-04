<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/XKef1PwbeCTK7umCLDAR8JS3hC9XpTd5SDQQqgdg.png';
        return '/storage/' . $imagePath;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    /** setting up relationship with User model **/
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
