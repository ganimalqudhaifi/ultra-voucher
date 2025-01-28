<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoryVoucher = [
            [
                "id" => 36,
                "code" => "DSS",
                "name" => "All",
                "type" => "VOUCHER",
                "priority" => 1,
                "status" => "ACTIVE",
                "image_url" => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2024-09-26T12%3A27%3A26.720Z1727353646-group.png"
            ],
            [
                "id" => 40,
                "code" => "NRB",
                "name" => "Around You",
                "type" => "VOUCHER",
                "priority" => 1,
                "status" => "ACTIVE",
                "image_url" => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2024-09-26T12%3A26%3A45.847Z1727353605-group.png"
            ],
            [
                "id" => 22,
                "code" => "FNNB",
                "name" => "F&B",
                "type" => "VOUCHER",
                "priority" => 2,
                "status" => "ACTIVE",
                "image_url" => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2024-09-26T12%3A28%3A05.959Z1727353685-group.png"
            ],
            [
                "id" => 29,
                "code" => "SNE",
                "name" => "Activity",
                "type" => "VOUCHER",
                "priority" => 2,
                "status" => "ACTIVE",
                "image_url" => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2024-09-26T12%3A28%3A52.314Z1727353732-group.png"
            ],
            [
                "id" => 27,
                "code" => "LEC",
                "name" => "Apps",
                "type" => "VOUCHER",
                "priority" => 3,
                "status" => "ACTIVE",
                "image_url" => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2024-09-26T12%3A31%3A49.701Z1727353909-group.png"
            ],
            [
                "id" => 21,
                "code" => "BNNR",
                "name" => "Beauty",
                "type" => "VOUCHER",
                "priority" => 4,
                "status" => "ACTIVE",
                "image_url" => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2024-09-26T12%3A34%3A50.614Z1727354090-group.png"
            ],
            [
                "id" => 38,
                "code" => "ENTR",
                "name" => "Experience",
                "type" => "VOUCHER",
                "priority" => 5,
                "status" => "ACTIVE",
                "image_url" => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2024-09-26T12%3A37%3A27.231Z1727354247-group.png"
            ],
            [
                "id" => 16,
                "code" => "GAME",
                "name" => "Game",
                "type" => "VOUCHER",
                "priority" => 7,
                "status" => "ACTIVE",
                "image_url" => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2024-09-26T12%3A35%3A03.578Z1727354103-group.png"
            ],
            [
                "id" => 24,
                "code" => "HEAL",
                "name" => "Health",
                "type" => "VOUCHER",
                "priority" => 8,
                "status" => "ACTIVE",
                "image_url" => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2024-09-26T12%3A34%3A29.442Z1727354069-group.png"
            ],
            [
                "id" => 23,
                "code" => "GNI",
                "name" => "Invest",
                "type" => "VOUCHER",
                "priority" => 9,
                "status" => "ACTIVE",
                "image_url" => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2024-09-26T12%3A34%3A39.730Z1727354079-group.png"
            ],
            [
                "id" => 28,
                "code" => "RDST",
                "name" => "Retail",
                "type" => "VOUCHER",
                "priority" => 10,
                "status" => "ACTIVE",
                "image_url" => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2024-09-26T12%3A33%3A09.401Z1727353989-group.png"
            ],
            [
                "id" => 39,
                "code" => "SERV",
                "name" => "Service",
                "type" => "VOUCHER",
                "priority" => 11,
                "status" => "ACTIVE",
                "image_url" => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2024-09-26T12%3A35%3A32.529Z1727354132-group.png"
            ],
            [
                "id" => 35,
                "code" => "STRMG",
                "name" => "Streaming",
                "type" => "VOUCHER",
                "priority" => 13,
                "status" => "ACTIVE",
                "image_url" => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2024-09-26T12%3A33%3A59.789Z1727354039-group.png"
            ],
            [
                "id" => 26,
                "code" => "HTLT",
                "name" => "Travel",
                "type" => "VOUCHER",
                "priority" => 14,
                "status" => "ACTIVE",
                "image_url" => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2024-09-26T12%3A34%3A18.513Z1727354058-group.png"
            ]
        ];

        foreach ($categoryVoucher as $category) {
            Category::create([
                'id' => $category['id'],
                'code' => $category['code'],
                'name' => $category['name'],
                'type' => $category['type'],
                'priority' => $category['priority'],
                'status' => $category['status'],
                'image_url' => $category['image_url'],
            ]);
        }

        $categoryBiller = [
            [
                "id" => 11,
                "code" => "PLS",
                "name" => "Pulsa",
                "type" => "BILLER",
                "priority" => 1,
                "status" => "ACTIVE",
                "image_url" => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2024-10-03T04%3A26%3A20.978Z1727929580-group.png"
            ],
            [
                "id" => 34,
                "code" => "EMONEY",
                "name" => "E-Wallet",
                "type" => "BILLER",
                "priority" => 1,
                "status" => "ACTIVE",
                "image_url" => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2024-10-03T04%3A24%3A35.280Z1727929475-group.png"
            ],
            [
                "id" => 12,
                "code" => "PDA",
                "name" => "Paket Data",
                "type" => "BILLER",
                "priority" => 2,
                "status" => "ACTIVE",
                "image_url" => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2024-10-03T04%3A26%3A04.017Z1727929564-group.png"
            ],
            [
                "id" => 13,
                "code" => "PLNLSTRK",
                "name" => "PLN",
                "type" => "BILLER",
                "priority" => 3,
                "status" => "ACTIVE",
                "image_url" => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2024-10-03T04%3A25%3A46.701Z1727929546-group.png"
            ],
            [
                "id" => 14,
                "code" => "BPJSKES",
                "name" => "BPJS",
                "type" => "BILLER",
                "priority" => 4,
                "status" => "ACTIVE",
                "image_url" => "https://uvproduction.oss-ap-southeast-5.aliyuncs.com/nero/assets/images/2024-10-03T04%3A25%3A30.022Z1727929530-group.png"
            ]
        ];

        foreach ($categoryBiller as $category) {
            Category::create([
                'id' => $category['id'],
                'code' => $category['code'],
                'name' => $category['name'],
                'type' => $category['type'],
                'priority' => $category['priority'],
                'status' => $category['status'],
                'image_url' => $category['image_url'],
            ]);
        }
    }
}
