<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

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

    public function getPhotoUrlAttribute()
    {
        // Check if the photo exists
        if ($this->photo && Storage::disk('public')->exists($this->photo)) {
            return Storage::disk('public')->url($this->photo);
        }

        // If the photo doesn't exist, return a default image URL (optional)
        return 'https://placehold.co/600x400'; // Adjust this to your default photo path
    }

    public function getSignatureUrlAttribute()
    {
        // Check if the signature exists
        if ($this->signature && Storage::disk('public')->exists($this->signature)) {
            return Storage::disk('public')->url($this->signature);
        }

        // If the signature doesn't exist, return a default image URL (optional)
        return 'https://placehold.co/600x400'; // Adjust this to your default signature path
    }

}
