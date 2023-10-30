<template>
    <!-- simple navbar with primeflex -->
    <!-- no backdrop, logo with cannabot on the left -->
    <!-- menu with 3 items on the right -->
    <nav class="px-2 sm:px-4 py-5">
        <div class="flex flex-wrap justify-content-around align-items-center mx-auto">
            <a href="#" class="flex align-items-center">
                <img width="50" height="50" src="img/logo.png" class="mr-3 h-6 sm:h-9 rounded" alt="Logo" />
                <span class="text-2xl font-bold align-self-center white-space-nowrap">Cannabot</span>
            </a>
            <div class="hidden w-full md:block md:w-auto">
                <ul class="flex flex-column mt-4 md:flex-row md:gap-3 md:mt-0 md:text-sm md:font-medium">
                    <li v-for="item in items" :key="item.label" class="flex align-items-center">
                        <a :href="item.to" class="
                                block py-2 pr-4 pl-3 text-white md:bg-transparent text-green-500 md:p-0
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
