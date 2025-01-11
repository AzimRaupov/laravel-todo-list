<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todulist extends Model
{
    protected $table='todo_list';
    protected $fillable=['name','description','status','priority'];
}
