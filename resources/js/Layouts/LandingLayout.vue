<template>
    <Navigation :items="navItems" />
    <main>
        <slot />
    </main>
</template>
<script setup>
import Navigation from '../Components/Common/Navigation.vue';
import { ref } from 'vue';
import { usePage } from "@inertiajs/vue3";
import { computed } from "vue";

const user = computed(() => usePage().props.auth.user).value;

const navItems = ref([
    {
        label: 'Home',
        icon: 'pi pi-fw pi-home',
        to: route('landing.index'),
        inertia: true
    },
    {
        label: 'Support',
        icon: 'pi pi-fw pi-question-circle',
        to: route('landing.support'),
        inertia: false,
    },
    {
        label: 'Invite',
        icon: 'pi pi-fw pi-user-plus',
        to: route('landing.invite'),
        inertia: false,
    },
    {
        label: user ? 'Dashboard' : 'Login with Discord',
        icon: user ? 'pi pi-fw pi-user' : 'pi pi-fw pi-sign-in',
        to: route('auth.login'),
        inertia: false,
    },
]);
</script>
