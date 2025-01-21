<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todolist extends Model
{
    protected $table='todo_list';
    protected $fillable=['name','description','status','priority'];
}
