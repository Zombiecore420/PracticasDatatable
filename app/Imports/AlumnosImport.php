<?php

namespace App\Imports;

use App\Models\Alumnos;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\withHeadingRow;



class AlumnosImport implements ToModel, withHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Alumnos([
            'matricula' => $row['matricula'],
            'nombre' => $row['nombre'],
            'app' => $row['app'],
            'gen' => $row['gen'],
            'fn' => $row['fn'],
            'email' => $row['email'],
            'pass' => $row['pass'],//'pass' => \Hash::make($row['pass']), 
        ]);
    }
}
