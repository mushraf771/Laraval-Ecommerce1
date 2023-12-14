@extends('layouts.admin.AdminLayout')
@section('page_title', 'Edit Brand')
@section('product_select', 'active')
@section('content')
    <div class="p-4">
        <div class="m-2 grid grid-cols-1 p-4 sm:grid-cols-9 gap-4">
            <div class="col-span-9 shadow rounded-md ">
                <div class="px-4 py-6">
                    <form method="POST" autocomplete="false" action="{{ route('dashboard.brand.update') }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="grid gap-6 mb-6 md:grid-cols-4">
                            <div>
                                <input type="hidden"name="id" class="" value="{{ $brand->id }}">
                                <label for="name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Brand
                                    Name <span class="text-red-600"> *</span> </label>
                                <input type="text" name="name" id="name" value="{{ old('name', $brand->name) }}"
                                    class="@error('name') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Apple/Rolex">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div class="">
                                <label for="logo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Logo <span class="text-red-600"> *</span> </label>
                                <input type="file" id="logo" name="logo"value="{{ Storage::url($brand->logo) }}"
                                    class="@error('logo') is-invalid @enderror ">
                                @error('logo')
                                    {{ $message }}
                                @enderror
                                <img src="{{ Storage::url($brand->logo) }}" id="brandLogo" class="w-15 h-15" />
                            </div>
                            <div>
                                <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    status <span class="text-red-600"> *</span> </label>
                                <input type="integer" name="status" id="status"
                                    value="{{ old('status', $brand->status) }}"
                                    class="@error('status') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="0 / 1">
                                @error('status')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div>
                                <label for="top_brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    top_brand <span class="text-red-600"> *</span> </label>
                                <input type="integer" name="top_brand" id="top_brand"
                                    value="{{ old('top_brand', $brand->top_brand) }}"
                                    class="@error('top_brand') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="0 / 1">
                                @error('top_brand')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <button type="submit"
                            class="text-white bg-primary hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
