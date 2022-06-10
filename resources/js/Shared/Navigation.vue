<template>
    <nav class="flex justify-around">
        <ul class="w-1/2 flex flex-row justify-around">
            <li>
                <Link href="/">Home</Link>
            </li>

            <li>
                <Link href="/contact">Contact</Link>
            </li>
        </ul>
    </nav>
</template>

<script setup>
    import { Link } from "@inertiajs/inertia-vue3";
</script>

<style scoped>

</style>
