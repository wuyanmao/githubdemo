<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class a extends Model
{
    //
	protected $table = 'member';
	protected $primaryKey = 'id';
	//禁止操作时间
	public $timestamps = false;
	protected $fillable = ['name','age','email','avata'];
}
