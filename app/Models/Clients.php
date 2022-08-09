<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;

    protected $fillable = [
        'ack_number', 'first_name','last_name','midddle_name','parents_surname','parents_name','address','state','city','country','pin','phone_number','email','day','month','year','proof','proof_number','photo','proof_img'
    ];

    
}
