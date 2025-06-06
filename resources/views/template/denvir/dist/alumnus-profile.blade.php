<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .progress-ring__circle {
            transition: stroke-dashoffset 0.5s;
            transform: rotate(-90deg);
            transform-origin: 50% 50%;
        }
    </style>
</head>

<body class="bg-gray-50 font-sans">
    <!-- Header -->
    <header class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-8">
                <h1 class="text-2xl font-bold text-indigo-600">AlumniConnect</h1>
                <nav class="hidden md:flex space-x-6">
                    <a href="/alumnus" class="text-gray-700 hover:text-indigo-600">Testimonies</a>
                    <a href="/donate" class="text-gray-700 hover:text-indigo-600">Donate</a>
                    <a href="/logout" class="text-gray-700 hover:text-indigo-600">Log out</a>
                </nav>
            </div>
            <div class="flex items-center space-x-4">
                <button class="p-2 rounded-full hover:bg-gray-100">
                    <i class="fas fa-bell text-gray-600"></i>
                </button>
                <img src="{{ asset('storage/images/' . auth()->user()->profilePicture) }}" alt="Profile"
                    class="w-8 h-8 rounded-full">
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 py-6">
        <!-- Profile Header -->
        <div class="bg-white rounded-xl shadow-sm overflow-hidden mb-6">
            <!-- Cover Photo -->
            <div class="h-48 bg-gradient-to-r from-indigo-500 to-purple-600 relative">
            </div>

            <!-- Profile Info -->
            <div class="px-6 pb-6 relative">
                <div class="flex flex-col md:flex-row md:items-end md:justify-between">
                    <div class="flex items-end -mt-16 space-x-4">
                        <div class="relative">
                            <img src="{{ asset('storage/images/' . auth()->user()->profilePicture) }}" alt="Profile"
                                class="w-32 h-32 rounded-full border-4 border-white">
                            <form id="profile-pic-form" method="POST" action="/Update-Profile-Picture"
                                enctype="multipart/form-data" class="absolute bottom-2 right-2">
                                @csrf
                                <input type="file" id="profile-pic-input" name="profile_picture" accept="image/*"
                                    class="hidden" onchange="document.getElementById('profile-pic-form').submit()">
                                <button type="button" class="bg-indigo-600 text-white p-1.5 rounded-full"
                                    onclick="document.getElementById('profile-pic-input').click()">
                                    <i class="fas fa-camera text-xs"></i>
                                </button>
                            </form>
                        </div>
                        <div class="mb-4">
                            <h2 class="text-2xl font-bold">{{ auth()->user()->full_name }}</h2>
                            <p class="text-gray-600">Class of {{ auth()->user()->graduation_year }} ·
                                {{ auth()->user()->degree }}
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Profile Stats -->
                <div class="mt-6 pt-6 border-t border-gray-100 grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div class="text-center">
                        <p class="text-2xl font-bold text-indigo-600">
                            ₱{{  $alumnus->donation->where('is_Verify', "true")->sum('amount')}}
                        </p>
                        <p class="text-sm text-gray-500">Total amount donated</p>
                    </div>
                    <div class="text-center">
                        <p class="text-2xl font-bold text-indigo-600">
                            {{ $alumnus->donation->where('is_Verify', "false")->count() }}
                        </p>
                        <p class="text-sm text-gray-500">Pending donation Transaction</p>
                    </div>
                    <div class="text-center">
                        <p class="text-2xl font-bold text-indigo-600">{{ $alumnus->testimony->count() }}</p>
                        <p class="text-sm text-gray-500">Testimonies</p>
                    </div>
                    <div class="text-center">
                        <p class="text-2xl font-bold text-indigo-600">{{ auth()->user()->graduation_year }}</p>
                        <p class="text-sm text-gray-500">Graduation Year</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Left Column -->
            <div class="space-y-6">
                <!-- About -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-bold">About</h3>
                        <button class="text-indigo-600 hover:text-indigo-800">
                            <a href="/user/edit/{{ auth()->user()->id }}"> <i class="fas fa-pencil-alt"></i></a>
                        </button>
                    </div>
                    <div class="space-y-4">
                        <div>
                            <p class="text-sm text-gray-500">Bio</p>
                            <p class="mt-1">{{ auth()->user()->job_title }} at {{ auth()->user()->company }} with
                                {{ now()->year - auth()->user()->graduation_year }}
                                years of experience in
                                full-stack development. Passionate about mentoring new developers and contributing to
                                open source projects.
                            </p>
                        </div>
                           <div>
                            <p class="text-sm text-gray-500">Job Status</p>
                            <p class="mt-1 font-medium">{{ auth()->user()->status }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Position</p>
                            <p class="mt-1 font-medium">{{ auth()->user()->job_title }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Education</p>
                            <p class="mt-1 font-medium">{{ auth()->user()->degree }} - University of Technology
                                ({{ auth()->user()->graduation_year }})
                            </p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Location</p>
                            <p class="mt-1 font-medium">{{ auth()->user()->address }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Contact</p>
                            <p class="mt-1 font-medium">{{ auth()->user()->email }}</p>
                            <p class="mt-1 font-medium">{{ auth()->user()->phone_number }}</p>
                        </div>
                    </div>
                </div>

                <!-- Skills -->
                <div>

                </div>
            </div>

            <!-- Middle Column -->
            <div class="space-y-6">
                <!-- Experience -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-bold">Experience</h3>
                        <button onclick="showForm()" class="text-indigo-600 hover:text-indigo-800">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                    <div class="space-y-6">

                        @foreach ($alumnus->jobHistory as $job)
                        @php
                            $decryptJob = json_decode(decrypt($job->encrypted_payload), true);
                        @endphp

                            <div class="flex">
                                <div class="mr-4">
                                    <div
                                        class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center text-indigo-600">
                                        <i class="fas fa-briefcase"></i>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <p class="font-medium">{{ $decryptJob['position'] ?? '' }}</p>
                                    <p class="text-sm text-gray-500">{{ $decryptJob['company'] ?? '' }}</p>
                                    <p class="text-sm text-gray-500">{{ $decryptJob['start_month'] ?? '' }} {{ $decryptJob['start_year'] ?? '' }} -
                                        {{ $decryptJob['end_month'] ?? '' }} {{ $decryptJob['end_year'] ?? '' }}
                                    </p>
                                    <p class="text-sm mt-2">{{ $decryptJob['description'] ?? '' }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Projects -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-bold">Your Testimonies</h3>
                    </div>
                    @foreach ($alumnus->testimony->sortByDesc('created_at') as $testimony)
                        <div class="grid grid-cols-1 md:grid-cols-1 gap-4">
                            <div class="border border-gray-200 rounded-lg p-4 hover:border-indigo-300 transition-colors">
                                <p class="font-medium">{{ $testimony->content }}</p>
                                <p class="text-sm text-gray-500 mt-1">{{ $testimony->created_at->diffForHumans() }}</p>
                            </div>
                        </div> <br>
                    @endforeach
                </div>
            </div>

            <!-- Right Column -->
            <div class="space-y-6">
                <!-- Alumni Badges -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <form method="POST" action="/privacy-settings"
                        class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden p-6">
                        @csrf
                        <div class="space-y-6">
                            <!-- Header -->
                            <div class="flex items-center space-x-3 border-b pb-4">
                                <div class="p-2 bg-blue-100 rounded-lg">
                                    <!-- Replace with your actual logo -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                    </svg>
                                </div>
                                <h2 class="text-xl font-bold text-gray-800">Privacy Settings</h2>
                            </div>

                            <!-- Toggle Items -->
                            <div class="space-y-5">
                                <!-- Donation Visibility -->
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h3 class="font-medium text-gray-700">Amount Donated</h3>
                                        <p class="text-sm text-gray-500">Who can see your donation records</p>
                                    </div>
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" name="donation_Visibility" value="1" class="sr-only peer"
                                            {{ $alumnus->donation_Visibility == 1 ? 'checked' : '' }}>
                                        <div
                                            class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600">
                                        </div>
                                        <span
                                            class="ml-3 text-sm font-medium text-gray-700 hidden peer-checked:inline">Public</span>
                                        <span
                                            class="ml-3 text-sm font-medium text-gray-700 peer-checked:hidden">Private</span>
                                    </label>
                                </div>

                                <!-- Testimony Visibility -->
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h3 class="font-medium text-gray-700">Testimonials</h3>
                                        <p class="text-sm text-gray-500">Who can see your testimonials</p>
                                    </div>
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" name="testimonial_Visibility" value="1"
                                            class="sr-only peer" {{ $alumnus->testimonial_Visibility == 1 ? 'checked' : '' }}>
                                        <div
                                            class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600">
                                        </div>
                                        <span
                                            class="ml-3 text-sm font-medium text-gray-700 hidden peer-checked:inline">Public</span>
                                        <span
                                            class="ml-3 text-sm font-medium text-gray-700 peer-checked:hidden">Private</span>
                                    </label>
                                </div>

                                <!-- Job History Visibility -->
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h3 class="font-medium text-gray-700">Job History</h3>
                                        <p class="text-sm text-gray-500">Who can see your employment history</p>
                                    </div>
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" name="job_Visibility" value="1" class="sr-only peer"
                                            {{ $alumnus->job_Visibility == 1 ? 'checked' : '' }}>
                                        <div
                                            class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600">
                                        </div>
                                        <span
                                            class="ml-3 text-sm font-medium text-gray-700 hidden peer-checked:inline">Public</span>
                                        <span
                                            class="ml-3 text-sm font-medium text-gray-700 peer-checked:hidden">Private</span>
                                    </label>
                                </div>
                            </div>

                            <!-- Save Button -->
                            <div class="pt-4 border-t">
                                <p class="setting-confirmation-message text-sm text-gray-500 mb-2"></p>
                                <button type="submit" id="save-visibility-settings"
                                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg transition duration-200">
                                    Save Visibility Settings
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Alumni Activity -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-bold">Donation Transaction</h3>
                        <button class="text-indigo-600 hover:text-indigo-800">
                            <i class="fas fa-ellipsis-h"></i>
                        </button>
                    </div>
                    <div class="space-y-4">
                        @foreach ($alumnus->donation->sortByDesc('updated_at') as $donation)

                            @if ($donation->is_Verify == "true")
                                <div class="flex items-start">
                                    <img src="https://cdn-icons-png.flaticon.com/128/6711/6711626.png" alt="User"
                                        class="w-10 h-10 rounded-full mr-3">
                                    <div>
                                        <p class="font-medium">Your donation of ₱{{ $donation->amount }} has been successfully
                                            verified. Thank you
                                            for your generous support!</p>
                                        <p class="text-sm text-gray-500">{{ $donation->updated_at->diffForHumans() }}</p>
                                    </div>
                                </div>
                            @elseif ($donation->is_Verify == "false")
                                <div class="flex items-start">
                                    <img src="https://cdn-icons-png.flaticon.com/128/2618/2618524.png" alt="User"
                                        class="w-10 h-10 rounded-full mr-3">
                                    <div>
                                        <p class="font-medium">Your donation has been deposited and is awaiting verification. We
                                            will notify you once the process is complete</p>
                                        <p class="text-sm text-gray-500">{{ $donation->updated_at->diffForHumans() }}</p>
                                    </div>
                                </div>
                            @endif

                        @endforeach
                    </div>
                </div>


            </div>
        </div>
    </main>
</body>
<script>
    function showForm() {
        Swal.fire({
            title: 'Add Job History',
            html: `
                <form id="itemForm" class="text-left">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2">Company Name</label>
                        <input type="text" name="company" class="w-full px-3 py-2 border rounded" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2">Position</label>
                        <input type="text" name="position" class="w-full px-3 py-2 border rounded" required>
                    </div>
                    
                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2">Description</label>
                        <textarea name="description" class="w-full px-3 py-2 border rounded" rows="3"></textarea>
                    </div>
                    
                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2">Start Date</label>
                        <div class="flex space-x-2">
                            <select name="start_month" class="w-1/2 px-3 py-2 border rounded" required>
                                <option value="">Month</option>
                                <option value="January">January</option>
                                <option value="February">February</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>
                            </select>
                            <input type="number" name="start_year" class="w-1/2 px-3 py-2 border rounded" placeholder="Year" min="1900" max="2100" required>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2">End Date</label>
                        <div class="flex space-x-2">
                            <select name="end_month" class="w-1/2 px-3 py-2 border rounded">
                                <option value="">Month</option>
                                <option value="January">January</option>
                                <option value="February">February</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>
                            </select>
                            <input type="number" name="end_year" class="w-1/2 px-3 py-2 border rounded" placeholder="Year" min="1900" max="2100">
                        </div>
                        <div class="mt-2">
                            <label class="flex items-center">
                                <input type="checkbox" name="currently_working" class="mr-2" id="currentJobCheckbox">
                                <span class="text-gray-700">I currently work here</span>
                            </label>
                        </div>
                    </div>
                </form>
            `,
            focusConfirm: false,
            showCancelButton: true,
            confirmButtonText: 'Submit',
            cancelButtonText: 'Cancel',
            preConfirm: () => {
                const form = document.getElementById('itemForm');
                const formData = new FormData(form);

                // Validate required fields
                if (!formData.get('company')) {
                    Swal.showValidationMessage('Company name is required');
                    return false;
                }
                if (!formData.get('position')) {
                    Swal.showValidationMessage('Position is required');
                    return false;
                }
                if (!formData.get('start_month') || !formData.get('start_year')) {
                    Swal.showValidationMessage('Start date is required');
                    return false;
                }

                return formData;
            },
            didOpen: () => {
                // Make end date fields optional if "currently working" is checked
                document.getElementById('currentJobCheckbox').addEventListener('change', function (e) {
                    const endMonth = document.querySelector('select[name="end_month"]');
                    const endYear = document.querySelector('input[name="end_year"]');

                    if (e.target.checked) {
                        endMonth.disabled = true;
                        endYear.disabled = true;
                        endMonth.value = '';
                        endYear.value = '';
                    } else {
                        endMonth.disabled = false;
                        endYear.disabled = false;
                    }
                });
            }
        }).then((result) => {
            if (result.isConfirmed) {
                // Process form submission
                fetch('/jobHistory-store', {
                    method: 'POST',
                    body: new FormData(document.getElementById('itemForm')),
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                        'Accept': 'application/json'
                    }
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            console.log(data.message)
                            Swal.fire('Success!', 'Job history added successfully', 'success')
                                .then(() => {
                                    window.location.reload(); // Reload page or update UI
                                });
                        } else {
                            console.log(data.error);
                            Swal.fire('Error', data.message || 'Failed to add job history', 'error');
                        }
                    })
                    .catch(error => {
                        Swal.fire('Error', 'An error occurred while submitting the form', 'error');
                        console.error('Error:', error);
                    });
            }
        });
    }

    $('#save-visibility-settings').on('click', function (e) {
        e.preventDefault();

        //ajax syntax
        var form = $(this).closest('form');
        var formData = form.serialize();

        $.ajax({
            url: form.attr('action'),
            method: 'POST',
            data: formData,
            headers: {
            'X-CSRF-TOKEN': form.find('input[name="_token"]').val(),
            'Accept': 'application/json'
            },
            success: function(response) {
            $('.setting-confirmation-message').text('Visibility settings updated successfully.');

            setTimeout(function() {
                $('.setting-confirmation-message').text('');
            }, 3000);

            },
            error: function(xhr) {
            $('.setting-confirmation-message').text('Failed to update visibility settings');
            }
        });

    });

</script>

</html>