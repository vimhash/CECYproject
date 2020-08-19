<?php

namespace App\Models\Cecy;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Agreements extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $connection = 'pgsql-cecy';
    protected $fillable = [
        'name',

    ];
}
