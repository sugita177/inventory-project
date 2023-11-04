<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Check extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function inventories() {
        return $this->hasMany(Inventory::class);
    }
}
