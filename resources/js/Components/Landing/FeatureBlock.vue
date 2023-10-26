<template>
    <div class="col-12 md:col-4 mb-4 px-5">
        <span class="p-3 shadow-2 mb-3 inline-block surface-card" style="border-radius: 10px">
            <i :class="icon + ' text-4xl text-primary'"></i>
        </span>
        <div class="text-900 text-xl mb-3 font-medium">{{ title }}</div>
        <span class="text-700 line-height-3">{{ description }}</span>
    </div>
</template>
<script setup>
defineProps({
    icon: {
        type: String,
        required: true
    },
    title: {
        type: String,
        required: true
    },
    description: {
        type: String,
        required: false
    }
})
</script>
