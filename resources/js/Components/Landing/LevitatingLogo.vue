<template>
    <Suspense>
        <img :src="logo" alt="logo" class="md:ml-auto block md:h-full" />
    </Suspense>
</template>

<script setup>
import { usePage } from '@inertiajs/vue3';

const logo = usePage().props.logo;
</script>

