<?php

namespace App\Models\Cecy;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class PersonPrerequisitesCourse extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $connection = 'pgsql-cecy';
    protected $fillable = [
        'registration_payment',
        'certified_number',
        'withdrawal_date',
        'withdrawn_certificate'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'person_participant_id');
    }
    public function course()
    {
        return $this->belongsTo(User::class, 'prerequisite_course_id');
    }
    public function state()
    {
        return $this->belongsTo(State::class,'state_id');
    }
}
