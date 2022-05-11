<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('districts')->insert([
            ['name' => 'Thành phố Thủ Đức','slug' => 'thanh-pho-thu-duc'],
            ['name' => 'Quận 1','slug' => 'quan-1'],
            ['name' => 'Quận 3','slug' => 'quan-3'],
            ['name' => 'Quận 4','slug' => 'quan-4'],
            ['name' => 'Quận 5','slug' => 'quan-5'],
            ['name' => 'Quận 6','slug' => 'quan-6'],
            ['name' => 'Quận 7','slug' => 'quan-7'],
            ['name' => 'Quận 8','slug' => 'quan-8'],
            ['name' => 'Quận 10','slug' => 'quan-10'],
            ['name' => 'Quận 11','slug' => 'quan-11'],
            ['name' => 'Quận 12','slug' => 'quan-12'],
            ['name' => 'Quận Gò Vấp','slug' => 'quan-go-vap'],
            ['name' => 'Quận Phú Nhuận','slug' => 'quan-phu-nhuan'],
            ['name' => 'Quận Tân Bình','slug' => 'quan-tan-binh'],
            ['name' => 'Quận Tân Phú','slug' => 'quan-tan-phu'],
            ['name' => 'Huyện Bình Chánh','slug' => 'huyen-binh-chanh'],
            ['name' => 'Huyện Cần Giờ','slug' => 'huyen-can-gio'],
            ['name' => 'Huyện Củ Chi','slug' => 'huyen-cu-chi'],
            ['name' => 'Huyện Hóc Môn','slug' => 'huyen-hoc-mon'],
            ['name' => 'Huyện Nhà Bè','slug' => 'huyen-nha-be'],
            ]);
    }
}
