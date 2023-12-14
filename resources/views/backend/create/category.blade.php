@extends('layouts.admin.AdminLayout')
@section('page_title', 'Add Category')
@section('content')
    <div class="p-4">
        <div class="m-2 grid grid-cols-1 p-4 sm:grid-cols-9 gap-4">
            <div class="col-span-9 shadow rounded-md ">
                <div class="px-4 py-6">
                    <form method="POST" autocomplete="false" action="{{ route('dashboard.category.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="grid gap-6 mb-6 md:grid-cols-5">
                            <div>
                                <label for="name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category
                                    Name <span class="text-red-600"> *</span> </label>
                                <input type="text" name="name" id="name" value="{{ old('name') }}"
                                    class="@error('name') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Electronics/Clothing">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </div>
                            {{-- <div>
                                <label for="slug"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category
                                    slug <span class="text-red-600"> *</span> </label>
                                <input type="text" name="slug" id="slug" value="{{ old('slug') }}"
                                    class="@error('slug') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Electronics/Clothing">
                                @error('slug')
                                    {{ $message }}
                                @enderror
                            </div> --}}

                            <div>
                                <label for="parent_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Category <span class="text-red-600"> *</span> </label>
                                <select id="parent_id"
                                    class="py-2.5 @error('parent_id') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    name="parent_id">
                                    <option value="0" class="rounded-md p-1">Parent Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" class="p-1 rounded-md">
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                                {{-- <select id=parent
                                    class="@error('parent_id') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    name="parent_id">
                                    <option value="1">Parent Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" class=""> {{ $category->name }} {{ $category->id }}
                                        </option>
                                    @endforeach
                                </select> --}}
                                @error('parent_id')
                                    <div class="invalid-feedback active">
                                        <i class="fa fa-exclamation-circle fa-fw"></i>
                                        <span>{{ $message }}</span>

                                    </div>
                                @enderror
                            </div>
                            <div>
                                <label for="category_image"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category
                                    image <span class="text-red-600"> *</span> </label>
                                <input type="file" name="category_image" id="category_image"
                                    value="{{ old('category_image') }}"
                                    class="@error('category_image') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @error('category_image')
                                    <div class="invalid-feedback active">
                                        <i class="fa fa-exclamation-circle fa-fw"></i>
                                        <span>{{ $message }}</span>
                                    </div>
                                @enderror
                                {{-- <img src="{{ Storage::url($product->category_image) }}" alt="" class=" w-5 h-5"> --}}
                            </div>
                            <div>
                                <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    status <span class="text-red-600"> *</span> </label>
                                <select id="status"
                                    class="py-2.5 @error('status') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    name="status">
                                    <option value="0" class="rounded-md p-1">No</option>
                                    <option value="1" class="rounded-md p-1">Yes</option>
                                </select>
                                @error('status')
                                    <div class="invalid-feedback active">
                                        <i class="fa fa-exclamation-circle fa-fw"></i>
                                        <span>{{ $message }}</span>
                                    </div>
                                @enderror
                            </div>
                            <div>
                                <label for="featured" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    featured <span class="text-red-600"> *</span> </label>
                                <select id="featured"
                                    class="py-2.5 @error('featured') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    name="featured">
                                    <option value="0" class="rounded-md p-1">No</option>
                                    <option value="1" class="rounded-md p-1">Yes</option>
                                </select>
                                @error('featured')
                                    <div class="invalid-feedback active">
                                        <i class="fa fa-exclamation-circle fa-fw"></i>
                                        <span>{{ $message }}</span>
                                    </div>
                                @enderror
                            </div>
                            <div>
                                <label for="show_in_menu"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    show_in_menu <span class="text-red-600"> *</span> </label>
                                <select id="show_in_menu"
                                    class="py-2.5 @error('show_in_menu') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    name="show_in_menu">
                                    <option value="0" class="rounded-md p-1">No</option>
                                    <option value="1" class="rounded-md p-1">Yes</option>
                                </select>
                                @error('show_in_menu')
                                    <div class="invalid-feedback active">
                                        <i class="fa fa-exclamation-circle fa-fw"></i>
                                        <span>{{ $message }}</span>
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <button type="submit" class="btn_transparent w-">Add
                            Category</button>
                        <a href="{{ url('dashboard/category') }}" class=""><button type="button"
                                class="btn_bg">Back</button>
                        </a>
                    </form>
                </div>
            </div>
        @endsection
