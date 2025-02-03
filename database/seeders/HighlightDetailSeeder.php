<?php

namespace Database\Seeders;

use App\Models\HighlightDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HighlightDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'id' => 860,
                'id_merchant' => 93,
                'merchant_name' => "Nanny's Pavillon By Altima Group",
                'id_product' => 21,
                'type' => 'DIGITAL',
                'price_list' => 100000,
                'discount_type' => 'PERCENTAGE',
                'discount' => 24,
                'fix_price' => 0,
                'price' => 76000,
                'is_favorite' => false,
                'image_id_master_image' => 58422,
                'image_id_master_imageable' => 91614,
                'image_url' => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2024-09-23T06%3A41%3A22.886Z1727073682-group.jpeg",
                'image_alt' => '',
                'slug_url' => "merchant-nanny's-pavillon-by-altima-group",
                'meta_title' => "Nanny's Pavillon By Altima Group",
                'meta_description' => "Didirikan sejak 23 Maret 2009, Nanny’s Pavillon pertama kali membuka outletnya di Bandung, Indonesia. Nanny’s Pavillon merupakan restoran panekuk berkonsep French American. Tradisi dari French American family sangat diikuti oleh Nanny’s Pavillon, oleh karena itu rutinitasnya mencerminkan kehangatan, nyaman, dan suasana akrab.\n\n**Outlet Berlaku:**\n1. Kota Kasablanka \n2. Central Park \n3. Pondok Indah Mall \n4. Lippo Mall Puri \n5. Cilandak Town Square \n6. Summarecon Mal Bekasi \n7. AEON BSD \n8. AEON Mall Tanjung Barat \n9. AEON Mall Sentul City \n10. Nanny's Pavillon, La Riviera - PIK 2\n11. Nanny's Pavillon, Agora\n12. Nanny's Pavillon, Lotte Shopping Avenue\n13. Nanny's Pavillon, AEON Mall Deltamas",
                'canonical' => "https://ultravoucher.co.id/category/brand/"
            ],
            [
                'id' => 861,
                'id_merchant' => 7078,
                'merchant_name' => "Karnivor By Altima Group",
                'id_product' => 4134,
                'type' => 'DIGITAL',
                'price_list' => 250000,
                'discount_type' => 'FIXPRICE',
                'discount' => 10,
                'fix_price' => 225000,
                'price' => 225000,
                'is_favorite' => false,
                'image_id_master_image' => 58423,
                'image_id_master_imageable' => 91615,
                'image_url' => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2024-09-23T06%3A41%3A42.330Z1727073702-group.jpeg",
                'image_alt' => '',
                'slug_url' => "merchant-karnivor-by-altima-group",
                'meta_title' => "Karnivor By Altima Group",
                'meta_description' => "Karnivor adalah Steakhouse Viral asal Bandung yang sudah berdiri sejak 2011. Memiliki beragam varian menu steak, Karnivor juga terkenal dengan menu spesialnya yang berukuran raksasa bernama Monster Menu.\n\n**Outlet Berlaku :**\n\n1. Karnivor jl Riau, Bandung\n2. Karnivor La Terazza Bekasi\n3. Karnivor Kota Kasablanka\n4. KARNIVOR Grand Indonesia\n5. KARNIVOR AEON Tanjung Barat\n6. KARNIVOR La Riviera - PIK 2 (Opening 15 Maret 2024)",
                'canonical' => "https://ultravoucher.co.id/category/brand/"
            ],
            [
                'id' => 862,
                'id_merchant' => 121,
                'merchant_name' => "Kafe Betawi",
                'id_product' => 181,
                'type' => 'DIGITAL',
                'price_list' => 100000,
                'discount_type' => 'FIXPRICE',
                'discount' => 8,
                'fix_price' => 92000,
                'price' => 92000,
                'is_favorite' => false,
                'image_id_master_image' => 58424,
                'image_id_master_imageable' => 91616,
                'image_url' => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2024-09-23T06%3A42%3A00.425Z1727073720-group.png",
                'image_alt' => '',
                'slug_url' => "merchant-kafe-betawi",
                'meta_title' => "Kafe Betawi",
                'meta_description' => "Pada tahun 1992, Kafe Betawi didirikan dengan cinta untuk masakan Betawi tradisional yang menjadi semakin langka karena perkembangan modern. Mereka menawarkan berbagai makanan dan minuman Betawi tradisional, dengan hidangan khas mereka menjadi Soto Betawi yang lezat dan otentik, yang telah menjadi favorit di antara pelanggan.\n\n**Outlet Berlaku :**\n\n1. KAFE BETAWI PONDOK INDAH MALL 1\n2. KAFE BETAWI Cilandak Town Square\n3. KAFE BETAWI FIRST Senayan City\n4. KAFE BETAWI FIRST Pacific Place\n5. KAFE BETAWI FIRST Grand Indonesia\n6. KAFE BETAWI Emporium Pluit\n7. KAFE BETAWI Central Park\n8. KAFE BETAWI Teras Kota\n9. KAFE BETAWI Gandaria City\n10. KAFE BETAWI Lippo Mall Kemang\n11. KAFE BETAWI Plaza Indonesia\n12. KAFE BETAWI Kota Kasablanka\n13. KAFE BETAWI Tunjungan Plaza\n14. KAFE BETAWI Mall Bali Galeria\n15. KAFE BETAWI Trans Studio Bandung\n16. KAFE BETAWI Lippo Mall Puri\n17. KAFE BETAWI Botani Square\n18. KAFE BETAWI Level 21\n19. KAFE BETAWI - Bintaro Jaya XChange Mall\n20. KAFE BETAWI CORNER Neo Soho\n21. KAFE BETAWI FX sudirman\n22. Kafe Betawi Xpress Senayan City\n23. Kafe Betawi Icon Mall Bali",
                'canonical' => "https://ultravoucher.co.id/category/brand/"
            ],
            [
                'id' => 863,
                'id_merchant' => 3499,
                'merchant_name' => "Kopi Kotak",
                'id_product' => 1420,
                'type' => 'DIGITAL',
                'price_list' => 100000,
                'discount_type' => 'FIXPRICE',
                'discount' => 15,
                'fix_price' => 85000,
                'price' => 85000,
                'is_favorite' => false,
                'image_id_master_image' => 58425,
                'image_id_master_imageable' => 91617,
                'image_url' => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2024-09-23T06%3A42%3A16.764Z1727073736-group.png",
                'image_alt' => '',
                'slug_url' => "merchant-kopi-kotak",
                'meta_title' => "Kopi Kotak",
                'meta_description' => "Kopi Kotak adalah kedai kopi dengan tema yang sederhana dan terjangkau, menjadikannya tempat nongkrong yang ideal untuk kaum muda, anak -anak sekolah, dan lainnya. Nama \"Kotak Kopi\" melambangkan persatuan dan kontinuitas, karena harapan bagi kedai kopi untuk berkembang dan tumbuh tanpa henti.\n\n**Cabang Berlaku:**\n\n1. Kopi Kotak Tebet\nJl. Tebet Barat IX No.33, RT.4/RW.4, Tebet Bar., Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12810\n\n2. Kopi Kotak Serang\nPokel Garden Resto Jl. Perjuangan No.88 RT.99/RW.99 , Kel. Kasemen, Kec. Kasemen, Kota Serang, Prov. Banten 42191 \n\n3. Kopi Kotak Margonda Depok\nJl. Margonda Raya No.488, Pondok Cina, Kecamatan Beji, Kota Depok, Jawa Barat 16424\n\n4. Kopi Kotak Serpong \nJl. Springs Boulevard No.12 A, Cihuni, Kec. Pagedangan, Kabupaten Tangerang, Banten\n\n5. KOTAK COFFEE JOGLO JAMBE\nJl. Raya, Tapos, Kec. Tigaraksa, Kabupaten Tangerang, Banten 15720\n",
                'canonical' => "https://ultravoucher.co.id/category/brand/"
            ],
            [
                'id' => 864,
                'id_merchant' => 101,
                'merchant_name' => "Haagen Dazs",
                'id_product' => 441,
                'type' => 'DIGITAL',
                'price_list' => 100000,
                'discount_type' => 'FIXPRICE',
                'discount' => 40,
                'fix_price' => 60000,
                'price' => 60000,
                'is_favorite' => false,
                'image_id_master_image' => 58426,
                'image_id_master_imageable' => 91618,
                'image_url' => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2024-09-23T06%3A42%3A54.684Z1727073774-group.jpeg",
                'image_alt' => '',
                'slug_url' => "group-haagen-dazs",
                'meta_title' => "Haagen Dazs",
                'meta_description' => "Haagen-Dazs yang merupakan super premium ice cream dan brand yang populer di Indonesia. Haagen-Dazs menyediakan sekitar 16 varian menu ice cream yang langsung diimpor dari Perancis. Gerai dengan konsep cafe ini bisa dijadikan sebagai pilihan tempat hangout setelah seharian beraktivitas. Haagen-Dazs juga menyediakan fasilitas dine-in atau take away bagi Anda yang ingin menikmati ice cream di sini.\n\n**Outlet Berlaku :**\n\n* Haagendazs Cafe Mall Plaza Senayan\n* Haagendazs Cafe Grand Indonesia Shopping Town\n* Haagendazs Cafe Summarecon Mall Serpong\n* Haagendazs Kiosk Summarecon Mall Serpong\n* Haagendazs Cafe Cilandak Town Square\n* Haagendazs Kiosk Mall Artha Gading\n* Haagendazs Kiosk Mall Alam Sutera\n* Haagendazs Cafe Centre Point Medan\n* Haagendazs Cafe Mall Puri Indah\n* Haagendazs Kiosk Mall Puri Indah\n* Haagendazs Cafe Mall Kota Kasablanka\n* Haagendazs Cafe Gandaria City Mall\n* Haagendazs Kiosk AEON BSD\n* Haagendazs Kiosk QBIG BSD\n* Haagendazs Kiosk Summarecon Mall Bekasi\n* Haagendazs Cafe AEON Sentul\n* Haagendazs Cafe PIM 2\n* Haagendazs Cafe Mall Pluit Village\n* Haagendazs Cafe Mall Kelapa Gading 1\n* Haagendazs Cafe Mall Karawaci Tangerang\n* Haagendazs Kiosk Mall Kelapa Gading 3\n* Haagendazs Kiosk Bintaro Exchange Mall\n* Haagendazs Kiosk Villagio Karawang\n* Haagendazs Cafe Setiabudhi Bandung\n* Haagendazs Kiosk Central Park\n* Haagendazs Cafe Mall Central Park\n* Haagendazs Cafe Emporium\n* Haagendazs Cafe Senayan City Mall\n* Haagendazs Cafe Plaza Indonesia\n* Haagendazs Kiosk Summarecon Digital Center\n* Haagendazs Kiosk Menteng Central\n* Haagendazs Kiosk Mall Living World\n* Haagendazs Cafe Ratu Indah Makasar\n* Haagendazs Cafe Mall Galaxy Surabaya\n* Haagendazs Kiosk Pakuwon Mall Surabaya\n* Haagendazs Cafe Pakuwon Mall Surabaya\n* Haagendazs Cafe Mall Tunjungan Plaza 3\n* Haagendazs Cafe Ciputra World Surabaya\n* Haagendazs Cafe Beach Walk Kuta Bali\n* Haagendazs Cafe Pakuwon City Mall 2 Surabaya\n* Haagendazs Cafe Paragon Mall Semaran\n* Haagen Dazs Icon Mall Bali\n* Haagen Dazs kiosk Sunter\n\n**Tidak berlaku di Outlet :**\n\n* TDC Food Centrum Sunter\n* Haagen Dazs Dip Shop Bandara International Ngurah Rai   ",
                'canonical' => "https://ultravoucher.co.id/category/brand/"
            ],
            [
                'id' => 865,
                'id_merchant' => 8292,
                'merchant_name' => "Baby Dutch Pancake by Altima Group",
                'id_product' => 4840,
                'type' => 'DIGITAL',
                'price_list' => 50000,
                'discount_type' => 'FIXPRICE',
                'discount' => 15,
                'fix_price' => 42500,
                'price' => 42500,
                'is_favorite' => false,
                'image_id_master_image' => 58427,
                'image_id_master_imageable' => 91619,
                'image_url' => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2024-09-23T06%3A43%3A12.470Z1727073792-group.jpeg",
                'image_alt' => '',
                'slug_url' => "merchant-baby-dutch-pancake-by-altima-group",
                'meta_title' => "Baby Dutch Pancake by Altima Group",
                'meta_description' => "Baby Dutch adalah KONSEP PANCAKE BABY DUTCH PERTAMA DI INDONESIA.\n\nNama Baby Dutch sendiri diambil dari menu andalan kami yaitu “Baby Dutch Pancake” dengan berbagai jenis variasi Baby Dutch Pancake yang kami sajikan, cocok untuk sarapan / makan siang / tea time / makan malam.\n\nKonsep suasana yang nyaman disertai dengan warna hijau dan bumi. Baby Dutch ingin memberikan pengalaman bersantap terbaik untuk Anda, sayang!\n\n**Outlet Berlaku:**\n\n1. Jl. Gunung Kareumbi no. 10, Ciumbuleuit – Bandung\n2. Neo Soho\n3. Grand Indonesia – West Mall, Jakarta\n4. One Satrio – Kuningan, Jakarta\n5. Kota Baru Parahyangan, Bandung\n6. Gandaria City, mainstreet dining level UG",
                'canonical' => "https://ultravoucher.co.id/category/brand/"
            ]
        ];

        foreach ($products as $product) {
            HighlightDetail::create($product);
        }
    }
}
