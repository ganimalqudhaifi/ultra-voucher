<?php

namespace Database\Seeders;

use App\Models\PromoDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PromoDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                "id" => 15187,
                "id_product" => 6993,
                "code" => "TMZ00600-GQ",
                "name" => "CNY - Timezone 600K",
                "product_type" => "DIGITAL",
                "ultra_voucher" => "NO",
                "description" => "Didirikan pada tahun 1978, pusat hiburan keluarga Timezone pertama dibuka di Perth, Australia Barat. Timezone adalah pilihan yang tempat untuk menikmati waktu bersantai bersama keluarga. Fasilitas hiburan Arcade Games ini sayang untuk Anda lewati.",
                "tnc" => "Syarat dan ketentuan :\n\n1. Voucher berlaku setiap hari, termasuk weekend dan hari libur Nasional.\n\n2. Voucher berlaku untuk produk yang tertera pada keterangan voucher.\n\n3. Voucher hanya dapat digunakan 1 (satu) kali tanpa minimum transaksi.\n\n4. Satu transaksi dapat menggunakan lebih dari 1 voucher.\n\n5. Jika transaksi dibatalkan Voucher akan dianggap hangus.\n\n6. Voucher tidak dapat dikembalikan atau ditukar dengan uang tunai atau yang setara dengan uang tunai.\n\n7. Tidak ada pengembalian uang apabila transaksi di bawah nilai nominal Voucher.\n\n8. Voucher sudah termasuk pajak dan layanan.\n\n9. Jika ditemukan Pelanggan melakukan kecurangan terhadap  Voucher, maka Voucher akan di hanguskan.\n\n10. Dengan menggunakan Voucher, maka Pelanggan setuju untuk  tunduk pada syarat dan   ketentuan yang tercantum disini",
                "nominal" => 600000,
                "discount_type" => "FIXPRICE",
                "price_list" => 600000,
                "discount" => 0,
                "fix_price" => 300000,
                "price" => 300000,
                "is_idle" => "YES",
                "is_promo" => "YES",
                "id_promo" => 9000401,
                "qty_limit" => 1,
                "is_unlimited" => false,
                "is_bundling" => false,
                "stock_available_to_reserve" => 9,
                "sort" => 1,
                "initial_stock" => 10,
                "image" => json_encode([
                    "id_master_image" => 77080,
                    "id_master_imageable" => 109491,
                    "url" => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2025-01-24T01%3A48%3A47.773Z1737683327-product.jpeg",
                    "ordered" => 1,
                    "alt_image" => "tmz00600-gq-cny---timezone-600k"
                ]),
                "merchant_icon" => json_encode([
                    "id_master_image" => 48689,
                    "id_master_imageable" => 105306,
                    "url" => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2023-09-04T06%3A33%3A46.378Z1693809226-group.png",
                    "ordered" => 1,
                    "alt_image" => "merchant-timezone-logo"
                ]),
                "merchant_name" => "Timezone",
                "promo" => null,
                "merchant" => json_encode([
                    "id_master_image" => 48689,
                    "id_master_imageable" => 105306,
                    "url" => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2023-09-04T06%3A33%3A46.378Z1693809226-group.png",
                    "ordered" => 1,
                    "alt_image" => "merchant-timezone-logo"
                ]),
                "slug_url" => "tmz00600-gq-cny---timezone-600k",
                "meta_title" => "",
                "meta_description" => "",
                "canonical" => ""
            ],
            [
                "id" => 15199,
                "id_product" => 7004,
                "code" => "CGV00050-GQ",
                "name" => "CNY - CGV 50K",
                "product_type" => "DIGITAL",
                "ultra_voucher" => "NO",
                "description" => "CGV Cinemas adalah jaringan bioskop terkemuka di Indonesia yang pertama kali didirikan pada tahun 2004. CGV Cinemas memberikan pengalaman menonton melalui kemajuan teknologi yang digunakan seperti; 3D, 4DX, Screen X, SphereX, Dolby Atmos, melalui beberapa kelas auditorium: Regular Class, Velvet Class, Gold Class, Satin Class, Sweetbox.\n\nOutlet tidak berlaku:\n- CGV Mall Bandara City\n- CGV Grand Kawanua City",
                "tnc" => "Syarat dan Ketentuan CGV E-Coupon:\n\n1. E-Coupon berlaku setiap hari termasuk Sabtu - Minggu dan Hari Libur Nasional\n2. Satu E-Coupon No hanya dapat digunakan pada 1 kali Transaksi Tiket Nonton.\n3. E-Coupon dapat digunakan untuk pembelian tiket nonton di CGV website, mobile apps,\ndan POS counter bioskop , kecuali CGV Franchise (Bandara City Mall)\n4. Jika jumlah transaksi dibawah nilai E-Coupon, nominal sisa tidak dapat dikembalikan\ndengan uang tunai atau dianggap hangus.\n5. Nilai E-Coupon dibawah jumlah transaksi dapat digabung dengan metode pembayaran\nlainnya (tunai, kartu debit, kartu kredit, dan lainnya yang berlaku).\n6. E-Coupon harus dipergunakan sebelum masa berlaku yang tertera habis\n7. E-Coupon tidak bisa di refund dalam bentuk cash atau kredit\n8. E-Coupon tidak bisa digunakan berbarengan dengan CGV membership point\n9. E-Coupon tidak bisa digunakan bersamaan dengan transkasi produk F&B.\n10. Untuk penggunaan E-Coupon di CGV website & mobile apps, Voucher wajib di\nregistrasikan terlebih dahulu di masing-masing akun member setiap customer. Jika\nbelum memiliki akun member silahkan mendaftar terlebih dahulu GRATIS\n11. Voucher berlaku 30 hari setelah pembelian\n\nOutlet tidak berlaku:\n- CGV Mall Bandara City\n- CGV Grand Kawanua City\n\n\n\nCara Menggunakan Voucher di Online store CGV  :\n\nCGV Aplikasi Journey Voucher Value\n\n1. Buka Aplikasi CGV\n2. Pilih My CGV lalu log in/register apabila belum menjadi member",
                "nominal" => 50000,
                "discount_type" => "FIXPRICE",
                "price_list" => 50000,
                "discount" => 0,
                "fix_price" => 35000,
                "price" => 35000,
                "is_idle" => "YES",
                "is_promo" => "YES",
                "id_promo" => 9000401,
                "qty_limit" => 1,
                "is_unlimited" => false,
                "is_bundling" => false,
                "stock_available_to_reserve" => 0,
                "sort" => 2,
                "initial_stock" => 6,
                "image" => json_encode([
                    "id_master_image" => 77101,
                    "id_master_imageable" => 109506,
                    "url" => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2025-01-24T02%3A54%3A59.550Z1737687299-product.jpeg",
                    "ordered" => 1,
                    "alt_image" => "cgv00050-gq-cny---cgv-50k"
                ]),
                "merchant_icon" => json_encode([
                    "id_master_image" => 48790,
                    "id_master_imageable" => 89643,
                    "url" => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2023-09-05T03%3A41%3A29.997Z1693885289-group.png",
                    "ordered" => 1,
                    "alt_image" => "merchant-cgv-cinemas-logo"
                ]),
                "merchant_name" => "CGV Cinemas",
                "promo" => null,
                "merchant" => json_encode([
                    "id_master_image" => 48790,
                    "id_master_imageable" => 89643,
                    "url" => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2023-09-05T03%3A41%3A29.997Z1693885289-group.png",
                    "ordered" => 1,
                    "alt_image" => "merchant-cgv-cinemas-logo"
                ]),
                "slug_url" => "cgv00050-gq-cny---cgv-50k",
                "meta_title" => "",
                "meta_description" => "",
                "canonical" => ""
            ],
            [
                "id" => 15201,
                "id_product" => 7006,
                "code" => "SFB00100-GQ",
                "name" => "CNY - Song Fa Bak Kut Teh 100K",
                "product_type" => "DIGITAL",
                "ultra_voucher" => "NO",
                "description" => "Song Fa Bak Kut Teh adalah bagian dari GF Culinary Group yang berdiri sejak tahun 2014 di Indonesia di Ozone PIK Mall. Kami telah datang jauh dari satu gerobak makanan di jalan. Namun ikon kereta dorong mengingatkan kami tentang pengalaman Bak Kut Teh asli dengan iga babi yang lembut, tulang iga dengan sup panas yang beraroma serta pedas. Nikmati suasana makan pinggir jalan tahun 1960-an di Song Fa yang merupakan warisan Bak Kut Teh dengan keaslian nya.",
                "tnc" => "Syarat dan Ketentuan :\n1. Voucher berlaku setiap hari, termasuk weekend dan hari libur Nasional.\n2. Hanya berlaku untuk Dine-in ( tidak berlaku Takeaway / Delivery ).\n3. Redeem Voucher dilakukan oleh Kasir dan di Area Kasir. Apabila voucher di redeem sebelum tiba di outlet tanpa dilakukan oleh kasir, maka voucher dianggap hangus.\n4. Voucher hanya dapat digunakan 1 (satu) kali tanpa minimum transaksi.\n5. Satu transaksi dapat menggunakan lebih dari 1 (satu) voucher.\n6. Voucher tidak dapat dikembalikan atau ditukar dengan uang tunai.\n7. Tidak ada pengembalian uang apabila transaksi di bawah nilai nominal Voucher.\n8. Pelanggan wajib membayar selisih harga apabila transaksi di atas nilai nominal Voucher.\n9. Pelanggan wajib menunjukkan E-Voucher sebelum melakukan transaksi pembayaran.\n10. Voucher sudah termasuk pajak dan layanan.\n11. Voucher tidak dapat digabungkan dengan promo ataupun voucher lain yang tidak sejenis.\n",
                "nominal" => 100000,
                "discount_type" => "FIXPRICE",
                "price_list" => 100000,
                "discount" => 0,
                "fix_price" => 70000,
                "price" => 70000,
                "is_idle" => "YES",
                "is_promo" => "YES",
                "id_promo" => 9000401,
                "qty_limit" => 1,
                "is_unlimited" => false,
                "is_bundling" => false,
                "stock_available_to_reserve" => 3,
                "sort" => 3,
                "initial_stock" => 10,
                "image" => json_encode([
                    "id_master_image" => 77103,
                    "id_master_imageable" => 109508,
                    "url" => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2025-01-24T02%3A59%3A59.518Z1737687599-product.png",
                    "ordered" => 1,
                    "alt_image" => "sfb00100-gq-cny---song-fa-bak-kut-teh-100k"
                ]),
                "merchant_icon" => json_encode([
                    "id_master_image" => 48810,
                    "id_master_imageable" => 105559,
                    "url" => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2023-09-05T07%3A27%3A26.675Z1693898846-group.png",
                    "ordered" => 1,
                    "alt_image" => "merchant-song-fa-bak-kut-teh-logo"
                ]),
                "merchant_name" => "Song Fa Bak Kut Teh",
                "promo" => null,
                "merchant" => json_encode([
                    "id_master_image" => 48810,
                    "id_master_imageable" => 105559,
                    "url" => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2023-09-05T07%3A27%3A26.675Z1693898846-group.png",
                    "ordered" => 1,
                    "alt_image" => "merchant-song-fa-bak-kut-teh-logo"
                ]),
                "slug_url" => "sfb00100-gq-cny---song-fa-bak-kut-teh-100k",
                "meta_title" => "",
                "meta_description" => "",
                "canonical" => ""
            ],
            [
                "id" => 15202,
                "id_product" => 7007,
                "code" => "GMD00050-GQ",
                "name" => "CNY - Bakmi GM 50K",
                "product_type" => "DIGITAL",
                "ultra_voucher" => "NO",
                "description" => "Berlaku pada semua cabang/outlet Nasional Bakmi GM kecuali outlet yang berbentuk Food Truck, Bazaar, Stasiun dan MRT",
                "tnc" => "Pelanggan BAKMI GM setiap harinya berasal dari beragam lapisan umur (tua-muda), dan profesi (pelajar, mahasiswa, eksekutif muda). Tersedia lebih dari 50 menu yang dapat dipilih oleh pelanggan. Restoran-restoran BAKMI GM dapat Anda temukan di berbagai lokasi, mulai dari lokasi perumahan, perkantoran, hingga pusat perbelanjaan, dan setiap restoran BAKMI GM didesain untuk memberikan suasana yang hangat dan menyenangkan.\n\nOutlet tidak berlaku:\n- Soekarno Hatta Terminal 3 \n- Food Food Truck dan Bazar\n",
                "nominal" => 50000,
                "discount_type" => "FIXPRICE",
                "price_list" => 50000,
                "discount" => 0,
                "fix_price" => 35000,
                "price" => 35000,
                "is_idle" => "YES",
                "is_promo" => "YES",
                "id_promo" => 9000401,
                "qty_limit" => 1,
                "is_unlimited" => false,
                "is_bundling" => false,
                "stock_available_to_reserve" => 3,
                "sort" => 4,
                "initial_stock" => 10,
                "image" => json_encode([
                    "id_master_image" => 77104,
                    "id_master_imageable" => 109509,
                    "url" => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2025-01-24T03%3A03%3A08.392Z1737687788-product.png",
                    "ordered" => 1,
                    "alt_image" => "gmd00050-gq-cny---bakmi-gm--50k"
                ]),
                "merchant_icon" => json_encode([
                    "id_master_image" => 48794,
                    "id_master_imageable" => 89595,
                    "url" => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2023-09-05T04%3A18%3A44.747Z1693887524-group.png",
                    "ordered" => 1,
                    "alt_image" => "merchant-bakmi-gm-logo"
                ]),
                "merchant_name" => "Bakmi GM",
                "promo" => null,
                "merchant" => json_encode([
                    "id_master_image" => 48794,
                    "id_master_imageable" => 89595,
                    "url" => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2023-09-05T04%3A18%3A44.747Z1693887524-group.png",
                    "ordered" => 1,
                    "alt_image" => "merchant-bakmi-gm-logo"
                ]),
                "slug_url" => "gmd00050-gq-cny---bakmi-gm--50k",
                "meta_title" => "",
                "meta_description" => "",
                "canonical" => ""
            ],
            [
                "id" => 15189,
                "id_product" => 6995,
                "code" => "FWL00250-GQ",
                "name" => "CNY - Funworld 250K",
                "product_type" => "DIGITAL",
                "ultra_voucher" => "NO",
                "description" => "Ajak keluarga liburan di Funworld untuk menikmati berbagai macam jenis wahana permainan yang dapat membantu mengembangkan daya motorik dan kreatifitas anak, bahkan sebagai tempat untuk menyegarkan pikiran kembali bagi orang dewasa. Funworld menghadirkan arena rekreasi dan hiburan keluarga yang lengkap dan fun, suasana yang nyaman, aman, dan pelayanan yang ramah serta profesional untuk segala usia.",
                "tnc" => "\t\nSyarat dan Ketentuan :\n1. Voucher Top-Up senilai Rp.125.000 atau Rp.250.000 hanya dapat ditukarkan di outlet tertentu, yang tertera pada outlet berlaku.\n2. Voucher berlaku setiap hari, termasuk Weekend dan Hari Libur Nasional.\n3. Redeem Voucher dilakukan oleh Kasir dan di Area Kasir. Apabila voucher di redeem sebelum tiba di outlet tanpa dilakukan oleh kasir, maka voucher dianggap hangus.\n4. Voucher tidak dapat dikembalikan atau ditukar dengan uang tunai.\n5. Voucher tidak dapat digabungkan dengan promo lainnya.\n6. Voucher sudah termasuk pajak dan layanan.\n7. Jam operasional outlet dapat berubah sesuai jam operasional mall.\n8. Batas penukaran Voucher adalah 90 menit sebelum outlet tutup.\n9. Selama masa pandemi Covid-19, pengunjung wajib mengikuti protokol kesehatan yang berlaku.\n10. Khusus lokasi Jakarta, batas usia pengunjung minimal 9 tahun, maksimal 60 tahun. Usia 9 - 12 tahun wajib didampingi",
                "nominal" => 250000,
                "discount_type" => "FIXPRICE",
                "price_list" => 250000,
                "discount" => 0,
                "fix_price" => 175000,
                "price" => 175000,
                "is_idle" => "YES",
                "is_promo" => "YES",
                "id_promo" => 9000401,
                "qty_limit" => 1,
                "is_unlimited" => false,
                "is_bundling" => false,
                "stock_available_to_reserve" => 8,
                "sort" => 5,
                "initial_stock" => 8,
                "image" => json_encode([
                    "id_master_image" => 77082,
                    "id_master_imageable" => 109494,
                    "url" => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2025-01-24T01%3A58%3A39.826Z1737683919-product.jpeg",
                    "ordered" => 1,
                    "alt_image" => "fwl00250-gq-cny---funworld-250k"
                ]),
                "merchant_icon" => json_encode([
                    "id_master_image" => 48690,
                    "id_master_imageable" => 104048,
                    "url" => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2023-09-04T06%3A44%3A03.415Z1693809843-group.png",
                    "ordered" => 1,
                    "alt_image" => "merchant-funworld-logo"
                ]),
                "merchant_name" => "Funworld",
                "promo" => null,
                "merchant" => json_encode([
                    "id_master_image" => 48690,
                    "id_master_imageable" => 104048,
                    "url" => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2023-09-04T06%3A44%3A03.415Z1693809843-group.png",
                    "ordered" => 1,
                    "alt_image" => "merchant-funworld-logo"
                ]),
                "slug_url" => "fwl00250-gq-cny---funworld-250k",
                "meta_title" => "",
                "meta_description" => "",
                "canonical" => ""
            ],
            [
                "id" => 15188,
                "id_product" => 6994,
                "code" => "BGD00100-GQ",
                "name" => "CNY - Paradise Dinasty 100K",
                "product_type" => "DIGITAL",
                "ultra_voucher" => "NO",
                "description" => "Di Paradise Dynasty, kami menawarkan pengalaman transenden yang penuh dengan kemewahan dan keagungan. Menangkap titik-titik terbaik dari zaman dahulu Cina melalui kemewahan yang berselera tinggi dan pesta kekaisaran yang layak, Paradise Dynasty melayani masakan Cina Utara dan Selatan, yang diinovasi untuk memuaskan selera kontemporer. Terkenal akan beragam hidangan khas terlaris seperti delapan Xiao Long Bao yang unik dan sup Pork Bone La Mian, Dinasti Paradise memungkinkan pengunjung menemukan kembali kecintaannya pada makanan Cina melalui pengalaman bersantap yang otentik ini.",
                "tnc" => "Syarat dan Ketentuan:\n1. Voucher berlaku setiap hari, termasuk weekend dan hari libur Nasional.\n2. Redeem Voucher dilakukan oleh Kasir dan di Area Kasir. Apabila voucher diredeem sebelum tiba di outlet tanpa dilakukan oleh kasir, maka voucher dianggap hangus.\n3. Voucher hanya dapat digunakan 1 (satu) kali tanpa minimum transaksi.\n4. Satu transaksi dapat menggunakan lebih dari 1 (satu) voucher.\n5. Voucher tidak dapat dikembalikan atau ditukar dengan uang tunai.\n6. Tidak ada pengembalian uang apabila transaksi di bawah nilai nominal Voucher.\n7. Pelanggan wajib membayar selisih harga apabila transaksi di atas nilai nominal Voucher.\n8. Pelanggan wajib menunjukkan E-Voucher sebelum melakukan transaksi pembayaran.\n9. Voucher sudah termasuk pajak dan layanan.\n10. Voucher berlaku 30 hari setelah pembelian",
                "nominal" => 100000,
                "discount_type" => "FIXPRICE",
                "price_list" => 100000,
                "discount" => 0,
                "fix_price" => 75000,
                "price" => 75000,
                "is_idle" => "YES",
                "is_promo" => "YES",
                "id_promo" => 9000401,
                "qty_limit" => 1,
                "is_unlimited" => false,
                "is_bundling" => false,
                "stock_available_to_reserve" => 1,
                "sort" => 6,
                "initial_stock" => 8,
                "image" => json_encode([
                    "id_master_image" => 77081,
                    "id_master_imageable" => 109497,
                    "url" => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2025-01-24T01%3A54%3A45.917Z1737683685-product.png",
                    "ordered" => 1,
                    "alt_image" => ""
                ]),
                "merchant_icon" => json_encode([
                    "id_master_image" => 49081,
                    "id_master_imageable" => 88811,
                    "url" => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2023-09-08T06%3A09%3A07.242Z1694153347-group.png",
                    "ordered" => 1,
                    "alt_image" => "merchant-paradise-dinasty-logo"
                ]),
                "merchant_name" => "Paradise Dinasty",
                "promo" => null,
                "merchant" => json_encode([
                    "id_master_image" => 49081,
                    "id_master_imageable" => 88811,
                    "url" => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2023-09-08T06%3A09%3A07.242Z1694153347-group.png",
                    "ordered" => 1,
                    "alt_image" => "merchant-paradise-dinasty-logo"
                ]),
                "slug_url" => "bgd00100-gq-cny---paradise-dinasty-100k",
                "meta_title" => "",
                "meta_description" => "",
                "canonical" => ""
            ],
            [
                "id" => 15190,
                "id_product" => 6996,
                "code" => "BGD00100-GR",
                "name" => "CNY - Kimukatsu 100K",
                "product_type" => "DIGITAL",
                "ultra_voucher" => "NO",
                "description" => "Sebagai satu-satunya restoran di dunia yang menawarkan katsu millefeuile dalam berbagai rasa, spesialisasi Kimukatsu terletak di lapisan demi lapisan potongan ayam / daging sapi yang nikmat dan juicy yang membungkus filler yang lezat; original, negi, bawang putih, lada hitam, dan keju meleleh yang paling populer, yang menambah rasa umami. Kimukatsu telah sering ditampilkan di majalah dan acara TV Jepang yang populer, menjadikan Kimukatsu restoran terpanas, dan sekarang kami membawa restoran populer ini ke Indonesia. Untuk makan di Kimukatsu adalah memiliki pengalaman bersantap yang berbeda; dari aroma wijen panggang yang dicampur dengan saus khusus hingga guratan yang menggiurkan dari lapisan roti tawar yang segar around the signature layered Katsu, Kimukatsu menawarkan sesuatu yang baru dan unik dengan harga yang wajar.",
                "tnc" => "Syarat dan Ketentuan:\n\n1. Voucher berlaku setiap hari, termasuk weekend dan hari libur Nasional.\n2. Redeem Voucher dilakukan oleh Kasir dan di Area Kasir. Apabila voucher diredeem sebelum tiba di outlet tanpa dilakukan oleh kasir, maka voucher dianggap hangus.\n3. Voucher hanya dapat digunakan 1 (satu) kali tanpa minimum transaksi.\n4. Satu transaksi dapat menggunakan lebih dari 1 (satu) voucher.\n5. Voucher tidak dapat dikembalikan atau ditukar dengan uang tunai.\n6. Tidak ada pengembalian uang apabila transaksi di bawah nilai nominal Voucher.\n7. Pelanggan wajib membayar selisih harga apabila transaksi di atas nilai nominal Voucher.\n8. Pelanggan wajib menunjukkan E-Voucher sebelum melakukan transaksi pembayaran.\n9. Voucher sudah termasuk pajak dan layanan.\n10. Voucher berlaku 30 hari setelah pembelian",
                "nominal" => 100000,
                "discount_type" => "FIXPRICE",
                "price_list" => 100000,
                "discount" => 0,
                "fix_price" => 70000,
                "price" => 70000,
                "is_idle" => "YES",
                "is_promo" => "YES",
                "id_promo" => 9000401,
                "qty_limit" => 1,
                "is_unlimited" => false,
                "is_bundling" => false,
                "stock_available_to_reserve" => 0,
                "sort" => 7,
                "initial_stock" => 8,
                "image" => json_encode([
                    "id_master_image" => 77088,
                    "id_master_imageable" => 109495,
                    "url" => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2025-01-24T02%3A21%3A09.515Z1737685269-product.jpeg",
                    "ordered" => 1,
                    "alt_image" => "bgd00100-gr-cny---kimukatsu--100k"
                ]),
                "merchant_icon" => json_encode([
                    "id_master_image" => 48859,
                    "id_master_imageable" => 108022,
                    "url" => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2023-09-06T02%3A55%3A15.598Z1693968915-group.png",
                    "ordered" => 1,
                    "alt_image" => "merchant-kimukatsu-logo"
                ]),
                "merchant_name" => "Kimukatsu",
                "promo" => null,
                "merchant" => json_encode([
                    "id_master_image" => 48859,
                    "id_master_imageable" => 108022,
                    "url" => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2023-09-06T02%3A55%3A15.598Z1693968915-group.png",
                    "ordered" => 1,
                    "alt_image" => "merchant-kimukatsu-logo"
                ]),
                "slug_url" => "bgd00100-gr-cny---kimukatsu--100k",
                "meta_title" => "",
                "meta_description" => "",
                "canonical" => ""
            ],
            [
                "id" => 15191,
                "id_product" => 6997,
                "code" => "OGI00100-GQ",
                "name" => "CNY - Osteria Gia 100K",
                "product_type" => "DIGITAL",
                "ultra_voucher" => "NO",
                "description" => "Osteria GIA merupakan restoran Italia dengan menu tradisional yang otentik dan dikurasi oleh Chef Tommaso Gonfiantini. Terinspirasi dari osteria klasik ala Italia, Osteria GIA menyatukan kharisma pedesaan Italia dengan masakan rumahan tradisional untuk menyajikan tradisi dan budaya yang dikemas dengan sentuhan modern.",
                "tnc" => "1. Voucher hanya berlaku untuk makan di tempat atau membawa pulang makanan dan minuman di outlet dan/atau cabang outlet ISMAYA yang disepakati\n2. Voucher tidak berlaku untuk online delivery\n3. Voucher hanya berlaku untuk sekali pemakaian dan harus digunakan pada atau sebelum tanggal kadaluarsa berlakunya Voucher\n... (continue the rest of the TNC)",
                "nominal" => 100000,
                "discount_type" => "FIXPRICE",
                "price_list" => 100000,
                "discount" => 0,
                "fix_price" => 70000,
                "price" => 70000,
                "is_idle" => "YES",
                "is_promo" => "YES",
                "id_promo" => 9000401,
                "qty_limit" => 1,
                "is_unlimited" => false,
                "is_bundling" => false,
                "stock_available_to_reserve" => 3,
                "sort" => 8,
                "initial_stock" => 6,
                "image" => json_encode([
                    "id_master_image" => 77091,
                    "id_master_imageable" => 109499,
                    "url" => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2025-01-24T02%3A35%3A50.994Z1737686150-product.png",
                    "ordered" => 1,
                    "alt_image" => "ogi00100-gq-cny---osteria-gia-100k"
                ]),
                "merchant_icon" => json_encode([
                    "id_master_image" => 48867,
                    "id_master_imageable" => 108409,
                    "url" => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2023-09-06T03%3A11%3A01.437Z1693969861-group.png",
                    "ordered" => 1,
                    "alt_image" => "merchant-osteria-gia-logo"
                ]),
                "merchant_name" => "Osteria GIA",
                "promo" => null,
                "merchant" => json_encode([
                    "id_master_image" => 48867,
                    "id_master_imageable" => 108409,
                    "url" => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2023-09-06T03%3A11%3A01.437Z1693969861-group.png",
                    "ordered" => 1,
                    "alt_image" => "merchant-osteria-gia-logo"
                ]),
                "slug_url" => "ogi00100-gq-cny---osteria-gia-100k",
                "meta_title" => "",
                "meta_description" => "",
                "canonical" => ""
            ],
            [
                "id" => 15192,
                "id_product" => 6998,
                "code" => "CHM00100-GQ",
                "name" => "CNY - Monsieur Spoon 100K",
                "product_type" => "DIGITAL",
                "ultra_voucher" => "NO",
                "description" => "Monsieur Spoon terkenal dengan croissant berkualitas tinggi dan Viennoiseries lain dari Prancis...",
                "tnc" => "1.Voucher berlaku setiap hari, termasuk weekend dan hari libur Nasional.\n...",
                "nominal" => 100000,
                "discount_type" => "FIXPRICE",
                "price_list" => 100000,
                "discount" => 0,
                "fix_price" => 70000,
                "price" => 70000,
                "is_idle" => "YES",
                "is_promo" => "YES",
                "id_promo" => 9000401,
                "qty_limit" => 1,
                "is_unlimited" => false,
                "is_bundling" => false,
                "stock_available_to_reserve" => 6,
                "sort" => 9,
                "initial_stock" => 8,
                "image" => json_encode([
                    "id_master_image" => 77092,
                    "id_master_imageable" => 109500,
                    "url" => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2025-01-24T02%3A38%3A59.703Z1737686339-product.jpeg",
                    "ordered" => 1,
                    "alt_image" => "chm00100-gq-cny---monsieur-spoon--100k"
                ]),
                "merchant_icon" => json_encode([
                    "id_master_image" => 47904,
                    "id_master_imageable" => 108250,
                    "url" => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2023-08-18T05%3A31%3A43.417Z1692336703-group.png",
                    "ordered" => 1,
                    "alt_image" => "merchant-monsieur-spoon-logo"
                ]),
                "merchant_name" => "MONSIEUR SPOON",
                "promo" => null,
                "merchant" => json_encode([
                    "id_master_image" => 47904,
                    "id_master_imageable" => 108250,
                    "url" => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2023-08-18T05%3A31%3A43.417Z1692336703-group.png",
                    "ordered" => 1,
                    "alt_image" => "merchant-monsieur-spoon-logo"
                ]),
                "slug_url" => "chm00100-gq-cny---monsieur-spoon--100k",
                "meta_title" => "",
                "meta_description" => "",
                "canonical" => ""
            ],
            [
                "id" => 15194,
                "id_product" => 7000,
                "code" => "THV00200-GQ",
                "name" => "CNY - The Harvest 200K",
                "product_type" => "DIGITAL",
                "ultra_voucher" => "NO",
                "description" => "The Harvest adalah brand pionir dan yang terbesar di bidang cake, dengan spesialisasi bergaya Eropa...",
                "tnc" => "Syarat dan Ketentuan:\n\nBerlaku setiap hari, termasuk hari libur nasional.\n...",
                "nominal" => 200000,
                "discount_type" => "FIXPRICE",
                "price_list" => 200000,
                "discount" => 0,
                "fix_price" => 160000,
                "price" => 160000,
                "is_idle" => "YES",
                "is_promo" => "YES",
                "id_promo" => 9000401,
                "qty_limit" => 1,
                "is_unlimited" => false,
                "is_bundling" => false,
                "stock_available_to_reserve" => 8,
                "sort" => 10,
                "initial_stock" => 8,
                "image" => json_encode([
                    "id_master_image" => 77094,
                    "id_master_imageable" => 109502,
                    "url" => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2025-01-24T02%3A45%3A20.998Z1737686720-product.jpeg",
                    "ordered" => 1,
                    "alt_image" => "thv00200-gq-cny---the-harvest--200k"
                ]),
                "merchant_icon" => json_encode([
                    "id_master_image" => 55427,
                    "id_master_imageable" => 86102,
                    "url" => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/mdm/assets/images/2024-06-02T07%3A47%3A55.495Zgroup.png",
                    "ordered" => 1,
                    "alt_image" => "merchant-the-harvest-logo"
                ]),
                "merchant_name" => "The Harvest",
                "promo" => null,
                "merchant" => json_encode([
                    "id_master_image" => 55427,
                    "id_master_imageable" => 86102,
                    "url" => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/mdm/assets/images/2024-06-02T07%3A47%3A55.495Zgroup.png",
                    "ordered" => 1,
                    "alt_image" => "merchant-the-harvest-logo"
                ]),
                "slug_url" => "thv00200-gq-cny---the-harvest--200k",
                "meta_title" => "",
                "meta_description" => "",
                "canonical" => ""
            ]
        ];

        foreach ($products as $product) {
            PromoDetail::create($product);
        }
    }
}
