@extends('layouts.app')
@section('content')

<!-- slide atas -->
<div class="slide-1 overflow-hidden">
    <div class="">
        <div class=" h-auto w-screen" id="slide">
            <div class="hidden md:flex">
                <img src="{{ asset ('images/bg-pattern.png')}}" class="bg object-cover w-full h-full bg-pattern">
            </div>
            <div class="lg:px-28 text-black get-started-text md:absolute md:top-1/4 mt-28 lg:mt-0 md:mt-0">
                <span class="text-7xl font-bold w-full slide-text lg:w-1/2">Learn design from the
                    expert</span>
                <!-- <span class="text-7xl font-bold ">from the expert</span> -->
                <p class="deskripsi-slide mt-5 md:w-1/2">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Cum numquam maiores, consequatur qui illo, eum voluptas sequi iure eos recusandae assumenda sit
                    amet deleniti vero repellat sed delectus voluptatum id!</p>
                <div class="button-start my-5">
                    <button type="button"
                        class="text-white  hover:bg-moxx-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-moxx-600 dark:hover:bg-moxx-700 dark:focus:ring-moxx-800"
                        id="bg-moxx">
                        Choose plan
                        <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- section why we different -->
<section class="why min-vh-100" id="why">
    <div class="container">
        <div class="row">
            <div class="title text-center mt-40 ">
                <h1 class="text-5xl font-bold">Why we different ?</h1>
                <p class="mt-2">This is the reason for choose our learning platform</p>
            </div>
            <!-- card -->
            <div class="why-card md:flex md:flex-row md:items-center md:justify-center w-full">
                <div class="px-5">
                    <div
                        class="bg-white p-4 max-w-sm rounded-lg border shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700 mt-20">
                        <h5 class="mb-4 text-xl font-medium text-gray-500 dark:text-gray-400">Standard plan</h5>
                        <div class="flex items-baseline text-gray-900 dark:text-black">
                            <span class="text-3xl font-semibold">$</span>
                            <span class="text-5xl font-extrabold tracking-tight">49</span>
                            <span class="ml-1 text-xl font-normal text-gray-500 dark:text-gray-400">/month</span>
                        </div>
                        <ul role="list" class="my-7 space-y-5">
                            <li class="flex space-x-3">
                                <svg class="flex-shrink-0 w-5 h-5 icon-ctg" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">2
                                    team
                                    members</span>
                            </li>
                            <li class="flex space-x-3">
                                <svg class="flex-shrink-0 w-5 h-5 icon-ctg" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">20GB
                                    Cloud storage</span>
                            </li>
                            <li class="flex space-x-3 line-through decoration-gray-500">
                                <svg class="flex-shrink-0 w-5 h-5 icon-ctg" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-base font-normal leading-tight text-gray-500">Sketch Files</span>
                            </li>
                        </ul>
                        <button type="button"
                            class="btn-why text-white font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Choose
                            plan</button>
                    </div>
                </div>
                <div class="px-5">
                    <div
                        class="p-4 max-w-sm bg-white rounded-lg border shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700 mt-20">
                        <h5 class="mb-4 text-xl font-medium text-gray-500 dark:text-gray-400">Standard plan</h5>
                        <div class="flex items-baseline text-gray-900 dark:text-black">
                            <span class="text-3xl font-semibold">$</span>
                            <span class="text-5xl font-extrabold tracking-tight">49</span>
                            <span class="ml-1 text-xl font-normal text-gray-500 dark:text-gray-400">/month</span>
                        </div>
                        <ul role="list" class="my-7 space-y-5">
                            <li class="flex space-x-3">
                                <svg class="flex-shrink-0 w-5 h-5 icon-ctg" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">2
                                    team
                                    members</span>
                            </li>
                            <li class="flex space-x-3">
                                <svg class="flex-shrink-0 w-5 h-5 icon-ctg" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">20GB
                                    Cloud storage</span>
                            </li>
                            <li class="flex space-x-3 line-through decoration-gray-500">
                                <svg class="flex-shrink-0 w-5 h-5 text-gray-400 dark:text-gray-500" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-base font-normal leading-tight text-gray-500">Sketch Files</span>
                            </li>
                        </ul>
                        <button type="button"
                            class="btn-why text-white font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Choose
                            plan</button>
                    </div>
                </div>
                <div class="px-5">
                    <div
                        class="p-4 max-w-sm bg-white rounded-lg border shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700 mt-20">
                        <h5 class="mb-4 text-xl font-medium text-gray-500 dark:text-gray-400">Standard plan</h5>
                        <div class="flex items-baseline text-gray-900 dark:text-black">
                            <span class="text-3xl font-semibold">$</span>
                            <span class="text-5xl font-extrabold tracking-tight">49</span>
                            <span class="ml-1 text-xl font-normal text-gray-500 dark:text-gray-400">/month</span>
                        </div>
                        <ul role="list" class="my-7 space-y-5">
                            <li class="flex space-x-3">
                                <svg class="flex-shrink-0 w-5 h-5 icon-ctg" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">2
                                    team
                                    members</span>
                            </li>
                            <li class="flex space-x-3">
                                <svg class="flex-shrink-0 w-5 h-5 icon-ctg" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">20GB
                                    Cloud storage</span>
                            </li>
                            <li class="flex space-x-3 line-through decoration-gray-500">
                                <svg class="flex-shrink-0 w-5 h-5 text-gray-400 dark:text-gray-500" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-base font-normal leading-tight text-gray-500">Sketch Files</span>
                            </li>
                        </ul>
                        <button type="button"
                            class="btn-why text-white font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Choose
                            plan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section why we different -->

<!-- our course -->
<section class="course min-vh-100">
    <div class="container">
        <div class="row">
            <div class="title-course text-center mt-40">
                <h1 class="text-5xl font-bold">Our courses</h1>
                <p class="mt-2">This is the reason for choose our learning platform</p>
            </div>
            <div class="course-content md:my-24 max-w-screen-xl mx-auto my-12">
                <div class="w-full md:grid md:grid-cols-12 md:gap-4 md:mt-20 ">
                    <!-- bagian 1 -->
                    <div class="md:col-span-3 md:col-end-6 flex items-center justify-center">
                        <img class="object-cover md:w-72 w-72 " src="images/item_bootcamp.png" alt=" course-img">
                    </div>
                    <div class="md:col-span-5 md:my-auto md:col-start-6 title-course">
                        <h1 class="font-bold text-2xl md:text-4xl py-2">
                            Designing Powerpoint
                        </h1>
                        <p class=" "> amet consectetur adipisicing elit. Ducimus aliquam, cum placeat qui eaque
                            nihil unde nemo dolorum molestiae. Distinctio sed molestias veritatis laudantium quaerat
                            minima possimus est corporis sunt!
                        </p>
                    </div>
                    <!-- bagian 1 -->
                    <!-- bagian 2 -->
                    <div class="md:col-span-5 md:my-auto md:col-end-8 title-course my-12 md:order-sm-last"
                        id="course-2">
                        <h1 class="font-bold text-2xl md:text-4xl py-2">
                            Designing Powerpoint
                        </h1>
                        <p class=" "> amet consectetur adipisicing elit. Ducimus aliquam, cum placeat qui eaque
                            nihil unde nemo dolorum molestiae. Distinctio sed molestias veritatis laudantium quaerat
                            minima possimus est corporis sunt!
                        </p>
                    </div>
                    <div
                        class="hidden md:col-span-3 md:col-start-8 md:flex items-center justify-center my-12 md:order-sm-start">
                        <img class="object-cover md:w-72 w-72" src="images/item_bootcamp.png" alt=" course-img">
                    </div>
                    <!-- bagian 2 -->
                    <!-- bagian 3 -->
                    <div class="md:col-span-3 md:col-end-6 flex items-center justify-center">
                        <img class="object-cover md:w-72 w-72 " src="images/item_bootcamp.png" alt=" course-img">
                    </div>
                    <div class="md:col-span-5 md:my-auto md:col-start-6 title-course">
                        <h1 class="font-bold text-2xl md:text-4xl py-2">
                            Designing Powerpoint
                        </h1>
                        <p class=" "> amet consectetur adipisicing elit. Ducimus aliquam, cum placeat qui eaque
                            nihil unde nemo dolorum molestiae. Distinctio sed molestias veritatis laudantium quaerat
                            minima possimus est corporis sunt!
                        </p>
                    </div>
                    <!-- bagian 3 -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- our course -->

<!-- our mentor -->
<section class="mentor mx-auto my-24 max-w-screen-xl w-full">
    <div class="text-center">
        <h1 class="text-5xl font-bold">Our Mentor</h1>
        <p class="my-2">This is the reason for choose our learning platform.</p>
    </div>
    <div class="our-mentor my-12 grid md:grid-cols-12">
        <div class=" md:col-span-3 md:col-end-6">
            <img src="images/jungkook.jpg" alt="mentor" class="rounded-full w-52 overflow-hidden mx-auto">
        </div>
        <div class="md:col-span-5 md:my-auto mentor-text">
            <h3 class="text-2xl font-bold">Mr. Rhemzy Putra Maulana</h3>
            <p class="font-semibold ">Undergraduate Student Designer</p>
        </div>
    </div>
    </div>
</section>
<!-- our mentor -->

<!-- testimonal -->
<section class="lg:my-12 max-w-screen-xl mx-auto" id="testimonal">
    <div class="title-testi text-center" id="">
        <h1 class="text-5xl font-bold">Testimonal</h1>
        <p class="font-semibold">This is the reason for choose our learning platform.</p>
    </div>
    <div class="mt-20 grid lg:grid-cols-3 ">
        <div class="max-w-sm py-4 px-8 mx-auto bg-white shadow-lg rounded-lg my-20">
            <div class="flex justify-center md:justify-end -mt-16">
                <img class="w-20 h-20 object-cover rounded-full border-2 border-green-500" alt="img"
                    src="https://images.unsplash.com/photo-1499714608240-22fc6ad53fb2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80">
            </div>
            <div>
                <h2 class="text-gray-800 text-3xl font-semibold">Design Tools</h2>
                <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae dolores
                    deserunt ea doloremque natus error, rerum quas odio quaerat nam ex commodi hic.</p>
            </div>
            <div class="flex justify-end mt-4">
                <a href="#" class="text-xl font-medium name-testi">John Doe</a>
            </div>
        </div>
        <div class="mx-auto max-w-sm py-4 px-8 bg-white shadow-lg rounded-lg my-20">
            <div class="flex justify-center md:justify-end -mt-16">
                <img class="w-20 h-20 object-cover rounded-full border-2 border-green-500" alt="img"
                    src="{{ asset ('images/jungkook.jpg')}}">
            </div>
            <div>
                <h2 class="text-gray-800 text-3xl font-semibold">Design Tools</h2>
                <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae dolores
                    deserunt ea doloremque natus error, rerum quas odio quaerat nam ex commodi hic.</p>
            </div>
            <div class="flex justify-end mt-4">
                <a href="#" class="text-xl font-medium name-testi">John Doe</a>
            </div>
        </div>
        <div class="mx-auto max-w-sm py-4 px-8 bg-white shadow-lg rounded-lg my-20">
            <div class="flex justify-center md:justify-end -mt-16">
                <img class="w-20 h-20 object-cover rounded-full border-2 border-green-500" alt="img"
                    src="https://images.unsplash.com/photo-1499714608240-22fc6ad53fb2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80">
            </div>
            <div>
                <h2 class="text-gray-800 text-3xl font-semibold">Design Tools</h2>
                <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae dolores
                    deserunt ea doloremque natus error, rerum quas odio quaerat nam ex commodi hic.</p>
            </div>
            <div class="flex justify-end mt-4">
                <a href="#" class="text-xl font-medium name-testi">John Doe</a>
            </div>
        </div>
    </div>
</section>
<!-- testimonal -->

<!-- contact us -->
<footer class="h-auto max-w-screen-xl my-12 mx-auto mt-20">
    <div class="mt-5 text-center">
        <h1 class="text-5xl font-bold">Contact us</h1>
        <span>Subscribe for newest information and promos!</span>
    </div>
    <div class="flex justify-center mt-10 search" id="search">
        <div class="mb-3 md:xl:w-96 ">
            <div class="input-group relative flex flex-wrap items-stretch w-full mb-4 ">
                <input type=" md:search"
                    class=" form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded-full transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                    placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                <button
                    class="btn inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700  focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out flex items-center"
                    type="button" id="button-addon2">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4"
                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor"
                            d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
                        </path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div class="flex justify-center md:mt-32 mt-12">
        <div class="grid grid-cols-6 mb-2 mx-3">
            <div class="col-span-3">
                <ul class="">
                    <li class="py-2">Home</li>
                    <li class="py-2">About</li>
                    <li class="py-2">Feauture</li>
                    <li class="py-2">Contact</li>
                </ul>
            </div>
        </div>
        <div class="grid md:grid-cols-6 mb-2 mx-3">
            <div class="col-span-3">
                <ul class="">
                    <li class="py-2">FAQ</li>
                    <li class="py-2">Term and Condition</li>
                    <li class="py-2">Privacy Policy</li>
                    <li class="py-2">Partnership</li>
                </ul>
            </div>
        </div>
        <div class="grid md:grid-cols-6 mb-2 mx-3 ">
            <div class="col-span-3">
                <ul class="">
                    <a href="#!" type="button"
                        class="rounded-full border-2 border-black text-black leading-normal uppercase hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
                        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f"
                            class="w-2 h-full mx-auto" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 320 512">
                            <path fill="currentColor"
                                d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                            </path>
                        </svg>
                    </a>
                    <a href="#!" type="button"
                        class="rounded-full border-2 border-black text-black leading-normal uppercase hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
                        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google"
                            class="w-3 h-full mx-auto" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 488 512">
                            <path fill="currentColor"
                                d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z">
                            </path>
                        </svg>
                    </a>

                    <a href="#!" type="button"
                        class="rounded-full border-2 border-black text-black leading-normal uppercase hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
                        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram"
                            class="w-3 h-full mx-auto" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512">
                            <path fill="currentColor"
                                d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                            </path>
                        </svg>
                    </a>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- contact us -->







<!-- Option 1: Bootstrap Bundle with Popper -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script> -->

<!-- Option 2: Separate Popper and Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>

<body>

</body>
@endsection