<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use DB;
use Illuminate\Database\Seeder;
use App\Models\LabTest;

class LabTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tests = [
            ['test_category' => 'X-ray','test_name' => 'Chest'],
            ['test_category' => 'X-ray','test_name' => 'Cervical Vertebrae'],
            ['test_category' => 'X-ray','test_name' => 'Lumbar Vertebrae'],
            ['test_category' => 'X-ray','test_name' => 'Thoracic Vertebrae'],
            ['test_category' => 'X-ray','test_name' => 'Wrist Joint'],
            ['test_category' => 'Ultrasound Scan','test_name' => 'Obstetric'],
            ['test_category' => 'Ultrasound Scan','test_name' => 'Abdominal'],
            ['test_category' => 'Ultrasound Scan','test_name' => 'Pelvis'],
            ['test_category' => 'Ultrasound Scan','test_name' => 'Prostrate'],
            ['test_category' => 'Ultrasound Scan','test_name' => 'Breast'],
        ];

        //LabTest::create($tests);
        DB::table('lab_test')->insert($tests);
    }
}
