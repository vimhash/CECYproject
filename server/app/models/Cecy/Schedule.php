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
    ];
    public function schedules()
    {
        return $this->hasMany(Catalogue::class, 'schedule_id');
    }
}
