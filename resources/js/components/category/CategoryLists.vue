<template>
    <div class="container flex-grow pt-6 pb-8 mx-auto sm:px-4">
        <div class="mb-6 bg-white border-t border-b shadow sm:border-l sm:border-r sm:rounded">
            <div class="px-6 bg-gray-300">
                <div class="justify-center py-4 mr-6 text-3xl text-center text-blue-900 lg:flex">အမျိုးအစား ပေါင်း၁၆၀၀၀</div>
            </div>
            <table class="w-full border-collapse ">
                <thead>
                    <tr>
                        <th class="table-header">#</th>
                        <th class="table-header">အမျိုးအစား</th>
                        <th class="table-header">ဘာညာ</th>
                    </tr>
                </thead>

                <!-- @foreach ($categories as $category) -->
                <tbody>
                    <tr v-for="category in categories" :key="category.id" class="flex flex-row flex-wrap mb-10 bg-white lg:hover:bg-gray-100 lg:table-row lg:flex-row lg:flex-no-wrap lg:mb-0">
                        <td class="relative block w-full p-3 text-center text-gray-800 border border-b lg:w-auto lg:table-cell lg:static">
                            <span class="absolute top-0 left-0 px-2 py-1 text-xs font-bold uppercase bg-blue-200 lg:hidden">#</span>
                            {{ category.id }}
                        </td>
                        <td class="relative block w-full p-3 text-center text-gray-800 border border-b lg:w-auto lg:table-cell lg:static">
                            <span class="absolute top-0 left-0 px-2 py-1 text-xs font-bold uppercase bg-blue-200 lg:hidden">အမျိုးအစား</span>
                            {{ category.name }}
                        </td>

                        <td class="relative block w-full p-3 text-center text-gray-800 border border-b lg:w-auto lg:table-cell lg:static">
                            <span class="absolute top-0 left-0 px-2 py-1 text-xs font-bold uppercase bg-blue-200 lg:hidden">ဘာညာ</span>
                            <a href="" class="text-blue-400 underline hover:text-blue-600">Edit</a>
                            <a href="#" class="pl-6 text-blue-400 underline hover:text-blue-600">Remove</a>
                        </td>
                    </tr>
                </tbody>
                <!-- @endforeach -->
            </table>
        </div>
    </div>
</template>

<script>
export default {
    name: 'categories',
    props: ['categories'],

    data() {
        return {
            // id: this.categories.id,
            // name: this.categories.name,
        }
    },


}
</script>
