@extends('layouts.mainapp')
@section('title') Category @endsection
@section('content')
<div class="grid flex-shrink-0 w-full grid-cols-2 gap-3 bg-grey-300">
    @include('category._createCategory')

    <div class="container flex-grow pt-6 pb-8 mx-auto sm:px-4">
        <div class="mb-6 bg-white border-t border-b shadow sm:border-l sm:border-r sm:rounded">
            <div class="px-6 bg-gray-300">
                <div class="justify-center py-4 mr-6 text-3xl text-center text-blue-900 lg:flex">{{ __('အမျိုးအစား ပေါင်း၁၆၀၀၀') }}</div>
            </div>
            <table class="w-full border-collapse ">
                <thead>
                    <tr>
                        <th class="table-header">{{ __('#') }}</th>
                        <th class="table-header">{{ __('အမျိုးအစား') }}</th>
                        <th class="table-header">{{ __('ဘာညာ') }}</th>
                    </tr>
                </thead>

                @foreach ($categories as $category)
                <tbody>
                    <tr class="flex flex-row flex-wrap mb-10 bg-white lg:hover:bg-gray-100 lg:table-row lg:flex-row lg:flex-no-wrap lg:mb-0">
                        <td class="relative block w-full p-3 text-center text-gray-800 border border-b lg:w-auto lg:table-cell lg:static">
                            <span class="absolute top-0 left-0 px-2 py-1 text-xs font-bold uppercase bg-blue-200 lg:hidden">{{ __('#') }}</span>
                            {{ $category->id }}
                        </td>
                        <td class="relative block w-full p-3 text-center text-gray-800 border border-b lg:w-auto lg:table-cell lg:static">
                            <span class="absolute top-0 left-0 px-2 py-1 text-xs font-bold uppercase bg-blue-200 lg:hidden">{{ __('အမျိုးအစား') }}</span>
                            {{ $category->name }}
                        </td>

                        <td class="relative block w-full p-3 text-center text-gray-800 border border-b lg:w-auto lg:table-cell lg:static">
                            <span class="absolute top-0 left-0 px-2 py-1 text-xs font-bold uppercase bg-blue-200 lg:hidden">{{ __('ဘာညာ') }}</span>
                            <a href="{{ route('categories.edit', $category->id) }}" class="text-blue-400 underline hover:text-blue-600">Edit</a>
                            <a href="#" class="pl-6 text-blue-400 underline hover:text-blue-600">Remove</a>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
