<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;


class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */




    public function run()
    { for($i=0; $i<=50; $i++){
Student::create([
'name'=>'demiana Moheb',
'email'=>'demianaM@gmail.com',
'department'=>'electricEng',

]);

    }

}





}
