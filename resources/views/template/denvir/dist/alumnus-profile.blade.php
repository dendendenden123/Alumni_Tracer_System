<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Profile" class="w-8 h-8 rounded-full">
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
                            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Profile"
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
                            <h2 class="text-2xl font-bold">Sarah Johnson</h2>
                            <p class="text-gray-600">Class of 2015 · Computer Science</p>
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
                        <p class="text-2xl font-bold text-indigo-600">248</p>
                        <p class="text-sm text-gray-500">Connections</p>
                    </div>
                    <div class="text-center">
                        <p class="text-2xl font-bold text-indigo-600">24</p>
                        <p class="text-sm text-gray-500">Posts</p>
                    </div>
                    <div class="text-center">
                        <p class="text-2xl font-bold text-indigo-600">56</p>
                        <p class="text-sm text-gray-500">Following</p>
                    </div>
                    <div class="text-center">
                        <p class="text-2xl font-bold text-indigo-600">2015</p>
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
                            <p class="mt-1">Senior Software Engineer at TechCorp with 8+ years of experience in
                                full-stack development. Passionate about mentoring new developers and contributing to
                                open source projects.</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Current Position</p>
                            <p class="mt-1 font-medium">Senior Software Engineer at TechCorp</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Education</p>
                            <p class="mt-1 font-medium">B.Sc. Computer Science - University of Technology (2011-2015)
                            </p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Location</p>
                            <p class="mt-1 font-medium">San Francisco, California</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Contact</p>
                            <p class="mt-1 font-medium">sarah.johnson@example.com</p>
                            <p class="mt-1 font-medium">(555) 123-4567</p>
                        </div>
                    </div>
                </div>

                <!-- Skills -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-bold">Skills</h3>
                        <button class="text-indigo-600 hover:text-indigo-800">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-indigo-100 text-indigo-800 px-3 py-1 rounded-full text-sm">JavaScript</span>
                        <span class="bg-indigo-100 text-indigo-800 px-3 py-1 rounded-full text-sm">React</span>
                        <span class="bg-indigo-100 text-indigo-800 px-3 py-1 rounded-full text-sm">Node.js</span>
                        <span class="bg-indigo-100 text-indigo-800 px-3 py-1 rounded-full text-sm">Python</span>
                        <span class="bg-indigo-100 text-indigo-800 px-3 py-1 rounded-full text-sm">AWS</span>
                        <span class="bg-indigo-100 text-indigo-800 px-3 py-1 rounded-full text-sm">Docker</span>
                        <span class="bg-indigo-100 text-indigo-800 px-3 py-1 rounded-full text-sm">Kubernetes</span>
                    </div>
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
                        <button class="text-indigo-600 hover:text-indigo-800">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                    <div class="space-y-6">
                        <div class="flex">
                            <div class="mr-4">
                                <div
                                    class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center text-indigo-600">
                                    <i class="fas fa-briefcase"></i>
                                </div>
                            </div>
                            <div class="flex-1">
                                <p class="font-medium">Senior Software Engineer</p>
                                <p class="text-sm text-gray-500">TechCorp</p>
                                <p class="text-sm text-gray-500">Jan 2020 - Present · 3 yrs 6 mos</p>
                                <p class="text-sm mt-2">Lead a team of 5 developers building scalable web applications.
                                    Architected migration from monolithic to microservices.</p>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="mr-4">
                                <div
                                    class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center text-indigo-600">
                                    <i class="fas fa-briefcase"></i>
                                </div>
                            </div>
                            <div class="flex-1">
                                <p class="font-medium">Software Engineer</p>
                                <p class="text-sm text-gray-500">InnovateSoft</p>
                                <p class="text-sm text-gray-500">Jun 2015 - Dec 2019 · 4 yrs 7 mos</p>
                                <p class="text-sm mt-2">Full-stack development of enterprise SaaS products. Promoted
                                    from Junior to Mid-level within 2 years.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Projects -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-bold">Projects</h3>
                        <button class="text-indigo-600 hover:text-indigo-800">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="border border-gray-200 rounded-lg p-4 hover:border-indigo-300 transition-colors">
                            <div
                                class="w-full h-32 bg-gradient-to-r from-blue-400 to-indigo-500 rounded mb-3 flex items-center justify-center text-white">
                                <i class="fas fa-project-diagram text-3xl"></i>
                            </div>
                            <p class="font-medium">Alumni Portal</p>
                            <p class="text-sm text-gray-500 mt-1">A networking platform for university alumni</p>
                            <div class="mt-3 flex flex-wrap gap-1">
                                <span class="bg-gray-100 text-gray-800 px-2 py-0.5 rounded-full text-xs">React</span>
                                <span class="bg-gray-100 text-gray-800 px-2 py-0.5 rounded-full text-xs">Laravel</span>
                                <span class="bg-gray-100 text-gray-800 px-2 py-0.5 rounded-full text-xs">MySQL</span>
                            </div>
                        </div>
                        <div class="border border-gray-200 rounded-lg p-4 hover:border-indigo-300 transition-colors">
                            <div
                                class="w-full h-32 bg-gradient-to-r from-purple-400 to-pink-500 rounded mb-3 flex items-center justify-center text-white">
                                <i class="fas fa-mobile-alt text-3xl"></i>
                            </div>
                            <p class="font-medium">Task Manager App</p>
                            <p class="text-sm text-gray-500 mt-1">Mobile application for personal productivity</p>
                            <div class="mt-3 flex flex-wrap gap-1">
                                <span class="bg-gray-100 text-gray-800 px-2 py-0.5 rounded-full text-xs">Flutter</span>
                                <span class="bg-gray-100 text-gray-800 px-2 py-0.5 rounded-full text-xs">Firebase</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="space-y-6">
                <!-- Alumni Badges -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-bold">Alumni Badges</h3>
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

</html>