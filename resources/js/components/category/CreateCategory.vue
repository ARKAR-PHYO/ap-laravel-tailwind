<template>
    <div class="container flex-grow pt-6 pb-8 mx-auto sm:px-4">
        <div class="border rounded-lg mb-14">
            <div class="px-6 bg-gray-300">
                <div class="py-4 mr-6 text-3xl text-center text-blue-900">အမျိုးအစားအသစ်</div>
            </div>
            <div class="w-full px-6 mx-auto">
                <form @submit.prevent="create" class="flex flex-col px-8 pt-6 pb-8 mb-4">

                    <div class="w-full px-3 mb-6 md:w-full">
                        <label class="block mb-2 text-sm font-bold tracking-wide text-gray-700 uppercase" for='name'>အမျိုးအစား နာမည်</label>
                        <input type="text" :name="name" id="name" class="block w-full px-3 py-3 font-medium leading-tight text-gray-900 bg-white border border-gray-400 rounded-lg appearance-none focus:outline-none @error('name') is-invalid @enderror">
                        <!-- @error('name')
                        <div class="mt-3 text-sm text-red-500" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror -->
                    </div>
                    <div class="w-full px-3 mb-6 md:w-full">
                        <button class="block px-3 py-3 font-bold leading-tight text-gray-100 bg-blue-600 border border-gray-200 rounded-lg appearance-none hover:bg-blue-500 focus:outline-none focus:bg-white focus:border-gray-500" type="submit">ဘာလာလာ သွင်းကွာ 😎</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'CreateCategory',

    data() {
        return {
            name: '',
        }
    },

    methods: {
        create() {
            axios.post(`/categories/`, {
                name: this.name
            })
            // .catch(error => {
            //     this.$toast.error(error.response.data.message, "Error");
            // })
            .then(({data}) => {
                this.body = '';
                this.$emit('created', data.name);
            })
        }
    },
}
</script>
