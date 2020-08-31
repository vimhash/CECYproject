<?php

namespace App\Models\Cecy;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Planification extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $connection = 'pgsql-cecy';
    protected $fillable = [
        'date_start',
        'date_end',
        'classroom',
        'planned_end_date',
        'capacity',
    ];
    public function state()
    {
        return $this->belongsTo(State::class,'state_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'teacher_id');
    }
    public function course()
    {
        return $this->belongsTo(User::class,'course_id');
    }
    public function schedules()
    {
        return $this->hasMany(Schedule::class,'schedule_id');
    }
    public function school_period()
    {
        return $this->hasMany(Schedule::class,'school_period_id');
    }
}
