<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Area;
use App\Models\MeansOfContact;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customers';

    public function areas(){
    	return $this->belongsTo(Area::class, 'area_id');
	  }

    public function meansOfContact(){
    	return $this->belongsTo(MeansOfContact::class, 'means_of_contact_id');
	  }
}
