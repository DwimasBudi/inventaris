<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BorrowedItem extends Model
{
    use HasFactory;
    protected $with = ['item'];
    public function item()
    {
        return $this->belongsTo(Item::class, 'id_item');
    }
}
