<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = [
            'Collaboration Tools',
            'Project Tracking',
            'Information-Gathering',
            'Scheduling Software',
            'Workflow Automation',
            'CMS migration'
        ];

        foreach ($technologies as $tech) {

            $technology = new Technology();
            $technology->name = $tech;
            $technology->slug = Str::slug($tech);

            $technology->save();
        }
    }
}
