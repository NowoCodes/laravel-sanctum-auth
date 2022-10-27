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
            <div class="flex">
                <ul class="font-bold text-xs flex flex-row space-x-2 cursor-pointer">
                    <li class="bg-green-300 py-1 px-3 rounded-3xl shadow-lg">Easy</li>
                    <li class="bg-yellow-300 py-1 px-3 rounded-3xl shadow-lg">Medium</li>
                    <li class="bg-red-300 py-1 px-3 rounded-3xl shadow-lg">Hard</li>
                    <li class="rounded-3xl px-3 shadow-lg flex items-center">
                        <svg class="svg-icon" viewBox="0 0 20 20">
                            <path
                                d="M10.219,1.688c-4.471,0-8.094,3.623-8.094,8.094s3.623,8.094,8.094,8.094s8.094-3.623,8.094-8.094S14.689,1.688,10.219,1.688 M10.219,17.022c-3.994,0-7.242-3.247-7.242-7.241c0-3.994,3.248-7.242,7.242-7.242c3.994,0,7.241,3.248,7.241,7.242C17.46,13.775,14.213,17.022,10.219,17.022 M15.099,7.03c-0.167-0.167-0.438-0.167-0.604,0.002L9.062,12.48l-2.269-2.277c-0.166-0.167-0.437-0.167-0.603,0c-0.166,0.166-0.168,0.437-0.002,0.603l2.573,2.578c0.079,0.08,0.188,0.125,0.3,0.125s0.222-0.045,0.303-0.125l5.736-5.751C15.268,7.466,15.265,7.196,15.099,7.03"></path>
                        </svg>
                        <span class="pl-3">Multiple answers</span>
                    </li>
                </ul>
            </div>
        </template>

        <div class="inline-block overflow-hidden min-w-full rounded-lg shadow">
            <Table>
                <template #head>
                    <Heading>S/N</Heading>
                    <Heading>Question</Heading>
                    <Heading>Answer A</Heading>
                    <Heading>Answer B</Heading>
                    <Heading>Answer C</Heading>
                    <Heading>Answer D</Heading>
                    <Heading>Answer E</Heading>
                    <Heading>Answer F</Heading>
                    <Heading>Answers</Heading>
                    <Heading>Category</Heading>
                    <Heading>Tags</Heading>
                </template>

                <template #body>
                    <Row v-for="q in questions.data" :key="q.id">
                        <Cell>
                            <div class="flex flex-col items-center">
                                {{ q.id }}
                                <p v-show="q.multiple_correct_answers === 'true'">
                                    <svg class="svg-icon" viewBox="0 0 20 20">
                                        <path
                                            d="M10.219,1.688c-4.471,0-8.094,3.623-8.094,8.094s3.623,8.094,8.094,8.094s8.094-3.623,8.094-8.094S14.689,1.688,10.219,1.688 M10.219,17.022c-3.994,0-7.242-3.247-7.242-7.241c0-3.994,3.248-7.242,7.242-7.242c3.994,0,7.241,3.248,7.241,7.242C17.46,13.775,14.213,17.022,10.219,17.022 M15.099,7.03c-0.167-0.167-0.438-0.167-0.604,0.002L9.062,12.48l-2.269-2.277c-0.166-0.167-0.437-0.167-0.603,0c-0.166,0.166-0.168,0.437-0.002,0.603l2.573,2.578c0.079,0.08,0.188,0.125,0.3,0.125s0.222-0.045,0.303-0.125l5.736-5.751C15.268,7.466,15.265,7.196,15.099,7.03"></path>
                                    </svg>
                                </p>
                            </div>
                        </Cell>
                        <Cell :diff="q.difficulty">{{ q.question }}</Cell>
                        <Cell>{{ q.answer_a }}</Cell>
                        <Cell>{{ q.answer_b }}</Cell>
                        <Cell>{{ q.answer_c ?? '---' }}</Cell>
                        <Cell>{{ q.answer_d ?? '---' }}</Cell>
                        <Cell>{{ q.answer_e ?? '---' }}</Cell>
                        <Cell>{{ q.answer_f ?? '---' }}</Cell>
                        <Cell>{{ q.correct_answer ?? '---' }}</Cell>
                        <Cell>{{ q.category ?? '---' }}</Cell>
                        <Cell>
                            <ul v-for="tag in q.tags" class="flex">
                                <li class="bg-gray-600 text-white py-1 px-3 rounded-3xl mb-2">{{ tag.name }}</li>
                            </ul>
                        </Cell>
                    </Row>
                </template>
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
import Table from "@/Components/Table/Table.vue";
import Heading from "@/Components/Table/Heading.vue";
import Cell from "@/Components/Table/Cell.vue";
import Row from "@/Components/Table/Row.vue";
import Pagination from "@/Components/Pagination.vue";
import { Link } from '@inertiajs/inertia-vue3';

export default {
    name: "Question",
    components: {
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

<style>
/* -----
SVG Icons - svgicons.sparkk.fr
----- */

.svg-icon {
    width: 2em;
    height: 2em;
}

.svg-icon path,
.svg-icon polygon,
.svg-icon rect {
    fill: red;
}

.svg-icon circle {
    stroke: #4691f6;
    stroke-width: 1;
}
</style>
