<?php

namespace App\Models\Cecy;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Course extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $connection = 'pgsql-cecy';
    protected $fillable = [
      'course_code',
      'course_name',
      'cost',
      'photo',
      'resumen',
      'lasting_hours',
      'course_capacity_size',
      'for_free',
      'course_observation',
      'objective',
      'required_installing_sources',
      'practice_hours',
      'theory_hours',
      'practice_required_resources',
      'aimtheory_required_resources',
      'learning_teaching_strategy',
      'proposed_date',
      'approval_date',
      'local_proposal_to_be_held',
      'course_project',
      'setec_name'
    ];
    public function modality()
    {
        return $this->hasMany(Catalogue::class, 'modality_id');
    }
    public function type()
    {
        return $this->belongsTo(Catalogue::class, 'participant_type_id');
    }
    public function area()
    {
        return $this->belongsTo(Catalogue::class, 'area_id');
    }
    public function levels()
    {
        return $this->belongsTo(Catalogue::class, 'levels_id');
    }
    public function state()
    {
        return $this->belongsTo(State::class,'state_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'person_proposal_id');
    }
    public function schedule()
    {
        return $this->belongsTo(Schedule::class,'schedules');
    }
    public function course()
    {
        return $this->belongsTo(Catalogue::class,'course_type_id');
    }
    public function specialty()
    {
        return $this->belongsTo(Catalogue::class,'specialty_id');
    }
    public function period()
    {
        return $this->belongsTo(Catalogue::class,'academic_period_id');
    }
}
