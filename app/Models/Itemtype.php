<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itemtype extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_type_name',
    ];

    public function items()
    {
        return $this->hasMany(Item::class,'item_id','id');
    }


}
