@extends('layouts.admin.AdminLayout')
@section('page_title', 'Add Product')
@section('product_select', 'active')
@section('content')
    <div class="">
        <div class="p-4 ">
            <div class="m-2 grid grid-cols-1 p-4 sm:grid-cols-9 gap-4">
                <div class="col-span-9 shadow rounded-md ">
                    <div class="px-4 py-6">
                        <h3 class="text-2xl font-medium pb-4">Product Information</h3>
                        <form method="POST" autocomplete="false" action="{{ route('dashboard.product.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            {{-- 1st grid 3 columns --}}
                            <div class="grid gap-6 mb-6 md:grid-cols-5">
                                <div>
                                    <label for="name"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                                        Name <span class="text-red-600"> *</span> </label>
                                    <input type="text" name="name" id="name" value="{{ old('name') }}"
                                        class="@error('name') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Mobile/Laptops">
                                   @error('name') <div class="invalid-feedback active">
                                        <i class="fa fa-exclamation-circle fa-fw"></i>
                                            <span>{{ $message }}</span>

                                    </div>  @enderror
                                </div>
                                {{-- <div>
                                    <label for="slug"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        slug <span class="text-red-600"> *</span> </label>
                                    <input type="text" name="slug" id="slug" value="{{ old('slug') }}"
                                        class="@error('slug') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Electronics/Clothing">
                                    <input type="hidden" slug="id" value="{{ $category->id }}">
                                    @error('slug')
                                        {{ $message }}
                                    @enderror
                                </div> --}}
                                <div>
                                    <label for="brand_id"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                       Brand <span class="text-red-600"> *</span> </label>
                                    <select id="brand_id"
                                        class="py-2.5 @error('brand_id') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        name="brand_id">
                                        <option value="0" class="rounded-md p-1">Select Brand</option>
                                        @foreach ($brands as $brand)
                                            <option value="{{ $brand->id }}" class="p-1 rounded-md">
                                                {{ $brand->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                   @error('brand_id') <div class="invalid-feedback active">
                                        <i class="fa fa-exclamation-circle fa-fw"></i>
                                            <span>{{ $message }}</span>

                                    </div>@enderror
                                </div>
                                <div>
                                    <label for="category_id"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Category <span class="text-red-600"> *</span> </label>
                                    <select id="category_id"
                                        class="py-2.5 @error('category_id') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        name="category_id">
                                        <option value="0" class="rounded-md p-1">Select Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" class="p-1 rounded-md">
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                  @error('category_id')  <div class="invalid-feedback active">
                                        <i class="fa fa-exclamation-circle fa-fw"></i>
                                            <span>{{ $message }}</span>

                                    </div> @enderror
                                </div>
                                <div>
                                    <label for="image"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                                        image <span class="text-red-600"> *</span> </label>
                                    <input type="file" name="image" id="image" value="{{ old('image') }}"
                                        class="@error('image') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                   @error('image') <div class="invalid-feedback active">
                                        <i class="fa fa-exclamation-circle fa-fw"></i>
                                            <span>{{ $message }}</span>

                                    </div> @enderror
                                </div>
                                <div>
                                    <label for="model"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                                        model <span class="text-red-600"> *</span> </label>
                                    <input type="text" name="model" id="model" value="{{ old('model') }}"
                                        class="@error('model') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="model">
                                   @error('model') <div class="invalid-feedback active">
                                        <i class="fa fa-exclamation-circle fa-fw"></i>
                                            <span>{{ $message }}</span>

                                    </div> @enderror
                                </div>
                                <div>
                                    <label for="warranty"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                                        warranty <span class="text-red-600"> *</span> </label>
                                    <input type="text" name="warranty" id="warranty" value="{{ old('warranty') }}"
                                        class="@error('warranty') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="warranty">
                                   @error('warranty') <div class="invalid-feedback active">
                                        <i class="fa fa-exclamation-circle fa-fw"></i>
                                            <span>{{ $message }}</span>

                                    </div> @enderror
                                </div>
                                <div>
                                    <label for="lead_time"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                                        lead_time <span class="text-red-600"> *</span> </label>
                                    <input type="text" name="lead_time" id="lead_time" value="{{ old('lead_time') }}"
                                        class="@error('lead_time') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="lead_time">
                                   @error('lead_time') <div class="invalid-feedback active">
                                        <i class="fa fa-exclamation-circle fa-fw"></i>
                                            <span>{{ $message }}</span>

                                    </div> @enderror
                                </div>
                                <div>
                                    <label for="tax_id"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                       Tax <span class="text-red-600"> *</span> </label>
                                    <select id="tax_id"
                                        class="py-2.5 @error('tax_id') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        name="tax_id">
                                        <option value="0" class="rounded-md p-1">Tax</option>
                                        @foreach ($taxes as $tax)
                                            <option value="{{ $tax->id }}" class="p-1 rounded-md">
                                                {{ $tax->tax_desc }}  {{ $tax->tax_value }}

                                            </option>
                                        @endforeach
                                    </select>
                                  @error('tax_id')  <div class="invalid-feedback active">
                                        <i class="fa fa-exclamation-circle fa-fw"></i>
                                            <span>{{ $message }}</span>

                                    </div> @enderror
                                </div>

                                <div>
                                    <label for="status"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                       Status <span class="text-red-600"> *</span> </label>
                                    <select id="status"
                                        class="py-2.5 @error('status') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        name="status">
                                        <option value="0" class="rounded-md p-1">No</option>
                                        <option value="1" class="rounded-md p-1">Yes</option>
                                    </select>
                                   @error('status') <div class="invalid-feedback active">
                                        <i class="fa fa-exclamation-circle fa-fw"></i>
                                            <span>{{ $message }}</span>
                                    </div>@enderror
                                </div>
                                <div>
                                    <label for="is_promotional"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                       is_promotional <span class="text-red-600"> *</span> </label>
                                    <select id="is_promotional"
                                        class="py-2.5 @error('is_promotional') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        name="is_promotional">
                                        <option value="0" class="rounded-md p-1">No</option>
                                        <option value="1" class="rounded-md p-1">Yes</option>
                                    </select>
                                   @error('is_promotional') <div class="invalid-feedback active">
                                        <i class="fa fa-exclamation-circle fa-fw"></i>
                                            <span>{{ $message }}</span>
                                    </div>@enderror
                                </div>
                                <div>
                                    <label for="is_trending"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                       is_trending <span class="text-red-600"> *</span> </label>
                                    <select id="is_trending"
                                        class="py-2.5 @error('is_trending') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        name="is_trending">
                                        <option value="0" class="rounded-md p-1">No</option>
                                        <option value="1" class="rounded-md p-1">Yes</option>
                                    </select>
                                   @error('is_trending') <div class="invalid-feedback active">
                                        <i class="fa fa-exclamation-circle fa-fw"></i>
                                            <span>{{ $message }}</span>
                                    </div>@enderror
                                </div>
                                <div>
                                    <label for="is_discounted"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                       is_discounted <span class="text-red-600"> *</span> </label>
                                    <select id="is_discounted"
                                        class="py-2.5 @error('is_discounted') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        name="is_discounted">
                                        <option value="0" class="rounded-md p-1">No</option>
                                        <option value="1" class="rounded-md p-1">Yes</option>
                                    </select>
                                   @error('is_discounted') <div class="invalid-feedback active">
                                        <i class="fa fa-exclamation-circle fa-fw"></i>
                                            <span>{{ $message }}</span>
                                    </div>@enderror
                                </div>
                                <div>
                                    <label for="featured"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                       featured <span class="text-red-600"> *</span> </label>
                                    <select id="featured"
                                        class="py-2.5 @error('featured') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        name="featured">
                                        <option value="0" class="rounded-md p-1">No</option>
                                        <option value="1" class="rounded-md p-1">Yes</option>
                                    </select>
                                   @error('featured') <div class="invalid-feedback active">
                                        <i class="fa fa-exclamation-circle fa-fw"></i>
                                            <span>{{ $message }}</span>
                                    </div>@enderror
                                </div>
                                 <div>
                                    <label for="show_menu"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                       show_menu <span class="text-red-600"> *</span> </label>
                                    <select id="show_menu"
                                        class="py-2.5 @error('show_menu') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        name="show_menu">
                                        <option value="0" class="rounded-md p-1">No</option>
                                        <option value="1" class="rounded-md p-1">Yes</option>
                                    </select>
                                   @error('show_menu') <div class="invalid-feedback active">
                                        <i class="fa fa-exclamation-circle fa-fw"></i>
                                            <span>{{ $message }}</span>
                                    </div>@enderror
                                </div>


                            </div>
                            {{-- 2nd grid 2 colums --}}
                            <div class="grid gap-6 my-6 md:grid-cols-1">
                                <div class="">


                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                        for="short_description">short_description <span class="text-red-600"> *</span> </label>
                                    <textarea
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        rows="" name="short_description" id="short_description">{{ old('short_description') }}</textarea>
                                </div>
                                <div class="">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                        for="description">description
                                        <span class="text-red-600"> *</span> </label>
                                    <textarea
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        rows="" name="description" id="description">{{ old('description') }}</textarea>
                                </div>
                                <div class="">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                        for="keywords">keywords
                                        <span class="text-red-600"> *</span> </label>
                                    <textarea
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        rows="" name="keywords" id="keywords">{{ old('keywords') }}</textarea>
                                </div>
                                <div class="">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                        for="technical_specification">technical_specification <span class="text-red-600">
                                            *</span>
                                    </label>
                                    <textarea
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        rows="" name="technical_specification" id="technical_specification">{{ old('technical_specification') }}</textarea>
                                </div>
                                <div class="">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                        for="specification">specification <span class="text-red-600"> *</span> </label>
                                    <textarea
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        rows="" name="specification" id="specification">{{ old('specification') }}</textarea>
                                </div>
                                <div class="">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                        for="uses">uses
                                        <span class="text-red-600"> *</span> </label>
                                    <textarea
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        rows="" name="uses" id="uses">{{ old('uses') }}</textarea>
                                </div>
                            </div>
                            <script>
                                const watchdog = new CKSource.EditorWatchdog();
                                window.watchdog = watchdog;

                                watchdog.setCreator( ( element, config ) => {
                                    return CKSource.Editor
                                        .create( element, config )
                                        .then( editor => {




                                            return editor;
                                        } )
                                } );

                                watchdog.setDestructor( editor => {



                                    return editor.destroy();
                                } );

                                watchdog.on( 'error', handleError );

                                watchdog
                                    .create( document.querySelector( '#desc' ), {
                                        licenseKey: '',
                                    } )
                                    .catch( handleError );
                                    // short description
                                watchdog
                                    .create( document.querySelector( '#short_description' ), {
                                        licenseKey: '',
                                    } )
                                    .catch( handleError );
                                    // technical_specification
                                watchdog
                                    .create( document.querySelector( '#technical_specification' ), {
                                        licenseKey: '',
                                    } )
                                    .catch( handleError );
                                    //  specification
                                watchdog
                                    .create( document.querySelector( '#specification' ), {
                                        licenseKey: '',
                                    } )
                                    .catch( handleError );
                                    // uses
                                watchdog
                                    .create( document.querySelector( '#uses' ), {
                                        licenseKey: '',
                                    } )
                                    .catch( handleError );
                                    // keywords
                                watchdog
                                    .create( document.querySelector( '#keywords' ), {
                                        licenseKey: '',
                                    } )
                                    .catch( handleError );

                                function handleError( error ) {
                                    console.error( 'Oops, something went wrong!' );
                                    console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
                                    console.warn( 'Build id: yls092uvdk98-nizi6xkamits' );
                                    console.error( error );
                                }

                            </script>
                            {{-- attribute section --}}
                            <h2 class="text-2xl font-bold my-4">Product Attributes </h2>
                            <div class=" p-2">
                                <div class="grid gap-6 mb-10 md:grid-cols-4 relative">
                                    <div>
                                        <label for="sku"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">sku<span
                                                class="text-red-600"> *</span> </label>
                                        <input  name="sku[]" id="sku" type="text" value="{{ old('sku[]') }}"
                                            class="@error('sku') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="sku">
                                        <div class="invalid-feedback active">
                                            <i class="fa fa-exclamation-circle fa-fw"></i> @error('sku')
                                                <span>{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div>
                                        <label for="attribute_image"
                                            class="block mb-2  text-sm font-medium text-gray-900 dark:text-white">Product
                                            attribute_image <span class="text-red-600"> *</span> </label>
                                        <input type="file" name="attribute_image[]" id="attribute_image"
                                            value="{{ old('attribute_image[]') }}"
                                            class="@error('attribute_image') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <div class="invalid-feedback active">
                                            <i class="fa fa-exclamation-circle fa-fw"></i> @error('attribute_image')
                                                <span>{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div>
                                        <label for="mrp"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">mrp<span
                                                class="text-red-600"> *</span> </label>
                                        <input type="number" name="mrp[]" id="mrp" value="{{ old('mrp[]') }}"
                                            class="@error('mrp') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="mrp">
                                       @error('mrp') <div class="invalid-feedback active">
                                            <i class="fa fa-exclamation-circle fa-fw"></i>
                                                <span>{{ $message }}</span>

                                        </div> @enderror
                                    </div>
                                    <div>
                                        <label for="price"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price<span
                                                class="text-red-600"> *</span> </label>
                                        <input type="number" name="price[]" id="price" value="{{ old('price[]') }}"
                                            class="@error('price') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="price">
                                        <div class="invalid-feedback active">
                                            <i class="fa fa-exclamation-circle fa-fw"></i> @error('price.0')
                                                <span>{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div>
                                        <label for="quantity"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantity<span
                                                class="text-red-600"> *</span> </label>
                                        <input type="number" name="quantity[]" id="quantity"
                                            value="{{ old('quantity[]') }}"
                                            class="@error('quantity') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="Quantity">
                                        <div class="invalid-feedback active">
                                            <i class="fa fa-exclamation-circle fa-fw"></i> @error('quantity')
                                                <span>{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div>
                                        <label for="size_id"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                            Size <span class="text-red-600"> *</span> </label>
                                        <select id="size_id"
                                            class="py-2.5 @error('size_id') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            name="size_id[]">
                                            <option value="0" class="rounded-md p-1">Select Size</option>
                                            @foreach ($sizes as $size)
                                                <option value="{{ $size->id }}" class="p-1 rounded-md">
                                                    {{ $size->size }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback active">
                                            <i class="fa fa-exclamation-circle fa-fw"></i> @error('size_id')
                                                <span>{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div>
                                        <label for="color_id"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                            Color <span class="text-red-600"> *</span> </label>
                                        <select id="color_id"
                                            class="py-2.5 @error('color_id') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            name="color_id[]">
                                            <option value="0" class="rounded-md p-1">Select Color</option>
                                            @foreach ($colors as $color)
                                                <option value="{{ $color->id }}" class="p-1 rounded-md">
                                                    {{ $color->color }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback active">
                                            <i class="fa fa-exclamation-circle fa-fw"></i> @error('color_id')
                                                <span>{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>

                                <div class=""id="product_attr_box">
                                </div>
                            </div>
                            {{-- add section button --}}
                            <div class="">
                                <button type="button"onclick="add_more()" id="add-attribute-btn"
                                    class="flex flex-nowrap gap-1 items-center text-white my-4 bg-primary hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fa-solid fa-plus "></i>
                                    Add</button>
                            </div>
                            {{-- product images section --}}
                            <h2 class="text-2xl font-bold my-4">Product images </h2>
                            <div class=" p-2">
                                <div class="grid gap-6 mb-10 md:grid-cols-4 relative">
                                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                                        <div>
                                            <label for="images"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                images Image<span class="text-red-600"> *</span> </label>
                                            <input type="file" id="images" name="images[]"multiple
                                                class="@error('images') is-invalid @enderror ">

                                            @error('images')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class=""id="product_attr_box">
                                </div>
                            </div>
                            {{-- end product images section --}}
                            {{-- submit button --}}
                            <button type="submit"
                                class="text-white my-4 bg-primary hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
                                Product</button>


                        </form>

<script>
    var loop_count=1;
    function add_more() {
loop_count++;
var html = ' <div id="product_attr_'+loop_count+'" class="grid gap-6 my-10 md:grid-cols-4 relative"><div>    <label for="sku"        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">sku<span            class="text-red-600"> *</span> </label>    <input type="text" name="sku[]" id="sku" value="{{ old('sku[]') }}"        class="@error('sku') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"        placeholder="sku">    <div class="invalid-feedback active">        <i class="fa fa-exclamation-circle fa-fw"></i> @error('sku')            <span>{{ $message }}</span>        @enderror    </div></div><div>    <label for="attribute_image"        class="block mb-2  text-sm font-medium text-gray-900 dark:text-white">Product        attribute_image <span class="text-red-600"> *</span> </label>    <input type="file" name="attribute_image[]" id="attribute_image"        value="{{ old('attribute_image[]') }}"        class="@error('attribute_image') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">    <div class="invalid-feedback active">        <i class="fa fa-exclamation-circle fa-fw"></i> @error('attribute_image')            <span>{{ $message }}</span>        @enderror    </div></div><div>    <label for="mrp"        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">mrp<span            class="text-red-600"> *</span> </label>    <input type="number" name="mrp[]" id="mrp" value="{{ old('mrp[]') }}"        class="@error('mrp') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"        placeholder="mrp">    <div class="invalid-feedback active">        <i class="fa fa-exclamation-circle fa-fw"></i> @error('mrp')            <span>{{ $message }}</span>        @enderror    </div></div><div>    <label for="price"        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price<span            class="text-red-600"> *</span> </label>    <input type="number" name="price[]" id="price" value="{{ old('price[]') }}"        class="@error('price') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"        placeholder="price">    <div class="invalid-feedback active">        <i class="fa fa-exclamation-circle fa-fw"></i> @error('price')            <span>{{ $message }}</span>        @enderror    </div></div><div>    <label for="quantity"        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantity<span            class="text-red-600"> *</span> </label>    <input type="number" name="quantity[]" id="quantity"        value="{{ old('quantity[]') }}"        class="@error('quantity') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"        placeholder="Quantity">    <div class="invalid-feedback active">        <i class="fa fa-exclamation-circle fa-fw"></i> @error('quantity')            <span>{{ $message }}</span>        @enderror    </div></div><div>    <label for="size_id"        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">        Size <span class="text-red-600"> *</span> </label>    <select id="size_id"        class="py-2.5 @error('size_id') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"        name="size_id[]">        <option value="0" class="rounded-md p-1">Select Size</option>        @foreach ($sizes as $size)            <option value="{{ $size->id }}" class="p-1 rounded-md">                {{ $size->size }}            </option>        @endforeach    </select>    <div class="invalid-feedback active">        <i class="fa fa-exclamation-circle fa-fw"></i> @error('size_id')            <span>{{ $message }}</span>        @enderror    </div></div><div>    <label for="color_id"        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">        Color <span class="text-red-600"> *</span> </label>    <select id="color_id"        class="py-2.5 @error('color_id') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"        name="color_id[]">        <option value="0" class="rounded-md p-1">Select Color</option>        @foreach ($colors as $color)            <option value="{{ $color->id }}" class="p-1 rounded-md">                {{ $color->color }}            </option>        @endforeach    </select>    <div class="invalid-feedback active">        <i class="fa fa-exclamation-circle fa-fw"></i> @error('color_id')            <span>{{ $message }}</span>        @enderror    </div>                                    <div class=" absolute bottom-4 right-2"><button type="button" onclick="remove_more('+loop_count+')" id="add-attribute-btn"class=""><i class="fa-solid fa-multiply "></i></button></div></div></div>';
// html+ = '<div class=""><button type="button"onclick="add_more()" id="add-attribute-btn" class="flex flex-nowrap gap-1 items-center text-white my-4 bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><i class="fa-solid fa-minus "></i>Remove</button></div>';
// var size_id_html = jQuery('#size_id').html();
// console.log(size_id_html);
    jQuery('#product_attr_box').append(html);

}
function remove_more(element) {
    // alert(element)
    jQuery('#product_attr_'+element).remove();
}
</script>
                    </div>
                </div>
            </div>
        </div>
    @endsection
