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
        
        $merchantFile = database_path('seeders/merchant.json');
        $voucherFile  = database_path('seeders/voucher.json');

        if (file_exists($merchantFile)) {
            $merchantsData = json_decode(file_get_contents($merchantFile), true);
            if (is_array($merchantsData)) {
                foreach ($merchantsData as $merchant) {
                    if (isset($merchant['modified_at'])) {
                        $merchant['updated_at'] = $merchant['modified_at'];
                        unset($merchant['modified_at']);
                    }
        
                    $brand = Brands::create($merchant);
        
                    // Simpan ID brand yang baru dibuat ke array mapping
                    $brandMapping[$merchant['id']] = $brand->id;
                }
                $this->command->info('Merchants seeded successfully!');
            } else {
                $this->command->error('Format JSON merchant.json tidak valid.');
            }
        } else {
            $this->command->error('File merchant.json tidak ditemukan.');
        }
        
        if (file_exists($voucherFile)) {
            $vouchersData = json_decode(file_get_contents($voucherFile), true);
            if (is_array($vouchersData)) {
                foreach ($vouchersData as $voucher) {
        
                    // Cek apakah merchant.id ada dalam array mapping.
                    if (isset($voucher['merchant']['id']) && isset($brandMapping[$voucher['merchant']['id']])) {
                        // Set nilai brand_id di tabel vouchers
                        $voucher['brand_id'] = $brandMapping[$voucher['merchant']['id']];
                    } else {
                        $this->command->warn("Voucher dengan merchant ID {$voucher['merchant']['id']} tidak memiliki brand yang sesuai.");
                        continue;
                    }
        
                    if (isset($voucher['modified_at'])) {
                        $voucher['updated_at'] = $voucher['modified_at'];
                        unset($voucher['modified_at']);
                    }
        
                    Vouchers::create($voucher);
                }
                $this->command->info('Vouchers seeded successfully!');
            } else {
                $this->command->error('Format JSON voucher.json tidak valid.');
            }
        } else {
            $this->command->error('File voucher.json tidak ditemukan.');
        }
    }
}
