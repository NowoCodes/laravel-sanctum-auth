<template>
    <Head title="Questions" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <div class="container py-2 mx-auto">
                <div class="w-3/3 flex flex-col sm:flex-row sm:items-center items-start mx-auto">
                    <h1 class="flex-grow sm:pr-16 text-4xl font-medium title-font">Show Questions</h1>
                    <Link :href="route('generate-questions')"
                        class="flex-shrink-0 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg mt-10 sm:mt-0">
                        Generate Questions
                    </Link>
                </div>
            </div>
        </template>

        <div class="inline-block overflow-hidden min-w-full rounded-lg shadow">
            <Table>
                <TableHead>
                    <Heading>S/N</Heading>
                    <Heading>Question</Heading>
                    <Heading>Answer A</Heading>
                    <Heading>Answer B</Heading>
                    <Heading>Answer C</Heading>
                    <Heading>Answer D</Heading>
                </TableHead>

                <tbody>
                    <Row v-for="q in questions.data" :key="q.id">
                        <Cell>{{ q.id }}</Cell>
                        <Cell>{{ q.question }}</Cell>
                        <Cell>{{ q.answer_a }}</Cell>
                        <Cell>{{ q.answer_b }}</Cell>
                        <Cell>{{ q.answer_c ?? '---' }}</Cell>
                        <Cell>{{ q.answer_d ?? '---'}}</Cell>
                    </Row>
                </tbody>
            </Table>

            <div class="flex flex-col items-center px-5 py-5 bg-white border-t xs:flex-row xs:justify-between">
                <Pagination :links="questions.links" />
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
        TableHead,
        Pagination,
        Row,
        Cell,
        Heading,
        Table,
        Head,
        Link,
        BreezeAuthenticatedLayout
    },
    props: {
        questions: Object,
    }
}
</script>