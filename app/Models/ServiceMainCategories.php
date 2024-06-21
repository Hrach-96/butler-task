<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceMainCategories extends Model
{
    use HasFactory;
    protected $table = 'service_main_categories';
    protected $guarded = ['created_at'];
    public function userInfo(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
