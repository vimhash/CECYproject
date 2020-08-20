<?php

namespace App\Models\Cecy;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class AcademicRecord extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $connection = 'pgsql-cecy';
    protected $fillable = [
        'grade1',
        'grade2',
        'final_grade'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function courses()
    {
        return $this->hasMany(Course::class,'course_id');
    }

    public function state()
    {
        return $this->belongsTo(State::class,'state_id');
    }

    public function teacher()
    {
        return $this->belongsTo(User::class,'state_id');
    }

    public function school_periods()
    {
        return $this->hasMany(User::class,'school_period_id');
    }
}
