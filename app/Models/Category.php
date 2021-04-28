<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelUserActivity\Traits\Loggable;

class Category extends Model
{
    use HasFactory;
    use Loggable;

    public function getcontent(){
        return $this->hasMany('App\Models\Content');
        return $this->hasMany('App\Models\Project');

    }
    protected $table = 'categories';
    public $timestamps = true;
    protected $fillable =[
        'name',
        'name_ar',
        'title',
        'status',
       'catatype_id'

    ];

}
