<?php

use Illuminate\Database\Seeder;
use App\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 15; $i++) { 
            $newCompany = new Company();
            $newCompany->name = "Nome azienda " . $i;
            $newCompany->logo = "path logo azienda " . $i;
            $newCompany->vat_number = "123456789" . $i;
            $newCompany->save();
        }
    }
}
