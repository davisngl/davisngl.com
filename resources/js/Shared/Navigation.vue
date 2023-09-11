<script setup>
import { Link } from '@inertiajs/vue3'
import NavLink from '@/Shared/NavLink.vue'
</script>

<template>
    <nav class="flex justify-between">
        <ul class="flex">
            <li>
                <NavLink
                    :href="route('home.index')"
                    :active="$page.component === 'Home'"
                    >Home</NavLink
                >
            </li>
        </ul>

        <ul class="flex w-1/2 justify-around">
            <li>
                <Link href="/about">About</Link>
            </li>

            <li>
                <Link href="/projects">Projects</Link>
            </li>

            <li>
                <NavLink
                    :href="route('article.index')"
                    :active="$page.component === 'Articles'"
                    >Articles</NavLink
                >
            </li>

            <li>
                <NavLink
                    :href="route('contact.index')"
                    :active="$page.component === 'Contact'"
                    >Contact</NavLink
                >
            </li>
        </ul>
    </nav>
</template>
