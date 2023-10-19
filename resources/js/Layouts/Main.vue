<script setup>
import Navigation from '@/Components/Navigation.vue'
</script>

<template>
    <main class="mx-auto w-full px-7 leading-relaxed sm:px-10 md:max-w-6xl md:leading-9">
        <Navigation class="mt-10" />

        <section :class="[['Project', 'Projects'].includes($page.component) ? 'mt-10 md:mt-20' : ' mt-8 md:mt-15']">
            <slot />
        </section>
    </main>
</template>
