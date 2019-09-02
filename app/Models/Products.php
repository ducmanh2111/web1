<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    protected $table= 'products';
    protected $primaryKey='pro_id';
    protected $fillable = [
        'pro_name',
        'pro_slug',
        'pro_description',
        'pro_price',
        'pro_image',
        'pro_cat_id',
        'pro_featured',
        'promotion',
    ];
    public function categories()
    {
        return $this->belongsTo(Categories::class);
    }


    public function review()
    {
        return $this->hasMany(Review::class);
    }

}
