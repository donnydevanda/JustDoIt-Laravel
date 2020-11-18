<?php

use Illuminate\Database\Seeder;

class ShoeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Shoes')->insert([
            [   'name' => 'Nike Kyrie 5',
                'price' => '3880000',
                'description' => 'Released on November 16, 2018, the fifth shoe in Kyrie Irving’s signature line is, if history is any indication, likely to be widely adopted across the NBA. Designed by Ben Nethongkome, the shoe has been well-received by both casual and serious basketball players.',
                'image' => 'images/1.jpg'],
            [   'name' => 'Puma RS-Dreamer',
                'price' => '3630000',
                'description' => 'An unusual collaboration between music and basketball, the Puma RS-Dreamer is the first signature sneaker of rapper and basketball superfan J. Cole. The high performance shoe features a ProFoam midsole, high abrasion rubber outsole, and premium suede fabric that looks to be setting up this shoe to be seen both on and off the court.',
                'image' => 'images/2.jpg'],
            [   'name' => 'Air Jordan 34',
                'price' => '3490000',
                'description' => 'The AJ XXXIV comes at a point of transition for Jordan Brand, with veteran signature stars like Carmelo Anthony and Chris Paul in the sunset of their careers, while newcomers like Zion Williamson and Jayson Tatum are on their way up.',
                'image' => 'images/3.jpg'],
            [   'name' => 'Nike Kobe 5 Protro',
                'price' => '4140000',
                'description' => 'This revamped version of one of Kobe’s more successful signature shoes, the Kobe 5 Protro provides upgraded cushioning and improved traction for this timeless, low-to-the-court shoe. The shoe was worn by much of the Lakers championship team in 2020, as well as many other players throughout the NBA and WNBA in tribute to Kobe Bryant.',
                'image' => 'images/4.jpg'],
            [   'name' => 'Nike LeBron 17',
                'price' => '3630000',
                'description' => 'LeBron’s signature shoes have been among the highest performing, best-reviewed shoes in the NBA, and the 17 looks to be no different. To fit the King’s otherworldly skillset and physical gifts, the LeBron 17 features a giant Air unit on the heel, Zoom Air pods on the forefoot, and an upper made out of the new Knitposite which allows both structure and breathability.',
                'image' => 'images/5.jpg'],
            [   'name' => 'Adidas D.O.N. Issue #2',
                'price' => '4050000',
                'description' => 'Images of the Adidas D.O.N. Issue #2, the sought after sequel to the first shoe in Donovan Mitchell’s signature line, leaked online in December 2019, months before the shoe’s scheduled released date in July 2020 (though due to the shutdown, it actually released in late August 2020).',
                'image' => 'images/6.jpg'],
            [   'name' => 'Nike KD 13',
                'price' => '3722000',
                'description' => 'The Nike KD 13 debuted on April 6, 2020 and features a similar mid-height cut as the KD 12, full length Zoom, and a large Swoosh along a nylon upper. The 13 does differ in some ways, including a much cleaner aesthetic.',
                'image' => 'images/7.jpg'],
            [   'name' => 'Converse All Star Pro BB',
                'price' => '4000000',
                'description' => 'The Converse All Star Pro BB is Converse’s triumphant return to the performance basketball shoe world. Dropping to the masses in June 2019, the she features a lightweight and responsive drop-in Nike React core, a cupsole configuration that is engineered to work hand-in-hand with the Nike React core, and an elite fit provided by a Nike Quadfit mesh.',
                'image' => 'images/8.jpg'],
            ]);
    }
}
