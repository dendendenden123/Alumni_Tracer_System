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
                <img src="{{ asset('storage/images/' . $user->profilePicture) }}" alt="Profile"
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
                            <img src="{{ asset('storage/images/' . $user->profilePicture) }}" alt="Profile"
                                class="w-32 h-32 rounded-full border-4 border-white">
                        </div>
                        <div class="mb-4">
                            <h2 class="text-2xl font-bold">{{ $user->full_name }}</h2>
                            <p class="text-gray-600">Class of {{ $user->graduation_year }} ·
                                {{ $user->degree }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="mt-6 pt-6 border-t border-gray-100 grid grid-cols-2 md:grid-cols-3 gap-3">


                    <div class="text-center">
                        <p class="text-2xl font-bold text-indigo-600">

                            {!! $user->donation_Visibility == "1" ? ($alumnus->donation->sum('amount')) : '<i class="fas fa-user-lock mr-2 text-xl"></i>' !!}
                        </p>
                        <p class="text-sm text-gray-500">Total amount donated</p>
                    </div>

                    <div class="text-center">
                        <p class="text-2xl font-bold text-indigo-600">{{ $alumnus->testimony->count() }}</p>
                        <p class="text-sm text-gray-500">Testimonies</p>
                    </div>
                    <div class="text-center">
                        <p class="text-2xl font-bold text-indigo-600">{{ $user->graduation_year }}</p>
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
                            <p class="mt-1">{{ $user->job_title }} at {{ $user->company }} with
                                {{ now()->year - $user->graduation_year }}
                                years of experience in
                                full-stack development. Passionate about mentoring new developers and contributing to
                                open source projects.
                            </p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Current Position</p>
                            <p class="mt-1 font-medium">{{ $user->job_title }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Education</p>
                            <p class="mt-1 font-medium">{{ $user->degree }} - University of Technology
                                ({{ $user->graduation_year }})
                            </p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Location</p>
                            <p class="mt-1 font-medium">{{ $user->address }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Contact</p>
                            <p class="mt-1 font-medium">{{ $user->email }}</p>
                            <p class="mt-1 font-medium">{{ $user->phone_number }}</p>
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

                    </div>
                    @if ($alumnus->job_Visibility == "1")
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
                    @else
                        <div class="space-y-6 flex items-center text-gray-500">
                            <i class="fas fa-user-lock mr-2 text-xl"></i>
                            <span>{{ $user->full_name }} has set their job history to private.</span>
                        </div>
                    @endif
                </div>
            </div>

            <!-- Right Column -->
            <div class="space-y-6">
                <!-- Testimonies -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-bold">Testimonies</h3>
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
        </div>
    </main>
</body>

</html>