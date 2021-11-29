<template>
    <Head title="Advice" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <div class="container py-2 mx-auto">
                <div class="w-3/3 flex flex-col sm:flex-row sm:items-center items-start mx-auto">
                    <h1 class="flex-grow sm:pr-16 text-4xl font-medium title-font">Advice</h1>
                </div>
            </div>
        </template>

        <div class="inline-block overflow-hidden min-w-full rounded-lg shadow">
            <section class="text-gray-400 bg-gray-900 body-font">
                <div class="container px-5 py-12 mx-auto">
                    <div class="lg:w-2/3 flex flex-col sm:flex-row sm:items-center items-start mx-auto">
                        <h1 class="flex-grow sm:pr-16 text-2xl font-medium title-font text-white">
                            {{ advice }}</h1>
                        <Link :href="route('advice')"
                              class="flex-shrink-0 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg mt-10 sm:mt-0">
                            Next
                        </Link>
                    </div>
                </div>
            </section>
        </div>

        <div class="inline-block overflow-hidden min-w-full rounded-lg shadow mt-12">
            <Table>
                <TableHead>
                    <Heading>S/N</Heading>
                    <Heading>Advice</Heading>
                </TableHead>

                <tbody>
                    <Row v-for="adv in all_advice.data" :key="adv.id">
                        <Cell>{{ adv.id }}</Cell>
                        <Cell>{{ adv.advice }}</Cell>
                    </Row>
                </tbody>
            </Table>

            <div class="flex flex-col items-center px-5 py-5 bg-white border-t xs:flex-row xs:justify-between">
                <Pagination :links="all_advice.links" />
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>

<script>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';
import Table from "@/Components/Table/Table";
import Heading from "@/Components/Table/Heading";
import Cell from "@/Components/Table/Cell";
import Row from "@/Components/Table/Row";
import Pagination from "@/Components/Pagination";
import TableHead from "@/Components/Table/TableHead";
import { Link } from '@inertiajs/inertia-vue3';

export default {
    name: "Question",
    components: {
        Pagination,
        Table,
        Cell,
        Heading,
        TableHead,
        Row,
        Head,
        Link,
        BreezeAuthenticatedLayout
    },
    props: {
        advice: '',
        all_advice: Object,
    }
}
</script>