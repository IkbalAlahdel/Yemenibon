<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelUserActivity\Traits\Loggable;

class Project extends Model
{
    use HasFactory;
    use Loggable;

    protected $fillable = [
        'multi_image',
        
    ];


   /**

     * Set the user's first name.

     *

     * @param  string  $value

     * @return void

     */

   public function setFilenamesAttribute($value)

   {

       $this->attributes['multi_image'] = json_encode($value);

   }
}
