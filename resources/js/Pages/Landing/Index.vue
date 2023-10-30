<template>
    <LandingLayout>
        <Hero />
        <div id="arrow" class="absolute bottom-0 left-0 right-0 text-center mb-8">
            <a href="#features">
                <i class="pi pi-chevron-down text-4xl text-900"></i>
            </a>
        </div>
        <Features />
    </LandingLayout>
</template>

<script setup>
import LandingLayout from "../../Layouts/LandingLayout.vue";
import Hero from "../../Components/Landing/Hero.vue";
import Features from "../../Components/Landing/Features.vue";
</script>
