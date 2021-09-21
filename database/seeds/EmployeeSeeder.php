<?php

use Illuminate\Database\Seeder;
use App\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // function UniqueRandomNumbersWithinRange($min, $max, $quantity) {
        //     $numbers = range($min, $max);
        //     shuffle($numbers);
        //     return array_slice($numbers, 0, $quantity);
        // }


        $employees = config('employee');

        foreach ($employees as $employee) {
            $newEmp = new Employee();
            $newEmp->fill($employee);
            $newEmp->save();
        
        }

        
        // $randComp =  UniqueRandomNumbersWithinRange(1, 5, 5);
        // $newEmp->company()->get($randComp);



        // soluzione senza company in DB relation
        // for ($i=0; $i < 24; $i++) { 
        //     $newEmployee = new Employee();
        //     $newEmployee->name = 'pippo' . $i;
        //     $newEmployee->surname = 'paperino' . $i;
        //     $newEmployee->phone = '12345678' . $i;
        //     $newEmployee->mail = 'pluto' . $i . '@disney.it';
        //     $newEmployee->save();
        // }
    }
}
