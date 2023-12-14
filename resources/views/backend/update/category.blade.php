@extends('layouts.admin.AdminLayout')
@section('page_title', 'Update Category')
@section('content')
    <div class="p-4">
        <div class="m-2 grid grid-cols-1 p-4 sm:grid-cols-9 gap-4">
            <div class="col-span-9 shadow rounded-md ">
                <div class="px-4 py-6">
                    <form method="POST" autocomplete="false" action="{{ route('dashboard.category.update') }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        {{-- <h2 class="">{{ $category }}</h2> --}}
                        <div class="grid gap-6 mb-6 md:grid-cols-5">
                            <div>
                                <label for="name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category
                                    Name <span class="text-red-600"> *</span> </label>
                                <input type="text" name="name" id="name"
                                    value="{{ old('name', $category->name) }}"
                                    class="@error('name') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Electronics/Clothing">
                                <input type="hidden" name="id" value="{{ $category->id }}">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </div>
                            {{-- <div>
                                <label for="slug"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category
                                    slug <span class="text-red-600"> *</span> </label>
                                <input type="text" name="slug" id="slug"
                                    value="{{ old('slug', $category->slug) }}"
                                    class="@error('slug') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Electronics/Clothing">
                                <input type="hidden" slug="id" value="{{ $category->id }}">
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
                                    <option value="0" class="rounded-md p-1">Select Category</option>
                                    @foreach ($categories as $cate)
                                        @if ($category->parent_id == $cate->id)
                                            <option value="{{ $cate->id }}" selected>{{ $cate->name }}</option>
                                        @else
                                            <option value="{{ $cate->id }}">{{ $cate->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
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
                                    value="{{ old('category_image', $category->category_image) }}"
                                    class="@error('category_image') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @error('category_image')
                                    <div class="invalid-feedback active">
                                        <i class="fa fa-exclamation-circle fa-fw"></i>
                                        <span>{{ $message }}</span>
                                    </div>
                                @enderror
                                <img src="{{ Storage::url($category->category_image) }}" alt="" class=" w-15 h-15">
                            </div>
                            <div>
                                <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    status <span class="text-red-600"> *</span> </label>
                                <select id="status"
                                    class="py-2.5 @error('status') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    name="status">
                                    @if ($category->status == 1)
                                        <option value="1" class="rounded-md p-1" selected>Yes</option>
                                        <option value="0" class="rounded-md p-1">No</option>
                                    @else
                                        <option value="0" class="rounded-md p-1" selected>No</option>
                                        <option value="1" class="rounded-md p-1">Yes</option>
                                    @endif
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
                                    @if ($category->featured == 1)
                                        <option value="1" class="rounded-md p-1" selected>Yes</option>
                                        <option value="0" class="rounded-md p-1">No</option>
                                    @else
                                        <option value="0" class="rounded-md p-1" selected>No</option>
                                        <option value="1" class="rounded-md p-1">Yes</option>
                                    @endif
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
                                    @if ($category->show_in_menu == 1)
                                        <option value="1" class="rounded-md p-1" selected>Yes</option>
                                        <option value="0" class="rounded-md p-1">No</option>
                                    @else
                                        <option value="0" class="rounded-md p-1" selected>No</option>
                                        <option value="1" class="rounded-md p-1">Yes</option>
                                    @endif
                                </select>
                                @error('show_in_menu')
                                    <div class="invalid-feedback active">
                                        <i class="fa fa-exclamation-circle fa-fw"></i>
                                        <span>{{ $message }}</span>
                                    </div>
                                @enderror
                            </div>



                            <button type="submit"
                                class="text-white bg-primary hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                    </form>
                </div>
            </div>


        @endsection
