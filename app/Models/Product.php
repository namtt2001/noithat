<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;
    protected $fillable =['name','price','sale_price','image','parent_id','slug','description','stock'];
    public function images()
{
    return $this->hasMany(ImgProduct::class,);
}
public function parentCategory()
{
    return $this->belongsTo(Category::class, 'parent_id');
}
/**
 * Get all of the comments for the Product
 *
 * @return \Illuminate\Database\Eloquent\Relations\HasMany
 */



}
