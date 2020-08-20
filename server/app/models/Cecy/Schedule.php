<?php

namespace App\Models\Cecy;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Schedule extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $connection = 'pgsql-cecy';
    protected $fillable = [
        'name',
        'start_time',
        'end_time',
        'day'
    ];
    public function start_times()
    {
        return $this->hasMany(Catalogue::class,'start_time');
    }
    public function end_times()
    {
        return $this->hasMany(Catalogue::class,'end_time');
    }
    public function days()
    {
        return $this->hasMany(Catalogue::class,'day');
    }
}
