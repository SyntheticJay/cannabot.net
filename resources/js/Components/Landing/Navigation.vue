<template>
    <nav class="px-2 sm:px-4 py-5">
        <div class="flex flex-wrap justify-content-around align-items-center mx-auto">
            <a class="flex align-items-center">
                <img id="nav-logo" width="50" height="50" :src="logo" class="mr-3 h-6 sm:h-9 rounded" alt="Logo" />
                <span class="text-2xl font-bold align-self-center white-space-nowrap">Cannabot</span>
            </a>
            <div class="hidden w-full md:block md:w-auto">
                <ul class="flex flex-column mt-4 md:flex-row md:gap-3 md:mt-0 md:text-sm md:font-medium">
                    <li v-for="item in items" :key="item.label" class="flex align-items-center">
                        <inertia-link v-if="item.inertia" :href="item.to" class="
                                nav-link block py-2 pr-4 pl-3 text-white md:bg-transparent md:p-0
                                hover:text-primary
                            ">
                            <i :class="item.icon"></i>
                            <span class="ml-2">{{ item.label }}</span>
                        </inertia-link>
                        <a v-else :href="item.to" class="
                                nav-link block py-2 pr-4 pl-3 text-white md:bg-transparent md:p-0
                                hover:text-primary
                            ">
                            <i :class="item.icon"></i>
                            <span class="ml-2">{{ item.label }}</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script setup>
import { ref } from 'vue';
import { usePage } from "@inertiajs/vue3";

const logo = usePage().props.logo;
const items = ref([
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
    }
]);
</script>

<style scoped>
    #nav-logo {
        border-radius: 50%;
    }
    .nav-link {
        text-decoration: none;
    }
</style>
