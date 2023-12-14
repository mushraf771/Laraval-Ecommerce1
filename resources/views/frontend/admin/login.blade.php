@extends('welcome')
@section('data')
    <div class=" flex justify-center p-2 m-2 min-h-screen ">

        <div class="shadow-lg border p-5 rounded-md mt-4 bg-white">

            {{-- <p class="mb-0 mr-4 text-2xl text-center pb-6">{{ Config::get('constants.site_name') }}</p> --}}
            <p class="mb-0 mr-4 text-4xl text-center pb-6 font-bold">Sign in</p>

            <div class="flex flex-row items-center justify-center ">
                <!-- Facebook -->
                <button type="button"
                    class="inlne-block mx-1 h-9 w-9 rounded-full bg-baseColor uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-baseColor-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-baseColor-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-baseColor-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                    <!-- Facebook -->
                    <i class="fa-brands fa-facebook-f mx-auto h-3 5 w-3"></i>

                </button>

                <!-- Twitter -->
                <button type="button" data-te-ripple-init data-te-ripple-color="light"
                    class="inlne-block mx-1 h-9 w-9 rounded-full bg-baseColor uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-baseColor-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-baseColor-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-baseColor-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                    <!-- Twitter -->
                    <i class="fa-brands fa-twitter mx-auto h-3 5 w-3"></i>

                </button>

                <!-- Linkedin -->
                <button type="button" data-te-ripple-init data-te-ripple-color="light"
                    class="inlne-block mx-1 h-9 w-9 rounded-full bg-baseColor uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-baseColor-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-baseColor-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-baseColor-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                    <!-- Linkedin -->
                    <i class="fa-brands fa-linkedin-in mx-auto h-3 5 w-3"></i>

                </button>
                <!-- Google -->
                <button type="button" data-te-ripple-init data-te-ripple-color="light"
                    class="inlne-block mx-1 h-9 w-9 rounded-full bg-baseColor uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-baseColor-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-baseColor-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-baseColor-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                    <!-- Google -->
                    <i class="fa-brands fa-google mx-auto h-3 5 w-3"></i>

                </button>
            </div>

            <!-- Separator between social media sign in and email/password sign in -->
            <div
                class="my-4 flex items-center before:mt-0.5 before:flex-1 before:border-t before:border-gray-300 after:mt-0.5 after:flex-1 after:border-t after:border-gray-300">
                <p class="mx-4 mb-0 text-center font-semibold ">
                    OR
                </p>
            </div>
            {{-- <x-validation-errors class="mb-4" /> --}}
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                    {{ session('status') }}
                </div>
            @endif
            @if (session('error'))
                <div class="mb-4 font-medium text-sm text-red-600 dark:text-red-400">
                    {{ session('error') }}
                </div>
            @endif
            <form method="POST" action="{{ route('admin.auth') }}" autocomplete="false">
                @csrf
                @method('POST')

                <!--Username input-->
                <div class="relative mb-4" data-te-input-wrapper-init>
                    <div class="space-y-2">

                        <div>
                            <label for="email" class="text-gray-600 mb-2 block">Email <span class="text-baseColor">
                                    *</span></label></label>
                            <input type="email" name="email" :value="old('email')" autofocus autocomplete="username"
                                class="block w-full border rounded border-gray-300 px-4 py-3 text-gray-600 text-sm  focus:ring-0 focus:border-baseColor placeholder-gray-400"
                                placeholder="youremail.@domain.com">
                        </div>
                        <div>
                            <label for="password" class="text-gray-600 mb-2 block ">Password <span class="text-baseColor">
                                    *</span></label>
                            <div class="relative  w-full flex items-center">
                                <input type="password" name="password" id="password1"
                                    class="block w-full border rounded border-gray-300 px-4 py-3 text-gray-600 text-sm  focus:ring-0 focus:border-baseColor placeholder-gray-400"
                                    placeholder="*******">
                                <i id="icon1" onclick="ShowHidePassword(password1,icon1)"
                                    class="absolute font-bold text-lg  right-0 pr-4 fa fa-eye-slash cursor-pointer  items-center "></i>
                            </div>
                        </div>
                        <div>

                            <div class="my-4">
                                <div class="flex items-center">
                                    <input type="checkbox" name="aggrement" id="aggrement"
                                        class="text-baseColor focus:ring-0 -sm cursor-pointer">
                                    <label for="aggrement" class="text-gray-600 ml-3 cursor-pointer">I
                                        have read and
                                        agree to the <a href="#" class="text-baseColor">terms &
                                            conditions</a></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Submit button-->
                <div class=" pb-1 pt-1 text-center">
                    <button
                        class="inline-block w-full  px-6 pb-2 pt-2.5 text-xs
                         font-medium uppercase leading-normal text-white hover:text-baseColor shadow
                          bg-baseColor border hover:bg-white hover:border-baseColor "
                        type="submit">
                        Login
                    </button>

                    <!-- Forgot password link-->
                    <div class="pt-4"><a class="hover:text-baseColor" href="#!">Forgot password ?</a></div>
                </div>

                <!--Register button-->
                <div class="flex items-center justify-between pb-4 mt-3">
                    <p class="mb-0 mr-2">Don't have an account ?</p>
                   <a href="{{ route('register') }}" class=""> <button type="button"
                        class="inline-block  border border-baseColor px-8
                         pb-[6px] pt-2 text-xs font-medium uppercase
                         leading-normal text-baseColor hover:text-white
                         transition duration-150 ease-in-out hover:bg-baseColor
                          ">
                        Sign up
                    </button></a>
                </div>
            </form>
        </div>

    </div>
@endsection
