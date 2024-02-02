<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MjuStudent extends Model
{
    use HasFactory;
    protected $primaryKey =
        "student_code";

        protected $table = 'mjustudent';
    public function major()
    {
        return $this->belongsTo(Major::class);
    }

    protected $fillable = [
        'student_code',
        'first_name',
        'first_name_en',
        'last_name',
        'last_name_en',
        'major_id',
        'idcard',
        'gender',
        'birthdate',
        'address',
        'phone',
        'email',
        'nick_name'
    ];
}
