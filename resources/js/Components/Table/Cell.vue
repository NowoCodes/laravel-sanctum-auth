<template>
    <td class="px-5 py-5 text-sm border-b border-gray-200" :class="classes">
        <p class="text-gray-900 whitespace-no-wrap">
            <slot />
        </p>
    </td>
</template>

<script>
import { computed } from "vue";

export default {
    name: "Cell",
    props: {
        diff: {
            type: String,
            default: 'none',
        }
    },
    computed: {
        classes() {
            if (this.diff === 'Easy') {
                return 'bg-green-300'
            }
            if (this.diff === 'Medium') {
                return 'bg-yellow-300'
            }
            if (this.diff === 'Hard') {
                return 'bg-red-300'
            }
            if (this.diff === 'none') {
                return 'bg-white'
            }
        }
    }
}
</script>
