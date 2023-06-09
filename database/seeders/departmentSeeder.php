<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Department;

class departmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         for ($i=0; $i <15 ; $i++) {
           Department::create([
                'name'          => 'Department',
                'description'   => "department detail Lorem Ipsum is simply dummy text of the printing Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley not only five centuries,' ",
                'photo_path'    => '/images/department.jpg',
                'hod_id'    => 5,
                'block_id'    => 4,
            ]); 
        }
        
    }
}
