<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        "title",
        "description",
        "pages_count",
        "price"
    ];
    public function getPriceAttribute(){
        return "$ ". $this->price;
    }
    public function scopeCheap($query){
        return $query->where("price", "<", 20);
    }
    public function scopeExpensive($query){
        return $query->where("price", ">", 20);
    }
   
}
