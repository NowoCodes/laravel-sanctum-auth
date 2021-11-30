<template>
    <table class="w-full whitespace-no-wrap">
        <thead>
            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase bg-gray-50 border-b">
                <slot name="head" />
            </tr>
        </thead>

        <tbody>
            <slot name="body" />
        </tbody>
    </table>
</template>

<script>
export default {
    name: "Table"
}
</script>