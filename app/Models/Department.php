<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'description'];

    // Relationship with employees
    public function employees()
    {
        return $this->hasMany(Employee::class);
    }

    // Relationship with Notes (Polymorphic)
    public function notes()
    {
        return $this->morphMany(Note::class, 'noteable');
    }
}
