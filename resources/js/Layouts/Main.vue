<script setup>
import Navigation from '@/Components/Navigation.vue'
</script>

<template>
    <main class="w-full mx-auto px-5 md:px-5 md:max-w-4xl leading-relaxed md:leading-9">
        <Navigation class="mt-10" />

        <section
            :class="[ $page.component === 'Project' ? 'mt-7' : 'mt-20' ]"
        >
            <slot />
        </section>
    </main>
</template>
