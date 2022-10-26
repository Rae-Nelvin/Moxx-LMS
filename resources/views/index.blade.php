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
        <div class="">
            <div class="title text-center mt-40 ">
                <h1 class="text-5xl font-bold">Why we different ?</h1>
                <p class="mt-2">This is the reason for choose our learning platform</p>
            </div>
            <!-- card -->
            <div class="why-card md:flex md:flex-row md:items-center md:justify-center w-full">
                <div class="lg:px-5">
                    @foreach ($plan as $plans)
                        <div
                        class="bg-white p-4 max-w-sm rounded-lg border shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700 mt-20">
                            <h5 class="mb-4 text-xl font-medium text-gray-500 dark:text-gray-400">{{ $plans->title }}</h5>
                            <div class="flex items-baseline text-gray-900 dark:text-black">
                                <span class="text-3xl font-semibold">Rp</span>
                                <span class="text-5xl font-extrabold tracking-tight">{{ $plans->price }}</span>
                                <span class="ml-1 text-xl font-normal text-gray-500 dark:text-gray-400">/month</span>
                            </div>
                            <ul role="list" class="my-7 space-y-5">
                                @foreach ($planDetail as $planDetails)
                                    @if ($planDetails->planID == $plans->id)
                                        <li class="flex space-x-3">
                                            <svg class="flex-shrink-0 w-5 h-5 icon-ctg" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">
                                                {{ $planDetails->feature->name }}</span>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                            <button type="button"
                                class="btn-why text-white font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Choose
                                plan</button>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section why we different -->

<!-- our course -->
<section class="course min-vh-100">
    <div class="container">
        <div class="">
            <div class="title-course text-center mt-40">
                <h1 class="text-5xl font-bold">Our courses</h1>
                <p class="mt-2">This is the reason for choose our learning platform</p>
            </div>
            <div class="course-content md:my-24 max-w-screen-xl mx-auto my-12">
                <div class="w-full md:grid md:grid-cols-12 md:gap-4 md:mt-20 ">
                    @foreach ($course as $courses)
                        <!-- bagian 1 -->
                        <div class="md:col-span-3 md:col-end-6 flex items-center justify-center">
                            <img class="object-cover md:w-72 w-72 " src="{{ asset('storage/'. $courses->photo->imageURL) }}" alt=" course-img">
                        </div>
                        <div class="md:col-span-5 md:my-auto md:col-start-6 title-course">
                            <h1 class="font-bold text-2xl md:text-4xl py-2">
                                {{ $courses->title }}
                            </h1>
                            <p class=" ">{{ $courses->description }}
                            </p>
                        </div>
                        <!-- bagian 1 -->   
                    @endforeach

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
<section class="mentor mx-auto mt-72 max-w-screen-xl w-full">
    <div class="text-center">
        <h1 class="text-5xl font-bold">Our Mentor</h1>
        <p class="my-2">This is the reason for choose our learning platform.</p>
    </div>
    @foreach ($mentor as $mentors)
        <div class="our-mentor my-12 grid lg:grid-cols-12">
            <div class=" lg:col-span-3 lg:col-end-6">
                @if ($mentors->avatarID)
                    <img class="rounded-full w-52 overflow-hidden mx-auto" src="{{ asset('storage/'. $mentors->photo->imageURl) }}" alt="Bonnie image"> 
                @endif
                <img src="{{ asset('images/guest-icon/dummy-icon') }}" alt="mentor" class="rounded-full w-52 overflow-hidden mx-auto">
            </div>
            <div class="lg:col-span-5 lg:my-auto mentor-text mx-auto">
                <h3 class="text-2xl font-bold">Mr. {{ $mentors->name }}</h3>
                <p class="font-semibold ">Undergraduate Student Designer</p>
            </div>
        </div>
    @endforeach
</section>
<!-- our mentor -->

<!-- testimonal -->
<section class="mt-72 max-w-screen-xl mx-auto" id="testimonal">
    <div class="title-testi text-center" id="">
        <h1 class="text-5xl font-bold">Testimonal</h1>
        <p class="font-semibold">This is the reason for choose our learning platform.</p>
    </div>
    <div class="mt-20 grid lg:grid-cols-3 ">
        @foreach ($tutorReview as $tutorReviews)
            <div class="max-w-sm py-4 px-8 mx-auto bg-white shadow-lg rounded-lg my-20">
                <div class="flex justify-center md:justify-end -mt-16">
                    @if ($tutorReviews->user->imageURL)
                        <img class="w-20 h-20 object-cover rounded-full border-2 border-green-500" alt="img"
                            src="{{ asset('storage/' . $tutorReviews->user->photo->imageURL ) }}">
                    @endif
                    <img class="w-20 h-20 object-cover rounded-full border-2 border-green-500" alt="img"
                        src="{{ asset('images/guest-icon/dummy-icon') }}">
                </div>
                <div>
                    <h2 class="text-gray-800 text-3xl font-semibold">{{ $tutorReviews->mentor->name }}</h2>
                    <p class="mt-2 text-gray-600">{{ $tutorReviews->reviews }}</p>
                </div>
                <div class="flex justify-end mt-4">
                    <p class="text-xl font-medium name-testi">{{ $tutorReviews->stars }}</p>
                </div>
            </div>
        @endforeach
        @foreach ($courseReview as $courseReviews)
            <div class="max-w-sm py-4 px-8 mx-auto bg-white shadow-lg rounded-lg my-20">
                <div class="flex justify-center md:justify-end -mt-16">
                    @if ($courseReviews->user->imageURL)
                        <img class="w-20 h-20 object-cover rounded-full border-2 border-green-500" alt="img"
                            src="{{ asset('storage/' . $courseReviews->user->photo->imageURL ) }}">
                    @endif
                    <img class="w-20 h-20 object-cover rounded-full border-2 border-green-500" alt="img"
                        src="{{ asset('images/guest-icon/dummy-icon') }}">
                </div>
                <div>
                    <h2 class="text-gray-800 text-3xl font-semibold">{{ $courseReviews->course->title }}</h2>
                    <p class="mt-2 text-gray-600">{{ $courseReviews->reviews }}</p>
                </div>
                <div class="flex justify-end mt-4">
                    <p class="text-xl font-medium name-testi">{{ $courseReviews->stars }}</p>
                </div>
            </div>
        @endforeach
    </div>
</section>
<!-- testimonal -->

@include('layouts.footer')






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