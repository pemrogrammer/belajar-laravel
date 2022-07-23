<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudyProgram extends Model
{
  use HasFactory;

  public function new_students()
  {
    return $this->hasMany(NewStudent::class, 'study_program_1_id');
  }

  public function department()
  {
    return $this->belongsTo(Department::class);
  }
}
