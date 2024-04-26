<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description'];

    // Relationship with Employees (Many-to-Many)
    public function employees()
    {
        return $this->belongsToMany(Employee::class);
    }
}
