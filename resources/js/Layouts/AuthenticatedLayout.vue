<template>
    <Navigation :items="navItems" />
    <main>
        <slot />
    </main>
</template>
<script setup>
import Navigation from "../Components/Common/Navigation.vue";
import { ref } from "vue";

const navItems = ref([
    {
        label: 'Back to Landing',
        icon: 'pi pi-fw pi-arrow-left',
        to: route('landing.index'),
        inertia: false,
    },
    {
        label: 'Logout',
        icon: 'pi pi-fw pi-sign-out',
        to: route('dashboard.logout'),
        inertia: false,
    }
]);
</script>
