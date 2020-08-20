<?php

namespace App\Models\Cecy;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class SchoolPeriod extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $connection = 'pgsql-cecy';
    protected $fillable = [
        'date_start',
        'date_end',
        'date_cancel',
        'date_start_ordinary',
        'date_end_ordinary',
        'date_cancel_ordinary',
        'date_start_extraordinary',
        'date_end_extraordinary',
        'date_cancel_extraordinary'
    ];
    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
