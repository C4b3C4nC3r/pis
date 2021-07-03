<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class x_example extends Model
{
    use HasFactory;

    //protected $table="users";
    /*protected $fillable=['name','descripcion','categoria'];//campos que se utilizan*/
    protected $guarded = ['status'];//campos que no existen o no quieres que agrege el usuario

    public function getRouteKeyName()
    {
        return 'slug';
    }
    
}
