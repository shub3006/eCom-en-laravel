<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Panasonic Tv',
                "price"=>"48000",
                "description"=>"Size 43 108 cm  Smart TV Android  OSResolution 4KPicture",
                "category"=>"tv",
                "gallery"=>"https://www.panasonic.com/content/dam/pim/in/en/TH/TH-55H/TH-55HX700DX/43HX625_spec.png"
                ],
                
                [
                'name'=>'OPPO A74 5G (Fantastic Purple 6GB RAM 128GB Storage)',
                                "price"=>"15490",
                                "description"=>"6.49 Inch 16.5cm FHD+ Punch-hole Display with 2400x1080 pixels. Larger screen to body ratio of 90.5%.Side Fingerprint Sensor",
                                "category"=>"mobile",
                                "gallery"=>"https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T2/images/I/71geVdy6-OS._SX679_.jpg"
                ],
                
                [
                'name'=>'boAt Immortal 121',
                                "price"=>"1590",
                                "description"=>"TWS Wireless Gaming in Ear Earbuds with Beast Mode 40ms Low Latency  40H Playtime Blazing LEDs  Quad Mics ENx Signature Sound  ASAP Charge 10 Mins  180 Mins playback",
                                "category"=>"wireless",
                                "gallery"=>"https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T2/images/I/61q-2yzbBtL._SX522_.jpg"
                ],
                
                
                [
                'name'=>'HP 15s 12th Gen Intel Core i5',
                                "price"=>"58400",
                                "description"=>"8GB RAM 512GB SSD 15.6-inch(39.6 cm) Micro-Edge Anti-Glare FHD Laptop Intel Iris Xe Graphics  Dual Speakers Windows 11",
                                "category"=>"laptop",
                                "gallery"=>"https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T2/images/I/91+6YECnK3L._SX522_.jpg"
                ],
                
                [
                'name'=>'Redmi 50 inches Tv',
                                "price"=>"35000",
                                "description"=>"Resolution: 4K Ultra HD (3840 x 2160) |  Refresh Rate: 60Hz | Viewing angle : 178 Degree",
                                "category"=>"tv",
                                "gallery"=>"https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T2/images/I/41Om+JyC4iL._SX300_SY300_.jpg"
                ],
                
                [
                'name'=>'Sony Bravia 65 inches Tv',
                                "price"=>"72990",
                                "description"=>"4K Ultra HD Smart LED Google TV KD-65X74K Black",
                                "category"=>"tv",
                                "gallery"=>"https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T2/images/I/51uVckL1jRL._SY300_SX300_QL70_FMwebp_.jpg"
                ],
                
                [
                'name'=>'LG 32 inches Tv',
                                "price"=>"13990",
                                "description"=>"Smart TV Features: Web OS Smart TV | Wi-Fi | Home Dashboard | Screen Mirroring | Mini TV Browser | Multi-Tasking | Office 365, Set WXHXD (with Stand ) mm - 739 x 472 x 168",
                                "category"=>"tv",
                                "gallery"=>"https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T2/images/I/71arAQvySlL._SX679_.jpgs"
                ],
                
                [
                'name'=>'ASUS VivoBook 14 ',
                                "price"=>"39990",
                                "description"=>"Intel Core i5-1035G1 10th Gen, 14-inch  35.56 cms FHD Thin and Light Laptop  8GB 512GB SSD MSOffice 2021 Windows 11 Integrated Graphics",
                                "category"=>"laptop",
                                "gallery"=>"https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T2/images/I/41DHBo5r6hL._SX300_SY300_QL70_FMwebp_.jpg"
                ],
                
                [
                'name'=>'SanDisk Ultra Dual Drive',
                                "price"=>"1980",
                                "description"=>"USB Type C Pendrive for Mobile Black 128 GB 5 years Warranty",
                                "category"=>"pendrive",
                                "gallery"=>"https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T2/images/I/71qOWNxv4jL._SX522_.jpg"
                ],
                
                [
                'name'=>'Apple 20W USB-C Power Adapter',
                                "price"=>"1599",
                                "description"=>"for iPhone, iPad & AirPods iPhone Compatability iPhone 12 Pro iPhone 12 Pro Max  iPhone 12 mini  iPhone 12  iPhone 11 Pro iPhone 11 Pro Max, iPhone 11  iPhone SE (2nd generation) iPhone XS iPhone XS Max iPhone XR",
                                "category"=>"charger",
                                "gallery"=>"https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T2/images/I/71qOWNxv4jL._SX522_.jpg"
                ],
                
                
                
                [
                'name'=>'Apple iPhone 13 512GB',
                                "price"=>"87999",
                                "description"=>"A15 Bionic chip for lightning-fast performance 12MP TrueDepth front camera with Night mode 4K Dolby Vision HDR recording",
                                "category"=>"mobile",
                                "gallery"=>"https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T2/images/I/61l9ppRIiqL._SX679_.jpg"
                ],
                
                [
                'name'=>'Samsung Galaxy M04 Dark Blue',
                                "price"=>"8900",
                                "description"=>"4GB RAM, 64GB Storage | Upto 8GB RAM with RAM Plus | MediaTek Helio P35 | 5000 mAh Battery",
                                "category"=>"mobile",
                                "gallery"=>"https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T2/images/I/81t6Av5DvXL._SX679_.jpg"
                ],
                
                [
                'name'=>'Redmi Note 10S',
                                "price"=>"18499",
                                "description"=>"Cosmic Purple  8GB RAM 128 GB Storage Super Amoled Display | 64 MP Quad Camera | 6 Month Free Screen Replacement 33W Charger Included",
                                "category"=>"mobile",
                                "gallery"=>"https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T2/images/I/81sZamLSPWL._SX679_.jpg"
                ],
                
                [
                'name'=>'OnePlus Nord CE 2 Lite 5G',
                                "price"=>"18450",
                                "description"=>"camera 64MP Main Camera with EIS 2MP Depth Lens and 2MP Processor Qualcomm Snapdragon 695 5G  33W SuperVOOC",
                                "category"=>"mobile",
                                "gallery"=>"https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T2/images/I/71AvQd3VzqL._SX679_.jpg"
                ],
                
                [
                'name'=>'realme narzo 50 5G',
                                "price"=>"16999",
                                "description"=>"camera 64MP Main Camera with EIS 2MP Depth Lens and 2MP Processor Qualcomm Snapdragon 695 5G  33W SuperVOOC",
                                "category"=>"mobile",
                                "gallery"=>"https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T2/images/I/71AvQd3VzqL._SX679_.jpg"
                ],
                
                [
                'name'=>'realme TechLife Buds',
                                "price"=>"1450",
                                "description"=>"Truly Wireless in Ear Earbuds with mic AI ENC for Calls Google Fast Pair 28 Hours Total Playback with Fast Charging and Low Latency ",
                                "category"=>"wireless",
                                "gallery"=>"https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T2/images/I/61aasAbKvvL._SX679_.jpg"
                ],
                
                [
                'name'=>'Apple AirPods',
                                "price"=>"11999",
                                "description"=>"Automatically connected  Easy setup for all your Apple devices Quick access to Siri by saying Hey Siri",
                                "category"=>"wireless",
                                "gallery"=>"https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T2/images/I/7120GgUKj3L._SX679_.jpg"
                ],
                
                [
                'name'=>'Mivi DuoPods A350 Earbuds',
                                "price"=>"1199",
                                "description"=>"50hrs Playtime New Launch True Wireless Earbuds with Rich Bass,13mm Dynamic Drivers, Fast Charging, Made in India, Half in Ear, Metallic Shades, Voice Assistant",
                                "category"=>"wireless",
                                "gallery"=>"https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T2/images/I/61pgzj7+AtL._SX679_.jpg"
                ],
        ]);
         
    }
}
