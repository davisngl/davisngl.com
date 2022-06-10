<template>
    <main class="max-w-4xl mx-auto">
        <Navigation class="mt-10"/>

        <section class="mt-20">
            <slot />
        </section>
    </main>
</template>

<script setup>
import Navigation from "../Shared/Navigation"
</script>

<style scoped>

</style>
