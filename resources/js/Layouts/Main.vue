<script setup>
import Navigation from '@/Components/Navigation.vue'
</script>

<template>
    <main class="mx-auto w-full px-7 leading-relaxed sm:px-10 md:max-w-4xl md:leading-9">
        <Navigation class="mt-10" />

        <section :class="[$page.component === 'Project' ? 'mt-7' : 'mt-20']">
            <slot />
        </section>
    </main>
</template>
