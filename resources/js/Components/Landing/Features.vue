<template>
   <section id="features" class="features-backdrop">
       <div class="px-4 py-8 md:px-6 lg:px-8 text-center">
           <div class="mb-3 font-bold text-3xl">
               <span class="text-900">Why Cannabot?</span>
           </div>
           <div class="text-700 mb-6">
               Because why not? Jokey answer aside, here's a few reasons why you should use our bot.
           </div>
           <div class="grid">
               <FeatureBlock
                   icon="pi pi-search"
                   title="Large Strain Database"
                   description="We have a large database of strains to search from, and we're always adding more." />
               <FeatureBlock
                   icon="pi pi-user"
                   title="Easy to Use"
                   description="We've made Cannabot easy to use, so you can get the information you need quickly." />
               <FeatureBlock
                   icon="pi pi-github"
                   title="Open Source"
                   description="Cannabot is open source, so you can see exactly what it's doing." />
               <FeatureBlock
                   icon="pi pi-dollar"
                   title="Free"
                   description="Cannabot is free to use, and always will be." />
               <FeatureBlock
                   icon="pi pi-refresh"
                   title="Always Improving"
                   description="We're always working on improving Cannabot, and adding new features." />
               <FeatureBlock
                   icon="pi pi-power-off"
                   title="Always Online"
                   description="Cannabot is always online, so you can get the information you need when you need it." />
           </div>
       </div>
   </section>
</template>

<script setup>
import FeatureBlock from "./FeatureBlock.vue";
import { onMounted, onUnmounted } from "vue";

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('show-block');

            observer.unobserve(entry.target);
        }
    });
});

onMounted(() => {
    document.querySelectorAll('.hidden-block').forEach((block) => {
        observer.observe(block);
    });
});

onUnmounted(() => {
    observer.disconnect();
});
</script>

<style scoped>
</style>
