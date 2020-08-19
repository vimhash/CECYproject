<?php

namespace App\Models\Cecy;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class CoursesContent extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $connection = 'pgsql-cecy';
    protected $fillable = [
        'name',
    ];

    public function course()
    {
        return $this->belongsTo(Catalogue::class, 'course_code_id');
    }
}
