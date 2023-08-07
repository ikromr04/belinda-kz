<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */

  public function run()
  {
    $this->call([
      UserSeeder::class,
      ClassificationSeeder::class,
      ContentsSeeder::class,
      NosologySeeder::class,
      ProductsSeeder::class,
      ReleaseFormsSeeder::class,
      SitesSeeder::class,
      TextSeeder::class,
    ]);
  }
}
