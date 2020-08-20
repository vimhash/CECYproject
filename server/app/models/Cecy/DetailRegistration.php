<?php

namespace App\Models\Cecy;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class DetailRegistration extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $connection = 'pgsql-cecy';
    protected $fillable = [
        'start_date',
        'real_finish_date',
        'place_classes_are_held',
        'forecast_finish_date',
        'course_observation',
        'grade1',
        'grade2',
        'final_grade',
    ];
    public function state()
    {
        return $this->belongsTo(State::class,'state_course_id');
    }
    public function course()
    {
        return $this->belongsTo(Course::class,'course_code_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'person_instructor_id');
    }
    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }
    public function registration()
    {
        return $this->belongsTo(Registration::class);
    }
}
