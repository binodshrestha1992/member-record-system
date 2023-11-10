<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;
    protected $fillable = [
        "first_name",
        "last_name",
        "age",
        "address",
        "phone",
        "email",
        "professional_summary"
    ];
    protected $appends = ['full_name'];
    public function getFullNameAttribute(){
        return $this->attributes['first_name'] . ' '. $this->attributes['last_name'];
    }
}
