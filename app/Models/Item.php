<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_type_id',
        'item_image',
        'item_price',
    ];

    public function itemtypes()
    {
        return $this->belongsTo(Itemtype::class,'item_type_id','id');
    }

    public function transactions()
    {
        return $this->belongsToMany(Transaction::class);
    }
}
