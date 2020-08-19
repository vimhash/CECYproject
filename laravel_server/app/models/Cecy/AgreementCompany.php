<?php

namespace App\Models\Cecy;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class AgreementCompany extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $connection = 'pgsql-cecy';
    protected $fillable = [
        'objective',
        'date_agreement_signature',
        'expiry_date',
        'representative_person',
        'social_reason'
    ];
    public function agreements()
    {
        return $this->hasMany(Agreement::class,'agreement_id');
    }
}
