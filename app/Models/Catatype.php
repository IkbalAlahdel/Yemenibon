<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelUserActivity\Traits\Loggable;

class Catatype extends Model
{
    use HasFactory;
    use Loggable;

    public function getcat(){
        return $this->hasMany('App\Models\Category');
    }
    protected $table = 'catatypes';
    public $timestamps = true;
    protected $fillable =[
        'title',
        'type'

    ];
}
