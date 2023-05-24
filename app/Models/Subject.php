<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Subject extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];
    public function student(): BelongsToMany
    {
        return $this->belongsToMany(Student::class,"student_subjects");
    }
    public function settingSubjects(): HasMany
    {
        return $this->hasMany(SettingSubject::class);
    }
}
