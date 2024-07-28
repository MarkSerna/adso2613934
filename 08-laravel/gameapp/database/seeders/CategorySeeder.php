<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Nintendo Switch',
            'manufacturer' => 'Nintendo',
            'releasedate' => '2017-03-03',
            'description' => 'The Nintendo Switch is a video game console developed by Nintendo, released on March 3, 2017. It is a hybrid console that can be used as a home console and portable device.',
        ]);

        $cat = new Category;
        $cat->name = 'PlayStation 5';
        $cat->manufacturer = 'Sony';
        $cat->releasedate = '2020-11-12';
        $cat->description = 'The PlayStation 5 is a video game console developed by Sony Interactive Entertainment, released on November 12, 2020. It is the successor to the PlayStation 4.';
        $cat->save();

        $cat = new Category;
        $cat->name = 'PlayStation 4';
        $cat->manufacturer = 'Sony';
        $cat->releasedate = '2013-11-15';
        $cat->description = 'The PlayStation 4 is a video game console developed by Sony Interactive Entertainment, released on November 15, 2013. It is the successor to the PlayStation 3.';
        $cat->save();

        $cat = new Category;
        $cat->name = 'Xbox Series X';
        $cat->manufacturer = 'Microsoft';
        $cat->releasedate = '2020-11-10';
        $cat->description = 'The Xbox Series X is a video game console developed by Microsoft, released on November 10, 2020. It is the successor to the Xbox One.';
        $cat->save();

        $cat = new Category;
        $cat->name = 'Xbox Series S';
        $cat->manufacturer = 'Microsoft';
        $cat->releasedate = '2020-11-10';
        $cat->description = 'The Xbox Series S is a video game console developed by Microsoft, released on November 10, 2020. It is the successor to the Xbox One.';
        $cat->save();

        $cat = new Category;
        $cat->name = 'Xbox One';
        $cat->manufacturer = 'Microsoft';
        $cat->releasedate = '2013-11-22';
        $cat->description = 'The Xbox One is a video game console developed by Microsoft, released on November 22, 2013. It is the successor to the Xbox 360.';
        $cat->save();

        $cat = new Category;
        $cat->name = 'PC';
        $cat->manufacturer = 'Various';
        $cat->releasedate = '1971-11-15';
        $cat->description = 'The personal computer is a multi-purpose computer whose size, capabilities, and price make it feasible for individual use. Personal computers are intended to be operated directly by an end user, rather than by a computer expert or technician.';
        $cat->save();
    }
}
