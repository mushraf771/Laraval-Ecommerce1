@extends('layouts.app.AppLayout')
@section('content')
    <section class=" mx-8 p-2">
        @php
            // dump($data);
        @endphp

        <!-- breadcrumb -->
        <div class=" py-4 flex items-center gap-3">
            <a href="../index.html" class="text-baseColor text-base">
                <i class="fa-solid fa-house"></i>
            </a>
            <span class="text-sm text-gray-400">
                <i class="fa-solid fa-chevron-right"></i>
            </span>
            <p class="text-gray-600 font-medium"></p>
        </div>
        <!-- ./breadcrumb -->
        <!-- shop wrapper -->
        <div class=" px-auto grid grid-cols-1 md:grid-cols-4 gap-6 pt-4 pb-16 items-start  place-content-center mx-auto">
            <!-- sidebar -->
            <div id="filters_navbar"
                class="col-span-1 hidden md:block relative bg-white px-4 pb-6 shadow rounded overflow-hidden">
                <div class="divide-y divide-gray-200 space-y-5  ">
                    <div>
                        <button id="" class="text-4xl md:hidden font-bold absolute top-1 right-2"
                            onclick="showme()"> &times;</button>
                        {{-- <div class=" flex justify-between "> --}}
                        <h3 class="text-xl text-gray-800 my-3 uppercase font-medium">Categories</h3>
                        {{-- </div> --}}
                        <div class="space-y-2">
                            <div class="flex items-center">
                                <input type="checkbox" name="cat-1" id="cat-1"
                                    class="text-baseColor focus:ring-0 rounded-sm cursor-pointer">
                                <label for="cat-1" class="text-gray-600 ml-3 cusror-pointer">Bedroom</label>
                                <div class="ml-auto text-gray-600 text-sm">(15)</div>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" name="cat-2" id="cat-2"
                                    class="text-baseColor focus:ring-0 rounded-sm cursor-pointer">
                                <label for="cat-2" class="text-gray-600 ml-3 cusror-pointer">Sofa</label>
                                <div class="ml-auto text-gray-600 text-sm">(9)</div>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" name="cat-3" id="cat-3"
                                    class="text-baseColor focus:ring-0 rounded-sm cursor-pointer">
                                <label for="cat-3" class="text-gray-600 ml-3 cusror-pointer">Office</label>
                                <div class="ml-auto text-gray-600 text-sm">(21)</div>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" name="cat-4" id="cat-4"
                                    class="text-baseColor focus:ring-0 rounded-sm cursor-pointer">
                                <label for="cat-4" class="text-gray-600 ml-3 cusror-pointer">Outdoor</label>
                                <div class="ml-auto text-gray-600 text-sm">(10)</div>
                            </div>
                        </div>
                    </div>

                    <div class="pt-4">
                        <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium">Brands</h3>
                        <div class="space-y-2">
                            <div class="flex items-center">
                                <input type="checkbox" name="brand-1" id="brand-1"
                                    class="text-baseColor focus:ring-0 rounded-sm cursor-pointer">
                                <label for="brand-1" class="text-gray-600 ml-3 cusror-pointer">Cooking Color</label>
                                <div class="ml-auto text-gray-600 text-sm">(15)</div>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" name="brand-2" id="brand-2"
                                    class="text-baseColor focus:ring-0 rounded-sm cursor-pointer">
                                <label for="brand-2" class="text-gray-600 ml-3 cusror-pointer">Magniflex</label>
                                <div class="ml-auto text-gray-600 text-sm">(9)</div>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" name="brand-3" id="brand-3"
                                    class="text-baseColor focus:ring-0 rounded-sm cursor-pointer">
                                <label for="brand-3" class="text-gray-600 ml-3 cusror-pointer">Ashley</label>
                                <div class="ml-auto text-gray-600 text-sm">(21)</div>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" name="brand-4" id="brand-4"
                                    class="text-baseColor focus:ring-0 rounded-sm cursor-pointer">
                                <label for="brand-4" class="text-gray-600 ml-3 cusror-pointer">M&D</label>
                                <div class="ml-auto text-gray-600 text-sm">(10)</div>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" name="brand-5" id="brand-5"
                                    class="text-baseColor focus:ring-0 rounded-sm cursor-pointer">
                                <label for="brand-5" class="text-gray-600 ml-3 cusror-pointer">Olympic</label>
                                <div class="ml-auto text-gray-600 text-sm">(10)</div>
                            </div>
                        </div>
                    </div>

                    <div class="pt-4">
                        <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium">Price</h3>
                        <div class="mt-4 flex items-center">
                            <input type="text" name="min" id="min"
                                class="w-full border-gray-300 focus:border-baseColor rounded focus:ring-0 px-3 py-1 text-gray-600 shadow-sm"
                                placeholder="min">
                            <span class="mx-3 text-gray-500">-</span>
                            <input type="text" name="max" id="max"
                                class="w-full border-gray-300 focus:border-baseColor rounded focus:ring-0 px-3 py-1 text-gray-600 shadow-sm"
                                placeholder="max">
                        </div>
                    </div>


                    <div class="pt-4">
                        <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium">size</h3>
                        <div class="flex items-center gap-2">
                            <div class="size-selector">
                                <input type="radio" name="size" id="size-xs" class="hidden">
                                <label for="size-xs"
                                    class="text-xs border border-gray-200 rounded-sm h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm text-gray-600">XS</label>
                            </div>
                            <div class="size-selector">
                                <input type="radio" name="size" id="size-sm" class="hidden">
                                <label for="size-sm"
                                    class="text-xs border border-gray-200 rounded-sm h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm text-gray-600">S</label>
                            </div>
                            <div class="size-selector">
                                <input type="radio" name="size" id="size-m" class="hidden">
                                <label for="size-m"
                                    class="text-xs border border-gray-200 rounded-sm h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm text-gray-600">M</label>
                            </div>
                            <div class="size-selector">
                                <input type="radio" name="size" id="size-l" class="hidden">
                                <label for="size-l"
                                    class="text-xs border border-gray-200 rounded-sm h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm text-gray-600">L</label>
                            </div>
                            <div class="size-selector">
                                <input type="radio" name="size" id="size-xl" class="hidden">
                                <label for="size-xl"
                                    class="text-xs border border-gray-200 rounded-sm h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm text-gray-600">XL</label>
                            </div>
                        </div>
                    </div>

                    <div class="pt-4">
                        <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium">Color</h3>
                        <div class="flex items-center gap-2">
                            <div class="color-selector">
                                <input type="radio" name="color" id="red" class="hidden">
                                <label for="red"
                                    class="border border-gray-200 rounded-sm h-6 w-6  cursor-pointer shadow-sm block"
                                    style="background-color: #fc3d57;"></label>
                            </div>
                            <div class="color-selector">
                                <input type="radio" name="color" id="black" class="hidden">
                                <label for="black"
                                    class="border border-gray-200 rounded-sm h-6 w-6  cursor-pointer shadow-sm block"
                                    style="background-color: #000;"></label>
                            </div>
                            <div class="color-selector">
                                <input type="radio" name="color" id="white" class="hidden">
                                <label for="white"
                                    class="border border-gray-200 rounded-sm h-6 w-6  cursor-pointer shadow-sm block"
                                    style="background-color: #fff;"></label>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <!-- ./sidebar -->
            <!-- products -->
            <div id="gd-4"class="col-span-3">
                <div class="flex items-center mb-4">
                    <select name="sort" id="sort"
                        class="w-44 text-sm text-gray-600 py-3 px-4 border-gray-300 shadow-sm rounded focus:ring-baseColor focus:border-baseColor">
                        <option class="" value="">Default sorting</option>
                        <option class="" value="price-low-to-high">Price low to high</option>
                        <option class="" value="price-high-to-low">Price high to low</option>
                        <option class="" value="latest">Latest product</option>
                    </select>
                    <div class="flex gap-2 ml-auto">
                        <div
                            class="border bg-baseColor w-10 h-9 flex items-center justify-center text-white bg-baseColor rounded cursor-pointer">
                            <i class="fa-solid fa-grip-vertical"></i>
                        </div>
                        <div onclick="showme()" id=""
                            class="border border-gray-300 w-10 h-9 flex items-center justify-center text-gray-600 rounded cursor-pointer">
                            <i class="fa-solid fa-list"></i>
                        </div>
                    </div>
                </div>
                <div id="gd-5" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-3 gap-6">

                    @if ($data)
                        @foreach ($data as $item)
                            {{-- @if ($item->children) --}}
                                {{-- @foreach ($item->children as $child) --}}
                                    <div class="bg-white shadow rounded overflow-hidden group">
                                        <div class="relative">
                                            {{-- <a href="{{ $item->slug }}/{{ $child->slug }}" class=""> --}}
                                           {{-- @if ($item->image)

                                           <img src="{{ Storage::url($item->image) }}" alt="product 1"
                                                class="w-full h-auto">
                                                @else
                                                <img src="{{ asset('assets/images/no-image.png') }}" alt="
                                           @endif --}}
                                            </a>
                                            <div
                                                class="absolute inset-0 bg-black bg-opacity-40 flex items-center
                                justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                                                <a href="#"
                                                    class="text-white text-lg w-9 h-8 rounded-full bg-baseColor flex items-center justify-center hover:bg-white hover:text-baseColor transition"
                                                    title="view product">
                                                    <i class="fa-solid fa-magnifying-glass"></i>
                                                </a>
                                                <a href="#"
                                                    class="text-white text-lg w-9 h-8 rounded-full bg-baseColor flex items-center justify-center hover:bg-white hover:text-baseColor transition"
                                                    title="add to wishlist">
                                                    <i class="fa-solid fa-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="pt-4 pb-3 px-4">
                                            <a href="#">
                                                <h4
                                                    class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-baseColor transition">
                                                    {{ $item->name }}</h4>
                                            </a>
                                            <div class="flex items-baseline mb-1 space-x-2">
                                                <p class="text-xl text-baseColor font-semibold">$45.00</p>
                                                <p class="text-sm text-gray-400 line-through">$55.90</p>
                                            </div>
                                            <div class="flex items-center">
                                                <div class="flex gap-1 text-sm text-yellow-400">
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                </div>
                                                <div class="text-xs text-gray-500 ml-3">(150)</div>
                                            </div>
                                        </div>
                                        <a href="/product/{{ $item->slug }}"
                                            class="block w-full py-1 text-center text-white bg-baseColor border bg-baseColor rounded-b hover:bg-transparent hover:text-baseColor transition">Add
                                            to cart</a>
                                    </div>
                                {{-- @endforeach --}}
                            {{-- @endif --}}
                        @endforeach
                    @endif
                    <div class="bg-white shadow rounded overflow-hidden group">
                        <div class="relative">
                            <img src="../assets/images/products/product2.jpg" alt="product 1" class="w-full">
                            <div
                                class="absolute inset-0 bg-black bg-opacity-40 flex items-center
                                justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                                <a href="#"
                                    class="text-white text-lg w-9 h-8 rounded-full bg-baseColor flex items-center justify-center hover:bg-white hover:text-baseColor transition"
                                    title="view product">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </a>
                                <a href="#"
                                    class="text-white text-lg w-9 h-8 rounded-full bg-baseColor flex items-center justify-center hover:bg-white hover:text-baseColor transition"
                                    title="add to wishlist">
                                    <i class="fa-solid fa-heart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="pt-4 pb-3 px-4">
                            <a href="#">
                                <h4
                                    class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-baseColor transition">
                                    Guyer
                                    Chair</h4>
                            </a>
                            <div class="flex items-baseline mb-1 space-x-2">
                                <p class="text-xl text-baseColor font-semibold">$45.00</p>
                                <p class="text-sm text-gray-400 line-through">$55.90</p>
                            </div>
                            <div class="flex items-center">
                                <div class="flex gap-1 text-sm text-yellow-400">
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                </div>
                                <div class="text-xs text-gray-500 ml-3">(150)</div>
                            </div>
                        </div>
                        <a href="#"
                            class="block w-full py-1 text-center text-white bg-baseColor border bg-baseColor rounded-b hover:bg-transparent hover:text-baseColor transition">Add
                            to cart</a>
                    </div>

                    <div class="bg-white shadow rounded overflow-hidden group">
                        <div class="relative">
                            <img src="../assets/images/products/product3.jpg" alt="product 1" class="w-full">
                            <div
                                class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                                <a href="#"
                                    class="text-white text-lg w-9 h-8 rounded-full bg-baseColor flex items-center justify-center hover:bg-white hover:text-baseColor transition"
                                    title="view product">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </a>
                                <a href="#"
                                    class="text-white text-lg w-9 h-8 rounded-full bg-baseColor flex items-center justify-center hover:bg-white hover:text-baseColor transition"
                                    title="add to wishlist">
                                    <i class="fa-solid fa-heart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="pt-4 pb-3 px-4">
                            <a href="#">
                                <h4
                                    class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-baseColor transition">
                                    Guyer
                                    Chair</h4>
                            </a>
                            <div class="flex items-baseline mb-1 space-x-2">
                                <p class="text-xl text-baseColor font-semibold">$45.00</p>
                                <p class="text-sm text-gray-400 line-through">$55.90</p>
                            </div>
                            <div class="flex items-center">
                                <div class="flex gap-1 text-sm text-yellow-400">
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                </div>
                                <div class="text-xs text-gray-500 ml-3">(150)</div>
                            </div>
                        </div>
                        <a href="#"
                            class="block w-full py-1 text-center text-white bg-baseColor border bg-baseColor rounded-b hover:bg-transparent hover:text-baseColor transition">Add
                            to cart</a>
                    </div>

                    <div class="bg-white shadow rounded overflow-hidden group">
                        <div class="relative">
                            <img src="../assets/images/products/product4.jpg" alt="product 1" class="w-full">
                            <div
                                class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                                <a href="#"
                                    class="text-white text-lg w-9 h-8 rounded-full bg-baseColor flex items-center justify-center hover:bg-white hover:text-baseColor transition"
                                    title="view product">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </a>
                                <a href="#"
                                    class="text-white text-lg w-9 h-8 rounded-full bg-baseColor flex items-center justify-center hover:bg-white hover:text-baseColor transition"
                                    title="add to wishlist">
                                    <i class="fa-solid fa-heart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="pt-4 pb-3 px-4">
                            <a href="#">
                                <h4
                                    class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-baseColor transition">
                                    Guyer
                                    Chair</h4>
                            </a>
                            <div class="flex items-baseline mb-1 space-x-2">
                                <p class="text-xl text-baseColor font-semibold">$45.00</p>
                                <p class="text-sm text-gray-400 line-through">$55.90</p>
                            </div>
                            <div class="flex items-center">
                                <div class="flex gap-1 text-sm text-yellow-400">
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                </div>
                                <div class="text-xs text-gray-500 ml-3">(150)</div>
                            </div>
                        </div>
                        <a href="#"
                            class="block w-full py-1 text-center text-white bg-baseColor border bg-baseColor rounded-b hover:bg-transparent hover:text-baseColor transition">Add
                            to cart</a>
                    </div>

                    <div class="bg-white shadow rounded overflow-hidden group">
                        <div class="relative">
                            <img src="../assets/images/products/product5.jpg" alt="product 1" class="w-full">
                            <div
                                class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                                <a href="#"
                                    class="text-white text-lg w-9 h-8 rounded-full bg-baseColor flex items-center justify-center hover:bg-white hover:text-baseColor transition"
                                    title="view product">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </a>
                                <a href="#"
                                    class="text-white text-lg w-9 h-8 rounded-full bg-baseColor flex items-center justify-center hover:bg-white hover:text-baseColor transition"
                                    title="add to wishlist">
                                    <i class="fa-solid fa-heart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="pt-4 pb-3 px-4">
                            <a href="#">
                                <h4
                                    class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-baseColor transition">
                                    Guyer
                                    Chair</h4>
                            </a>
                            <div class="flex items-baseline mb-1 space-x-2">
                                <p class="text-xl text-baseColor font-semibold">$45.00</p>
                                <p class="text-sm text-gray-400 line-through">$55.90</p>
                            </div>
                            <div class="flex items-center">
                                <div class="flex gap-1 text-sm text-yellow-400">
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                </div>
                                <div class="text-xs text-gray-500 ml-3">(150)</div>
                            </div>
                        </div>
                        <a href="#"
                            class="block w-full py-1 text-center text-white bg-baseColor border bg-baseColor rounded-b hover:bg-transparent hover:text-baseColor transition">Add
                            to cart</a>
                    </div>

                    <div class="bg-white shadow rounded overflow-hidden group">
                        <div class="relative">
                            <img src="../assets/images/products/product6.jpg" alt="product 1" class="w-full">
                            <div
                                class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                                <a href="#"
                                    class="text-white text-lg w-9 h-8 rounded-full bg-baseColor flex items-center justify-center hover:bg-white hover:text-baseColor transition"
                                    title="view product">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </a>
                                <a href="#"
                                    class="text-white text-lg w-9 h-8 rounded-full bg-baseColor flex items-center justify-center hover:bg-white hover:text-baseColor transition"
                                    title="add to wishlist">
                                    <i class="fa-solid fa-heart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="pt-4 pb-3 px-4">
                            <a href="#">
                                <h4
                                    class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-baseColor transition">
                                    Guyer
                                    Chair</h4>
                            </a>
                            <div class="flex items-baseline mb-1 space-x-2">
                                <p class="text-xl text-baseColor font-semibold">$45.00</p>
                                <p class="text-sm text-gray-400 line-through">$55.90</p>
                            </div>
                            <div class="flex items-center">
                                <div class="flex gap-1 text-sm text-yellow-400">
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                </div>
                                <div class="text-xs text-gray-500 ml-3">(150)</div>
                            </div>
                        </div>
                        <a href="#"
                            class="block w-full py-1 text-center text-white bg-baseColor border bg-baseColor rounded-b hover:bg-transparent hover:text-baseColor transition">Add
                            to cart</a>
                    </div>
                </div>
                <div class=" mt-4 p-2 flex justify-center items-center">

                    <nav aria-label="Page navigation example">
                        <ul class="inline-flex items-center -space-x-px">
                            <li>
                                <a href="#"
                                    class="block px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <span class="sr-only">Previous</span>
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                            </li>
                            <li>
                                <a href="#" aria-current="page"
                                    class="z-10 px-3 py-2 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <span class="sr-only">Next</span>
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </nav>

                </div>

                {{-- <section class=""  id="">@include('frontend/components/topbrand')</section> --}}
            </div>
            <!-- ./products -->
        </div>
        <!-- ./shop wrapper -->

        </div>
        <!-- ./products -->
        </div>
        <!-- ./shop wrapper -->



    </section>
@endsection
