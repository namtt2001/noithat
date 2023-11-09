<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable =['name','price','sale_price','image','parent_id','slug','description'];
    public function images()
{
    return $this->hasMany(ImgProduct::class, 'product_id');
}

}
