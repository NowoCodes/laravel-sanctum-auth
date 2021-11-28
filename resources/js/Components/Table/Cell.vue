<template>
    <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
        <p class="text-gray-900 whitespace-no-wrap">
            <slot />
        </p>
    </td>
</template>

<script>
export default {
    name: "Cell"
}
</script>