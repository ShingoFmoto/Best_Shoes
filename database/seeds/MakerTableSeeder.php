<?php

use Illuminate\Database\Seeder;
use App\Maker;

class MakerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            [
                'id' => 1,
                'japanese_name' => 'テナヤ',
                'japanese_kana_name' => 'テナヤ',
                'alphabet_name' => 'TENAYA',
                'order_no' => 1,
                'description' => "
靴製造の伝統の強く残るスペインで生産されるテナヤ。\n
品質の管理を徹底するため自国の自社工場での生産に固執します。\n
以前のクライミングシューズといえば、「足が入るならできるだけ小さいものを選べ」という間違ったフィッティングが成されてきました。\n
Tenayaはこうした考えを改め、普及するべく、足入れの良い快適な靴を作ることを心 がけています。\n
コンセプトは”快適な高性能”です。",
                'logo_path' => 'logo_tenaya.gif',
            ],
            [
                'id' => 2,
                'japanese_name' => 'スポルティバ',
                'japanese_kana_name' => 'スポルティバ',
                'alphabet_name' => 'sportiva',
                'order_no' => 2,
                'description' => "
世界初のクライミングシューズといわれる「スーパーウインクラー」「ヨセミテ」をリリース、スポルティバの知名度は世界的なものになっていった。\n
機能とデザイン性を高いレベルで実現できるMade in Italyにこだわり続け、ユニークな発想で高いパフォーマンスを発揮している。",
                'logo_path' => 'logo_sportiva.jpg',
            ],
            [
                'id' => 3,
                'japanese_name' => 'スカルパ',
                'japanese_kana_name' => 'スカルパ',
                'alphabet_name' => 'scarpa',
                'order_no' => 3,
                'description' => "
社名はイタリア語で「靴」の意味。\n
1938年、イタリアのアゾロ村で登山靴の専門メーカーとして誕生した。\n
レザーへのこだわりは並々ならぬものがあり、レザーの基となる動物の産地や飼育過程の吟味から、優秀ななめし加工業者の発掘まで、徹底した品質管理を行なう。",
                'logo_path' => 'logo_scarpa.png',
            ],
            [
                'id' => 4,
                'japanese_name' => 'イボルブ',
                'japanese_kana_name' => 'イボルブ',
                'alphabet_name' => 'evolv',
                'order_no' => 4,
                'description' => "
2003年、カリフォルニア州で誕生。\n
クセが少なく素直で履きやすいモデルが多く、エントリーモデルは価格を抑えた設定がされている。\n
フリクションと耐久性を両立する自社開発ラバーを採用。水洗いを推奨するほどの耐久性を誇る。\n
リソール工房を併設し、クライミングシューズブランドとして唯一、アフターケアを提供。",
                'logo_path' => 'logo_evolv.jpg',
            ],
        ];
        foreach ($datas as $data) {
            $maker = new Maker();
            $maker->fill($data)->save();
        }
    }
}
