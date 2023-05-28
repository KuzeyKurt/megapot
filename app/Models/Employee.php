<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

foreach (Employee::all() as $employee) {
    echo $employee->name;
}


class Employee extends Model
{
    use HasFactory;

    
}
