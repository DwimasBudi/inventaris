<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class Item extends Model
{
    
    use HasFactory;
    use Sluggable;
    protected $guarded = ['id'];

    public function borrowedItems()
    {
        return $this->hasMany(BorrowedItem::class);
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
    // buat slug otomatis
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
