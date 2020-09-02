<?php

namespace App\Models\Cecy;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class CourseRequirement extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $connection = 'pgsql-cecy';
    protected $fillable = [

    ];
    public function requirement()//cursos_requerimientos
    {
        return $this->hasMany(Course::class,'requirement_id');
    }
    public function course()//id_curso
    {
        return $this->belongsTo(Course::class,'courses');
    }
    public function type()//tipo
    {
        return $this->hasMany(Catalogue::class,'course_requirement_type_id');
    }
    public function state()
    {
        return $this->belongsTo(State::class,'state_id');
    }
}
