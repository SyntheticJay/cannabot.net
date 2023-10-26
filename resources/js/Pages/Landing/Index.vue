<template>
    <LandingLayout>
        <Hero :logo="logo" :support-url="supportUrl" :invite-url="inviteUrl" />
        <Features />
    </LandingLayout>
</template>

<script setup>
import LandingLayout from "../../Layouts/LandingLayout.vue";
import Hero from "../../Components/Landing/Hero.vue";
import Features from "../../Components/Landing/Features.vue";

defineProps({
    logo: {
        type: String,
        required: true
    },
    inviteUrl: {
        type: String,
        required: true
    },
    supportUrl: {
        type: String,
        required: true
    }
});
</script>
