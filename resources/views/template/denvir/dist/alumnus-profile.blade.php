<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                    <a href="/alumnus" class="text-gray-700 hover:text-indigo-600">Home</a>
                    <a href="/donate" class="text-gray-700 hover:text-indigo-600">Donate</a>
                    <a href="#" class="text-gray-700 hover:text-indigo-600">Network</a>
                    <a href="#" class="text-gray-700 hover:text-indigo-600">Jobs</a>
                    <a href="#" class="text-gray-700 hover:text-indigo-600">Events</a>
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
                <button
                    class="absolute top-4 right-4 bg-white/90 text-gray-700 px-3 py-1 rounded-full text-sm flex items-center">
                    <i class="fas fa-camera mr-2"></i> Edit Cover
                </button>
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
                    <div class="flex space-x-3 mt-4 md:mt-0">
                        <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg flex items-center">
                            <i class="fas fa-user-plus mr-2"></i> Connect
                        </button>
                        <button class="border border-gray-300 text-gray-700 px-4 py-2 rounded-lg flex items-center">
                            <i class="fas fa-envelope mr-2"></i> Message
                        </button>
                    </div>
                </div>

                <!-- Profile Stats -->
                <div class="mt-6 pt-6 border-t border-gray-100 grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div class="text-center">
                        <p class="text-2xl font-bold text-indigo-600">
                            &#8369;{{ $alumnus->donation->where('is_Verify', "true")->sum('amount') }}</p>
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
                            <i class="fas fa-pencil-alt"></i>
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
                            <p class="text-sm text-gray-500">Current Position</p>
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

                <!-- Education -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-bold">Education</h3>
                        <button class="text-indigo-600 hover:text-indigo-800">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                    <div class="space-y-4">
                        <div class="flex">
                            <div class="mr-4">
                                <div
                                    class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center text-indigo-600">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                            </div>
                            <div>
                                <p class="font-medium">University of Technology</p>
                                <p class="text-sm text-gray-500">Bachelor of Science in Computer Science</p>
                                <p class="text-sm text-gray-500">2011 - 2015</p>
                                <p class="text-sm text-gray-500">GPA: 3.8/4.0</p>
                            </div>
                        </div>
                    </div>
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
                            <div class="flex">
                                <div class="mr-4">
                                    <div
                                        class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center text-indigo-600">
                                        <i class="fas fa-briefcase"></i>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <p class="font-medium">{{ $job->position }}</p>
                                    <p class="text-sm text-gray-500">{{ $job->company }}</p>
                                    <p class="text-sm text-gray-500">{{ $job->start_month }} {{ $job->start_year }} -
                                        {{ $job->end_month }} {{ $job->end_year }}
                                    </p>
                                    <p class="text-sm mt-2">{{ $job->description }}</p>
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
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-bold">Privacy Setting</h3>
                    </div>
                    <div class="grid grid-cols-3 gap-4">
                        <div class="flex flex-col items-center">
                            <div
                                class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center text-yellow-500 mb-2">
                                <i class="fas fa-trophy text-2xl"></i>
                            </div>
                            <p class="text-xs text-center">Top Contributor</p>
                        </div>
                        <div class="flex flex-col items-center">
                            <div
                                class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center text-blue-500 mb-2">
                                <i class="fas fa-hands-helping text-2xl"></i>
                            </div>
                            <p class="text-xs text-center">Mentor</p>
                        </div>
                        <div class="flex flex-col items-center">
                            <div
                                class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center text-green-500 mb-2">
                                <i class="fas fa-calendar-check text-2xl"></i>
                            </div>
                            <p class="text-xs text-center">Event Organizer</p>
                        </div>
                    </div>
                </div>

                <!-- Alumni Activity -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-bold">Alumni Activity</h3>
                        <button class="text-indigo-600 hover:text-indigo-800">
                            <i class="fas fa-ellipsis-h"></i>
                        </button>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User"
                                class="w-10 h-10 rounded-full mr-3">
                            <div>
                                <p class="font-medium">Michael Chen</p>
                                <p class="text-sm text-gray-500">Commented on your post · 2h ago</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <img src="https://randomuser.me/api/portraits/women/22.jpg" alt="User"
                                class="w-10 h-10 rounded-full mr-3">
                            <div>
                                <p class="font-medium">Emily Rodriguez</p>
                                <p class="text-sm text-gray-500">Reacted to your post · 5h ago</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="User"
                                class="w-10 h-10 rounded-full mr-3">
                            <div>
                                <p class="font-medium">David Kim</p>
                                <p class="text-sm text-gray-500">Shared your post · 1d ago</p>
                            </div>
                        </div>
                    </div>
                    <button class="w-full mt-4 text-indigo-600 hover:text-indigo-800 text-sm font-medium">
                        See all activity
                    </button>
                </div>

                <!-- Alumni Events -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-bold">Upcoming Events</h3>
                        <button class="text-indigo-600 hover:text-indigo-800">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                    <div class="space-y-4">
                        <div class="flex">
                            <div class="mr-4">
                                <div
                                    class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center text-red-500">
                                    <i class="fas fa-calendar-day"></i>
                                </div>
                            </div>
                            <div>
                                <p class="font-medium">Annual Alumni Meet</p>
                                <p class="text-sm text-gray-500">June 15, 2023 · 6:00 PM</p>
                                <p class="text-sm text-gray-500">University Campus</p>
                                <button class="mt-2 text-indigo-600 hover:text-indigo-800 text-sm font-medium">
                                    RSVP
                                </button>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="mr-4">
                                <div
                                    class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center text-blue-500">
                                    <i class="fas fa-chalkboard-teacher"></i>
                                </div>
                            </div>
                            <div>
                                <p class="font-medium">Career Workshop</p>
                                <p class="text-sm text-gray-500">July 5, 2023 · 4:00 PM</p>
                                <p class="text-sm text-gray-500">Online</p>
                                <button class="mt-2 text-indigo-600 hover:text-indigo-800 text-sm font-medium">
                                    Register
                                </button>
                            </div>
                        </div>
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
</script>

</html>