@extends('layouts.mainapp')
@section('title') Category @endsection
@section('content')
@include('category._createCategory')

<div class="grid flex-shrink-0 w-full grid-cols-1 gap-3 bg-grey-300">
    <div class="container flex-grow pt-6 pb-8 mx-auto sm:px-4">
        <div class="mb-9">
            <button class="px-6 py-4 bg-green-300 border border-green-900 rounded modal-open hover:bg-green-400">{{ __('Create New Category') }}</button>
        </div>
        <div class="mb-6 bg-white border-t border-b shadow sm:border-l sm:border-r sm:rounded">
            <div class="px-6 bg-gray-300">
                <div class="justify-center py-4 mr-6 text-3xl text-center text-blue-900 lg:flex">{{ __('Categories') }}</div>
            </div>
            <table class="w-full border-collapse ">
                <thead>
                    <tr>
                        <th class="table-header">{{ __('#') }}</th>
                        <th class="table-header">{{ __('Category') }}</th>
                        <th class="table-header">{{ __('Action') }}</th>
                    </tr>
                </thead>
                {{-- @include('category._editCategory') --}}
                @foreach ($categories as $category)
                <tbody>
                    <tr class="flex flex-row flex-wrap mb-10 bg-white lg:hover:bg-gray-100 lg:table-row lg:flex-row lg:flex-no-wrap lg:mb-0">
                        <td class="relative block w-full p-3 text-center text-gray-800 border border-b lg:w-auto lg:table-cell lg:static">
                            <span class="absolute top-0 left-0 px-2 py-1 text-xs font-bold uppercase bg-blue-200 lg:hidden">{{ __('#') }}</span>
                            {{ $category->id }}
                        </td>
                        <td class="relative block w-full p-3 text-center text-gray-800 border border-b lg:w-auto lg:table-cell lg:static">
                            <span class="absolute top-0 left-0 px-2 py-1 text-xs font-bold uppercase bg-blue-200 lg:hidden">{{ __('Category') }}</span>
                            {{ $category->name }}
                        </td>

                        <td class="relative block w-full p-3 text-center text-gray-800 border border-b lg:w-auto lg:table-cell lg:static">
                            <span class="absolute top-0 left-0 px-2 py-1 text-xs font-bold uppercase bg-blue-200 lg:hidden">{{ __('Action') }}</span>
                            <a href="{{ route('categories.show', $category->id) }}" class="text-blue-400 underline hover:text-blue-600">View</a>
                            <form class="inline-flex ml-4" action="{{ route('categories.destroy', $category->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="text-blue-400 underline hover:text-blue-600" onclick="return confirm('Are You Sure??')">{{ __('Delete') }}</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
