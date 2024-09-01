<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('static.parts.head')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<body class="antialiased bg-cover bg-custom-black bg-center" style="background-image: url('/bg.svg');">
    @include('layouts.partials.navbar')
    <div class="min-h-screen bg-custom-black flex flex-col gap-4 items-center justify-center">
        <header class="py-8 animate-fade-in">
            <h1>
                <a href="{{ route('welcome') }}" class="text-4xl pac-regular animate-text-reveal">About Mazitask</a>
                <span class="text-gray-400 block text-xs pac-thin mt-2 animate-slide-up">
                    A pro platform for freelancers and clients
                </span>
            </h1>
        </header>

        <section class="py-8 bg-gray-400 bg-opacity-5 rounded-md animate-fade-in border-2 border-[#799933]" style="animation-delay: 0.2s;">
            <div class="max-w-4xl mx-auto px-4">
                <h2 class="text-2xl font-bold text-gray-100 animate-text-reveal">Our Mission</h2>
                <p class="mt-4 text-gray-400 animate-slide-up">At Mazitask, our mission is simple: Connect clients with
                    the most talented
                    freelancers across the globe to bring their projects to life. We believe in creating opportunities
                    for skilled individuals while offering businesses of all sizes access to a diverse pool of talent.
                </p>
            </div>
        </section>

        <section class="py-8 bg-gray-400 bg-opacity-5 rounded-md animate-fade-in border-2 border-[#799933]" style="animation-delay: 0.4s;">
            <div class="max-w-4xl mx-auto px-4">
                <h2 class="text-2xl font-bold text-gray-100 animate-text-reveal">Why Choose Us?</h2>
                <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div
                        class="p-4 shadow-sm shadow-gray-50 rounded-lg animate-slide-left hover:transform hover:scale-105 transition-all duration-300">
                        <h3 class="text-xl font-semibold text-gray-100">For Clients</h3>
                        <p class="mt-2 text-gray-400">Discover a world of creative talent at your fingertips. Our
                            platform makes it easy to find and manage freelancers, ensuring your projects are completed
                            on time and within budget.</p>
                    </div>
                    <div
                        class="p-4 shadow-sm shadow-gray-50 rounded-lg animate-slide-right hover:transform hover:scale-105 transition-all duration-300">
                        <h3 class="text-xl font-semibold text-gray-100">For Freelancers</h3>
                        <p class="mt-2 text-gray-400">Gain access to a wide range of projects and collaborate with
                            clients from around the world. We offer tools and resources to help you succeed and grow
                            your freelance business.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-8 animate-fade-in border-2 border-[#799933]" style="animation-delay: 0.8s;">
            <div class="max-w-4xl mx-auto px-4">
                <h2 class="text-2xl font-bold text-gray-100 animate-text-reveal">Join Our Mission</h2>
                <p class="mt-4 text-gray-400 animate-slide-up">We're more than just a platform; we're a community.
                    Together, we can
                    create a positive impact on the world, one project at a time. If you share our vision of a better
                    future through collaboration and innovation, join us today.</p>
                <div class="mt-6 animate-bounce-in">
                    <a href="#"
                        class="btn btn-info ring-1 ring-inset hover:animate-pulse transition-all duration-300">Get
                        Started</a>
                    <a href="#"
                        class="ml-2 btn btn-ghost ring-1 ring-inset hover:animate-pulse transition-all duration-300">Pro
                        Plans</a>
                </div>
            </div>
        </section>

        <footer class="bg-gray-100 bg-opacity-20 w-full text-white rounded-b-md py-4 animate-fade-in"
            style="animation-delay: 1.2s;">
            <div class="max-w-6xl mx-auto px-4">
                <div class="flex flex-col items-center justify-center">
                    <div class="flex space-x-4 mb-4">
                        <a href="#" class="text-white hover:text-gray-400 transition-colors duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-white hover:text-gray-400 transition-colors duration-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-white hover:text-gray-400 transition-colors duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-white hover:text-gray-400 transition-colors duration-300">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                    <p class="text-gray-100 text-center">&copy; 2024 Mazitask. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>

    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideUp {
            from {
                transform: translateY(20px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideLeft {
            from {
                transform: translateX(-20px);
                opacity: 0;
            }

            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes slideRight {
            from {
                transform: translateX(20px);
                opacity: 0;
            }

            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes textReveal {
            from {
                clip-path: inset(0 100% 0 0);
            }

            to {
                clip-path: inset(0 0 0 0);
            }
        }

        @keyframes bounceIn {
            0% {
                transform: scale(0.3);
                opacity: 0;
            }

            50% {
                transform: scale(1.05);
                opacity: 1;
            }

            70% {
                transform: scale(0.9);
            }

            100% {
                transform: scale(1);
            }
        }

        .animate-fade-in {
            animation: fadeIn 1s ease-out forwards;
        }

        .animate-slide-up {
            animation: slideUp 1s ease-out forwards;
        }

        .animate-slide-left {
            animation: slideLeft 1s ease-out forwards;
        }

        .animate-slide-right {
            animation: slideRight 1s ease-out forwards;
        }

        .animate-text-reveal {
            animation: textReveal 1s cubic-bezier(0.77, 0, 0.175, 1) forwards;
        }

        .animate-bounce-in {
            animation: bounceIn 0.8s cubic-bezier(0.215, 0.610, 0.355, 1.000) forwards;
        }

        .hover\:animate-pulse:hover {
            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: .5;
            }
        }

        .border-[#799933] {
            border-color: #799933;
        }
    </style>
</body>

</html>
