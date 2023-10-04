<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Area;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customers';

    public function areas(){
    	// un libro pertenece a un autor
    	return $this->belongsTo(Area::class, 'area_id');
	}
}
