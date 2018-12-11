<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 10.12.2018
 * Time: 11:24
 */

namespace NtSchool\Model;


use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function categories()
    {
return $this->belongsToMany(Category::class);
    }
}