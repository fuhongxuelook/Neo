<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            array(
                'name' => '远望',
                'image_id' => '1',
                'price' => 254.00,
                'thumb_id' => '1',
                'tag' => 'niao,university'
            ),
            array(
                'name' => '冻河',
                'image_id' => '2',
                'price' => 120.00,
                'thumb_id' => '2',
                'tag' => 'niao,university'
            ),
            array(
                'name' => '印象·日出',
                'image_id' => '3',
                'price' => 220.00,
                'thumb_id' => '3',
                'tag' => 'niao,style'
            ),
            array(
                'name' => '桥',
                'image_id' => '4',
                'price' => 300.00,
                'thumb_id' => '4',
                'tag' => 'niao,university'
            ),
            array(
                'name' => '拾穗人',
                'image_id' => '5',
                'price' => 350.00,
                'thumb_id' => '5',
                'tag' => 'niao,university'
            ),
            array(
                'name' => '白塔',
                'image_id' => '6',
                'price' => 354.00,
                'thumb_id' => '6',
                'tag' => 'niao,style'
            ),
            array(
                'name' => '夜间咖啡馆',
                'image_id' => '7',
                'price' => 200.00,
                'thumb_id' => '7',
                'tag' => 'niao,style,university'
            ),
            array(
                'name' => '池塘',
                'image_id' => '8',
                'price' => 400.00,
                'thumb_id' => '8',
                'tag' => 'niao,university'
            ),
            array(
                'name' => '鸢尾花',
                'image_id' => '9',
                'price' => 400.00,
                'thumb_id' => '9',
                'tag' => 'niao,style'
            ),
            array(
                'name' => '采风',
                'image_id' => '10',
                'price' => 200.00,
                'thumb_id' => '10',
                'tag' => 'niao,university'
            ),
            array(
                'name' => '乡间',
                'image_id' => '11',
                'price' => 200.00,
                'thumb_id' => '11',
                'tag' => 'niao,homeless'
            ),
            array(
                'name' => '归来',
                'image_id' => '12',
                'price' => 230.00,
                'thumb_id' => '12',
                'tag' => 'niao,homeless'
            ),
            array(
                'name' => '赶牛',
                'image_id' => '13',
                'price' => 350.00,
                'thumb_id' => '13',
                'tag' => 'niao,university'
            ),
            array(
                'name' => '庭院',
                'image_id' => '14',
                'price' => 350.00,
                'thumb_id' => '14',
                'tag' => 'niao,style'
            ),
        );
        DB::table('items')->insert($data);
    }
}
