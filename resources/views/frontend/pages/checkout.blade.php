@extends('layouts.app.AppLayout')
@section('content')

    <div class="container  p-2">
        {{-- <h3 class="text-lg font-medium capitalize">Checkout</h3> --}}
        <div class="m-2 grid grid-cols-1 p-4 sm:grid-cols-9 gap-4">
            <div class="col-span-6 border ">
                <div class="px-4 py-6">
                <form method="POST" autocomplete="false" action="">
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <label for="first_name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First name</label>
                            <input type="text" id="first_name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="John">
                        </div>
                        <div>
                            <label for="last_name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last name</label>
                            <input type="text" id="last_name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Doe">
                        </div>
                        <div>
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="email" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Email">
                        </div>
                        <div>
                            <label for="phone"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                                number</label>
                            <input type="tel" id="phone"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                        </div>
                        <div>
                            <label for="state"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">state</label>
                            <input type="text" id="state"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Punjab">
                        </div>
                        <div>
                            <label for="city"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">City</label>
                            <input type="text" id="city"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Lahore">
                        </div>
                    </div>
                    <div class="mb-6">
                        <label for="address"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">address</label>
                        <input type="address" id="address"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="flaana dhimkana">
                    </div>
                    <!-- <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button> -->
                </form></div>
            </div>

            <div class=" border shadow px-3 py-4 rounded col-span-3">
                <h2 class="Order Summary"></h2>
                <div class="flex justify-between p-2 ">
                    <div class="flex flex-col">
                        <p class="font-bold capitalize">sofa</p>
                        <span class="text-xs font-thin">size M</span>
                    </div>
                    <span class="font-bold">x3</span>
                    <span class="font-bold">222</span>
                </div>
                <div class="flex justify-between p-2 ">
                    <div class="flex flex-col">
                        <p class="font-bold capitalize">sofa</p>
                        <span class="text-xs font-thin">size M</span>
                    </div>
                    <span class="font-bold">x3</span>
                    <span class="font-bold">222</span>
                </div>
                <div class="flex justify-between p-2 ">
                    <div class="flex flex-col">
                        <p class="font-bold capitalize">sofa</p>
                        <span class="text-xs font-thin">size M</span>
                    </div>
                    <span class="font-bold">x3</span>
                    <span class="font-bold">222</span>
                </div>
               <hr>
                <div class="flex justify-between p-2 border-b-2">
                    <p class="subtotal font-semibold">Subtotal</p>
                    <span class="font-bold">$444</span>
                </div>
                <div class="flex justify-between p-2 border-b-2">
                    <p class="subtotal font-semibold">Shipping</p>
                    <span class="font-bold">Free</span>
                </div>
                <div class="flex justify-between p-2 mb-2">
                    <p class="subtotal fontsefont-semibold">Total</p>
                    <span class="font-bold">$444</span>
                </div>
                <div class="p-2">
                    <div class="flex items-center">
                        <input type="checkbox" name="aggrement" id="aggrement"
                            class="text-primary focus:ring-0 -sm cursor-pointer">
                        <label for="aggrement" class="text-gray-600 ml-3 cursor-pointer text-xs">I have read and agree
                            to the
                            <a href="#" class="text-primary">terms & conditions</a>
                        </label>
                    </div>
                </div>
                <!--Submit button-->
                <div class=" pb-1 pt-1 text-center">
                    <button
                        class="inline-block w-full  px-6 pb-2 pt-2.5 text-xs
                               font-medium uppercase leading-normal text-white hover:text-primary shadow
                                bg-primary border hover:bg-white hover:border-primary "
                        type="submit">
                        Place Order
                    </button>

                </div>
            </div>

        </div>
    </div>
    </div>
@endsection
