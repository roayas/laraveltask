<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candy extends Model
{
    use HasFactory;
    protected $table='candy';
    protected $fillable = ['candy_name','candy_price','candy_des','candy_quantity','candy_img'];

    public function posts(){
        return $this->hasMany(post::class);
    }
}
