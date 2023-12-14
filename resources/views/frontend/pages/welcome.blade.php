@extends('layouts.app.AppLayout')
@section('content')
    <div id="carouselExampleControls" class="relative h-auto max-h-80 w-full " data-te-carousel-init data-te-carousel-slide>
        <!--Carousel items-->
        <div class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
            <!--First item-->
            <div class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                data-te-carousel-item data-te-carousel-active>
                <img src="assets/images/offer.jpg" class="block max-h-80 w-full " alt="Wild Landscape" />
            </div>
            <!--Second item-->
            <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                data-te-carousel-item>
                <img src="../assets/images/banner/b3.jpg" class="block max-h-80 w-full" alt="Camera" />
            </div>
            <!--Third item-->
            <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                data-te-carousel-item>
                <img src="../assets/images/banner/b3.jpg" class="block max-h-80 w-full" alt="Exotic Fruits" />
            </div>
        </div>

        <!--Carousel controls - prev item-->
        <button
            class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
            type="button" data-te-target="#carouselExampleControls" data-te-slide="prev">
            <span class="inline-block h-8 w-8">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                </svg>
            </span>
            <span
                class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Previous</span>
        </button>
        <!--Carousel controls - next item-->
        <button
            class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
            type="button" data-te-target="#carouselExampleControls" data-te-slide="next">
            <span class="inline-block h-8 w-8">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </span>
            <span
                class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Next</span>
        </button>
    </div>
    <!-- category section 1 -->
    <section class="w-full px-6 py-2  mt-3 ">
        <div class="grid-col grid gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            @if ($categories)
                @foreach ($categories as $category)
                    <div class="bg-white px-3 shadow-lg border-none py-4">
                        <a href="category/{{ $category->slug }}/all" class="hover:text-baseColor">
                            <h2 class="p-1 font-medium capitalize">
                                {{ $category->name }}
                            </h2>
                        </a>
                        <div class="grid grid-cols-2 justify-center items-center gap-2 py-4">
                            @if ($category->children)
                                @foreach ($category->children as $subcategory)
                                    <div class="border-none flex flex-col justify-center items-center">
                                        <a href="/category/{{ $subcategory->slug }}" class=" hover:">
                                            <img src="{{ Storage::url($subcategory->category_image) }}"
                                                alt="image not found"
                                                class="object-contain shadow-none bg-white w-32 h-24" /></a>
                                        <a href="/category/{{ $subcategory->slug }}"
                                            class="md:self-start hover:text-baseColor">
                                            <p class="m-1 text-xs capitalize ">

                                                <br>
                                                {{ $subcategory->name }}

                                            </p>
                                        </a>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <div class="mt-6 ">
                            <a href="/category/{{ $category->slug }}"
                                class="p-1 capitalize text-xs hover:text-baseColor">see all</a>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </section>
    <!-- categories section 2 -->
    <section class="w-full px-6 py-2  mt-3 ">
        <div class="grid-col grid gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            @if ($categories)
                @foreach ($categories as $category)
                    <div class="bg-white px-3 shadow-lg border-none py-4">
                        <a href="category/{{ $category->slug }}" class="hover:text-baseColor">
                            <h2 class="p-1 font-medium capitalize">
                                {{ $category->name }}
                            </h2>
                        </a>
                        <div class="grid grid-cols-2 justify-center items-center gap-2 py-4">
                            @if ($category->children)
                                @foreach ($category->children as $subcategory)
                                    <div class="border-none flex flex-col justify-center items-center">
                                        <a href="/category/{{ $subcategory->slug }}" class=" hover:">
                                            <img src="{{ Storage::url($subcategory->category_image) }}"
                                                alt="image not found"
                                                class="object-contain shadow-none bg-white w-32 h-24" /></a>
                                        <a href="/category/{{ $subcategory->slug }}"
                                            class="md:self-start hover:text-baseColor">
                                            <p class="m-1 text-xs capitalize ">

                                                <br>
                                                {{ $subcategory->name }}

                                            </p>
                                        </a>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <div class="mt-6 ">
                            <a href="/category/{{ $category->slug }}"
                                class="p-1 capitalize text-xs hover:text-baseColor">see all</a>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </section>
    <!-- slider section -->
    <section class=" px-6 py-2 w-full">
        <div class="owl-carousel owl-theme bg-white py-4 sm:px-12 px-10">
            @if ($slider1)
                @foreach ($slider1 as $item)
                    <a href="category/{{ $item->slug }}" class="">
                        <div class="item">
                            <img src="{{ Storage::url($item->category_image) }}" alt="image not found"
                                class="w-[150px] h-[150px] object-cover">
                        </div>
                    </a>
                @endforeach
            @endif
        </div>
    </section>
    <!-- ads section -->
    <section class="" id="">@include('frontend/partials/ads')</section>
    <!--second  slider section -->
    <section class=" px-6 py-2 w-full">
        <div class="owl-carousel owl-theme bg-white py-4 sm:px-12 px-10">
            @if ($slider2)
            @foreach ($slider2 as $item)
                <a href="product/{{ $item->slug }}" class="">
                    <div class="item">
                        <img src="{{ Storage::url($item->image) }}" alt="image not found"
                            class="w-[150px] h-[150px] object-cover">
                    </div>
                </a>
            @endforeach
        @endif
        </div>
    </section>
    <!-- categories section 3 -->
    <section class="w-full px-6 py-2  mt-3 ">
        <div class="grid-col grid gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            @if ($categories)
                @foreach ($categories as $category)
                    <div class="bg-white px-3 shadow-lg border-none py-4">
                        <a href="category/{{ $category->slug }}" class="hover:text-baseColor">
                            <h2 class="p-1 font-medium capitalize">
                                {{ $category->name }}
                            </h2>
                        </a>
                        <div class="grid grid-cols-2 justify-center items-center gap-2 py-4">
                            @if ($category->children)
                                @foreach ($category->children as $subcategory)
                                    <div class="border-none flex flex-col justify-center items-center">
                                        <a href="/category/{{ $subcategory->slug }}" class=" hover:">
                                            <img src="{{ Storage::url($subcategory->category_image) }}"
                                                alt="image not found"
                                                class="object-contain shadow-none bg-white w-32 h-24" /></a>
                                        <a href="/category/{{ $subcategory->slug }}"
                                            class="md:self-start hover:text-baseColor">
                                            <p class="m-1 text-xs capitalize ">

                                                <br>
                                                {{ $subcategory->name }}

                                            </p>
                                        </a>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <div class="mt-6 ">
                            <a href="/category/{{ $category->slug }}"
                                class="p-1 capitalize text-xs hover:text-baseColor">see all</a>
                        </div>
                    </div>
                @endforeach
            @endif

        </div>
    </section>
    <section class="" id="">
        @include('frontend/partials/features')
    </section>
    @include('frontend/partials/newarrival')

    @include('frontend/partials/products')
    <script>
        $(document).ready(function() {
            // alert('hello bhi document redy working');
            //   $(".owl-carousel").owlCarousel();
            $('.owl-carousel').owlCarousel({
                //  loop:true,
                margin: 10,
                nav: true,
                dots: false,
                revind: false,
                animateOut: true,
                smartSpeed: 500,
                responsive: {
                    0: {
                        items: 2
                    },
                    600: {
                        items: 4,
                        slideBy: 4
                    },
                    1000: {
                        items: 6,
                        slideBy: 6
                    }
                }
            })
        });
    </script>
@endsection
