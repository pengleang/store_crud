<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
//Laravel provides protection against mass assignment
    //allow only name and email to be inserted
    protected $fillable =['title','description'];
    //contrast of the above $fillable
    //protected $guarded = ['name','email'];
    //protected $guarded = array();//allow all
    //protected $guarded=[];//allow all
}
