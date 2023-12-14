@extends('layouts.admin.AdminLayout')
@section('page_title', 'BrandsCustomers')
@section('product_select', 'active')
@section('content')
    <div class="relative bg-white overflow-x-auto shadow-md sm:rounded-lg p-6">
        <div class="grid grid-cols md:grid-cols-2 gap-4 p-2">
            <div class="grid grid-cols-2 gap-y-4 p-2">
                <div class=""><span class="">Name:</span> <span class="capitalize font-semibold">{{ $customer->name }}</span></div>
                <div class=""><span class="">Email:</span> <span class=" font-semibold">{{ $customer->email }}</span></div>
                <div class=""><span class="">Mobile:</span> <span class=" font-semibold">{{ $customer->mobile }}</span></div>
                <div class=""><span class="">City:</span> <span class="capitalize font-semibold">{{ $customer->city }}</span></div>
                <div class=""><span class="">Zip Code:</span> <span class="capitalize font-semibold">{{ $customer->zip }}</span></div>
                <div class=""><span class="">Status:</span> <span class="capitalize font-semibold">{{ $customer->status }}</span></div>
                <div class=""><span class="">GustIn:</span> <span class="capitalize font-semibold">{{ $customer->gstin }}</span></div>
                <div class=""><span class="">Updated_at:</span> <span class="capitalize font-semibold">{{\Carbon\Carbon::parse($customer->updated_at)->format('d-m-Y h:i') }}</span></div>
            </div>
            <div class="grid gap-y-4 p-2">
                <div class=""><span class="">Address:</span> <span class="capitalize font-semibold">{{ $customer->address }}</span></div>
                <div class=""><span class="">State:</span> <span class="capitalize font-semibold">{{ $customer->state }}</span></div>
                <div class=""><span class="">Company:</span> <span class="capitalize font-semibold">{{ $customer->company }}</span></div>
                <div class=""><span class="">Created_at:</span> <span class="capitalize font-semibold">{{\Carbon\Carbon::parse( $customer->created_at )->format('d-m-Y h:i') }}</span></div>
            </div>
        </div>
    </div>
@endsection
