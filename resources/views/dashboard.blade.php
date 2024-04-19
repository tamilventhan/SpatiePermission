<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Icon Blocks -->
            <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 items-center gap-6">
                    <!-- Card -->
                    <a class="group flex gap-y-6 size-full hover:bg-gray-100 rounded-lg p-5 transition-all dark:hover:bg-neutral-800 dark:focus:outline-none dark:focus:outline-none dark:focus:bg-neutral-800"
                        href="#">
                        <svg class="flex-shrink-0 size-8 text-gray-800 mt-0.5 me-6 dark:text-neutral-200"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="13.5" cy="6.5" r=".5" />
                            <circle cx="17.5" cy="10.5" r=".5" />
                            <circle cx="8.5" cy="7.5" r=".5" />
                            <circle cx="6.5" cy="12.5" r=".5" />
                            <path
                                d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10c.926 0 1.648-.746 1.648-1.688 0-.437-.18-.835-.437-1.125-.29-.289-.438-.652-.438-1.125a1.64 1.64 0 0 1 1.668-1.668h1.996c3.051 0 5.555-2.503 5.555-5.554C21.965 6.012 17.461 2 12 2z" />
                        </svg>

                        <div>
                            <div>
                                <h3 class="block font-bold text-gray-800 dark:text-white">Build your portfolio</h3>
                                <p class="text-gray-600 dark:text-neutral-400">The simplest way to keep your portfolio
                                    always up-to-date.</p>
                            </div>

                            <p
                                class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold text-gray-800 dark:text-neutral-200">
                                Learn more
                                <svg class="flex-shrink-0 size-4 transition ease-in-out group-hover:translate-x-1 group-focus:translate-x-1"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="m9 18 6-6-6-6" />
                                </svg>
                            </p>
                        </div>
                    </a>
                    <!-- End Card -->

                    <!-- Card -->
                    <a class="group flex gap-y-6 size-full hover:bg-gray-100 rounded-lg p-5 transition-all dark:hover:bg-neutral-800 dark:focus:outline-none dark:focus:outline-none dark:focus:bg-neutral-800"
                        href="#">
                        <svg class="flex-shrink-0 size-8 text-gray-800 mt-0.5 me-6 dark:text-neutral-200"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M2 3h20" />
                            <path d="M21 3v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V3" />
                            <path d="m7 21 5-5 5 5" />
                        </svg>

                        <div>
                            <div>
                                <h3 class="block font-bold text-gray-800 dark:text-white">Get freelance work</h3>
                                <p class="text-gray-600 dark:text-neutral-400">New design projects delivered to your
                                    inbox each morning.</p>
                            </div>

                            <p
                                class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold text-gray-800 dark:text-neutral-200">
                                Learn more
                                <svg class="flex-shrink-0 size-4 transition ease-in-out group-hover:translate-x-1 group-focus:translate-x-1"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="m9 18 6-6-6-6" />
                                </svg>
                            </p>
                        </div>
                    </a>
                    <!-- End Card -->

                    <!-- Card -->
                    <a class="group flex gap-y-6 size-full hover:bg-gray-100 rounded-lg p-5 transition-all dark:hover:bg-neutral-800 dark:focus:outline-none dark:focus:outline-none dark:focus:bg-neutral-800"
                        href="#">
                        <svg class="flex-shrink-0 size-8 text-gray-800 mt-0.5 me-6 dark:text-neutral-200"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m2 7 4.41-4.41A2 2 0 0 1 7.83 2h8.34a2 2 0 0 1 1.42.59L22 7" />
                            <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8" />
                            <path d="M15 22v-4a2 2 0 0 0-2-2h-2a2 2 0 0 0-2 2v4" />
                            <path d="M2 7h20" />
                            <path
                                d="M22 7v3a2 2 0 0 1-2 2v0a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 16 12a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 12 12a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 8 12a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 4 12v0a2 2 0 0 1-2-2V7" />
                        </svg>

                        <div>
                            <div>
                                <h3 class="block font-bold text-gray-800 dark:text-white">Sell your goods</h3>
                                <p class="text-gray-600 dark:text-neutral-400">Get your goods in front of millions of
                                    potential customers with ease.</p>
                            </div>

                            <p
                                class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold text-gray-800 dark:text-neutral-200">
                                Learn more
                                <svg class="flex-shrink-0 size-4 transition ease-in-out group-hover:translate-x-1 group-focus:translate-x-1"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="m9 18 6-6-6-6" />
                                </svg>
                            </p>
                        </div>
                    </a>
                    <!-- End Card -->
                </div>
            </div>
            <!-- End Icon Blocks -->

            <!-- Features -->
            <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                <div class="relative p-6 md:p-16">
                    <!-- Grid -->
                    <div class="relative z-10 lg:grid lg:grid-cols-12 lg:gap-16 lg:items-center">
                        <div class="mb-10 lg:mb-0 lg:col-span-6 lg:col-start-8 lg:order-2">
                            <h2 class="text-2xl text-gray-800 font-bold sm:text-3xl dark:text-neutral-200">
                                Fully customizable rules to match your unique needs
                            </h2>

                            <!-- Tab Navs -->
                            <nav class="grid gap-4 mt-5 md:mt-10" aria-label="Tabs" role="tablist">
                                <button type="button"
                                    class="hs-tab-active:bg-white hs-tab-active:shadow-md hs-tab-active:hover:border-transparent text-start hover:bg-gray-200 p-4 md:p-5 rounded-xl dark:hs-tab-active:bg-neutral-700 dark:hover:bg-neutral-700 active"
                                    id="tabs-with-card-item-1" data-hs-tab="#tabs-with-card-1"
                                    aria-controls="tabs-with-card-1" role="tab">
                                    <span class="flex">
                                        <svg class="flex-shrink-0 mt-2 size-6 md:size-7 hs-tab-active:text-blue-600 text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-neutral-200"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 5.5A3.5 3.5 0 0 1 8.5 2H12v7H8.5A3.5 3.5 0 0 1 5 5.5z" />
                                            <path d="M12 2h3.5a3.5 3.5 0 1 1 0 7H12V2z" />
                                            <path d="M12 12.5a3.5 3.5 0 1 1 7 0 3.5 3.5 0 1 1-7 0z" />
                                            <path d="M5 19.5A3.5 3.5 0 0 1 8.5 16H12v3.5a3.5 3.5 0 1 1-7 0z" />
                                            <path d="M5 12.5A3.5 3.5 0 0 1 8.5 9H12v7H8.5A3.5 3.5 0 0 1 5 12.5z" />
                                        </svg>
                                        <span class="grow ms-6">
                                            <span
                                                class="block text-lg font-semibold hs-tab-active:text-blue-600 text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-neutral-200">Advanced
                                                tools</span>
                                            <span
                                                class="block mt-1 text-gray-800 dark:hs-tab-active:text-gray-200 dark:text-neutral-200">Use
                                                Preline thoroughly thought and automated libraries to manage your
                                                businesses.</span>
                                        </span>
                                    </span>
                                </button>

                                <button type="button"
                                    class="hs-tab-active:bg-white hs-tab-active:shadow-md hs-tab-active:hover:border-transparent text-start hover:bg-gray-200 p-4 md:p-5 rounded-xl dark:hs-tab-active:bg-neutral-700 dark:hover:bg-neutral-700"
                                    id="tabs-with-card-item-2" data-hs-tab="#tabs-with-card-2"
                                    aria-controls="tabs-with-card-2" role="tab">
                                    <span class="flex">
                                        <svg class="flex-shrink-0 mt-2 size-6 md:size-7 hs-tab-active:text-blue-600 text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-neutral-200"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m12 14 4-4" />
                                            <path d="M3.34 19a10 10 0 1 1 17.32 0" />
                                        </svg>
                                        <span class="grow ms-6">
                                            <span
                                                class="block text-lg font-semibold hs-tab-active:text-blue-600 text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-neutral-200">Smart
                                                dashboards</span>
                                            <span
                                                class="block mt-1 text-gray-800 dark:hs-tab-active:text-gray-200 dark:text-neutral-200">Quickly
                                                Preline sample components, copy-paste codes, and start right off.</span>
                                        </span>
                                    </span>
                                </button>

                                <button type="button"
                                    class="hs-tab-active:bg-white hs-tab-active:shadow-md hs-tab-active:hover:border-transparent text-start hover:bg-gray-200 p-4 md:p-5 rounded-xl dark:hs-tab-active:bg-neutral-700 dark:hover:bg-neutral-700"
                                    id="tabs-with-card-item-3" data-hs-tab="#tabs-with-card-3"
                                    aria-controls="tabs-with-card-3" role="tab">
                                    <span class="flex">
                                        <svg class="flex-shrink-0 mt-2 size-6 md:size-7 hs-tab-active:text-blue-600 text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-neutral-200"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path
                                                d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3Z" />
                                            <path d="M5 3v4" />
                                            <path d="M19 17v4" />
                                            <path d="M3 5h4" />
                                            <path d="M17 19h4" />
                                        </svg>
                                        <span class="grow ms-6">
                                            <span
                                                class="block text-lg font-semibold hs-tab-active:text-blue-600 text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-neutral-200">Powerful
                                                features</span>
                                            <span
                                                class="block mt-1 text-gray-800 dark:hs-tab-active:text-gray-200 dark:text-neutral-200">Reduce
                                                time and effort on building modern look design with Preline only.</span>
                                        </span>
                                    </span>
                                </button>
                            </nav>
                            <!-- End Tab Navs -->
                        </div>
                        <!-- End Col -->

                        <div class="lg:col-span-6">
                            <div class="relative">
                                <!-- Tab Content -->
                                <div>
                                    <div id="tabs-with-card-1" role="tabpanel" aria-labelledby="tabs-with-card-item-1">
                                        <img class="shadow-xl shadow-gray-200 rounded-xl dark:shadow-gray-900/20"
                                            src="https://images.unsplash.com/photo-1605629921711-2f6b00c6bbf4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&h=1220&q=80"
                                            alt="Image Description">
                                    </div>

                                    <div id="tabs-with-card-2" class="hidden" role="tabpanel"
                                        aria-labelledby="tabs-with-card-item-2">
                                        <img class="shadow-xl shadow-gray-200 rounded-xl dark:shadow-gray-900/20"
                                            src="https://images.unsplash.com/photo-1665686306574-1ace09918530?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&h=1220&q=80"
                                            alt="Image Description">
                                    </div>

                                    <div id="tabs-with-card-3" class="hidden" role="tabpanel"
                                        aria-labelledby="tabs-with-card-item-3">
                                        <img class="shadow-xl shadow-gray-200 rounded-xl dark:shadow-gray-900/20"
                                            src="https://images.unsplash.com/photo-1598929213452-52d72f63e307?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&h=1220&q=80"
                                            alt="Image Description">
                                    </div>
                                </div>
                                <!-- End Tab Content -->

                                <!-- SVG Element -->
                                <div class="hidden absolute top-0 end-0 translate-x-20 md:block lg:translate-x-20">
                                    <svg class="w-16 h-auto text-orange-500" width="121" height="135"
                                        viewBox="0 0 121 135" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 16.4754C11.7688 27.4499 21.2452 57.3224 5 89.0164"
                                            stroke="currentColor" stroke-width="10" stroke-linecap="round" />
                                        <path d="M33.6761 112.104C44.6984 98.1239 74.2618 57.6776 83.4821 5"
                                            stroke="currentColor" stroke-width="10" stroke-linecap="round" />
                                        <path d="M50.5525 130C68.2064 127.495 110.731 117.541 116 78.0874"
                                            stroke="currentColor" stroke-width="10" stroke-linecap="round" />
                                    </svg>
                                </div>
                                <!-- End SVG Element -->
                            </div>
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Grid -->

                    <!-- Background Color -->
                    <div class="absolute inset-0 grid grid-cols-12 size-full">
                        <div
                            class="col-span-full lg:col-span-7 lg:col-start-6 bg-gray-100 w-full h-5/6 rounded-xl sm:h-3/4 lg:h-full dark:bg-neutral-800">
                        </div>
                    </div>
                    <!-- End Background Color -->
                </div>
            </div>
            <!-- End Features -->

            <div class="bg-white overflow-hidden  sm:rounded-lg">
                <!-- Card Section -->
                <div class="max-w-5xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                    <!-- Grid -->
                    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-3 sm:gap-6">
                        <!-- Card -->
                        <a class="group flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-neutral-900 dark:border-neutral-800"
                            href="#">
                            <div class="p-4 md:p-5">
                                <div class="flex">
                                    <svg class="mt-1 flex-shrink-0 size-5 text-gray-800 dark:text-neutral-200"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                        <circle cx="9" cy="7" r="4" />
                                        <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                    </svg>

                                    <div class="grow ms-5">
                                        <h3
                                            class="group-hover:text-blue-600 font-semibold text-gray-800 dark:group-hover:text-neutral-400 dark:text-neutral-200">
                                            Ask our community
                                        </h3>
                                        <p class="text-sm text-gray-500 dark:text-neutral-500">
                                            Get help from 40k+ Preline users
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!-- End Card -->

                        <!-- Card -->
                        <a class="group flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-neutral-900 dark:border-neutral-800"
                            href="#">
                            <div class="p-4 md:p-5">
                                <div class="flex">
                                    <svg class="mt-1 flex-shrink-0 size-5 text-gray-800 dark:text-neutral-200"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10" />
                                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
                                        <path d="M12 17h.01" />
                                    </svg>

                                    <div class="grow ms-5">
                                        <h3
                                            class="group-hover:text-blue-600 font-semibold text-gray-800 dark:group-hover:text-neutral-400 dark:text-neutral-200">
                                            Get help in the app
                                        </h3>
                                        <p class="text-sm text-gray-500 dark:text-neutral-500">
                                            Just head to «Help» in the app
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!-- End Card -->

                        <!-- Card -->
                        <a class="group flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-neutral-900 dark:border-neutral-800"
                            href="#">
                            <div class="p-4 md:p-5">
                                <div class="flex">
                                    <svg class="mt-1 flex-shrink-0 size-5 text-gray-800 dark:text-neutral-200"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path
                                            d="M21.2 8.4c.5.38.8.97.8 1.6v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V10a2 2 0 0 1 .8-1.6l8-6a2 2 0 0 1 2.4 0l8 6Z" />
                                        <path d="m22 10-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 10" />
                                    </svg>

                                    <div class="grow ms-5">
                                        <h3
                                            class="group-hover:text-blue-600 font-semibold text-gray-800 dark:group-hover:text-neutral-400 dark:text-neutral-200">
                                            Email us
                                        </h3>
                                        <p class="text-sm text-gray-500 dark:text-neutral-500">
                                            Reach us at <span
                                                class="text-blue-600 decoration-2 group-hover:underline font-medium dark:text-blue-500">info@site.com</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!-- End Card -->
                    </div>
                    <!-- End Grid -->
                </div>
                <!-- End Card Section -->
            </div>


        </div>
    </div>
</x-app-layout>