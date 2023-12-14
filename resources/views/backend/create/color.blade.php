@extends('layouts.admin.AdminLayout')
@section('page_title','Add Color')
@section('content')
    <div class="p-4">
        <div class="m-2 grid grid-cols-1 p-4 sm:grid-cols-9 gap-4">
            <div class="col-span-9 shadow rounded-md ">
                <div class="px-4 py-6">
                    <form method="POST" autocomplete="false" action="{{ route('dashboard.color.store') }}"  enctype="multipart/form-data">
                        @csrf
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="color"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    color <span class="text-red-600"> *</span> </label>
                                <input type="text" name="color" id="color" value="{{ old('color') }}"
                                    class="@error('color') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="large / small ">
                                @error('color')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div>
                                <label for="status"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    status <span class="text-red-600"> *</span> </label>
                                <input type="integer" name="status" id="status" value="{{ old('status') }}"
                                    class="@error('status') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="0 / 1">
                                @error('status')
                                    {{ $message }}
                                @enderror
                            </div>



                        </div>

                        <button type="submit" class="btn_transparent w-">Add
                            </button>
                        <a href="{{ url('dashboard/') }}" class=""><button type="button" class="btn_bg">Back</button>
                   </a> </form>
                </div>
            </div>
        @endsection
