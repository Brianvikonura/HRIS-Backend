<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'icon',
        'company_id'
    ];

    // Many to one relation to company
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    // One to many relation to employee
    public function employees()
    {
        return $this->hasMany(Employee::class);
    }

}
