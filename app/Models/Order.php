<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function account(){
        return $this->belongsTo(User::class, 'roleID', 'id');
    }

    public function ebook(){
        return $this->belongsTo(Ebook::class, 'ebookID', 'id');
    }
}
