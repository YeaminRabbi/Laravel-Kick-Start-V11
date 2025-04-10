<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherTrainingApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo',
        'name', 'father_name', 'mother_name', 'designation', 'unique_id', 'date_of_birth', 'gender', 'religion', 'nid_number',
        'workplace', 'first_joining_date', 'service_length', 'clinical_experience', 'management_experience', 'teaching_experience',
        'bnmc_registration', 'bnmc_expiry',
        'present_vill', 'present_post', 'present_upazilla', 'present_district',
        'permanent_vill', 'permanent_post', 'permanent_upazilla', 'permanent_district',
        'email', 'mobile',
        'qualifications',
        'computer_skill', 'english_skill','agree_to_work',
        'cpd_activity',
        'publications',
        'declaration_agree', 
        'signature'
    ];

    protected $casts = [
        'date_of_birth' => 'date',
        'first_joining_date' => 'date',
        'bnmc_expiry' => 'date',
        'qualifications' => 'array',
        'cpd_activity' => 'array',
        'publications' => 'array',
    ];
}
