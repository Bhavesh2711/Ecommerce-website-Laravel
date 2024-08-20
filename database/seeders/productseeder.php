<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                "name"=>'lg2 mobile',
                "price"=>'200',
                "category"=>'mobile',
                "description"=>'smart phone with 4Gb ram',
                "gallery"=>'https://img.freepik.com/free-photo/smartphone-balancing-with-pink-background_23-2150271746.jpg?size=626&ext=jpg'
            ],
            [
                "name"=>'i phone11 mobile',
                "price"=>'500',
                "category"=>'mobile',
                "description"=>'smart phone with 4Gb ram',
                "gallery"=>'https://img.freepik.com/free-photo/smartphone-nature-concept_23-2150246099.jpg?w=740&t=st=1707818472~exp=1707819072~hmac=e837ad002630d37767949c4ef7f8d98757d1e6c551805321ec1ccea38c7d98d4'
            ],
            [
                "name"=>'i phone12',
                "price"=>'400',
                "category"=>'mobile',
                "description"=>'smart phone with 4Gb ram',
                "gallery"=>'https://img.freepik.com/free-photo/smartphone-nature-concept_23-2150246096.jpg?t=st=1707818472~exp=1707819072~hmac=10ecaa97f2c4398a4d48a14f2173093cd3304241d7102b378f005c2a2ad4a859'
            ],
            [
                "name"=>'i phone13',
                "price"=>'300',
                "category"=>'mobile',
                "description"=>'smart phone with 4Gb ram',
                "gallery"=>'https://img.freepik.com/free-photo/smartphone-nature-concept_23-2150246072.jpg'
                ],
        ]);
    }
}
