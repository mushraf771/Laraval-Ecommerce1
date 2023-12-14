@extends('layouts.admin.AdminLayout')
@section('page_title', 'Edit size')
@section('content')
    <div class="p-4">
        <div class="m-2 grid grid-cols-1 p-4 sm:grid-cols-9 gap-4">
            <div class="col-span-9 shadow rounded-md ">
                <div class="px-4 py-6">
                    <form method="POST" autocomplete="false" action="{{ route('dashboard.tax.update') }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <input type="hidden" name="id" value="{{ $tax->id }}">
                                <label for="tax_desc" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    tax_desc <span class="text-red-600"> *</span> </label>
                                <input type="text" name="tax_desc" id="tax_desc" value="{{ old('tax_desc',$tax->tax_desc) }}"
                                    class="@error('tax_desc') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="large / small ">
                                @error('tax_desc')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div>
                                <label for="tax_value" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    tax_value <span class="text-red-600"> *</span> </label>
                                <input type="text" name="tax_value" id="tax_value" value="{{ old('tax_value',$tax->tax_value) }}"
                                    class="@error('tax_value') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="large / small ">
                                @error('tax_value')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div>
                                <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    status <span class="text-red-600"> *</span> </label>
                                <select id="status"
                                    class="py-2.5 @error('status') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    name="status">
                                    @if ($tax->status == 1)
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


                        </div>

                        <button type="submit" class="btn_transparent w-">Update
                        </button>
                        <a href="{{ url('dashboard/') }}" class=""><button type="button" class="btn_bg">Back</button>
                        </a>
                    </form>
                </div>
            </div>
        @endsection
