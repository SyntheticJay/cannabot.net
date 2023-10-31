<template>
    <section id="hero" style="height: 85vh;" class="flex justify-content-center align-items-center mb-5">
        <div class="grid grid-nogutter text-800 ml-8 mr-8">
            <div class="col-12 md:col-7 p-6 text-center md:text-left flex align-items-center flex-wrap">
                <section>
                    <span class="block text-6xl font-bold mb-1">🍃 Cannabot</span>
                    <div class="text-5xl text-primary font-bold mb-3">The Ultimate Cannabis Companion</div>
                    <p class="mt-0 mb-4 text-700 line-height-3">
                        Cannabot is a Discord bot that helps you find and learn about the perfect cannabis strain for any occasion. With Cannabot, you can easily search for strains by name, effects, flavors, and more. Cannabot also provides detailed information on each strain's medicinal benefits, cultivation history, and user reviews.
                    </p>

                    <div class="flex justify-center md:justify-start">
                        <a :href="inviteUrl">
                            <Button label="Invite Now" type="button" class="mr-3 p-button-raised"></Button>
                        </a>
                        <a :href="supportUrl">
                            <Button label="Support" type="button" class="p-button-outlined"></Button>
                        </a>
                    </div>
                </section>
            </div>
            <div class="col-12 md:col-5 overflow-hidden">
                <levitating-logo />
            </div>
        </div>
    </section>
</template>

<script setup>
import Button from "primevue/button";
import LevitatingLogo from "./LevitatingLogo.vue";

const inviteUrl = route('landing.invite');
const supportUrl = route('landing.support');
</script>
