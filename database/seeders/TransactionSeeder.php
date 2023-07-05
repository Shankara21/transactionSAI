<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("transactions")->insert(
            [
                // PROD MH STP
                [
                    "name" => "PROD. MH STP",
                    "date" => "2023-03-01",
                    "amount" => 654036.97,
                ],
                [
                    "name" => "PROD. MH STP",
                    "date" => "2023-04-01",
                    "amount" => 512703.20,
                ],
                [
                    "name" => "PROD. MH STP",
                    "date" => "2023-05-01",
                    "amount" => 590512.78,
                ],
                [
                    "name" => "PROD. MH STP",
                    "date" => "2023-06-01",
                    "amount" => 541888,
                ],
                [
                    "name" => "PROD. MH STP",
                    "date" => "2023-07-01",
                    "amount" => 436296,
                ],
                [
                    "name" => "PROD. MH STP",
                    "date" => "2023-08-01",
                    "amount" => 999999,
                ],
                // PROD MH SR
                [
                    "name" => "PROD. MH SR",
                    "date" => "2023-03-01",
                    "amount" => 693759.18,
                ],
                [
                    "name" => "PROD. MH SR",
                    "date" => "2023-04-01",
                    "amount" => 413303.88,
                ],
                [
                    "name" => "PROD. MH SR",
                    "date" => "2023-05-01",
                    "amount" => 565217.20,
                ],
                [
                    "name" => "PROD. MH SR",
                    "date" => "2023-06-01",
                    "amount" => 575274,
                ],
                [
                    "name" => "PROD. MH SR",
                    "date" => "2023-07-01",
                    "amount" => 470836,
                ],
                // PROD MH (Actual)
                [
                    "name" => "PROD. MH (Actual)",
                    "date" => "2023-03-01",
                    "amount" => 531591.35,
                ],
                [
                    "name" => "PROD. MH (Actual)",
                    "date" => "2023-04-01",
                    "amount" => 372974.91,
                ],
                [
                    "name" => "PROD. MH (Actual)",
                    "date" => "2023-05-01",
                    "amount" => 531328.76,
                ],
                [
                    "name" => "PROD. MH (Actual)",
                    "date" => "2023-06-01",
                    "amount" => 547399,
                ],
                [
                    "name" => "PROD. MH (Actual)",
                    "date" => "2023-07-01",
                    "amount" => 470836,
                ],
            ]
        );
    }
}
