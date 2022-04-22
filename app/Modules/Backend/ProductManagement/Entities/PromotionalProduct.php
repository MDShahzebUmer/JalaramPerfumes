<?php

namespace App\Modules\Backend\ProductManagement\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Modules\Backend\ProductManagement\Entities\Product;

class PromotionalProduct extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'promotions';
    protected $fillable = [
        'product_id', 'title','label', 'position', 'image', 'promotion_price', 'expire_at','total_viewed',
        'is_active', 'is_approve'
    ];

    public function product():HasOne
    {
        return $this->hasOne(Product::class, 'id', 'product_id')->withDefault([
            'name' => ''
        ]);
    }
}
