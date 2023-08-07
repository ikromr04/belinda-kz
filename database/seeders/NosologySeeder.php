<?php

namespace Database\Seeders;

use App\Models\Nosology;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Database\Seeder;

class NosologySeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $nosologies = array(
      array('id' => '1', 'title' => 'Алгология', 'slug' => 'algologiya', 'created_at' => '2022-09-14 20:19:01', 'updated_at' => '2022-09-14 20:19:01', 'deleted_at' => NULL),
      array('id' => '2', 'title' => 'Аллергология', 'slug' => 'allergologiya', 'created_at' => '2022-09-14 20:19:01', 'updated_at' => '2022-09-14 20:19:01', 'deleted_at' => NULL),
      array('id' => '3', 'title' => 'Гематология', 'slug' => 'gematologiya', 'created_at' => '2022-09-14 20:19:01', 'updated_at' => '2022-09-14 20:19:01', 'deleted_at' => NULL),
      array('id' => '4', 'title' => 'Гинекология', 'slug' => 'ginekologiya', 'created_at' => '2022-09-14 20:19:01', 'updated_at' => '2022-09-14 20:19:01', 'deleted_at' => NULL),
      array('id' => '5', 'title' => 'Дерматология', 'slug' => 'dermatologiya', 'created_at' => '2022-09-14 20:19:01', 'updated_at' => '2022-09-14 20:19:01', 'deleted_at' => NULL),
      array('id' => '6', 'title' => 'Иммунология', 'slug' => 'immunologiya', 'created_at' => '2022-09-14 20:19:01', 'updated_at' => '2022-09-14 20:19:01', 'deleted_at' => NULL),
      array('id' => '7', 'title' => 'Кардиология', 'slug' => 'kardiologiya', 'created_at' => '2022-09-14 20:19:01', 'updated_at' => '2022-09-14 20:19:01', 'deleted_at' => NULL),
      array('id' => '8', 'title' => 'Микробиология', 'slug' => 'mikrobiologiya', 'created_at' => '2022-09-14 20:19:01', 'updated_at' => '2022-09-14 20:19:01', 'deleted_at' => NULL),
      array('id' => '9', 'title' => 'Нейрология', 'slug' => 'neyrologiya', 'created_at' => '2022-09-14 20:19:01', 'updated_at' => '2022-09-14 20:19:01', 'deleted_at' => NULL)
    );

    foreach ($nosologies as $nosology) {
      $table = new Nosology();
      $table->title = $nosology['title'];
      $table->slug = $nosology['slug'];
      $table->save();
    }
  }
}
