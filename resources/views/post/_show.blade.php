@extends('layouts.mainapp')
@section('title')
APLaravel
@endsection
@section('content')

<div class="flex flex-col w-full min-h-screen bg-grey-300">
    <div class="container flex-grow pt-6 pb-8 mx-auto sm:px-4">
        <div class="mb-9">
            <a href="{{ route('posts.index') }}" class="px-6 py-4 bg-green-300 border border-green-900 rounded hover:bg-green-400">{{ __('နောက်ပြန်လစ် 🥶') }}</a>
        </div>
        <div class="mb-6 bg-white border-t border-b shadow sm:border-l sm:border-r sm:rounded">
            <div class="px-6 bg-gray-300">
                <div class="justify-center py-4 mr-6 text-3xl text-center text-blue-900 lg:flex">{{ __('မင်းဘာလျှာရှည်တာလဲ 😌') }}</div>
            </div>

            <div class="hidden lg:flex">
                <div class="w-full p-5">
                    <div class="pb-4 text-gray-900 border-b">
                        <h2 class="pb-3 text-2xl">{{ $post->name }}</h2>
                        <p class="pl-3 text-sm">{{ $post->description }}</p>
                        <div class="mt-8 mb-4 ">
                            <a href="{{ route('posts.index') }}" class="px-6 py-2 bg-blue-300 border border-blue-900 rounded hover:bg-blue-400">{{ __('နောက်ပြန်လစ် 🥶') }}</a>
                            <a href="{{ route('posts.edit', $post->id) }}" class="px-6 py-2 ml-3 bg-gray-300 border border-gray-900 rounded hover:bg-gray-400">{{ __('အရစ်ရှည်အုန်းမယ် 🥴') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
