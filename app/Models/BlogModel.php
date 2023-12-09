<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogModel extends Model
{
    use HasFactory;

    protected $table = 'blog';
    protected $primaryKey = 'id';
    protected $fillable = ['judul','image','description','id_category'];

    public function category_relation()
        {
            return $this->hasOne(CategoryModel::class,'id','id_category');
        }
}
