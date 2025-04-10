<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TeacherTrainingApplication;

class HomeController extends Controller
{
    public function index()
    {
        return view('site.home.index');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'mother_name' => 'required|string|max:255',
            'designation' => 'required|string|max:255|in:district_public_health_nurse,nursing_superintendent,deputy_nursing_superintendent,lecturer,nursing_instructor_instructor,nursing_supervisor,senior_staff_nurse_staff_nurse',
            'unique_id' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'gender' => 'required|string|max:255|in:male,female,other',
            'religion' => 'required|string|max:255|in:islam,hindu,buddhism,christian,other',
            'nid_number' => 'required|numeric',

            'workplace' => 'required|string|max:255',
            'first_joining_date' => 'required|date',
            'service_length' => 'required|numeric',
            'clinical_experience' => 'required|numeric',
            'management_experience' => 'nullable|numeric',
            'teaching_experience' => 'nullable|numeric',
            'bnmc_registration' => 'required|numeric',
            'bnmc_expiry' => 'required|date',

            'present_vill' => 'required|string|max:255',
            'present_post' => 'required|numeric',
            'present_upazilla' => 'required|string|max:255',
            'present_district' => 'required|string|max:255',
            'permanent_vill' => 'required|string|max:255',
            'permanent_post' => 'required|numeric',
            'permanent_upazilla' => 'required|string|max:255',
            'permanent_district' => 'required|string|max:255',

            'email' => 'required|email|max:255',
            'mobile' => 'required|string',

            'ssc_year' => 'required|numeric',
            'ssc_board' => 'required|string|max:255',
            'ssc_grade' => 'required|string|max:255',
            'ssc_group' => 'required|string|max:255',
            'ssc_institution' => 'required|string|max:255',

            'hsc_year' => 'nullable|numeric',
            'hsc_board' => 'nullable|string|max:255',
            'hsc_grade' => 'nullable|string|max:255',
            'hsc_group' => 'nullable|string|max:255',
            'hsc_institution' => 'nullable|string|max:255',

            'diploma_nursing_year' => 'nullable|numeric',
            'diploma_nursing_board' => 'nullable|string|max:255',
            'diploma_nursing_grade' => 'nullable|string|max:255',
            'diploma_nursing_group' => 'nullable|string|max:255',
            'diploma_nursing_institution' => 'nullable|string|max:255',

            'diploma_midwifery_year' => 'nullable|numeric',
            'diploma_midwifery_board' => 'nullable|string|max:255',
            'diploma_midwifery_grade' => 'nullable|string|max:255',
            'diploma_midwifery_group' => 'nullable|string|max:255',
            'diploma_midwifery_institution' => 'nullable|string|max:255',

            'bsc_nursing_year' => 'nullable|numeric',
            'bsc_nursing_board' => 'nullable|string|max:255',
            'bsc_nursing_grade' => 'nullable|string|max:255',
            'bsc_nursing_group' => 'nullable|string|max:255',
            'bsc_nursing_institution' => 'nullable|string|max:255',

            'post_bsc_year' => 'nullable|numeric',
            'post_bsc_board' => 'nullable|string|max:255',
            'post_bsc_grade' => 'nullable|string|max:255',
            'post_bsc_group' => 'nullable|string|max:255',
            'post_bsc_institution' => 'nullable|string|max:255',

            'msc_nursing_year' => 'nullable|numeric',
            'msc_nursing_board' => 'nullable|string|max:255',
            'msc_nursing_grade' => 'nullable|string|max:255',
            'msc_nursing_group' => 'nullable|string|max:255',
            'msc_nursing_institution' => 'nullable|string|max:255',

            'mph_year' => 'nullable|numeric',
            'mph_board' => 'nullable|string|max:255',
            'mph_grade' => 'nullable|string|max:255',
            'mph_group' => 'nullable|string|max:255',
            'mph_institution' => 'nullable|string|max:255',


            'computer_skill' => 'required|string|in:advanced,moderate,beginner',
            'english_skill' => 'required|string|in:excellent,good,average,poor',
            'agree_to_work' => 'required|in:yes,no',

            'cpd_name_1' => 'nullable|string|max:255',
            'cpd_date_1' => 'nullable|date',
            'cpd_duration_1' => 'nullable|string|max:255',
            'cpd_authority_1' => 'nullable|string|max:255',
            'cpd_name_2' => 'nullable|string|max:255',
            'cpd_date_2' => 'nullable|date',
            'cpd_duration_2' => 'nullable|string|max:255',
            'cpd_authority_2' => 'nullable|string|max:255',
            'cpd_name_3' => 'nullable|string|max:255',
            'cpd_date_3' => 'nullable|date',
            'cpd_duration_3' => 'nullable|string|max:255',
            'cpd_authority_3' => 'nullable|string|max:255',

            'pub_title_1' => 'nullable|string|max:255',
            'pub_date_1' => 'nullable|date',
            'pub_journal_1' => 'nullable|string|max:255',
            'pub_link_1' => 'nullable|url',
            'pub_title_2' => 'nullable|string|max:255',
            'pub_date_2' => 'nullable|date',
            'pub_journal_2' => 'nullable|string|max:255',
            'pub_link_2' => 'nullable|url',

            'declaration_agree' => 'required|in:yes,no',
            // 'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:5048|dimensions:width=300,height=400',
            // 'signature' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048|dimensions:width=300,height=100',


        ]);


         // Store the photo
        if ($request->hasFile('photo')) {
            // Store the photo in the 'photos' directory, you can use other directories like 'signatures'
            $photoPath = $request->file('photo')->store('photos', 'public');
        }

        // Store the signature
        if ($request->hasFile('signature')) {
            // Store the signature in the 'signatures' directory
            $signaturePath = $request->file('signature')->store('signatures', 'public');
        }
        
        // Store the application data in the database
        $application = TeacherTrainingApplication::create([
            'name' => $request->name,
            'father_name' => $request->father_name,
            'mother_name' => $request->mother_name,
            'designation' => $request->designation,
            'unique_id' => $request->unique_id,
            'date_of_birth' => $request->date_of_birth,
            'gender' => $request->gender,
            'religion' => $request->religion,
            'nid_number' => $request->nid_number,

            'workplace' => $request->workplace,
            'first_joining_date' => $request->first_joining_date,
            'service_length' => $request->service_length,
            'clinical_experience' => $request->clinical_experience,
            'management_experience' => $request->management_experience,
            'teaching_experience' => $request->teaching_experience,
            'bnmc_registration' => $request->bnmc_registration,
            'bnmc_expiry' => $request->bnmc_expiry,

            'present_vill' => $request->present_vill,
            'present_post' => $request->present_post,
            'present_upazilla' => $request->present_upazilla,
            'present_district' => $request->present_district,
            'permanent_vill' => $request->permanent_vill,
            'permanent_post' => $request->permanent_post,
            'permanent_upazilla' => $request->permanent_upazilla,
            'permanent_district' => $request->permanent_district,

            'email' => $request->email,
            'mobile' => $request->mobile,

            'qualifications' => [
                'ssc' => [
                    'year' => $request->ssc_year,
                    'board' => $request->ssc_board,
                    'grade' => $request->ssc_grade,
                    'group' => $request->ssc_group,
                    'institution' => $request->ssc_institution,
                ],
                'hsc' => [
                    'year' => $request->hsc_year,
                    'board' => $request->hsc_board,
                    'grade' => $request->hsc_grade,
                    'group' => $request->hsc_group,
                    'institution' => $request->hsc_institution,
                ],
                'diploma_nursing' => [
                    'year' => $request->diploma_nursing_year,
                    'board' => $request->diploma_nursing_board,
                    'grade' => $request->diploma_nursing_grade,
                    'group' => $request->diploma_nursing_group,
                    'institution' => $request->diploma_nursing_institution,
                ],
                'diploma_midwifery' => [
                    'year' => $request->diploma_midwifery_year,
                    'board' => $request->diploma_midwifery_board,
                    'grade' => $request->diploma_midwifery_grade,
                    'group' => $request->diploma_midwifery_group,
                    'institution' => $request->diploma_midwifery_institution,
                ],
                'bsc_nursing' => [
                    'year' => $request->bsc_nursing_year,
                    'board' => $request->bsc_nursing_board,
                    'grade' => $request->bsc_nursing_grade,
                    'group' => $request->bsc_nursing_group,
                    'institution' => $request->bsc_nursing_institution,
                ],
                'post_bsc' => [
                    'year' => $request->post_bsc_year,
                    'board' => $request->post_bsc_board,
                    'grade' => $request->post_bsc_grade,
                    'group' => $request->post_bsc_group,
                    'institution' => $request->post_bsc_institution,
                ],
                'msc_nursing' => [
                    'year' => $request->msc_nursing_year,
                    'board' => $request->msc_nursing_board,
                    'grade' => $request->msc_nursing_grade,
                    'group' => $request->msc_nursing_group,
                    'institution' => $request->msc_nursing_institution,
                ],
                'mph' => [
                    'year' => $request->mph_year,
                    'board' => $request->mph_board,
                    'grade' => $request->mph_grade,
                    'group' => $request->mph_group,
                    'institution' => $request->mph_institution,
                ],
            ],

            'computer_skill' => $request->computer_skill,
            'english_skill' => $request->english_skill,
            'agree_to_work' => $request->agree_to_work == 'yes' ? true : false,

            'cpd_activity' => [
                [
                    'name' => $request->cpd_name_1,
                    'date' => $request->cpd_date_1,
                    'duration' => $request->cpd_duration_1,
                    'authority' => $request->cpd_authority_1,
                ],
                [
                    'name' => $request->cpd_name_2,
                    'date' => $request->cpd_date_2,
                    'duration' => $request->cpd_duration_2,
                    'authority' => $request->cpd_authority_2,
                ],
                [
                    'name' => $request->cpd_name_3,
                    'date' => $request->cpd_date_3,
                    'duration' => $request->cpd_duration_3,
                    'authority' => $request->cpd_authority_3,
                ],
            ],

            'publications' => [
                [
                    'title' => $request->pub_title_1,
                    'date' => $request->pub_date_1,
                    'journal' => $request->pub_journal_1,
                    'link' => $request->pub_link_1,
                ],
                [
                    'title' => $request->pub_title_2,
                    'date' => $request->pub_date_2,
                    'journal' => $request->pub_journal_2,
                    'link' => $request->pub_link_2,
                ],
            ],

            'declaration_agree' => $request->declaration_agree == 'yes' ? true : false,

            'photo' => $photoPath ?? null,
            'signature' => $signaturePath ?? null,
        ]);

        return back()->with('success', 'Application submitted successfully!');
    }

}
