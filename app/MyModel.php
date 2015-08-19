<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;


class MyModel extends Model{

  protected $fillable = ['name', 'phone', 'secretAtribute', 'password'];

  protected $hidden = ['secretAtribute', 'password'];
}