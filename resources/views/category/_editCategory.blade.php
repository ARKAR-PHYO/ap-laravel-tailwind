<div class="fixed top-0 left-0 flex items-center justify-center w-full h-full opacity-0 pointer-events-none modal">
    <div class="absolute w-full h-full bg-gray-900 opacity-50 modal-overlay"></div>

    <div class="z-50 w-11/12 mx-auto overflow-y-auto bg-white rounded shadow-lg modal-container md:max-w-lg">
        <div class="px-6 py-4 text-left modal-content">
            <!--Title-->
            <div class="flex items-center justify-between pb-3 border-b">
                <p class="text-xl font-semibold text-blue-900">{{ __('Create New Category') }}</p>
                <div class="z-50 cursor-pointer modal-close">
                    <svg class="text-black fill-current" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                    </svg>
                </div>
            </div>

            <!--Body-->
            <form action="{{ route('categories.update', $category->id) }}" method="POST" class="flex flex-col w-full px-8 pt-6 pb-8 mb-4">
                @csrf
                <div class="w-full px-3 mb-6 md:w-full">
                    <label class="block mb-2 text-sm font-bold tracking-wide text-gray-700 uppercase" for='name'>{{ __('အမျိုးအစား နာမည်') }}</label>
                    <input type="text" name="name" id="name" class="block w-full px-3 py-3 font-medium leading-tight text-gray-900 bg-white border border-gray-400 rounded-lg appearance-none focus:outline-none @error('name') is-invalid @enderror" value="{{ old('name', $category->name) }}">
                    @error('name')
                    <div class="mt-3 text-sm text-red-500" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror
                </div>
                <div class="w-full px-3 mb-6 md:w-full">
                </div>
            </form>

            <!--Footer-->
            <div class="flex justify-end pt-2">
                <button class="block px-3 py-3 font-bold leading-tight text-gray-100 bg-blue-600 border border-gray-200 rounded-lg appearance-none hover:bg-blue-500 focus:outline-none focus:bg-white focus:border-gray-500" type="submit">{{ __('ဘာလာလာ သွင်းကွာ 😎') }}</button>
            </div>

        </div>
    </div>
</div>

