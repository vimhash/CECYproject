<?php

namespace App\Models\Cecy;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Registration extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $connection = 'pgsql-cecy';
    protected $fillable = [
        'date_registration',
        'person_participant_id',
        'approved',
        'school_period_id',
        'registration_type_id',
        'number_registration',
    ];
    public function state()
    {
        return $this->belongsTo(State::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class,'person_participant_id');
    }
    public function school_period()
    {
        return $this->belongsTo(SchoolPeriod::class,'school_period_id');
    }
    public function registration()
    {
        return $this->hasMany(Catalogue::class, 'registration_type_id');
    }
}
