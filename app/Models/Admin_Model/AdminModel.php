<?php

namespace App\Models\Admin_Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AdminModel extends Model
{
    use HasFactory;

    protected $guade = 'admin';

    protected $fillable = [
       'first_name',
       'last_name',
       'email',
       'phone',
       'password',
       'address',
       'country',
       'city',
       'zip_code',
       'image'
   ];
}
