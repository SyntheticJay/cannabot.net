<template>
    <AuthenticatedLayout>
        <div class="container">
            <!-- header -->
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">Hi, {{ user.name }}</h1>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from "../../Layouts/AuthenticatedLayout.vue";
import { usePage } from "@inertiajs/vue3";
import { computed } from "vue";
import Card from "primevue/card";

const user = computed(() => usePage().props.auth.user);
</script>
