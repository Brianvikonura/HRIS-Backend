<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'logo'
    ];

    // Many to many relation to user
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    // One to many relation to teams
    public function teams()
    {
        return $this->hasMany(Team::class);
    }

    // One to many relation to roles
    public function roles()
    {
        return $this->hasMany(Role::class);
    }

}
