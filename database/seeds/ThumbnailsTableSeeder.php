<?php

use Illuminate\Database\Seeder;
use App\Thumbnail;

class ThumbnailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
          ['image_id' => 'mundaka.jpg', 'shoes_id' => 1],
          ['image_id' => 'iati.jpg', 'shoes_id' => 2],
          ['image_id' => 'tarifa.jpg', 'shoes_id' => 3],
          ['image_id' => 'oasi.jpg', 'shoes_id' => 4],
          ['image_id' => 'tanta.jpg', 'shoes_id' => 5],
          ['image_id' => 'inti.jpg', 'shoes_id' => 6],
          ['image_id' => 'ra.jpg', 'shoes_id' => 7],
          ['image_id' => 'masai.jpg', 'shoes_id' => 8],
          ['image_id' => 'GENIUS_red.jpg', 'shoes_id' => 9],
          ['image_id' => 'FUTURA_600100.jpg', 'shoes_id' => 10],
          ['image_id' => 'SPEEDSTER_ly.jpg', 'shoes_id' => 11],
          ['image_id' => 'TESTAROSSA_ry.jpg', 'shoes_id' => 12],
          ['image_id' => 'SOLUTION_000100.jpg', 'shoes_id' => 13],
          ['image_id' => 'SKWAMA_by.jpg', 'shoes_id' => 14],
          ['image_id' => 'PYTHON_ng.jpg', 'shoes_id' => 15],
          ['image_id' => 'OTAKI_bf.jpg', 'shoes_id' => 16],
          ['image_id' => 'KATAKI_606702.jpg', 'shoes_id' => 17],
          ['image_id' => 'MIURAVS_yb.jpg', 'shoes_id' => 18],
          ['image_id' => 'MIURA_706706.jpg', 'shoes_id' => 19],
          ['image_id' => 'KATANA_100999.jpg', 'shoes_id' => 20],
          ['image_id' => 'COBRA_903903.jpg', 'shoes_id' => 21],
          ['image_id' => 'FINALEVS_sb.jpg', 'shoes_id' => 22],
          ['image_id' => 'MAVERINK_304702.jpg', 'shoes_id' => 23],
          ['image_id' => 'TARANTURA_600600.jpg', 'shoes_id' => 24],
          ['image_id' => 'SC20050001A_200.jpg', 'shoes_id' => 25],
          ['image_id' => 'SC20130001A_200.jpg', 'shoes_id' => 26],
          ['image_id' => 'SC20140001A_200.jpg', 'shoes_id' => 27],
          ['image_id' => 'SC20160001A_200.jpg', 'shoes_id' => 28],
          ['image_id' => 'SC20170001A_200.jpg', 'shoes_id' => 29],
          ['image_id' => 'SC20190001A_200.jpg', 'shoes_id' => 30],
          ['image_id' => 'SC20194001A_200.jpg', 'shoes_id' => 31],
          ['image_id' => 'SC20198001A_200.jpg', 'shoes_id' => 32],
          ['image_id' => 'SC20200001A_200.jpg', 'shoes_id' => 33],
          ['image_id' => 'SC20202001A_200.jpg', 'shoes_id' => 34],
          ['image_id' => 'SC20210001A_200.jpg', 'shoes_id' => 35],
          ['image_id' => 'SC20220001A_200.jpg', 'shoes_id' => 36],
          ['image_id' => 'TheGeneral_1.jpg', 'shoes_id' => 37],
          ['image_id' => 'Oracle_1.jpg', 'shoes_id' => 38],
          ['image_id' => 'X1_1.jpg', 'shoes_id' => 39],
          ['image_id' => 'evl0245-1.jpg', 'shoes_id' => 40],
          ['image_id' => 'Shaman2.jpg', 'shoes_id' => 41],
          ['image_id' => 'evl0292.jpg', 'shoes_id' => 42],
          ['image_id' => 'evl0278.jpg', 'shoes_id' => 43],
          ['image_id' => 'Venga_3-4_High-Res.jpg', 'shoes_id' => 44],
        ];

        foreach ($datas as $data) {
          $thumail = new Thumbnail();
          $thumail->fill($data)->save();
        }
    }
}
