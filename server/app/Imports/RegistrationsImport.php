<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\Cecy\Registration;

class RegistrationsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Registration([
            'date_registration' => $row[0],
            'number' => $row[1], //registration number
            'state_id' => $row[2], 
            'participant_id' => $row[3],
            'type_id' => $row[4],
            'planification_id' => $row[5],
        ]);
    }
}
