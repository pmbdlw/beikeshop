<?php
/**
 * CurrenciesSeeder.php
 *
 * @copyright  2022 opencart.cn - All Rights Reserved
 * @link       http://www.guangdawangluo.com
 * @author     Edward Yang <yangjin@opencart.cn>
 * @created    2022-09-05 19:42:42
 * @modified   2022-09-05 19:42:42
 */

namespace Database\Seeders;

use Beike\Models\Brand;
use Beike\Models\Currency;
use Illuminate\Database\Seeder;

class CurrenciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = $this->getItems();

        if ($items) {
            Currency::query()->truncate();
            foreach ($items as $item) {
                Currency::query()->create($item);
            }
        }
    }


    public function getItems()
    {
        return [
            [
                "id" => 1,
                "name" => "人民币",
                "code" => "CNY",
                "symbol_left" => "￥",
                "symbol_right" => "",
                "decimal_place" => 2,
                "value" => 1,
                "status" => 1,
            ],
            [
                "id" => 2,
                "name" => "USD",
                "code" => "USD",
                "symbol_left" => "$",
                "symbol_right" => "",
                "decimal_place" => 2,
                "value" => 0.14449197,
                "status" => 1,
            ],
            [
                "id" => 3,
                "name" => "欧元",
                "code" => "EUR",
                "symbol_left" => "€",
                "symbol_right" => "",
                "decimal_place" => 2,
                "value" => 0.1453069,
                "status" => 1,
            ]
        ];
    }
}