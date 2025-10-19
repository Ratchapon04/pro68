<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $products = [
            ['name' => 'Nike Air Force 1', 'brand' => 'Nike', 'size' => 42, 'price' => 3800, 'stock' => 12, 'description' => 'รองเท้าผ้าใบคลาสสิก ใส่สบายทุกโอกาส'],
            ['name' => 'Adidas Ultraboost 22', 'brand' => 'Adidas', 'size' => 43, 'price' => 6500, 'stock' => 8, 'description' => 'ใส่นุ่มเด้ง ใช้วิ่งและเดินได้ดี'],
            ['name' => 'Puma RS-X', 'brand' => 'Puma', 'size' => 42, 'price' => 4200, 'stock' => 10, 'description' => 'ดีไซน์ล้ำ สปอร์ตแฟชั่นใส่เท่ได้ทุกวัน'],
            ['name' => 'Converse Chuck Taylor', 'brand' => 'Converse', 'size' => 41, 'price' => 2500, 'stock' => 15, 'description' => 'รองเท้าแคนวาสสุดคลาสสิก สไตล์ย้อนยุค'],
            ['name' => 'Vans Old Skool', 'brand' => 'Vans', 'size' => 42, 'price' => 2800, 'stock' => 20, 'description' => 'สัญลักษณ์แห่งสเกตบอร์ด ดีไซน์ขาวดำสุดเท่'],
            ['name' => 'Reebok Classic Leather', 'brand' => 'Reebok', 'size' => 42, 'price' => 3000, 'stock' => 9, 'description' => 'รองเท้าหนังแท้ สไตล์วินเทจ'],
            ['name' => 'Asics Gel Kayano 30', 'brand' => 'Asics', 'size' => 43, 'price' => 5800, 'stock' => 7, 'description' => 'รองเท้าวิ่งรองรับแรงกระแทกเยี่ยม'],
            ['name' => 'New Balance 574', 'brand' => 'New Balance', 'size' => 42, 'price' => 3500, 'stock' => 14, 'description' => 'ใส่เดินสบาย สไตล์ลำลอง'],
            ['name' => 'Crocs Classic Clog', 'brand' => 'Crocs', 'size' => 41, 'price' => 1900, 'stock' => 25, 'description' => 'รองเท้าโฟมกันน้ำเบาสบาย เหมาะกับวันพักผ่อน'],
            ['name' => 'Skechers Go Walk 6', 'brand' => 'Skechers', 'size' => 42, 'price' => 3200, 'stock' => 18, 'description' => 'รองเท้าเดินเบาๆ พื้นนุ่มใส่สบาย'],
            ['name' => 'On Cloudswift', 'brand' => 'On', 'size' => 43, 'price' => 7200, 'stock' => 6, 'description' => 'รองเท้าวิ่งพรีเมียมจากสวิส น้ำหนักเบา'],
            ['name' => 'Under Armour HOVR', 'brand' => 'Under Armour', 'size' => 42, 'price' => 4900, 'stock' => 10, 'description' => 'เทคโนโลยี HOVR คืนพลังทุกก้าว'],
            ['name' => 'Fila Disruptor II', 'brand' => 'Fila', 'size' => 41, 'price' => 2700, 'stock' => 16, 'description' => 'รองเท้า Chunky สุดเท่ ย้อนยุคยุค 90s'],
            ['name' => 'Jordan 1 Retro High', 'brand' => 'Nike', 'size' => 43, 'price' => 8900, 'stock' => 5, 'description' => 'รุ่นคลาสสิกในตำนานของ Michael Jordan'],
            ['name' => 'Nike Dunk Low', 'brand' => 'Nike', 'size' => 42, 'price' => 4800, 'stock' => 8, 'description' => 'ดีไซน์เรียบแต่ดูดี ใส่ได้ทุกโอกาส'],
            ['name' => 'Adidas Stan Smith', 'brand' => 'Adidas', 'size' => 42, 'price' => 3400, 'stock' => 12, 'description' => 'รองเท้าเทนนิสสุดคลาสสิกของยุค'],
            ['name' => 'Puma Suede Classic', 'brand' => 'Puma', 'size' => 42, 'price' => 2900, 'stock' => 13, 'description' => 'ผ้าหนังกลับนุ่ม เรียบหรูมีสไตล์'],
            ['name' => 'Reebok Nano X3', 'brand' => 'Reebok', 'size' => 43, 'price' => 5400, 'stock' => 8, 'description' => 'เหมาะกับการเทรนนิ่งในยิมทุกประเภท'],
            ['name' => 'Nike Pegasus 40', 'brand' => 'Nike', 'size' => 42, 'price' => 4500, 'stock' => 9, 'description' => 'รองเท้าวิ่งเอนกประสงค์ยอดนิยม'],
            ['name' => 'Adidas Superstar', 'brand' => 'Adidas', 'size' => 42, 'price' => 3200, 'stock' => 14, 'description' => 'หัวเปลือกหอยในตำนาน สัญลักษณ์แห่งสตรีท'],
            ['name' => 'Converse Run Star Hike', 'brand' => 'Converse', 'size' => 42, 'price' => 3900, 'stock' => 11, 'description' => 'ดีไซน์พื้นหนา เพิ่มความสูงและแฟชั่น'],
            ['name' => 'New Balance 327', 'brand' => 'New Balance', 'size' => 42, 'price' => 3900, 'stock' => 10, 'description' => 'สไตล์โมเดิร์นคลาสสิกจากยุค 70s'],
            ['name' => 'On Cloudnova', 'brand' => 'On', 'size' => 43, 'price' => 7600, 'stock' => 4, 'description' => 'รองเท้าแฟชั่นสายสปอร์ตจากสวิส'],
            ['name' => 'Asics GT-2000', 'brand' => 'Asics', 'size' => 42, 'price' => 5200, 'stock' => 6, 'description' => 'รองเท้าวิ่งเสถียร เหมาะกับการฝึกซ้อมยาว'],
            ['name' => 'Hoka Clifton 9', 'brand' => 'Hoka', 'size' => 43, 'price' => 6800, 'stock' => 7, 'description' => 'รองเท้าวิ่งซัพพอร์ตสูง พื้นนุ่มสุดๆ'],
            ['name' => 'Nike Air Zoom Alphafly', 'brand' => 'Nike', 'size' => 43, 'price' => 9800, 'stock' => 3, 'description' => 'รองเท้าวิ่งแข่งขันระดับโปร'],
            ['name' => 'Skechers Arch Fit', 'brand' => 'Skechers', 'size' => 42, 'price' => 3100, 'stock' => 15, 'description' => 'พื้นโค้งรองรับอุ้งเท้า ดีต่อสุขภาพเท้า'],
            ['name' => 'Crocs Echo Clog', 'brand' => 'Crocs', 'size' => 41, 'price' => 2500, 'stock' => 20, 'description' => 'โฟมดีไซน์ใหม่ น้ำหนักเบาแต่ทน'],
            ['name' => 'Fila Ray Tracer', 'brand' => 'Fila', 'size' => 42, 'price' => 2800, 'stock' => 18, 'description' => 'รองเท้าแฟชั่นสไตล์สปอร์ต'],
            ['name' => 'Nike Zoom Fly 5', 'brand' => 'Nike', 'size' => 43, 'price' => 7500, 'stock' => 5, 'description' => 'รุ่นยอดนิยมสำหรับนักวิ่งจริงจัง'],
        ];

        foreach ($products as $p) {
            Product::create($p);
        }
    }
}
