<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $address
 * @property int $year_of_admission
 * @property int $year_of_ending
 * @property string $speciality
 */
class Education extends Model
{
    use HasFactory;

    protected $table = 'educations';
}
