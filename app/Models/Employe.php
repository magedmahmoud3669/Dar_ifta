<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;
    protected $fillable=['Firstname','lastname','Company','email','phonenumber'];
    public function company(){
        return $this->belongsTo(Company::class);
    }
}
