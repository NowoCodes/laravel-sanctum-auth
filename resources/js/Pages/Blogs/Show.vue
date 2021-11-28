<template>
    <Head title="About us" />

    <BreezeAuthenticatedLayout>
        <!--Container-->
        <div class="container w-full md:max-w-3xl mx-auto">

            <div class="w-full px-4 md:px-6 text-xl text-gray-800 leading-normal jus"
                 style="font-family:Georgia,serif;">

                <!--Title-->
                <div class="font-sans">
                    <p class="text-base md:text-sm text-green-500 font-bold">&lt;
                        <Link :href="route('blogs.index')"
                              class="text-base md:text-sm text-green-500 font-bold no-underline hover:underline">
                            BACK TO BLOG
                        </Link>
                    </p>
                    <h1 class="font-bold font-sans break-normal text-gray-900 pt-6 pb-2 text-3xl md:text-4xl">
                        {{ blog.title }}
                    </h1>
                    <p class="text-sm md:text-base font-normal text-gray-600">Published {{ blog.created_at }}</p>
                </div>


                <!--Post Content-->


                <!--Lead Para-->
                <p class="py-6">
                    👋 {{ blog.description }}
                </p>

                <p class="py-6">Sed dignissim lectus ut tincidunt vulputate. Fusce tincidunt lacus purus, in mattis
                    tortor
                    sollicitudin pretium. Phasellus at diam posuere, scelerisque nisl sit amet, tincidunt urna. Cras
                    nisi diam,
                    pulvinar ut molestie eget, eleifend ac magna. Sed at lorem condimentum, dignissim lorem eu, blandit
                    massa.
                    Phasellus eleifend turpis vel erat bibendum scelerisque. Maecenas id risus dictum, rhoncus odio
                    vitae, maximus
                    purus. Etiam efficitur dolor in dolor molestie ornare. Aenean pulvinar diam nec neque tincidunt,
                    vitae
                    molestie quam fermentum. Donec ac pretium diam. Suspendisse sed odio risus. Nunc nec luctus nisi.
                    Class aptent
                    taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis nec nulla eget
                    sem dictum
                    elementum.</p>

                <ol>
                    <li class="py-3">Maecenas accumsan lacus sit amet elementum porta. Aliquam eu libero lectus. Fusce
                        vehicula
                        dictum mi. In non dolor at sem ullamcorper venenatis ut sed dui. Ut ut est quam. Suspendisse
                        quam quam,
                        commodo sit amet placerat in, interdum a ipsum. Morbi sit amet tellus scelerisque tortor semper
                        posuere.
                    </li>
                    <li class="py-3">Morbi varius posuere blandit. Praesent gravida bibendum neque eget commodo. Duis
                        auctor
                        ornare mauris, eu accumsan odio viverra in. Proin sagittis maximus pharetra. Nullam lorem
                        mauris, faucibus
                        ut odio tempus, ultrices aliquet ex. Nam id quam eget ipsum luctus hendrerit. Ut eros magna,
                        eleifend ac
                        ornare vulputate, pretium nec felis.
                    </li>
                    <li class="py-3">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
                        Curae; Nunc
                        vitae pretium elit. Cras leo mauris, tristique in risus ac, tristique rutrum velit. Mauris
                        accumsan tempor
                        felis vitae gravida. Cras egestas convallis malesuada. Etiam ac ante id tortor vulputate
                        pretium. Maecenas
                        vel sapien suscipit, elementum odio et, consequat tellus.
                    </li>
                </ol>
                <!--/ Post Content-->
            </div>

            <!--Tags -->
            <div class="text-base md:text-sm text-gray-500 px-4 py-6">
                Tags: <a class="text-base md:text-sm text-green-500 no-underline hover:underline" href="#">Link</a> . <a
                class="text-base md:text-sm text-green-500 no-underline hover:underline" href="#">Link</a>
            </div>

            <!--Divider-->
            <hr class="border-b-2 border-gray-400 mb-8 mx-4">


            <!--Subscribe-->
            <div class="container px-4">
                <div class="font-sans bg-gradient-to-b from-green-100 to-gray-100 rounded-lg shadow-xl p-4 text-center">
                    <h2 class="font-bold break-normal text-xl md:text-3xl">Subscribe to my Newsletter</h2>
                    <h3 class="font-bold break-normal text-gray-600 text-sm md:text-base">Get the latest posts delivered
                        right to
                        your inbox</h3>
                    <div class="w-full text-center pt-4">
                        <form action="#">
                            <div class="max-w-xl mx-auto p-1 pr-0 flex flex-wrap items-center">
                                <input
                                    class="flex-1 mt-4 appearance-none border border-gray-400 rounded shadow-md p-3 text-gray-600 mr-2 focus:outline-none"
                                    placeholder="youremail@example.com"
                                    type="email">
                                <button
                                    class="flex-1 mt-4 block md:inline-block appearance-none bg-green-500 text-white text-base font-semibold tracking-wider uppercase py-4 rounded shadow hover:bg-green-400"
                                    type="submit">
                                    Subscribe
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /Subscribe-->

            <!--Divider-->
            <hr class="border-b-2 border-gray-400 mb-8 mx-4">

            <!--Next & Prev Links-->
            <div class="font-sans flex justify-between content-center px-4 pb-12">
                <div class="text-left">
                    <span class="text-xs md:text-sm font-normal text-gray-600">&lt; Previous Post</span><br>
                    <p><a
                        class="break-normal text-base md:text-sm text-green-500 font-bold no-underline hover:underline"
                        href="#">Blog
                        title</a></p>
                </div>
                <div class="text-right">
                    <span class="text-xs md:text-sm font-normal text-gray-600">Next Post &gt;</span><br>
                    <p><a
                        class="break-normal text-base md:text-sm text-green-500 font-bold no-underline hover:underline"
                        href="#">Blog
                        title</a></p>
                </div>
            </div>


            <!--/Next & Prev Links-->

        </div>
    </BreezeAuthenticatedLayout>
</template>

<script>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';
import { Link } from '@inertiajs/inertia-vue3';

export default {
    components: {
        BreezeAuthenticatedLayout,
        Head,
        Link,
    },
    props: {
        blog: Object,
    }
}
</script>

