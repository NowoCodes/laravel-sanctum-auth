<template>
    <Head title="Blog" />

    <BreezeAuthenticatedLayout>
        <template #header>
            Blog
        </template>

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 border-b border-gray-200">

                <div v-for="blog in blogs.data" :key="blog.id" class="-my-8 divide-y-2 divide-gray-800">
                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                            <span class="font-semibold title-font text-white">CATEGORY</span>
                            <span class="mt-1 text-gray-500 text-sm">{{ blog.created_at }}</span>
                        </div>
                        <div class="md:flex-grow">
                            <h2 class="text-2xl font-bold text-black title-font mb-2">{{ blog.title }}</h2>
                            <p class="leading-relaxed">{{ blog.description }}.</p>

                            <Link :href="route('blogs.show', blog)"
                                  class="text-indigo-400 inline-flex items-center mt-4">
                                Continue Reading
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-linecap="round"
                                     stroke-linejoin="round"
                                     stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </Link>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col items-center px-5 py-5 bg-white border-t xs:flex-row xs:justify-between">
                    <Pagination :links="blogs.links" />
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>

<script>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';
import { Link } from '@inertiajs/inertia-vue3';
import Pagination from "@/Components/Pagination.vue";

export default {
    components: {
        Pagination,
        BreezeAuthenticatedLayout,
        Head,
        Link,
    },
    props: {
        blogs: Object,
    }
}
</script>

