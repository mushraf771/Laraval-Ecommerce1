@extends('layouts.admin.AdminLayout')
@section('page_title','Edit Coupon')
@section('content')
    <div class="p-4">
        <div class="m-2 grid grid-cols-1 p-4 sm:grid-cols-9 gap-5">
            <div class="col-span-9 shadow rounded-md ">
                <div class="px-4 py-6">
                    <form method="POST" autocomplete="false" action="{{ route('dashboard.coupon.update') }}"  enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="grid gap-6 mb-6 md:grid-cols-4">
                            <div>
                                <label for="title"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    title <span class="text-red-600"> *</span> </label>
                                <input type="text" name="title" id="title" value="{{ old('title',$coupon->title) }}"
                                    class="@error('title') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Electronics/Clothing">
                                    <input type="hidden" name="id" value="{{ $coupon->id }}">
                                @error('title')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div>
                                <label for="code"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    code <span class="text-red-600"> *</span> </label>
                                <input type="text" name="code" id="code" value="{{ old('code',$coupon->code) }}"
                                    class="@error('code') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Electronics/Clothing">
                                @error('code')
                                    {{ $message }}
                                @enderror
                            </div>

                            <div>
                                <label for="type"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                   type <span class="text-red-600"> *</span> </label>
                                <select id="type"
                                    class="py-2.5 @error('type') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    name="type">
                                    @if ($coupon->type =='Value')
                                    <option value="Value" class="rounded-md p-1" selected>Value</option>
                                    <option value="Percentage" class="rounded-md p-1">Percentage</option>
                                    @elseif($coupon->type =='Percentage')
                                    <option value="Percentage" class="rounded-md p-1" selected>Percentage</option>
                                    <option value="Value" class="rounded-md p-1" >Value</option>
                                    @else
                                    <option value="Percentage" class="rounded-md p-1" >Percentage</option>
                                    <option value="Value" class="rounded-md p-1" >Value</option>
                                    @endif
                                </select>
                               @error('type') <div class="invalid-feedback active">
                                    <i class="fa fa-exclamation-circle fa-fw"></i>
                                        <span>{{ $message }}</span>
                                </div>@enderror
                            </div>
                            <div>
                                <label for="value"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    value <span class="text-red-600"> *</span> </label>
                                <input type="text" name="value" id="value" value="{{ old('value',$coupon->value) }}"
                                    class="@error('value') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Electronics/Clothing">
                                @error('value')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div>
                                <label for="min_order_amt"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    min_order_amt <span class="text-red-600"> *</span> </label>
                                <input type="text" name="min_order_amt" id="min_order_amt" value="{{ old('min_order_amt',$coupon->min_order_amt) }}"
                                    class="@error('min_order_amt') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Electronics/Clothing">
                                @error('min_order_amt')
                                    {{ $message }}
                                @enderror
                            </div>

                            <div>
                                <label for="is_one_time"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                   is_one_time <span class="text-red-600"> *</span> </label>
                                <select id="is_one_time"
                                    class="py-2.5 @error('is_one_time') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    name="is_one_time">
                                    @if ($coupon->is_one_time ==1)
                                    <option value="1" class="rounded-md p-1" selected>Yes</option>
                                    <option value="0" class="rounded-md p-1">No</option>
                                    @else
                                    <option value="0" class="rounded-md p-1" selected>No</option>
                                    <option value="1" class="rounded-md p-1" >Yes</option>
                                    @endif
                                </select>
                               @error('is_one_time') <div class="invalid-feedback active">
                                    <i class="fa fa-exclamation-circle fa-fw"></i>
                                        <span>{{ $message }}</span>
                                </div>@enderror
                            </div>


                            <div>
                                <label for="status"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                   status <span class="text-red-600"> *</span> </label>
                                <select id="status"
                                    class="py-2.5 @error('status') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    name="status">
                                    @if ($coupon->status ==1)
                                    <option value="1" class="rounded-md p-1" selected>Yes</option>
                                    <option value="0" class="rounded-md p-1">No</option>
                                    @else
                                    <option value="0" class="rounded-md p-1" selected>No</option>
                                    <option value="1" class="rounded-md p-1" >Yes</option>
                                    @endif
                                </select>
                               @error('status') <div class="invalid-feedback active">
                                    <i class="fa fa-exclamation-circle fa-fw"></i>
                                        <span>{{ $message }}</span>
                                </div>@enderror
                            </div>




                        </div>

                        <button type="submit" class="btn_transparent w-">Update
                            </button>
                        <a href="{{ url('dashboard/') }}" class=""><button type="button" class="btn_bg">Back</button>
                   </a> </form>
                </div>
            </div>
        @endsection
