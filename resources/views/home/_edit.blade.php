@extends('layouts.mainapp')
@section('title')
APLaravel
@endsection
@section('content')
<div class="min-h-screen bg-grey-300 ">
    <div class="container flex flex-col pt-6 pb-8 mx-auto">
        <div class="mb-14">
            <a href="{{ route('posts.index') }}" class="px-6 py-4 bg-green-300 border border-green-900 rounded hover:bg-green-400">Back to Home</a>
        </div>

        <div class="border rounded-lg mb-14">
            <div class="px-6 bg-gray-300">
                <div class="py-4 mr-6 text-3xl text-center text-blue-900">Edit Post</div>
            </div>
            <div class="w-1/2 px-6 mx-auto">
                <form action="{{ route('posts.update', $post->id) }}" method="POST" class="flex flex-col px-8 pt-6 pb-8 mb-4">
                    @csrf
                    @method('PATCH')
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-gray-900" for="name">{{ __('Name') }}</label>
                        <input type="text" name="name" id="name" class="w-full px-3 py-2 text-gray-900 border rounded shadow appearance-none @error('name') is-invalid @enderror" value="{{ old('name', $post->name) }}">
                        @error('name')
                        <div class="mt-3 text-red-500" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label class="block mb-2 text-sm font-bold text-gray-900" for="description">{{ __('Description') }}</label>
                        <input class="w-full px-3 py-2 mb-3 text-gray-900 border rounded shadow appearance-none border-red @error('description') is-invalid @enderror" id="description" type="text" name="description" value="{{ old('description', $post->description) }}">
                        @error('description')
                        <div class="mt-3 text-red-500" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                    <div class="flex items-center justify-between">
                        <button class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-900" type="submit">{{ __('Update') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
