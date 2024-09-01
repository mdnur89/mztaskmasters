<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('static.parts.head')

<body id="top" class="antialiased bg-cover bg-[#0a0a0a] bg-center" style="background-image: url('/bg.svg');">
    @include('layouts.partials.navbar')
    <section class="main flex min-h-screen items-center justify-center flex-col">
        <div
            class="flex flex-col sm:flex-row gap-4 sm:items-center dark:bg-dots-lighter h-[70vh] selection:bg-red-500 selection:text-blue-300">
            <div class="left flex gap-4 flex-col justify-between items-start animate-fade-in-up">
                <div class="text-4xl archivo animate-text-gradient">
                    Welcome to Mazitask <br>
                    We connect clients to skills, <br>
                    managing projects with ease
                </div>
                <div class="flex gap-2">
                    <a href="{{ route('register') }}"
                        class="btn btn-outline btn-secondary text-gray-50 normal-case ring-1 animate-pulse">
                        Get Started
                    </a>
                    <a href="{{ route('about') }}"
                        class="btn btn-outline btn-ghost text-white normal-case ring-1 hover:animate-bounce">
                        Learn More
                    </a>
                </div>

                <div class="bottom animate-fade-in">
                    We are striving to make the world a <br>
                    better place and we are doing it <br>
                    one gig at a time
                </div>
            </div>

            <img src="work.svg" alt="hero" class="w-96 animate-float">
        </div>
    </section>

    <section class="bento-grid py-16 px-4 bg-[#0a0a0a] text-white">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center mb-8 animate-text-gradient">Our Services</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div class="relative bento-card animate-fade-in-up" style="animation-delay: 0.2s;">
                    <div class="picture-frame">
                        <img src="service-prac_1.jpg" alt="Skill Matching" class="w-full h-full object-cover">
                    </div>
                    <div class="content bg-[#0a0a0a] p-6 rounded-lg shadow-md mt-[-30px] border border-[#2e341b]">
                        <h3 class="text-xl font-semibold mb-4">Skill Matching</h3>
                        <p>Connect with the perfect freelancer for your project needs.</p>
                    </div>
                </div>
                <div class="relative bento-card animate-fade-in-up" style="animation-delay: 0.4s;">
                    <div class="picture-frame">
                        <img src="service-prac_2.jpg" alt="Project Management" class="w-full h-full object-cover">
                    </div>
                    <div class="content bg-[#0a0a0a] p-6 rounded-lg shadow-md mt-[-30px] border border-[#2e341b]">
                        <h3 class="text-xl font-semibold mb-4">Project Management</h3>
                        <p>Efficiently manage and track your projects from start to finish.</p>
                    </div>
                </div>
                <div class="relative bento-card animate-fade-in-up" style="animation-delay: 0.6s;">
                    <div class="picture-frame">
                        <img src=""service-prac_3.jpg" alt="Secure Payments" class="w-full h-full object-cover">
                    </div>
                    <div class="content bg-[#0a0a0a] p-6 rounded-lg shadow-md mt-[-30px] border border-[#2e341b]">
                        <h3 class="text-xl font-semibold mb-4">Secure Payments</h3>
                        <p>Enjoy safe and secure transactions for all your gigs.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Updated Equipment Section -->
    <section class="equipment py-16 px-4 bg-[#0a0a0a] text-white">
        <div class="container mx-auto">
            <div class="flex flex-col md:flex-row items-center justify-between gap-8 relative">
                <div class="w-full md:w-2/3 animate-fade-in-left">
                    <div class="picture-frame-large">
                        <img src="service-prac_2.jpg" alt="Equipment" class="w-full h-auto rounded-lg shadow-lg">
                    </div>
                </div>
                <div
                    class="w-full md:w-1/3 animate-fade-in-right md:absolute md:right-0 md:top-1/2 md:transform md:-translate-y-1/2 md:bg-[#0a0a0a] md:bg-opacity-80 md:p-8 md:rounded-lg">
                    <h2 class="text-3xl font-bold mb-4">Equipment</h2>
                    <p class="mb-6">Rent the right equipment for any job, big or small, from heavy duty machinery to
                        simple hand tools, our rental options are designed to save you time and money.</p>
                    <a href="#"
                        class="bg-[#97be3d] text-[#0a0a0a] px-6 py-2 rounded-full hover:bg-[#7da32f] transition duration-300">Explore
                        More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- New Pricing Section (Replacing How It Works) -->
    <section id="pricing" class="pricing py-16 px-4 bg-[#0a0a0a] text-white">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center mb-8 animate-text-gradient">Our Pricing Plans</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="pricing-card bento-card animate-fade-in-up" style="animation-delay: 0.2s;">
                    <div class="content bg-[#0a0a0a] p-8 rounded-lg shadow-lg border border-[#2e341b]">
                        <h3 class="text-2xl font-semibold mb-4">Basic</h3>
                        <p class="text-4xl font-bold mb-6">$19<span class="text-sm font-normal">/month</span></p>
                        <ul class="mb-6 space-y-2">
                            <li>5 projects</li>
                            <li>20 collaborators</li>
                            <li>Basic support</li>
                        </ul>
                        <a href="#" class="btn btn-outline btn-primary w-full">Choose Plan</a>
                    </div>
                </div>
                <div class="pricing-card bento-card animate-fade-in-up" style="animation-delay: 0.4s;">
                    <div class="content bg-[#97be3d] text-[#0a0a0a] p-8 rounded-lg shadow-lg border border-[#2e341b]">
                        <h3 class="text-2xl font-semibold mb-4">Pro</h3>
                        <p class="text-4xl font-bold mb-6">$49<span class="text-sm font-normal">/month</span></p>
                        <ul class="mb-6 space-y-2">
                            <li>Unlimited projects</li>
                            <li>50 collaborators</li>
                            <li>Priority support</li>
                            <li>Advanced analytics</li>
                        </ul>
                        <a href="#" class="btn btn-outline btn-[#0a0a0a] w-full">Choose Plan</a>
                    </div>
                </div>
                <div class="pricing-card bento-card animate-fade-in-up" style="animation-delay: 0.6s;">
                    <div class="content bg-[#0a0a0a] p-8 rounded-lg shadow-lg border border-[#2e341b]">
                        <h3 class="text-2xl font-semibold mb-4">Enterprise</h3>
                        <p class="text-4xl font-bold mb-6">Custom</p>
                        <ul class="mb-6 space-y-2">
                            <li>Unlimited everything</li>
                            <li>24/7 premium support</li>
                            <li>Custom integrations</li>
                            <li>Dedicated account manager</li>
                        </ul>
                        <a href="#" class="btn btn-outline btn-primary w-full">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- New Talent Showcase Section -->
    <section class="talent-showcase py-16 px-4 bg-[#0a0a0a] text-white">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center mb-4 animate-text-gradient">Get to Know Our Talent</h2>
            <p class="text-center text-gray-600 mb-8">Meet some of our top-rated freelancers</p>
            
            <div class="talent-slideshow relative">
                <div class="flex overflow-hidden">
                    <div class="talent-slide w-full flex-shrink-0">
                        <div class="max-w-sm mx-auto bg-[#0a0a0a] rounded-lg shadow-lg overflow-hidden border border-[#2e341b]">
                            <img src="{{ asset('public/api/placeholder/300/300') }}" alt="Talent 1" class="w-full h-64 object-cover">
                            <div class="p-6">
                                <h3 class="text-xl font-semibold mb-2">Jane Doe</h3>
                                <p class="text-gray-600">Web Developer</p>
                            </div>
                        </div>
                    </div>
                    <div class="talent-slide w-full flex-shrink-0">
                        <div class="max-w-sm mx-auto bg-[#0a0a0a] rounded-lg shadow-lg overflow-hidden border border-[#2e341b]">
                            <img src="{{ asset('public/api/placeholder/300/300') }}" alt="Talent 2" class="w-full h-64 object-cover">
                            <div class="p-6">
                                <h3 class="text-xl font-semibold mb-2">John Smith</h3>
                                <p class="text-gray-600">Graphic Designer</p>
                            </div>
                        </div>
                    </div>
                    <div class="talent-slide w-full flex-shrink-0">
                        <div class="max-w-sm mx-auto bg-[#0a0a0a] rounded-lg shadow-lg overflow-hidden border border-[#2e341b]">
                            <img src="{{ asset('public/api/placeholder/300/300') }}" alt="Talent 3" class="w-full h-64 object-cover">
                            <div class="p-6">
                                <h3 class="text-xl font-semibold mb-2">Emily Johnson</h3>
                                <p class="text-gray-600">Content Writer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-[#0a0a0a] p-2 rounded-full shadow-md border border-[#2e341b]" onclick="moveSlide(-1)">
                    &lt;
                </button>
                <button class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-[#0a0a0a] p-2 rounded-full shadow-md border border-[#2e341b]" onclick="moveSlide(1)">
                    &gt;
                </button>
            </div>
        </div>
    </section>

    <!-- New FAQ Section -->
    <section id="faq" class="faq py-16 px-4 bg-[#0a0a0a] text-white">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center mb-8 animate-text-gradient">Frequently Asked Questions</h2>
            <div class="max-w-3xl mx-auto">
                <div class="space-y-6">
                    <div class="faq-item">
                        <button class="faq-question w-full text-left py-4 px-6 bg-[#1a1a1a] rounded-lg hover:bg-[#2a2a2a] transition duration-300 flex justify-between items-center border border-[#2e341b]">
                            <span class="text-lg font-semibold">How does Mazitask work?</span>
                            <svg class="w-6 h-6 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="faq-answer hidden mt-4 pl-6 pr-4 py-4 bg-[#1a1a1a] rounded-lg border border-[#2e341b]">
                            <p>Mazitask connects clients with skilled freelancers. Clients post projects, freelancers bid on them, and once a match is made, work begins. We provide tools for communication, project management, and secure payments.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question w-full text-left py-4 px-6 bg-[#1a1a1a] rounded-lg hover:bg-[#2a2a2a] transition duration-300 flex justify-between items-center border border-[#2e341b]">
                            <span class="text-lg font-semibold">How much does it cost to use Mazitask?</span>
                            <svg class="w-6 h-6 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="faq-answer hidden mt-4 pl-6 pr-4 py-4 bg-[#1a1a1a] rounded-lg border border-[#2e341b]">
                            <p>Mazitask offers different pricing plans to suit various needs. Basic features are available for free, while premium features are available in our paid plans. Check our pricing section for more details.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question w-full text-left py-4 px-6 bg-[#1a1a1a] rounded-lg hover:bg-[#2a2a2a] transition duration-300 flex justify-between items-center border border-[#2e341b]">
                            <span class="text-lg font-semibold">How do you ensure quality work?</span>
                            <svg class="w-6 h-6 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="faq-answer hidden mt-4 pl-6 pr-4 py-4 bg-[#1a1a1a] rounded-lg border border-[#2e341b]">
                            <p>We have a robust rating and review system for both clients and freelancers. We also offer dispute resolution services and only release payments when clients are satisfied with the work delivered.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact py-16 px-4 bg-[#0a0a0a] text-white">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center mb-8 animate-text-gradient">Contact Us</h2>
            <div class="max-w-2xl mx-auto text-center animate-fade-in-up">
                <h3 class="text-xl font-semibold mb-4">Get in Touch</h3>
                <ul class="space-y-2 mb-8">
                    <li>Email: <a href="mailto:info@mazitask.com"
                            class="text-[#97be3d] hover:underline">info@mazitask.co.zw</a></li>
                    <li>Phone: +263 (77) 123-4567</li>
                    <li>Address: 123 MZ Street, City, Country</li>
                </ul>
                <div>
                    <h4 class="text-lg font-semibold mb-2">Follow Us</h4>
                    <div class="flex justify-center space-x-4 social-icons">
                        <a href="#" class="text-[#97be3d] hover:text-[#7da32f] transition-colors duration-300">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Facebook</span>
                        </a>
                        <a href="#" class="text-[#97be3d] hover:text-[#7da32f] transition-colors duration-300">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                            </svg>
                            <span class="sr-only">Twitter</span>
                        </a>
                        <a href="#" class="text-[#97be3d] hover:text-[#7da32f] transition-colors duration-300">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Instagram</span>
                        </a>
                        <a href="#" class="text-[#97be3d] hover:text-[#7da32f] transition-colors duration-300">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">LinkedIn</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(20px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        @keyframes textGradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 1s ease-out;
        }

        .animate-fade-in-left {
            animation: fadeInLeft 1s ease-out;
        }

        .animate-fade-in-right {
            animation: fadeInRight 1s ease-out;
        }

        .animate-float {
            animation: float 3s ease-in-out infinite;
        }

        .animate-text-gradient {
            background: linear-gradient(45deg, #ff6b6b, #4ecdc4, #45b7d1);
            background-size: 200% auto;
            color: transparent;
            -webkit-background-clip: text;
            background-clip: text;
            animation: textGradient 5s linear infinite;
        }

        .picture-frame {
            position: relative;
            width: 100%;
            padding-top: 75%;
            overflow: hidden;
            border: 10px solid #f3f4f6;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .picture-frame img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .picture-frame-large {
            position: relative;
            width: 100%;
            padding-top: 56.25%;
            /* 16:9 aspect ratio */
            overflow: hidden;
            border: 10px solid #f3f4f6;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .picture-frame-large img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .content {
            position: relative;
            z-index: 10;
            transition: all 0.3s ease;
        }

        .bento-card {
            transition: all 0.3s ease;
            border: 1px solid #2e341b;
            border-radius: 0.5rem;
            overflow: hidden;
        }

        .bento-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(46, 52, 27, 0.2);
        }

        .bento-card:hover .picture-frame {
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .bento-card:hover .picture-frame img {
            transform: scale(1.1);
        }

        .pricing-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .pricing-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(46, 52, 27, 0.2);
        }

        .pricing-card .content {
            transition: box-shadow 0.3s ease;
        }

        .talent-slideshow {
            overflow: hidden;
        }

        .talent-slideshow .flex {
            transition: transform 0.3s ease-in-out;
        }

        .talent-slide {
            flex: 0 0 100%;
        }

        .faq-question:hover {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .faq-answer {
            transition: all 0.3s ease-out;
            max-height: 0;
            overflow: hidden;
        }

        .faq-answer:not(.hidden) {
            max-height: 500px;
        }

        .faq-question svg {
            transition: transform 0.3s ease-out;
        }

        .btn-primary, .btn-secondary, .btn-outline-primary, .btn-outline-secondary {
            background-color: #97be3d;
            color: #0a0a0a;
            border-color: #97be3d;
        }

        .btn-primary:hover, .btn-secondary:hover, .btn-outline-primary:hover, .btn-outline-secondary:hover {
            background-color: #7da32f;
            border-color: #7da32f;
        }

        .faq-question {
            background-color: #1a1a1a;
            color: #ffffff;
        }

        .faq-question:hover {
            background-color: #2a2a2a;
        }

        .faq-answer {
            background-color: #1a1a1a;
            color: #ffffff;
        }

        .contact .social-icons a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: rgba(151, 190, 61, 0.1);
            transition: all 0.3s ease;
        }

        .contact .social-icons a:hover {
            background-color: rgba(151, 190, 61, 0.2);
            transform: translateY(-2px);
        }
    </style>

    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll('.talent-slide');

        function moveSlide(direction) {
            currentSlide = (currentSlide + direction + slides.length) % slides.length;
            updateSlidePosition();
        }

        function updateSlidePosition() {
            const slideWidth = slides[0].clientWidth;
            const offset = -currentSlide * slideWidth;
            document.querySelector('.talent-slideshow .flex').style.transform = `translateX(${offset}px)`;
        }

        // Initialize slide position
        updateSlidePosition();

        // Update slide position on window resize
        window.addEventListener('resize', updateSlidePosition);

        // FAQ Accordion
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', () => {
                const answer = question.nextElementSibling;
                const icon = question.querySelector('svg');
                
                answer.classList.toggle('hidden');
                icon.classList.toggle('rotate-180');
                
                // Close other open questions
                document.querySelectorAll('.faq-answer').forEach(item => {
                    if (item !== answer && !item.classList.contains('hidden')) {
                        item.classList.add('hidden');
                        item.previousElementSibling.querySelector('svg').classList.remove('rotate-180');
                    }
                });
            });
        });

        document.addEventListener('DOMContentLoaded', (event) => {
            // Check if there's a hash in the URL
            if (window.location.hash === '#top') {
                // Smooth scroll to the top
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            }
        });
    </script>
</body>

</html>
