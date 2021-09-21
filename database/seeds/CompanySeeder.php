<?php

use Illuminate\Database\Seeder;
use App\Company;
use App\Employee;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Employee $employee)
    {
        // function UniqueRandomNumbersWithinRange($min, $max, $quantity) {
        //     $numbers = range($min, $max);
        //     shuffle($numbers);
        //     return array_slice($numbers, 0, $quantity);
        // }

        
        $companies = config('company');

        foreach ($companies as $company) {
            $newCompany = new Company();
            $newCompany->fill($company);
            $newCompany->save();

            // $empoloyees =  UniqueRandomNumbersWithinRange(1, 24, 6);
            // $newCompany->employee()->get();

        }


        // for ($i=0; $i < 15; $i++) { 
        //     $newCompany = new Company();
        //     $newCompany->name = "Nome azienda " . $i;
        //     $newCompany->logo = "path logo azienda " . $i;
        //     $newCompany->vat_number = "123456789" . $i;
        //     $newCompany->save();
        // }
    }
}
