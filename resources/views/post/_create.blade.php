@extends('layouts.mainapp')
@section('title')
APLaravel
@endsection
@section('content')
<div class="min-h-screen bg-grey-300 ">
    <div class="container flex flex-col pt-6 pb-8 mx-auto">
        <div class="mb-14">
            <a href="{{ route('posts.index') }}" class="px-6 py-4 bg-green-300 border border-green-900 rounded hover:bg-green-400">{{ __('နောက်ပြန်လစ် 🥶') }}</a>
        </div>

        <div class="border rounded-lg mb-14">
            <div class="px-6 bg-gray-300">
                <div class="py-4 mr-6 text-3xl text-center text-blue-900">{{ __('ပိုစ့် အသစ် ရမ်းလုပ်မယ် ဘာညာပေါ့ 🧐') }}</div>
            </div>
            <div class="w-1/2 px-6 mx-auto">
                <form action="{{ route('posts.store') }}" method="POST" class="flex flex-col px-8 pt-6 pb-8 mb-4">
                    @csrf
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-gray-900" for="name">{{ __('နာမည် (နိမ်း)') }}</label>
                        <input type="text" name="name" id="name" class="w-full px-3 py-2 text-gray-900 border rounded shadow appearance-none @error('name') is-invalid @enderror" value="{{ old('name') }}">
                        @error('name')
                        <div class="mt-3 text-red-500" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label class="block mb-2 text-sm font-bold text-gray-900" for="description">{{ __('ဘာညာအကြောင်း ရမ်းရှီး 🥸') }}</label>
                        <input class="w-full px-3 py-2 mb-3 text-gray-900 border rounded shadow appearance-none border-red @error('description') is-invalid @enderror" id="description" type="text" name="description">
                        @error('description')
                        <div class="mt-3 text-red-500" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label class="block mb-2 text-sm font-bold text-gray-900" for="description">{{ __('Select Category') }}</label>
                        <select name="categories" id="categories" class="w-full px-3 py-2 mb-3 text-gray-900 border rounded shadow appearance-none border-red">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        {{-- <input class="w-full px-3 py-2 mb-3 text-gray-900 border rounded shadow appearance-none border-red @error('description') is-invalid @enderror" id="description" type="text" name="description"> --}}
                        @error('description')
                        <div class="mt-3 text-red-500" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                    <div class="flex items-center justify-between">
                        <button class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-900" type="submit">{{ __('ဘာလာလာ သွင်းကွာ 😎') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

