@extends('layouts.app.AppLayout')
@section('content')
    <!-- category section 1 -->
    <section class="w-full px-6 py-2  mt-3 ">
        @php
            // dump($categories);
        @endphp
        <div class="my-2 p-2">
            <h2 class="text-3xl capitalize">Top Rated</h2>
        </div>
        <div class="grid-col grid gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            @if ($categories)
                @foreach ($children as $category)
                    <div class="bg-white px-2 shadow-lg border-none py-2">
                        {{-- <a href="category/{{ $category->slug }}" class="hover:text-baseColor">
                        <h2 class="p-1 font-medium capitalize">
                            {{ $category->name }}
                        </h2>
                    </a> --}}
                        <div class="grid grid-cols-2 justify-center items-center gap-4 py-4">
                            {{-- @if ($category->children) --}}
                                @foreach ($category as $subcategory)
                                    <div class=" flex flex-col justify-center items-center overflow-hidden py-4">
                                        <a href="/category/{{ $subcategory->slug }}" class=" hover:">
                                            <img src="{{ Storage::url($subcategory->category_image) }}" alt="image not found"
                                                class="object-fill shadow-none bg-white w-32 h-28" /></a>
                                        <a href="/category/{{ $subcategory->slug }}"
                                            class="md:self-start p-0 m-0 hover:text-baseColor">
                                            <p class="p-0 mx-1 text-xs capitalize ">

                                                <br>
                                                {{ $subcategory->name }}

                                            </p>
                                        </a>
                                    </div>
                                @endforeach
                            {{-- @endif --}}
                        </div>
                        {{-- <div class="mt-2 ">
                            <a href="/category/{{ $category->slug }}"
                                class="p-1 capitalize text-xs hover:text-baseColor">see all</a>
                        </div> --}}
                    </div>
                @endforeach
            @endif
        </div>
    </section>

@endsection
