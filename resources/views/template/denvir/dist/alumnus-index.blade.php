<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Newsfeed</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class="bg-gray-50 font-sans">
    <div class="flex h-screen overflow-hidden">
        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Header -->
            <header class="bg-white border-b border-gray-200 py-3 px-4 flex items-center justify-between">
                <div class="flex items-center md:hidden">
                    <button class="mr-4">
                        <i class="fas fa-bars text-gray-600"></i>
                    </button>
                    <h1 class="text-xl font-bold text-indigo-600">Alumni Tracer</h1>
                </div>
                <div class="relative w-full max-w-xl mx-4">
                    <input type="text" placeholder="Search..."
                        class="w-full bg-gray-100 rounded-full py-2 px-4 pl-10 focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:bg-white">
                    <i class="fas fa-search absolute left-3 top-2.5 text-gray-400"></i>
                </div>
                <div class="flex items-center space-x-4">
                    <button class="p-2 rounded-full hover:bg-gray-100">
                        <i class="fas fa-plus text-gray-600"></i>
                    </button>
                    <button class="p-2 rounded-full hover:bg-gray-100">
                        <i class="fas fa-bell text-gray-600"></i>
                    </button>
                    <a href="alumnus/profle">
                        <img src="{{ asset('storage/images/' . auth()->user()->profilePicture) }}" alt="Profile"
                            class="w-8 h-8 rounded-full">
                    </a>
                </div>
            </header>

            <!-- Newsfeed Content -->
            <main class="flex-1 overflow-y-auto p-4 md:p-6">
                <!-- Create Post -->
                <form method="post" action="testimony/store" id="postForm">
                    <div class="bg-white rounded-xl shadow-sm p-4 mb-6">
                        <div class="flex items-center space-x-3 mb-4">
                            <img src="{{ asset('storage/images/' . auth()->user()->profilePicture) }}" alt="Profile"
                                class="w-10 h-10 rounded-full">

                            @csrf
                            <input type="text" placeholder="Post a testimony..." name="testimony"
                                class="flex-1 bg-gray-100 rounded-full py-2 px-4 focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:bg-white">

                            <button type="submit" id="publishButton"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Publish</button>
                        </div>
                        <div id="underReview"
                            class="text-sm text-yellow-600 bg-yellow-100 px-3 py-1 rounded-full font-medium flex items-center space-x-2 hidden">
                            <i class="fas fa-hourglass-half mr-2"></i>
                            <span>Your testimony is under review for approval.</span>
                        </div>
                </form>
                <div class="flex justify-between border-t border-gray-100 pt-3">
                    <button
                        class="flex items-center justify-center flex-1 text-gray-500 hover:bg-gray-50 py-2 rounded-lg">
                        <i class="fas fa-video text-red-500 mr-2"></i>
                        <span>Live Video</span>
                    </button>
                    <button
                        class="flex items-center justify-center flex-1 text-gray-500 hover:bg-gray-50 py-2 rounded-lg">
                        <i class="fas fa-images text-green-500 mr-2"></i>
                        <span>Photo/Video</span>
                    </button>
                    <button
                        class="flex items-center justify-center flex-1 text-gray-500 hover:bg-gray-50 py-2 rounded-lg">
                        <i class="fas fa-smile text-yellow-500 mr-2"></i>
                        <span>Feeling/Activity</span>
                    </button>
                </div>
        </div>

        <!-- Posts -->
        <div class="space-y-6">
            <!-- Post 1 -->

            @foreach ($testimonies as $testimony)

                @if (($testimony->user->id == auth()->user()->id || $testimony->user->testimonial_Visibility == "1") && $testimony->is_Approved == "true")
                    <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                        <!-- Post Header -->
                        <div class="p-4 flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <img src="{{ asset('storage/images/' . $testimony->user->profilePicture) }}" alt="Profile"
                                    class="w-10 h-10 rounded-full">
                                <div>
                                    <a href="/profile/{{ $testimony->user->id }}"
                                        class="font-medium">{{ $testimony->user->full_name }}</a>
                                    <p class="text-xs text-gray-500">{{ $testimony->created_at->diffForHumans() }} ·
                                        {!! $testimony->user->testimonial_Visibility == "1" ? '<i class="fas fa-globe-americas"></i>' : 'Visible only to you' !!}
                                    </p>
                                    </p>
                                </div>
                            </div>
                            <button class="text-gray-400 hover:text-gray-600">
                                Class of {{ $testimony->user->graduation_year }}
                            </button>
                        </div>

                        <!-- Post Content -->
                        <div class="px-4 pb-3">
                            <p class="mb-3">{{ $testimony->content }}</p>
                        </div>

                        <!-- Post Stats -->
                        <div class="px-4 py-2 border-t border-gray-100 flex items-center justify-between text-sm text-gray-500">
                            <div class="flex items-center space-x-2">
                                <div class="flex items-center">
                                    <div
                                        class="w-5 h-5 bg-indigo-500 rounded-full flex items-center justify-center text-white text-xs">
                                        <i class="fas fa-thumbs-up"></i>
                                    </div>
                                </div>
                                <span>{{ $testimony->rating }}</span>
                            </div>
                            <div>
                                <span>{{ $testimony->user->job_title }}</span>
                            </div>
                        </div>

                        <!-- Post Actions -->
                        <div class="px-4 py-2 border-t border-gray-100 grid grid-cols-3">
                            <button
                                class="flex items-center justify-center space-x-2 py-2 rounded-lg hover:bg-gray-50 text-gray-500">
                                <i class="far fa-thumbs-up"></i>
                                <span>Like</span>
                            </button>
                            <button
                                class="flex items-center justify-center space-x-2 py-2 rounded-lg hover:bg-gray-50 text-gray-500">
                                <i class="far fa-thumbs-down"></i>
                                <span>Dislike</span>
                            </button>
                        </div>
                    </div>
                @endif
            @endforeach


            <!-- Post 2 -->
            <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                <!-- Post Header -->
                <div class="p-4 flex items-center justify-between">
                    <div class="flex items-center space-x-3">
                        <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Profile"
                            class="w-10 h-10 rounded-full">
                        <div>
                            <p class="font-medium">Jessica Park</p>
                            <p class="text-xs text-gray-500">Yesterday at 4:20 PM · <i class="fas fa-user-friends"></i>
                            </p>
                        </div>
                    </div>
                    <button class="text-gray-400 hover:text-gray-600">
                        <i class="fas fa-ellipsis-h"></i>
                    </button>
                </div>

                <!-- Post Content -->
                <div class="px-4 pb-3">
                    <p class="mb-3">Our team just launched version 3.0 of our product! 🚀 So proud of everyone
                        who contributed to this milestone. Check it out and let us know what you think!</p>
                    <div class="border border-gray-200 rounded-lg p-3 bg-gray-50">
                        <div class="flex">
                            <div
                                class="w-16 h-16 bg-gradient-to-r from-purple-500 to-indigo-600 rounded-lg flex items-center justify-center text-white">
                                <i class="fas fa-box-open text-2xl"></i>
                            </div>
                            <div class="ml-3">
                                <p class="font-medium">Product Name 3.0</p>
                                <p class="text-sm text-gray-500">productwebsite.com</p>
                                <p class="text-sm mt-1">The latest version of our product with new features and
                                    improvements.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Post Stats and Actions (same as above) -->
            </div>
        </div>
        </main>
    </div>
    </div>
</body>
<script>
    // Example script to handle the "under review" message
    $(document).ready(function () {
        // show review message when publish button is clicked
        $("#publishButton").on("click", function (event) {
            event.preventDefault(); // Prevent form submission
            $('#underReview').removeClass('hidden');
            setTimeout(function () {
                $("#postForm").submit()
            }, 3000);
        });
    });
</script>

</html>