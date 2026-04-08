@extends('layout')

@section('content')
<div class="container mx-auto px-4 home-page">
    <div class="text-center home-hero flex flex-col items-center">
        <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold text-gray-900 dark:text-white mb-4">
            Welcome to UCC IT Department
        </h1>
        <p class="text-lg md:text-xl  text-gray-600 dark:text-gray-300 max-w-2xl mx-auto px-2">
            Your gateway to information technology education at the University of the Commonwealth Caribbean
        </p>
    </div>

    <div class="grid home-feature-grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">
        <!-- Faculty/Staff Directory -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 home-card">
            <div>
                <div class="w-8 h-8 md:w-10 md:h-10 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center mb-4 md:mb-5 mx-auto md:mx-0">
                    <svg class="w-3 h-3 md:w-4 md:h-4 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg md:text-xl font-semibold text-gray-900 dark:text-white home-card-title text-center md:text-left">Faculty Directory</h3>
                <p class="text-sm md:text-base text-gray-600 dark:text-gray-300 home-card-copy text-center md:text-left">
                    Connect with our experienced faculty and staff members
                </p>
                <div class="text-center md:text-left">
                    <a href="{{ route('directory.index') }}" class="inline-flex items-center text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300 font-medium text-sm md:text-base">
                        View Directory
                        <svg class="w-2 h-2 md:w-3 md:h-3 ml-1 md:ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Courses -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 home-card">
            <div>
                <div class="w-8 h-8 md:w-10 md:h-10 bg-green-100 dark:bg-green-900 rounded-lg flex items-center justify-center mb-4 md:mb-5 mx-auto md:mx-0">
                    <svg class="w-3 h-3 md:w-4 md:h-4 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h3 class="text-lg md:text-xl font-semibold text-gray-900 dark:text-white home-card-title text-center md:text-left">Courses</h3>
                <p class="text-sm md:text-base text-gray-600 dark:text-gray-300 home-card-copy text-center md:text-left">
                    Explore our comprehensive IT course offerings
                </p>
                <div class="text-center md:text-left">
                    <a href="{{ route('courses.index') }}" class="inline-flex items-center text-green-600 dark:text-green-400 hover:text-green-800 dark:hover:text-green-300 font-medium text-sm md:text-base">
                        View Courses
                        <svg class="w-2 h-2 md:w-3 md:h-3 ml-1 md:ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Admissions -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 home-card">
            <div>
                <div class="w-8 h-8 md:w-10 md:h-10 bg-purple-100 dark:bg-purple-900 rounded-lg flex items-center justify-center mb-4 md:mb-5 mx-auto md:mx-0">
                    <svg class="w-3 h-3 md:w-4 md:h-4 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <h3 class="text-lg md:text-xl font-semibold text-gray-900 dark:text-white home-card-title text-center md:text-left">Admissions</h3>
                <p class="text-sm md:text-base text-gray-600 dark:text-gray-300 home-card-copy text-center md:text-left">
                    Learn about admission requirements and processes
                </p>
                <div class="text-center md:text-left">
                    <a href="{{ route('admissions') }}" class="inline-flex items-center text-purple-600 dark:text-purple-400 hover:text-purple-800 dark:hover:text-purple-300 font-medium text-sm md:text-base">
                        Learn More
                        <svg class="w-2 h-2 md:w-3 md:h-3 ml-1 md:ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Social Media -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 home-card">
            <div>
                <div class="w-8 h-8 md:w-10 md:h-10 bg-pink-100 dark:bg-pink-900 rounded-lg flex items-center justify-center mb-4 md:mb-5 mx-auto md:mx-0">
                    <svg class="w-3 h-3 md:w-4 md:h-4 text-pink-600 dark:text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z"></path>
                    </svg>
                </div>
                <h3 class="text-lg md:text-xl font-semibold text-gray-900 dark:text-white home-card-title text-center md:text-left">Social Media</h3>
                <p class="text-sm md:text-base text-gray-600 dark:text-gray-300 home-card-copy text-center md:text-left">
                    Stay connected with our social media channels
                </p>
                <div class="text-center md:text-left">
                    <a href="{{ route('social-media') }}" class="inline-flex items-center text-pink-600 dark:text-pink-400 hover:text-pink-800 dark:hover:text-pink-300 font-medium text-sm md:text-base">
                        Follow Us
                        <svg class="w-2 h-2 md:w-3 md:h-3 ml-1 md:ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Stats or Additional Info -->
    <div class="bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg text-white home-stats">
        <div class="text-center space-y-6">
            <h2 class="text-2xl font-bold mb-4">Why Choose UCC IT?</h2>
            <div class="grid home-stats-grid grid-cols-1 md:grid-cols-3">
                <div>
                    <div class="text-3xl font-bold mb-2">10+</div>
                    <div class="text-blue-100">Courses Offered</div>
                </div>
                <div>
                    <div class="text-3xl font-bold mb-2">Expert</div>
                    <div class="text-blue-100">Faculty Members</div>
                </div>
                <div>
                    <div class="text-3xl font-bold mb-2">Modern</div>
                    <div class="text-blue-100">Curriculum</div>
                </div>
            </div>
        </div>
    </div>

    <div class="fixed inset-x-0 bottom-0 bg-white/95 dark:bg-slate-900/95 border-t border-slate-200/80 dark:border-slate-700/80 shadow-xl backdrop-blur-md z-50">
        <div class="max-w-6xl mx-auto px-4 py-5 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 text-sm sm:text-base">
            <div class="flex items-center gap-2 font-semibold text-slate-900 dark:text-white">
                <span class="text-lg">📞</span>
                +1-876-555-1234
            </div>
            <div class="text-slate-600 dark:text-slate-300">
                Contact UCC IT for admissions, course support, or general inquiries.
            </div>
        </div>
    </div>
</div>
@endsection
