<?php

namespace App\Models\Cecy;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class DetailRegistration extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $connection = 'pgsql-cecy';
    protected $fillable = [
        'grade1',
        'grade2',
        'final_grade',
    ];
    public function course()
    {
        return $this->belongsTo(Course::class,'code_id');
    }
    public function registration()
    {
        return $this->belongsTo(Registration::class,'registration_id');
    }
}
