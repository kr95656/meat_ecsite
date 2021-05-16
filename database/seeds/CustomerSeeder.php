<?php

use Illuminate\Database\Seeder;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;


class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // factory(Customer::class)->create([
        //     'name' => 'test',
        //     'email' => 'test@com.jp',
        //     'tel' => '0123456789',
        //     'prefecture' => '鹿児島県',
        //     'city' => '鹿児島市',
        //     'street' => '明和',
        //     'password' => Hash::make('testtest'),
        // ]);

        factory(Customer::class, 5)->create();
    }
}
