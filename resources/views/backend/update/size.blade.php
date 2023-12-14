@extends('layouts.admin.AdminLayout')
@section('page_title','Edit size')
@section('content')
    <div class="p-4">
        <div class="m-2 grid grid-cols-1 p-4 sm:grid-cols-9 gap-4">
            <div class="col-span-9 shadow rounded-md ">
                <div class="px-4 py-6">
                    <form method="POST" autocomplete="false" action="{{ route('dashboard.size.update') }}"  enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="size"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    size <span class="text-red-600"> *</span> </label>
                                <input type="text" name="size" id="size" value="{{ old('size',$size->size) }}"
                                    class="@error('size') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Electronics/Clothing">
                                    <input type="hidden" name="id" value="{{ $size->id }}">
                                @error('size')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div>
                                <label for="status"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    status <span class="text-red-600"> *</span> </label>
                                <input type="text" name="status" id="status" value="{{ old('status',$size->status) }}"
                                    class="@error('status') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Electronics/Clothing">
                                    <input type="hidden" name="id" value="{{ $size->id }}">
                                @error('status')
                                    {{ $message }}
                                @enderror
                            </div>


                        </div>

                        <button type="submit" class="btn_transparent w-">Update
                            </button>
                        <a href="{{ url('dashboard/') }}" class=""><button type="button" class="btn_bg">Back</button>
                   </a> </form>
                </div>
            </div>
        @endsection
