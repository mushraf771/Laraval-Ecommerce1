@extends('layouts.app.AppLayout')
@section('content')
    <section class=" mx-8 p-2">


        <!-- breadcrumb -->
        <div class=" py-4 flex items-center gap-3">
            <a href="../index.html" class="text-baseColor text-base">
                <i class="fa-solid fa-house"></i>
            </a>
            <span class="text-sm text-gray-400">
                <i class="fa-solid fa-chevron-right"></i>
            </span>
            <p class="text-gray-600 font-medium">{{ url('wishlist') }}</p>
        </div>
        <!-- ./breadcrumb -->

        <!-- wrapper -->
        <div class="border  items-start gap-6 pt-4 px-4 pb-16">
            <h2 class="text-3xl my-2 capitalize">Wishlist</h2>
            {{-- <!-- sidebar -->
            <div class="grid-cols-12 md:grid-cols-3">
                <div class="px-4 py-3 shadow flex items-center gap-4">
                    <div class="flex-shrink-0">
                        <img src="../assets/images/avatar.png" alt="profile"
                            class="rounded-full w-14 h-14 border border-gray-200 p-1 object-cover" />
                    </div>
                    <div class="flex-grow">
                        <p class="text-gray-600">Hello,</p>
                        <h4 class="text-gray-800 font-medium">John Doe</h4>
                    </div>
                </div>

                <div class="mt-6 bg-white shadow rounded p-4 divide-y divide-gray-200 space-y-4 text-gray-600">
                    <div class="space-y-1 pl-8">
                        <a href="#" class="block font-medium capitalize transition">
                            <span class="absolute -left-8 top-0 text-base">
                                <i class="fa-regular fa-address-card"></i>
                            </span>
                            Manage account
                        </a>
                        <a href="#" class="relative hover:text-baseColor block capitalize transition">
                            Profile information
                        </a>
                        <a href="#" class="relative hover:text-baseColor block capitalize transition">
                            Manage addresses
                        </a>
                        <a href="#" class="relative hover:text-baseColor block capitalize transition">
                            Change password
                        </a>
                    </div>

                    <div class="space-y-1 pl-8 pt-4">
                        <a href="#" class="relative hover:text-baseColor block font-medium capitalize transition">
                            <span class="absolute -left-8 top-0 text-base">
                                <i class="fa-solid fa-box-archive"></i>
                            </span>
                            My order history
                        </a>
                        <a href="#" class="relative hover:text-baseColor block capitalize transition">
                            My returns
                        </a>
                        <a href="#" class="relative hover:text-baseColor block capitalize transition">
                            My Cancellations
                        </a>
                        <a href="#" class="relative hover:text-baseColor block capitalize transition">
                            My reviews
                        </a>
                    </div>

                    <div class="space-y-1 pl-8 pt-4">
                        <a href="#" class="relative hover:text-baseColor block font-medium capitalize transition">
                            <span class="absolute -left-8 top-0 text-base">
                                <i class="fa-regular fa-credit-card"></i>
                            </span>
                            Payment methods
                        </a>
                        <a href="#" class="relative hover:text-baseColor block capitalize transition">
                            voucher
                        </a>
                    </div>

                    <div class="space-y-1 pl-8 pt-4">
                        <a href="#" class="relative text-baseColor block font-medium capitalize transition">
                            <span class="absolute -left-8 top-0 text-base">
                                <i class="fa-regular fa-heart"></i>
                            </span>
                            My wishlist
                        </a>
                    </div>

                    <div class="space-y-1 pl-8 pt-4">
                        <a href="#" class="relative hover:text-baseColor block font-medium capitalize transition">
                            <span class="absolute -left-8 top-0 text-base">
                                <i class="fa-solid fa-right-from-bracket"></i>
                            </span>
                            Logout
                        </a>
                    </div>
                </div>
            </div>
            <!-- ./sidebar --> --}}

            <!-- wishlist -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:flex flex-col gap-4 space-y-4 w-full">
                <div class="flex flex-col md:flex-row items-center justify-between border gap-6 p-4 border-gray-200 rounded">
                    <div class="w-28">
                        <img src="../assets/images/products/product6.jpg" alt="product 6" class="w-full" />
                    </div>
                    <div class="w-1/3">
                        <h2 class="text-gray-800 text-xl font-medium uppercase">
                            Italian L shape
                        </h2>
                        <p class="text-gray-500 text-sm">
                            Availability: <span class="text-green-600">In Stock</span>
                        </p>
                    </div>
                    <div class="text-baseColor text-lg font-semibold">$320.00</div>
                    <a href="#"
                        class="px-6 py-2 text-center text-sm text-white bg-baseColor border border-baseColor rounded hover:bg-transparent hover:text-baseColor transition uppercase font-roboto font-medium">add
                        to cart</a>

                    <div class="text-gray-600 cursor-pointer hover:text-baseColor">
                        <i class="fa-solid fa-trash"></i>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row items-center justify-between border gap-6 p-4 border-gray-200 rounded">
                    <div class="w-28">
                        <img src="../assets/images/products/product5.jpg" alt="product 6" class="w-full" />
                    </div>
                    <div class="w-1/3">
                        <h2 class="text-gray-800 text-xl font-medium uppercase">
                            Dining Table
                        </h2>
                        <p class="text-gray-500 text-sm">
                            Availability: <span class="text-green-600">In Stock</span>
                        </p>
                    </div>
                    <div class="text-baseColor text-lg font-semibold">$320.00</div>
                    <a href="#"
                        class="px-6 py-2 text-center text-sm text-white bg-baseColor border border-baseColor rounded hover:bg-transparent hover:text-baseColor transition uppercase font-roboto font-medium">add
                        to cart</a>

                    <div class="text-gray-600 cursor-pointer hover:text-baseColor">
                        <i class="fa-solid fa-trash"></i>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row items-center justify-between border gap-6 p-4 border-gray-200 rounded">
                    <div class="w-28">
                        <img src="../assets/images/products/product10.jpg" alt="product 6" class="w-full" />
                    </div>
                    <div class="w-1/3">
                        <h2 class="text-gray-800 text-xl font-medium uppercase">Sofa</h2>
                        <p class="text-gray-500 text-sm">
                            Availability: <span class="text-red-600">Out of Stock</span>
                        </p>
                    </div>
                    <div class="text-baseColor text-lg font-semibold">$320.00</div>
                    <a href="#"
                        class="cursor-not-allowed px-6 py-2 text-center text-sm text-white bg-red-400 border border-red-400 rounded transition uppercase font-roboto font-medium">add
                        to cart</a>

                    <div class="text-gray-600 cursor-pointer hover:text-baseColor">
                        <i class="fa-solid fa-trash"></i>
                    </div>
                </div>
            </div>
            <!-- ./wishlist -->
        </div>
        <!-- ./wrapper -->
    </section>
@endsection
