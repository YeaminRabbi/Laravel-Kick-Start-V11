@extends('layouts.app')

@section('content')
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">Application for Teacher' Training Certificate Course (One Year)</h2>

                    @if(session('success'))
                        <div class="bg-green-100 border-t-4 border-green-500 text-green-700 p-4 mb-6">
                            <p class="font-bold">{{ session('success') }}</p>
                        </div>
                    @endif

                    <form method="POST" action="{{route('application.submit')}}" enctype="multipart/form-data" class="space-y-6">
                        @csrf
                        
                        <!-- Photo Upload -->
                        <div class="mb-6">
                            <label for="photo" class="block text-sm font-medium text-gray-700 mb-1">Passport Size Photo <span class="text-red-800">*</span></label>
                            <input type="file" id="photo" name="photo" accept="image/*" class="block w-full text-sm text-gray-500
                                file:mr-4 file:py-2 file:px-4
                                file:rounded-md file:border-0
                                file:text-sm file:font-semibold
                                file:bg-blue-50 file:text-blue-700
                                hover:file:bg-blue-100"
                                >
                        </div>
                        
                        <!-- Personal Information -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name <span class="text-red-800">*</span></label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out" required>
                                @error('name')
                                    <div class="text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <div>
                                <label for="father_name" class="block text-sm font-medium text-gray-700 mb-1">Father's Name <span class="text-red-800">*</span> </label>
                                <input type="text" id="father_name" name="father_name" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out" value="{{ old('father_name') }}" required>
                                @error('father_name')
                                    <div class="text-red-500 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div>
                                <label for="mother_name" class="block text-sm font-medium text-gray-700 mb-1">Mother's Name <span class="text-red-800">*</span> </label>
                                <input type="text" id="mother_name" name="mother_name" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out" value="{{ old('mother_name') }}" required>
                                @error('mother_name')
                                    <div class="text-red-500 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div>
                                <label for="designation" class="block text-sm font-medium text-gray-700 mb-1">Designation <span class="text-red-800">*</span> </label>
                                <select id="designation" name="designation" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out" required>
                                    <option value="" disabled>Select Designation</option>
                                    <option value="senior_staff_nurse_staff_nurse" {{ old('designation') == 'senior_staff_nurse_staff_nurse' ? 'selected' : '' }}>Senior Staff Nurse/Staff Nurse</option>
                                    <option value="nursing_supervisor" {{ old('designation') == 'nursing_supervisor' ? 'selected' : '' }}>Nursing Supervisor</option>
                                    <option value="nursing_instructor_instructor" {{ old('designation') == 'nursing_instructor_instructor' ? 'selected' : '' }}>Nursing Instructor/Instructor</option>
                                    <option value="lecturer" {{ old('designation') == 'lecturer' ? 'selected' : '' }}>Lecturer</option>
                                    <option value="deputy_nursing_superintendent" {{ old('designation') == 'deputy_nursing_superintendent' ? 'selected' : '' }}>Deputy Nursing Superintendent</option>
                                    <option value="nursing_superintendent" {{ old('designation') == 'nursing_superintendent' ? 'selected' : '' }}>Nursing Superintendent</option>
                                    <option value="district_public_health_nurse" {{ old('designation') == 'district_public_health_nurse' ? 'selected' : '' }}>District Public Health Nurse</option>
                                </select>
                                @error('designation')
                                    <div class="text-red-500 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div>
                                <label for="unique_id" class="block text-sm font-medium text-gray-700 mb-1">Unique ID <span class="text-red-800">*</span></label>
                                <input type="text" id="unique_id" name="unique_id" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out" value="{{ old('unique_id') }}" required>
                                @error('unique_id')
                                    <div class="text-red-500 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div>
                                <label for="date_of_birth" class="block text-sm font-medium text-gray-700 mb-1">Date of Birth <span class="text-red-800">*</span></label>
                                <input type="date" id="date_of_birth" name="date_of_birth" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out" value="{{ old('date_of_birth') }}" required>
                                @error('date_of_birth')
                                    <div class="text-red-500 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Gender <span class="text-red-800">*</span></label>
                                <div class="mt-2 space-x-4 flex">
                                    <div class="flex items-center">
                                        <input type="radio" id="male" name="gender" value="male" class="h-4 w-4 text-blue-600 border-gray-300 focus:ring-blue-500" {{ old('gender') == 'male' ? 'checked' : '' }}>
                                        <label for="male" class="ml-2 block text-sm text-gray-700">Male</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="radio" id="female" name="gender" value="female" class="h-4 w-4 text-blue-600 border-gray-300 focus:ring-blue-500" {{ old('gender') == 'female' ? 'checked' : '' }}>
                                        <label for="female" class="ml-2 block text-sm text-gray-700">Female</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="radio" id="other" name="gender" value="other" class="h-4 w-4 text-blue-600 border-gray-300 focus:ring-blue-500" {{ old('gender') == 'other' ? 'checked' : '' }}>
                                        <label for="other" class="ml-2 block text-sm text-gray-700">Other</label>
                                    </div>
                                </div>
                                @error('gender')
                                    <div class="text-red-500 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div>
                                <label for="religion" class="block text-sm font-medium text-gray-700 mb-1">Religion <span class="text-red-800">*</span></label>
                                <select id="religion" name="religion" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out" required>
                                    <option value="" disabled>Select Religion</option>
                                    <option value="islam" {{ old('religion') == 'islam' ? 'selected' : '' }}>Islam</option>
                                    <option value="hindu" {{ old('religion') == 'hindu' ? 'selected' : '' }}>Hindu</option>
                                    <option value="christian" {{ old('religion') == 'christian' ? 'selected' : '' }}>Christian</option>
                                    <option value="buddhism" {{ old('religion') == 'buddhism' ? 'selected' : '' }}>Buddhism</option>
                                    <option value="other" {{ old('religion') == 'other' ? 'selected' : '' }}>Other</option>
                                </select>
                                @error('religion')
                                    <div class="text-red-500 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div>
                                <label for="nid_number" class="block text-sm font-medium text-gray-700 mb-1">NID Number <span class="text-red-800">*</span></label>
                                <input type="text" id="nid_number" name="nid_number" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out" value="{{ old('nid_number') }}" required>
                                @error('nid_number')
                                    <div class="text-red-500 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                            
                        </div>

                        
                        <!-- Employment Information -->
                        <div class="mt-8">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Employment Information</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="workplace" class="block text-sm font-medium text-gray-700 mb-1">Workplace</label>
                                    <input type="text" id="workplace" name="workplace" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                </div>

                                <div>
                                    <label for="first_joining_date" class="block text-sm font-medium text-gray-700 mb-1">Date of 1st Joining in Govt. Job</label>
                                    <input type="date" id="first_joining_date" name="first_joining_date" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                </div>

                                <div>
                                    <label for="service_length" class="block text-sm font-medium text-gray-700 mb-1">Service Length (Years)</label>
                                    <input type="number" id="service_length" name="service_length" min="0" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                </div>

                                <div>
                                    <label for="clinical_experience" class="block text-sm font-medium text-gray-700 mb-1">Clinical Experience (Years)</label>
                                    <input type="number" id="clinical_experience" name="clinical_experience" min="0" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                </div>

                                <div>
                                    <label for="management_experience" class="block text-sm font-medium text-gray-700 mb-1">Management Experience (Years, if any)</label>
                                    <input type="number" id="management_experience" name="management_experience" min="0" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                </div>

                                <div>
                                    <label for="teaching_experience" class="block text-sm font-medium text-gray-700 mb-1">Teaching Experience (Years, if any)</label>
                                    <input type="number" id="teaching_experience" name="teaching_experience" min="0" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                </div>

                                <div>
                                    <label for="bnmc_registration" class="block text-sm font-medium text-gray-700 mb-1">BNMC Registration Number</label>
                                    <input type="text" id="bnmc_registration" name="bnmc_registration" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                </div>

                                <div>
                                    <label for="bnmc_expiry" class="block text-sm font-medium text-gray-700 mb-1">BNMC Registration Expiry Date</label>
                                    <input type="date" id="bnmc_expiry" name="bnmc_expiry" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                </div>
                            </div>
                        </div>

                        
                        <!-- Address Information -->
                        <div class="mt-8">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Address Information</h3>
                            <div class="space-y-6">
                                <!-- Present Address -->
                                <div>
                                    <h4 class="text-md font-medium text-gray-800 mb-2">Present Address</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div>
                                            <label for="present_vill" class="block text-sm font-medium text-gray-700 mb-1">Vill/Street</label>
                                            <input type="text" id="present_vill" name="present_vill" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                        </div>
                                        <div>
                                            <label for="present_post" class="block text-sm font-medium text-gray-700 mb-1">Post</label>
                                            <input type="text" id="present_post" name="present_post" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                        </div>
                                        <div>
                                            <label for="present_upazilla" class="block text-sm font-medium text-gray-700 mb-1">Upazilla/Thana</label>
                                            <input type="text" id="present_upazilla" name="present_upazilla" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                        </div>
                                        <div>
                                            <label for="present_district" class="block text-sm font-medium text-gray-700 mb-1">District</label>
                                            <input type="text" id="present_district" name="present_district" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                        </div>
                                    </div>
                                </div>

                                <!-- Permanent Address -->
                                <div>
                                    <h4 class="text-md font-medium text-gray-800 mb-2">Permanent Address</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div>
                                            <label for="permanent_vill" class="block text-sm font-medium text-gray-700 mb-1">Vill/Street</label>
                                            <input type="text" id="permanent_vill" name="permanent_vill" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                        </div>
                                        <div>
                                            <label for="permanent_post" class="block text-sm font-medium text-gray-700 mb-1">Post</label>
                                            <input type="text" id="permanent_post" name="permanent_post" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                        </div>
                                        <div>
                                            <label for="permanent_upazilla" class="block text-sm font-medium text-gray-700 mb-1">Upazilla/Thana</label>
                                            <input type="text" id="permanent_upazilla" name="permanent_upazilla" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                        </div>
                                        <div>
                                            <label for="permanent_district" class="block text-sm font-medium text-gray-700 mb-1">District</label>
                                            <input type="text" id="permanent_district" name="permanent_district" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <!-- Contact Information -->
                        <div class="mt-8">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Contact Information</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                                    <input type="email" id="email" name="email"
                                        class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                </div>
                                <div>
                                    <label for="mobile" class="block text-sm font-medium text-gray-700 mb-1">Mobile Number</label>
                                    <input type="text" id="mobile" name="mobile"
                                        class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                </div>
                            </div>
                        </div>

                        
                        <!-- Academic Qualifications -->
                        <div class="mt-8">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Academic Qualifications</h3>
                            <div class="overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Examination</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Passing Year/SESSION</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Board/University</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Division/GPA</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Group/Subject</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Institution</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">SSC/Equivalent</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <input type="number" name="ssc_board"  min="1900" max="2099" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out" required>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <input type="text" name="ssc_board" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out" required>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <input type="text" name="ssc_grade" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out" required>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <input type="text" name="ssc_group" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out" required>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <input type="text" name="ssc_institution" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out" required>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">HSC/Equivalent (if applicable)</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <input type="number" name="hsc_year" min="1900" max="2099" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <input type="text" name="hsc_board" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <input type="text" name="hsc_grade" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <input type="text" name="hsc_group" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <input type="text" name="hsc_institution" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Diploma in Nursing Science & Midwifery (3 Years) (if applicable)</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <input type="number" name="diploma_nursing_year" min="1900" max="2099" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <input type="text" name="diploma_nursing_board" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <input type="text" name="diploma_nursing_grade" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <input type="text" name="diploma_nursing_group" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <input type="text" name="diploma_nursing_institution" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Diploma in Nursing & Midwifery/Orthopaedic/Other (4 Years) (if applicable)</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <input type="number" name="diploma_midwifery_year" min="1900" max="2099" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <input type="text" name="diploma_midwifery_board" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <input type="text" name="diploma_midwifery_grade" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <input type="text" name="diploma_midwifery_group" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <input type="text" name="diploma_midwifery_institution" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">BSc in Nursing (4 Years) (if applicable)</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <input type="number" name="bsc_nursing_year" min="1900" max="2099" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <input type="text" name="bsc_nursing_board" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <input type="text" name="bsc_nursing_grade" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <input type="text" name="bsc_nursing_group" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <input type="text" name="bsc_nursing_institution" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Post Basic BSc in Nursing/PHN (2 Years) (if applicable)</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <input type="number" name="post_bsc_year" min="1900" max="2099" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <input type="text" name="post_bsc_board" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <input type="text" name="post_bsc_grade" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <input type="text" name="post_bsc_group" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <input type="text" name="post_bsc_institution" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">MSc in Nursing (if applicable)</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <input type="number" name="msc_nursing_year" min="1900" max="2099" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <input type="text" name="msc_nursing_board" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <input type="text" name="msc_nursing_grade" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out
                                                <input type="text" name="msc_nursing_grade" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <input type="text" name="msc_nursing_group" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <input type="text" name="msc_nursing_institution" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">MPH </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <input type="number" name="mph_year" min="1900" max="2099" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <input type="text" name="mph_board" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <input type="text" name="mph_grade" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <input type="text" name="mph_group" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <input type="text" name="mph_institution" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                        <!-- Skills Information -->
                        <div class="mt-8">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Skills Information</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="computer_skill" class="block text-sm font-medium text-gray-700 mb-1">Computer Skill</label>
                                    <select id="computer_skill" name="computer_skill" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                        <option value="">Select Skill Level</option>
                                        <option value="Beginner">Beginner</option>
                                        <option value="Moderate">Moderate</option>
                                        <option value="Advanced">Advanced</option>
                                    </select>
                                </div>
                                
                                <div>
                                    <label for="english_skill" class="block text-sm font-medium text-gray-700 mb-1">English Language Skill</label>
                                    <select id="english_skill" name="english_skill" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                        <option value="">Select Skill Level</option>
                                        <option value="Average">Average</option>
                                        <option value="Good">Good</option>
                                        <option value="Excellent">Excellent</option>
                                    </select>
                                </div>
                            </div>
                        </div>  
                        
                        <!-- Agree to Work -->
                        <div class="mt-8">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Agreement</h3>
                            <div class="grid grid-cols-1 gap-6">
                                <div>
                                    <label for="agree_to_work" class="block text-sm font-medium text-gray-700 mb-1">Agree to work anywhere in Bangladesh</label>
                                    <select id="agree_to_work" name="agree_to_work" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                        <option value="">Select an option</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <!-- CPD Activities -->
                        <div class="mt-8">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">CPD Activities (Last 5 years, most significant only)</h3>
                            <div class="overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name of CPD Activity</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date of Completion</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Duration</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Certifying Authority</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @for ($i = 1; $i <= 3; $i++)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <input type="text" name="cpd_name_{{ $i }}" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <input type="date" name="cpd_date_{{ $i }}" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <input type="text" name="cpd_duration_{{ $i }}" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out" placeholder="e.g., 2 days, 40 hours">
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <input type="text" name="cpd_authority_{{ $i }}" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                                </td>
                                            </tr>
                                        @endfor
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                        <!-- Publications -->
                        <div class="mt-8">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Publications (if any)</h3>
                            <div class="overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date of Publication</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name of Journal</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Web-link</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @for ($i = 1; $i <= 2; $i++)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <input type="text" name="pub_title_{{ $i }}" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <input type="date" name="pub_date_{{ $i }}" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <input type="text" name="pub_journal_{{ $i }}" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out">
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <input type="url" name="pub_link_{{ $i }}" class="h-10 px-4 block w-full rounded border border-gray-300 ring-1 ring-inset ring-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 shadow-sm transition duration-300 ease-in-out" placeholder="https://">
                                                </td>
                                            </tr>
                                        @endfor
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                        <!-- Declaration and Signature -->
                        <div class="mt-8">
                            <div class="mt-8">
                                <h3 class="text-lg font-medium text-gray-900 mb-4">Declaration</h3>
                                <div class="bg-gray-50 p-4 rounded-md mb-4">
                                    <p class="text-sm text-gray-700">
                                        I hereby declare that all the information provided in this application form is true, complete and correct to the best of my knowledge and belief. I understand that any false or misleading information may result in the rejection of my application or termination of my admission if discovered at a later date.
                                    </p>
                                </div>
                                <div class="flex items-center">
                                    <input id="declaration_agree" name="declaration_agree" type="checkbox" value="Yes" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500" required>
                                    <label for="declaration_agree" class="ml-2 block text-sm font-medium text-gray-700">I have read and agree to the above declaration</label>
                                </div>
                            </div>
                            
                            <div class="mt-4">
                                <label for="signature" class="block text-sm font-medium text-gray-700 mb-1">Signature (upload)</label>
                                <input type="file" id="signature" name="signature" accept="image/*" class="block w-full text-sm text-gray-500
                                    file:mr-4 file:py-2 file:px-4
                                    file:rounded-md file:border-0
                                    file:text-sm file:font-semibold
                                    file:bg-blue-50 file:text-blue-700
                                    hover:file:bg-blue-100">
                            </div>
                        </div>
                        
                        <!-- Submit Button -->
                        <div class="mt-8 flex justify-end">
                            <button type="submit" class="px-6 py-3 bg-blue-600 text-white font-medium rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Submit Application
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection