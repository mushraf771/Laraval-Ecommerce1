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
            <p class="text-gray-600 font-medium">{{ url('cart') }}</p>
        </div>
        <!-- ./breadcrumb -->

        <!-- wrapper -->
        <div class="border  items-start gap-6 pt-4 px-4 pb-16">
            <h2 class="text-3xl my-2 capitalize">Your Cart</h2>
@php
$price = [49,57,777,897]

@endphp
            <!-- cart -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:flex flex-col gap-4 space-y-4 w-full">
               @foreach ($price as $item)


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
                    <div id="price" class="text-baseColor text-lg font-semibold">{{ $item }}</div>

                    <script>
                        for (let index = 0; index < array.length; index++) {
                            const element = array[index];

                        }
                        var a = document.getElementById('price');
                        console.log(a);

                    </script>
                    <a href="#"
                        class="px-6 py-2 text-center text-sm text-white bg-baseColor border border-baseColor rounded hover:bg-transparent hover:text-baseColor transition uppercase font-roboto font-medium">add
                        to cart</a>

                    <div class="text-gray-600 cursor-pointer hover:text-baseColor">
                        <i class="fa-solid fa-trash"></i>
                    </div>
                </div>
@endforeach

            </div>
            <!-- ./cart -->
        </div>
        <!-- ./wrapper -->
    </section>
@endsection
