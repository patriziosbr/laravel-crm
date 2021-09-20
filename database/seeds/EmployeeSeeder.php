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
        // return array_slice($numbers, 0, $quantity);
        // }
        
        for ($i=0; $i < 24; $i++) { 
            $newEmployee = new Employee();
            $newEmployee->name = 'pippo' . $i;
            $newEmployee->surname = 'paperino' . $i;
            $newEmployee->phone = '12345678' . $i;
            $newEmployee->mail = 'pluto' . $i . '@disney.it';

            $newEmployee->save();
            
        


        }
    }
}
