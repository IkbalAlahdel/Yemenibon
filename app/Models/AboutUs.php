<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;
    protected $fillable =[
       
        'multi_image',
        'initiative_ar_desc',
        'initiative_desc',
      
        'Training_desc',
        'Training_ar_desc',
      
        'objectives_ar_desc',
        'objectives_desc',
        'Trainers_ar',
        'Trainers',
        'Trainers_name_ar',
        'Trainers_name',
        'Trainers_job_ar',
        'Trainers_job',
        'Trainees_ar',
        'Trainees',
        'Trainees_name_ar',
        'Trainees_name',
        'Trainees_job_ar',
        'Trainees_job',

    ];
}
