<template>
    <main class="max-w-4xl mx-auto">
        <Navigation class="mt-10"/>

        <section class="max-w-3xl mx-auto mt-12 leading-9">
            <slot />
        </section>
    </main>
</template>

<script setup>
import Navigation from "../Shared/Navigation"
</script>

<style scoped>

</style>
