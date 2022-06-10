<template>
    <nav class="flex justify-between">
        <ul class="flex">
            <li>
                <Link href="/">Home</Link>
            </li>
        </ul>

        <ul class="w-1/2 flex justify-around">
            <li>
                <Link href="/about">About</Link>
            </li>

            <li>
                <Link href="/projects">Projects</Link>
            </li>

            <li>
                <Link href="/articles">Blog</Link>
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
