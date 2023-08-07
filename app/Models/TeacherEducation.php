<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $user_id
 * @property int $education_id
 * @property Education $education
 */
class TeacherEducation extends Model
{
    use HasFactory;

    protected $table = 'teacher_educations';

    public function education(): BelongsTo
    {
        return $this->belongsTo(Education::class, 'education_id');
    }
}
