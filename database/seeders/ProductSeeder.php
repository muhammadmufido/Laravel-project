<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::Create([
            'code'=>'POO0988',
            'name'=>'ultramilk 250ml',
            'price'=> 4000
        ]);
        Product::Create([
            'code'=>'QRROP00',
            'name'=>'cornetto disc 120ml',
            'price'=> 10000
        ]);
        Product::Create([
            'code'=>'YOI0I0IO',
            'name'=>'citatho lite 65gram',
            'price'=> 13000
        ]);
        Product::Create([
            'code'=>'KAIYQI12',
            'name'=>'bearbrand 189ml',
            'price'=> 10000
        ]);
        Product::Create([
            'code'=>'QPOJDWJ',
            'name'=>'silverqueen 62gr',
            'price'=> 12000
        ]);
    }
}
