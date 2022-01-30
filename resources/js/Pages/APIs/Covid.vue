<template>
    <Head title="Covid Cases" />

    <BreezeAuthenticatedLayout>
        <template #header>
            Covid
        </template>

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 flex flex-col w-64">
                <!--                <form @submit.prevent=getData>-->
                <label for="country">Select Country</label>
                <select v-model="country" id="country" class="px-3 rounded-xl shadow-lg outline"
                        @change="getData('country')">
                    <!--                    <option value="" selected>&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;</option>-->
                    <option value="nigeria">Nigeria</option>
                    <option value="south-africa">South Africa</option>
                    <option value="ghana">Ghana</option>
                </select>

                <!--                    <Button :loading="form.processing">Search</Button>-->
                <!--                </form>-->
            </div>

            <div class="p-6 border-b border-gray-200">

                <a class="block p-6 bg-white hover:bg-gray-100 shadow-md border border-gray-200 rounded-lg max-w"
                   href="#">
                    <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2">Covid Cases in {{ country }} as at
                        {{ today }}</h5>
                </a>

                <div class="flex flex-wrap -mx-3 overflow-hidden">
                    <div class="my-3 px-3 w-full md:w-1/3 overflow-hidden">
                        <a class="block p-6 bg-white hover:bg-gray-100 shadow-md border border-gray-200 rounded-lg max-w-sm"
                           href="#">
                            <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2">Confirmed Cases</h5>
                            <p class="font-normal text-gray-700">{{ confirmedCovidCasesUntilToday }}</p>
                        </a>
                    </div>

                    <div class="my-3 px-3 w-full md:w-1/3 overflow-hidden">
                        <a class="block p-6 bg-white hover:bg-gray-100 shadow-md border border-gray-200 rounded-lg max-w-sm"
                           href="#">
                            <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2">Recovered Cases</h5>
                            <p class="font-normal text-gray-700">{{ recoveredCovidCasesUntilToday }}</p>
                        </a>
                    </div>

                    <div class="my-3 px-3 w-full md:w-1/3 overflow-hidden">
                        <a class="block p-6 bg-white hover:bg-gray-100 shadow-md border border-gray-200 rounded-lg max-w-sm"
                           href="#">
                            <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2">Deaths</h5>
                            <p class="font-normal text-gray-700">{{ deadCovidCasesUntilToday }}</p>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <!--    <div-->
        <!--        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">-->
        <!--      <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">-->

        <!--        <section class="text-gray-400 bg-gray-900 body-font">-->
        <!--          <div class="container px-5 py-24 mx-auto">-->
        <!--            <div class="flex flex-col">-->
        <!--              <div class="h-1 bg-gray-800 rounded overflow-hidden">-->
        <!--                <div class="w-24 h-full bg-indigo-500"></div>-->
        <!--              </div>-->
        <!--              <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-12">-->
        <!--                <h1 class="sm:w-2/5 text-white font-medium title-font text-2xl mb-2 sm:mb-0">Covid Cases</h1>-->
        <!--                <p class="sm:w-3/5 leading-relaxed text-base sm:pl-10 pl-0">A mini project to display covid cases based-->
        <!--                  on countries, date and type.</p>-->
        <!--              </div>-->
        <!--            </div>-->

        <!--            <section class="text-gray-400 bg-gray-900 body-font">-->
        <!--              <div class="container px-5 py-8 mx-auto">-->
        <!--                <div class="lg:w-2/3 flex flex-col sm:flex-row sm:items-center items-start mx-auto">-->
        <!--                  <h1 class="flex-grow sm:pr-16 text-2xl font-medium title-font text-white">Country: NIGERIA</h1>-->
        <!--                  <h1 class="flex-grow sm:pr-16 text-2xl font-medium title-font text-white">{{ today }}</h1>-->
        <!--                </div>-->
        <!--              </div>-->
        <!--            </section>-->

        <!--            <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">-->
        <!--              <div class="p-4 md:w-1/3 sm:mb-0 mb-6">-->
        <!--                <h2 class="text-xl font-medium title-font text-white mt-5">Confirmed Cases</h2>-->
        <!--                <p class="text-base leading-relaxed mt-2">{{ confirmedCovidCasesUntilToday }}</p>-->
        <!--              </div>-->
        <!--              <div class="p-4 md:w-1/3 sm:mb-0 mb-6">-->
        <!--                <h2 class="text-xl font-medium title-font text-white mt-5">Recovered Cases</h2>-->
        <!--                <p class="text-base leading-relaxed mt-2">{{ recoveredCovidCasesUntilToday }}</p>-->
        <!--              </div>-->
        <!--              <div class="p-4 md:w-1/3 sm:mb-0 mb-6">-->
        <!--                <h2 class="text-xl font-medium title-font text-white mt-5">Deaths</h2>-->
        <!--                <p class="text-base leading-relaxed mt-2">{{ deadCovidCasesUntilToday }}</p>-->
        <!--              </div>-->
        <!--            </div>-->
        <!--          </div>-->
        <!--        </section>-->
        <!--      </div>-->
        <!--    </div>-->
    </BreezeAuthenticatedLayout>

</template>

<script>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';
// import { useForm } from '@inertiajs/inertia-vue3'
import Button from "@/Components/Button";

export default {
    name: "Covid",
    components: {
        Button,
        BreezeAuthenticatedLayout,
        Head,
    },
    props: {
        country: '',
        today: Object,
        confirmedCovidCasesUntilToday: Object,
        recoveredCovidCasesUntilToday: Object,
        deadCovidCasesUntilToday: Object,
    },
    // setup() {
    //     const form = useForm({
    //         country: null,
    //     })
    //
    //     return {form}
    // },
    methods: {
        getData() {
            // this.form.post(route('covid'));
            this.$inertia.get(route('covid'), {country: this.country})
        }
    }
}
</script>

<style scoped>

</style>
