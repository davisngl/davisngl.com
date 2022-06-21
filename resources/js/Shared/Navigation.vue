<template>
    <nav class="flex justify-between">
        <ul class="flex">
            <li>
                <NavLink :href="route('home.index')" :active="$page.component === 'Home'">Home</NavLink>
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
                <NavLink :href="route('article.index')" :active="$page.component === 'Articles'">Articles</NavLink>
            </li>

            <li>
                <NavLink :href="route('contact.index')" :active="$page.component === 'Contact'">Contact</NavLink>
            </li>

            <li>
                <Link href="/login">Authentication</Link>
            </li>
        </ul>
    </nav>
</template>

<script setup>
    import { Link } from "@inertiajs/inertia-vue3";
    import NavLink from "./NavLink";
</script>

<style scoped>

</style>
