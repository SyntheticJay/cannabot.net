<template>
    <!-- simple navbar with primeflex -->
    <!-- no backdrop, logo with cannabot on the left -->
    <!-- menu with 3 items on the right -->

</template>

<script setup>
import { ref } from 'vue';

const items = ref([
    {
        label: 'Home',
        icon: 'pi pi-fw pi-home',
        to: '/'
    },
    {
        label: 'About',
        icon: 'pi pi-fw pi-info-circle',
        to: '/about'
    },
    {
        label: 'Contact',
        icon: 'pi pi-fw pi-envelope',
        to: '/contact'
    }
]);
</script>
