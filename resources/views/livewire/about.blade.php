@section('title')
    About Yudha
@endsection

<section class="flex flex-col items-center p-8 gap-y-8 lg:px-96">
    <div class="flex flex-col items-center">
        <img src="{{ asset('person.png') }}" alt="Yudha Prawira Sugiharto"
            class="w-32 p-1 rounded-full ring-2 ring-gray-300 mb-4">
        <h1 class="font-medium text-2xl text-gray-700 text-center">Yudha Prawira Sugiharto</h1>
        <span class="text-gray-700 pt-2">Web Developer</span>
        <div class="text-gray-700 mt-4 flex gap-x-4">
            <a href="https://www.linkedin.com/in/yudha-sugiharto-programmer">
                <svg width="24px" height="24px" stroke-width="1.5" viewBox="0 0 24 24" fill="none"
                    class="hover:animate-bounce" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M21 8V16C21 18.7614 18.7614 21 16 21H8C5.23858 21 3 18.7614 3 16V8C3 5.23858 5.23858 3 8 3H16C18.7614 3 21 5.23858 21 8Z"
                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M7 17V13.5V10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                    <path d="M11 17V13.75M11 10V13.75M11 13.75C11 10 17 10 17 13.75V17" stroke="currentColor"
                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M7 7.01L7.01 6.99889" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                </svg>
            </a>
            <a href="https://www.github.com/ziruiproject">
                <svg width="24px" height="24px" stroke-width="1.5" viewBox="0 0 24 24" fill="none"
                    class="hover:animate-bounce" xmlns="http://www.w3.org/2000/svg" color="currentColor">
                    <path
                        d="M16 22.0268V19.1568C16.0375 18.68 15.9731 18.2006 15.811 17.7506C15.6489 17.3006 15.3929 16.8902 15.06 16.5468C18.2 16.1968 21.5 15.0068 21.5 9.54679C21.4997 8.15062 20.9627 6.80799 20 5.79679C20.4558 4.5753 20.4236 3.22514 19.91 2.02679C19.91 2.02679 18.73 1.67679 16 3.50679C13.708 2.88561 11.292 2.88561 8.99999 3.50679C6.26999 1.67679 5.08999 2.02679 5.08999 2.02679C4.57636 3.22514 4.54413 4.5753 4.99999 5.79679C4.03011 6.81549 3.49251 8.17026 3.49999 9.57679C3.49999 14.9968 6.79998 16.1868 9.93998 16.5768C9.61098 16.9168 9.35725 17.3222 9.19529 17.7667C9.03334 18.2112 8.96679 18.6849 8.99999 19.1568V22.0268"
                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M9 20.0267C6 20.9999 3.5 20.0267 2 17.0267" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </a>
            <a href="https://www.instagram.com/yut.prw">
                <svg width="24px" height="24px" stroke-width="1.5" viewBox="0 0 24 24" fill="none"
                    class="hover:animate-bounce" xmlns="http://www.w3.org/2000/svg" color="currentColor">
                    <path
                        d="M12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z"
                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path
                        d="M3 16V8C3 5.23858 5.23858 3 8 3H16C18.7614 3 21 5.23858 21 8V16C21 18.7614 18.7614 21 16 21H8C5.23858 21 3 18.7614 3 16Z"
                        stroke="currentColor" stroke-width="1.5"></path>
                    <path d="M17.5 6.51L17.51 6.49889" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                </svg>
            </a>
        </div>
    </div>
    <div class="flex gap-x-4 lg:gap-0">
        <a href="mailto:yudhasugiharto.enterprise@gmail.com" target="_blank"
            class="inline-flex justify-center items-center py-3 px-5 md:text-base text-sm font-medium text-center text-white rounded-lg bg-[#070F2B] hover:bg-[#070F2B] focus:ring-4 focus:ring-[#070F2B]">
            Contact Me
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6 ml-2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
            </svg>
        </a>
        <a class="inline-flex justify-center items-center py-3 px-5 sm:ms-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-[#070F2B] focus:z-10 focus:ring-4 focus:ring-gray-100"
            href="{{ asset('storage/attachments/CV_YUDHA_PRAWIRA_SUGIHARTO.pdf') }}" download="">
            Download CV
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6 ml-2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
            </svg>
        </a>
    </div>
    <p class="text-gray-700">
        I'm a Web Developer with a strong background in Mathematics from the Sepuluh Nopember Institute of Technology,
        currently based in Surabaya. I'm skilled in PHP, Laravel, Java, and JavaScript, and I work with SQL
        databases daily. Currently, I am expanding my skill through an internship at Bee.id as a Java Developer.
    </p>


    <ol class="relative border-s border-gray-200">
        <li class="mb-10 ms-4">
            <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white">
            </div>
            <time class="mb-1 text-sm font-normal leading-none text-gray-400">July 2024 — January 2025</time>
            <h3 class="text-lg font-semibold text-gray-900">Java Developer at Bee.id</h3>
            <ul class="mb-4 text-base font-normal text-gray-500">
                <li>
                    - Developed core features for Beeaccounting's software using Java
                </li>
                <li>
                    - Developed custom plugins for Beeaccounting
                </li>
                <li>
                    - Maintain Java Swing Application
                </li>
                <li>
                    - Contributed to the design and development of user interfaces
                </li>
            </ul>
            <a href="https://www.beeaccounting.com" target="_blank"
                class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-[#070F2B] focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-100 focus:text-[#070F2B]">
                Learn more
                <svg class="w-3 h-3 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
        </li>
        <li class="mb-10 ms-4">
            <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white">
            </div>
            <time class="mb-1 text-sm font-normal leading-none text-gray-400">June 2024 — October 2024</time>
            <h3 class="text-lg font-semibold text-gray-900">Laravel Backend Developer at OMITS 17th</h3>
            <ul class="mb-4 text-base font-normal text-gray-500">
                <li>
                    - Developed a scalable MySQL database schema to manage user registrations
                </li>
                <li>
                    - Developed structured and optimized database tables
                </li>
                <li>
                    - Prevent SQL injection and XSS attacks
                </li>
                <li>
                    - Implemented role-based access control
                </li>
                <li>
                    - Collaborated with frontend developers
                </li>
                <li>
                    - Maintain system stability and performance
                </li>
                <li>
                    - Provided updates on project progress
                </li>
            </ul>
            <a href="https://www.omits-himatika.com" target="_blank"
                class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-[#070F2B] focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-100 focus:text-[#070F2B]">
                Learn more
                <svg class="w-3 h-3 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
        </li>
    </ol>


</section>
