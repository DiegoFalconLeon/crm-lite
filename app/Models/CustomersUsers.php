<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Area;
use App\Models\User;
use App\Models\Customer;

class CustomersUsers extends Model
{
    use HasFactory;
    protected $table ='customers_users';

    public function areas(){
    	return $this->belongsTo(Area::class, 'area_id');
	  }
    public function users(){
    	return $this->belongsTo(User::class, 'user_id');
    }
    public function customers(){
    	return $this->belongsTo(Customer::class, 'customer_id');
    }

}
