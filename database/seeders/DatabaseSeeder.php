<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Brands;
use App\Models\Article;
use App\Models\Vouchers;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Database\Seeders\PromoDetailSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this -> call([
            CategorySeeder::class,
            PromoDetailSeeder::class,
            HighlightDetailSeeder::class
        ]);
        
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $articles = [
            [
                'slug' => 'temukan-lokasi-merchant-terdekat-untuk-redeem-voucher-lewat-fitur-nearby-yuk-gunakan-fiturnya',
                'title' => 'Temukan Lokasi Merchant Terdekat untuk Redeem Voucher Lewat Fitur Nearby! Yuk Gunakan Fiturnya',
                'content' => "Untuk kamu pengguna aplikasi Ultra Voucher, sudahkah kamu update ke versi terbaru? Jika belum, sebaiknya kamu segera update aplikasimu di App Store dan Google Play Store. Versi terbaru ini menghadirkan beberapa hal penting, termasuk tampilan dan fitur terbaru yang semakin memudahkan pengguna dalam aplikasi Ultra Voucher.\n\nUltra Voucher telah merilis fitur baru yaitu fitur Nearby. Fitur ini akan membantu kamu menemukan merchant yang berada di sekitar lokasi kamu. Kamu tidak perlu bingung lagi mencari tempat untuk menukarkan voucher, karena dengan Fitur Nearby, lokasi merchant favoritmu bisa langsung ditemukan hanya dalam beberapa langkah mudah.\n\nNikmati pengalaman berbelanja yang lebih praktis dan menyenangkan dengan memanfaatkan fitur canggih yang ditawarkan Ultra Voucher.\n\nManfaat Menggunakan Fitur Nearby\nFitur Nearby memiliki sejumlah manfaat khususnya bagi kamu pengguna aplikasi Ultra Voucher, di antaranya:\n\nMemberikan kemudahan akses kepada pengguna untuk menemukan merchant terdekat dengan cepat dan efisien, menghemat waktu yang biasanya dibutuhkan untuk mencari lokasi terdekat.\nPengguna dapat dengan mudah menemukan tempat untuk redeem voucher tanpa harus melakukan pencarian manual yang melelahkan.\nPengguna tidak membutuhkan waktu lama untuk menuju lokasi merchant.\nInformasi yang disediakan oleh fitur ini selalu diperbarui secara real-time, memastikan bahwa pengguna mendapatkan informasi yang akurat dan relevan setiap saat.\n\nCara Menggunakan Fitur Nearby\nBuka aplikasi Ultra Voucher dan pilih fitur “Nearby”.\nSetelah klik “Nearby” maka Ultra Voucher akan memberikan rekomendasi merchant yang berada di sekitarmu.\nSetelah memilih merchant yang diinginkan, selanjutnya kamu akan diarahkan ke alamat merchant yang paling dekat dari lokasimu.\nKamu bisa langsung beli voucher diskon merchant favorit kamu di aplikasi Ultra Voucher.\nJika transaksi sudah selesai, kamu bisa pilih menu “My Voucher” untuk redeem voucher tersebut di lokasi merchant terdekat.\nUntuk lebih jelasnya, kamu bisa cek video tutorialnya di sini.\n\nBaca Juga: Kirim Hadiah ke Orang Tersayang dengan Fitur Ultra Hadiah!\n\nDengan mengikuti langkah-langkah tersebut, kamu bisa dengan mudah menemukan merchant yang sesuai dengan kebutuhanmu, membuat pengalaman berbelanja dengan voucher menjadi lebih praktis dan efisien. Fitur Nearby khusus dirancang untuk memberikan kenyamanan maksimal bagi pengguna dalam menemukan lokasi merchant terdekat dengan cepat dan mudah.\n\nBaca Juga: Fitur Aplikasi Ultra Voucher: Bisa Digunakan untuk Belanja Apa pun\n\nTunggu apalagi? Yuk gunakan fitur Nearby di aplikasi Ultra Voucher dan rasakan manfaatnya!\n\nBuat kamu yang belum punya aplikasi Ultra Voucher, kamu bisa download gratis di App Store dan Google Play Store untuk mendapatkan beragam diskon dan promo voucher terbaru dari berbagai merchant yang sesuai dengan kebutuhanmu.",
                'post_date' => '2024-05-18',
            ],
        ];

        foreach ($articles as $article) {
            Article::create($article);
        }

        Article::factory(10)->create();
        
        $dataBrands = [
            [
                'image' => 'https://uvproduction.oss-ap-southeast-5.aliyuncs.com/mdm/assets/images/2023-12-13T07%3A51%3A43.249Zgroup.jpeg',
                'title' => 'Ultra Voucher',
                'slug' => Str::slug('Merchant Ultra Voucher'),
                'logo' => 'https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2023-09-11T08%3A03%3A17.156Z1694419397-group.png',
                'discount' => 0,
                'description' => 'deskripsi',
                'snk' => 'snk'
            ],
            [
                'image' => 'https://uvproduction.oss-ap-southeast-5.aliyuncs.com/mdm/assets/images/2024-05-03T05%3A31%3A59.794Zgroup.jpeg',
                'title' => 'MAP GIFT Voucher',
                'slug' => Str::slug('Merchant MAP GIFT Voucher'),
                'logo' => 'https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2023-08-11T05%3A30%3A08.080Z1691731808-group.png',
                'discount' => 3,
                'description' => 'deskripsi',
                'snk' => 'snk'
            ],
            [
                'image' => 'https://uvproduction.oss-ap-southeast-5.aliyuncs.com/mdm/assets/images/2024-01-05T09%3A07%3A30.283Zgroup.png',
                'title' => 'DIGIMAP',
                'slug' => Str::slug('Merchant DIGIMAP'),
                'logo' => 'https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2023-10-30T08%3A07%3A39.202Z1698653259-group.png',
                'discount' => 3,
                'description' => 'deskripsi',
                'snk' => 'snk'
            ],
            [
                'image' => 'https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/Casio.jpg',
                'title' => 'Casio',
                'slug' => Str::slug('Merchant Casio'),
                'logo' => 'https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2023-08-11T05%3A16%3A50.895Z1691731010-group.png',
                'discount' => 8,
                'description' => 'deskripsi',
                'snk' => 'snk'
            ]
        ];

        $dataVouchers = [
            [
                'image' => 'https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2023-09-11T11%3A05%3A34.309Z1694430333-product.png',
                'slug' => Str::slug('uv1'),
                'price' => 5000000,
                'category' => 'Digital',
                'brand_id' => 1
            ],
            [
                'image' => 'https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2023-09-11T11%3A05%3A34.309Z1694430333-product.png',
                'slug' => Str::slug('uv2'),
                'price' => 5100000,
                'category' => 'Digital',
                'brand_id' => 1
            ],
            [
                'image' => 'https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2023-09-11T11%3A05%3A34.309Z1694430333-product.png',
                'slug' => Str::slug('uv3'),
                'price' => 5200000,
                'category' => 'Fisik',
                'category' => 'Digital',
                'brand_id' => 1
            ],
            [
                'image' => 'https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2023-10-06T04%3A25%3A07.094Z1696566307-product.png',
                'slug' => Str::slug('mgv4'),
                'price' => 4000000,
                'category' => 'Digital',
                'brand_id' => 2
            ],
            [
                'image' => 'https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2023-10-06T04%3A25%3A07.094Z1696566307-product.png',
                'slug' => Str::slug('mgv5'),
                'price' => 4100000,
                'category' => 'Digital',
                'brand_id' => 2
            ],
            [
                'image' => 'https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2023-10-06T04%3A25%3A07.094Z1696566307-product.png',
                'slug' => Str::slug('mgv6'),
                'price' => 4200000,
                'category' => 'Fisik',
                'brand_id' => 2
            ],
            [
                'image' => 'https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2023-10-30T08%3A07%3A18.478Z1698653238-product.png',
                'slug' => Str::slug('digi7'),
                'price' => 1000000,
                'category' => 'Digital',
                'brand_id' => 3
            ],
            [
                'image' => 'https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2023-10-30T08%3A07%3A18.478Z1698653238-product.png',
                'slug' => Str::slug('digi8'),
                'price' => 1100000,
                'category' => 'Digital',
                'brand_id' => 3
            ],
            [
                'image' => 'https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2023-10-30T08%3A07%3A18.478Z1698653238-product.png',
                'slug' => Str::slug('digi9'),
                'price' => 1200000,
                'category' => 'Fisik',
                'brand_id' => 3
            ],
            [
                'image' => 'http://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/product-vouchers/CSO01000_1000000.png',
                'slug' => Str::slug('cas10'),
                'price' => 2000000,
                'category' => 'Digital',
                'brand_id' => 4
            ],
            [
                'image' => 'http://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/product-vouchers/CSO01000_1000000.png',
                'slug' => Str::slug('cas11'),
                'price' => 2100000,
                'category' => 'Digital',
                'brand_id' => 4
            ],
            [
                'image' => 'http://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/product-vouchers/CSO01000_1000000.png',
                'slug' => Str::slug('cas12'),
                'price' => 2200000,
                'category' => 'Fisik',
                'brand_id' => 4
            ]
        ];

        foreach ($dataBrands as $item) {
            Brands::create($item);    
        }

        foreach ($dataVouchers as $item) {
            Vouchers::create($item);    
        }
    }
}
