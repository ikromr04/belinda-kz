<?php

namespace Database\Seeders;

use App\Models\Classification;
use Illuminate\Database\Seeder;

class ClassificationSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  
  {
    $classifications = array(
      array('id' => '1', 'title' => 'Аминокислоты', 'slug' => 'aminokisloty', 'created_at' => '2022-09-14 20:19:01', 'updated_at' => '2022-09-14 20:19:01', 'deleted_at' => NULL),
      array('id' => '2', 'title' => 'Антианемические препараты', 'slug' => 'antianemicheskie-preparaty', 'created_at' => '2022-09-14 20:19:01', 'updated_at' => '2022-09-14 20:19:01', 'deleted_at' => NULL),
      array('id' => '3', 'title' => 'Антигистаминные препараты', 'slug' => 'antigistaminnye-preparaty', 'created_at' => '2022-09-14 20:19:01', 'updated_at' => '2022-09-14 20:19:01', 'deleted_at' => NULL),
      array('id' => '4', 'title' => 'Антидиабетические препараты', 'slug' => 'antidiabeticheskie-preparaty', 'created_at' => '2022-09-14 20:19:01', 'updated_at' => '2022-09-14 20:19:01', 'deleted_at' => NULL),
      array('id' => '5', 'title' => 'Венотонизирующие препараты', 'slug' => 'venotoniziruyushchie-preparaty', 'created_at' => '2022-09-14 20:19:01', 'updated_at' => '2022-09-14 20:19:01', 'deleted_at' => NULL),
      array('id' => '6', 'title' => 'Витамины и минералы', 'slug' => 'vitaminy-i-mineraly', 'created_at' => '2022-09-14 20:19:01', 'updated_at' => '2022-09-14 20:19:01', 'deleted_at' => NULL),
      array('id' => '7', 'title' => 'Гинекологические препараты', 'slug' => 'ginekologicheskie-preparaty', 'created_at' => '2022-09-14 20:19:01', 'updated_at' => '2022-09-14 20:19:01', 'deleted_at' => NULL),
      array('id' => '8', 'title' => 'Глазные препараты', 'slug' => 'glaznye-preparaty', 'created_at' => '2022-09-14 20:19:01', 'updated_at' => '2022-09-14 20:19:01', 'deleted_at' => NULL),
      array('id' => '9', 'title' => 'Гормональные препараты', 'slug' => 'gormonalnye-preparaty', 'created_at' => '2022-09-14 20:19:01', 'updated_at' => '2022-09-14 20:19:01', 'deleted_at' => NULL)
    );

    foreach ($classifications as $classification) {
      $table = new Classification();
      $table->title = $classification['title'];
      $table->slug = $classification['slug'];
      $table->save();
    }
  }
}
