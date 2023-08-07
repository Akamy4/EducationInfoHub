<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property int $age_of_exp
 * @property string $subjects
 * @property Department $department
 * @property Position $position
 * @property Nir $nit
 * @property TeacherEducation $teacherEducation
 * @property Certificate $certificate
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'position_id',
        'department_id',
        'image',
        'age_of_exp',
        'subjects',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function position(): BelongsTo
    {
        return $this->belongsTo(Position::class, 'position_id');
    }

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class, 'department_id');
    }

    public function nir(): HasMany
    {
        return $this->hasMany(Nir::class, 'user_id', 'id');
    }

    public function teacherEducation(): HasMany
    {
        return $this->hasMany(TeacherEducation::class, 'user_id', 'id');
    }

    public function certificate(): HasMany
    {
        return $this->hasMany(Certificate::class, 'user_id', 'id');
    }
}
