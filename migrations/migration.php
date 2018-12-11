<?php
require_once '../vendor/autoload.php';
require_once '../config/dotenv.php';
require_once '../config/database.php';

use Illuminate\Database\Capsule\Manager as Capsule;

//Capsule::schema()->create('posts', function ($table) {
//    $table->increments('id');
//    $table->string('title');
//    $table->string('description');
//    $table->text('content');
//    $table->string('cover');
//    $table->timestamps();
//});
//
//Capsule::schema()->create('categories', function ($table) {
//    $table->increments('id');
//    $table->string('title');
//    $table->string('key');
//    $table->timestamps();
//});
//
//Capsule::schema()->create('category_post', function ($table) {
//    $table->integer('post_id');
//    $table->integer('category_id');
//    $table->timestamps();
//    $table->primary(['post_id', 'category_id']);
//});

//$category = new \NtSchool\Model\Category();
//$category->title = 'Category 1';
//$category->key = 'category-1';
//$category->save();
//
//$category = new \NtSchool\Model\Category();
//$category->title = 'Category 2';
//$category->key = 'category-2';
//$category->save();
//
//$category = new \NtSchool\Model\Category();
//$category->title = 'Category 3';
//$category->key = 'category-3';
//$category->save();

$data = [
    'title' => 'Post',
    'description' => 'Post Description',
    'content' => 'Post Content',
    'cover' => 'http://',
];

for ($counter = 1; $counter <= 15; $counter++) {
    $post = new \NtSchool\Model\Post();
    $post->title = $data['title'] . ' ' . $counter;
    $post->description = $data['description'] . ' ' . $counter;
    $post->content = $data['content'] . ' ' . $counter;
    $post->cover = $data['cover'] . ' ' . $counter;
    $post->save();
}
