<script setup>
import NavLink from '@/Components/NavLink.vue'
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
                <NavLink
                    :href="route('about.index')"
                    :active="$page.component === 'About'"
                    >About</NavLink
                >
            </li>

            <li>
                <NavLink
                    :href="route('project.index')"
                    :active="$page.component === 'Projects'"
                    >Projects</NavLink
                >
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
