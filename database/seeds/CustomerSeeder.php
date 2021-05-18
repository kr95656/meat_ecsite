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

        factory(Customer::class)->create([
            'name' => 'test',
            'email' => 'test@com.jp',
            'tel' => '0123456789',
            'prefecture' => '鹿児島県',
            'city' => '鹿児島市',
            'street' => '明和',
            'password' => Hash::make('testtest'),
        ]);

        factory(Customer::class, 5)->create();
    }

    // fakerを使用して、ランダムにデータを生成
    // seedをmigrateする際に、factoryのファイルがないとエラーが帰ってくる？
    //     Unable to locate factory for [App\Models\Customer].

    //   at vendor/laravel/framework/src/Illuminate/Database/Eloquent/FactoryBuilder.php:273
    //     269|      */
    //     270|     protected function getRawAttributes(array $attributes = [])
    //     271|     {
    //     272|         if (! isset($this->definitions[$this->class])) {
    //   > 273|             throw new InvalidArgumentException("Unable to locate factory for [{$this->class}].");
    //     274|         }
    //     275|
    //     276|         $definition = call_user_func(
    //     277|             $this->definitions[$this->class],

    //       +5 vendor frames
    //   6   database/seeds/CustomerSeeder.php:25
    //       Illuminate\Database\Eloquent\FactoryBuilder::create()

    //       +7 vendor frames
    //   14  database/seeds/DatabaseSeeder.php:15
    //       Illuminate\Database\Seeder::call("CustomerSeeder")

}
