<script setup>
import Navigation from "@/Shared/Navigation.vue";
</script>

<template>
    <main class="mx-auto max-w-4xl">
        <Navigation class="mt-10" />

        <section class="mx-auto mt-12 max-w-3xl leading-9">
            <slot />
        </section>
    </main>
</template>
