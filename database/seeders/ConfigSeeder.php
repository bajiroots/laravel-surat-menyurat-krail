<?php

namespace Database\Seeders;

use App\Models\Config;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Config::insert([
            [
                'code' => 'default_password',
                'value' => 'krail2023',
            ],
            [
                'code' => 'page_size',
                'value' => '5',
            ],
            [
                'code' => 'app_name',
                'value' => 'Aplikasi Surat Menyurat',
            ],
            [
                'code' => 'institution_name',
                'value' => 'Kelurahan Karang Asam Ilir',
            ],
            [
                'code' => 'institution_address',
                'value' => 'Jl. Ulin Gg. Untung Raya RT.04',
            ],
            [
                'code' => 'institution_phone',
                'value' => '081246144355',
            ],
            [
                'code' => 'institution_email',
                'value' => 'karangasamilir2006@gmail.com',
            ],
            [
                'code' => 'language',
                'value' => 'id',
            ],
            [
                'code' => 'pic',
                'value' => 'M. Iqbal Effendi',
            ],
        ]);
    }
}
