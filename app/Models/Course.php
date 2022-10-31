<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * @property int $id
 * @property string $name
 * @property string $code
 * @property string $description
 * @property int $faculty_id
 * @property int $ECTS
 */

class Course extends Model
{
    use HasFactory;


    public function faculty()
    {
        //Can be hasOne, hasMany, belongsTo, belongsToMany
        return $this->belongsTo(Faculty::class);
    }
}
