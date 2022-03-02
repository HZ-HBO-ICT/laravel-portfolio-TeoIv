<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['quartile', 'credits', 'name'];

    public function grades()
    {
        return $this->hasMany(Grade::class);
    }

    public function assignCredits()
    {
        $this->passed_at = now();
    }
}
