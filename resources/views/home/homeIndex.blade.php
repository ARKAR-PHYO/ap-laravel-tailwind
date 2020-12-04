@extends('layouts.mainapp')
@section('title')
APLaravel
@endsection
@section('content')

<div class="flex flex-col w-full min-h-screen bg-grey-300">
    <div class="container flex-grow pt-6 pb-8 mx-auto sm:px-4">
        <div class="mb-9">
            <a href="{{ route('create') }}" class="px-6 py-4 bg-green-300 border border-green-900 rounded hover:bg-green-400">Create New Post</a>
        </div>
        <div class="mb-6 bg-white border-t border-b shadow sm:border-l sm:border-r sm:rounded">
            <div class="px-6 bg-gray-300">
                <div class="justify-center py-4 mr-6 text-3xl text-center text-blue-900 lg:flex">Posts</div>
            </div>

            @foreach ($posts as $post)
            <div class="hidden lg:flex">
                <div class="w-full p-5">
                    <div class="pb-4 text-gray-900 border-b">
                        <h2 class="pb-3 text-2xl">{{ $post->name }}</h2>
                        <p class="pl-3 text-sm">{{ $post->description }}</p>
                        <div class="mt-8 mb-4 ">
                            <a href="{{ route('show', $post->id) }}" class="px-6 py-2 bg-blue-300 border border-blue-900 rounded hover:bg-blue-400">View</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
