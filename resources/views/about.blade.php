@extends("layouts.app")

@section("title", "About")

@section('content')

<div class="py-10 px-5 sm:px-20 lg:px-32 text-white">
    <div class="text-center mb-12">
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-[#84C8FF]">About CyRoads</h1>
        <p class="mt-4 text-sm sm:text-base lg:text-lg">
            An ultimate gateway to mastering cybersecurity. Explore engaging, efficient, and community-driven learning experiences with CyRoads.
        </p>
    </div>
    
    <div class="space-y-10">
        <!-- Purpose Section -->
        <div class="bg-gradient-to-bl from-[#2c2c2c] from-10% to-[#0a0a0a] to-70% rounded flex p-6 rounded-lg rounded items-center shadow-lg gap-10">
            <p class= "w-full">
                CyRoads is your comprehensive solution to learn Cybersecurity. We provide interactive roadmaps, connect you to trusted platforms like HackTheBox Academy and TryHackMe, and enable tracking of your progress. Discover resources curated by industry experts to ensure a complete learning experience.
            </p>
            <h2 class="text-2xl w-32 font-semibold text-[#84C8FF] text-right">Our Goals</h2>
        </div>
        
        <!-- Features Section -->
        <div class="bg-gradient-to-bl from-[#2c2c2c] from-10% to-[#0a0a0a] to-70% flex p-6 rounded-lg rounded items-center shadow-lg gap-10">
            <h2 class="text-2xl font-semibold text-[#84C8FF]">Features</h2>
            <ul class="list-disc ml-5 mt-3">
                <li>Interactive learning progress tracking with progress bars.</li>
                <li>Recommended syllabi and courses based on your preferences.</li>
            </ul>
            <ul class="list-disc ml-5 mt-3">
                <li>Detailed information about each course and syllabus.</li>
                <li>Forums for discussions and community engagement.</li>
                <li>Manage completed, ongoing, and saved syllabi and courses.</li>
            </ul>
        </div>
        
        <!-- Why Choose Us Section -->
        <div class="bg-gradient-to-bl from-[#2c2c2c] from-10% to-[#0a0a0a] to-70% flex p-6 rounded-lg rounded items-center shadow-lg gap-10">
            <p class="mt-3 w-full">
                Developed with robust security using PHP and Laravel, CyRoads ensures a safe and user-friendly experience. Accessible via web browsers, our platform eliminates the need for additional installations, making cybersecurity learning more convenient and secure.
            </p>
            <h2 class="text-2xl font-semibold text-[#84C8FF] text-right">Why Choose CyRoads?</h2>
        </div>

        <!-- Call to Action -->
        <div class="text-center mt-10">
            <br>
            <a href="" class="bg-[#84C8FF] text-gray-900 px-5 py-3 rounded-lg font-semibold text-lg hover:bg-yellow-300">
                Contact Us
            </a>
        </div>
    </div>

    
</div>



@endsection
