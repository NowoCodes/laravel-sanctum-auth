<template>
    <Head title="Rick & Morty" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <div class="container py-2 mx-auto">
                <div class="w-3/3 flex flex-col sm:flex-row sm:items-center items-start mx-auto">
                    <h1 class="flex-grow sm:pr-16 text-4xl font-medium title-font">Rick & Morty</h1>
                    <!--                    <a href="route('generate-questions')"-->
                    <!--                          class="flex-shrink-0 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg mt-10 sm:mt-0">-->
                    <!--                        Generate Questions-->
                    <!--                    </a>-->
                </div>
            </div>
        </template>

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 border-b border-gray-200">
                <section class="text-gray-600 body-font">
                    <div class="container px-5 mx-auto">
                        <h1 class="flex-grow sm:pr-16 text-4xl font-medium title-font mb-12">Total Characters:
                            {{ characters.info.count }}</h1>
                        <div class="flex flex-wrap -m-4">
                            <div v-for="result in characters.results" class="lg:w-1/4 md:w-1/2 p-4 w-full">
                                <a class="block relative h-48 rounded overflow-hidden">
                                    <img :src="result.image" alt="..."
                                         class="object-cover object-center w-full h-full block">
                                </a>
                                <div class="mt-4">
                                    <h2 class="text-gray-900 font-medium title-font text-white mt-5">{{
                                            result.name
                                        }}</h2>
                                    <div class="text-sm">
                                        <p class="leading-relaxed mt-2">Status: {{ result.status }}</p>
                                        <p class="leading-relaxed mt-2">Species: {{ result.species }}</p>
                                        <p class="leading-relaxed mt-2">Type: {{ result.type ?? 'Unknown' }}</p>
                                        <p class="leading-relaxed mt-2">Gender: {{ result.gender }}</p>
                                        <p class="leading-relaxed mt-2">Location: {{ result.origin.name }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <!--        <div v-show="current_page">-->
        <!--            <div v-if="page_no && prev === null"-->
        <!--                 class="flex flex-col items-center px-5 py-5 bg-white border-t xs:flex-row xs:justify-between">-->
        <!--                &lt;!&ndash;            <Pagination :links="characters.links" />&ndash;&gt;-->
        <!--                &lt;!&ndash;            <Pagination />&ndash;&gt;-->
        <!--                <Link :href="route('rick.morty', page_no)">Next</Link>-->
        <!--            </div>-->
        <!--            <div v-else-if="page_no"></div>-->
        <!--        </div>-->
    </BreezeAuthenticatedLayout>
</template>

<script>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';

export default {
    name: "RickAndMorty",
    components: {
        Head,
        BreezeAuthenticatedLayout
    },
    props: {
        characters: Object,
        // pages: '',
        // page_no: '',
        // next: '',
        // prev: '',
        // current_page: '',
    }
}
</script>