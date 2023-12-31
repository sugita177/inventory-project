<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function place() {
        return $this->belongsTo(Place::class);
    }

    public function supplier() {
        return $this->belongsTo(Supplier::class);
    }


    public function inventories() {
        return $this->hasMany(Inventory::class);
    }
}
