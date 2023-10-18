<script setup>
import NavLink from '@/Components/NavLink.vue'
</script>

<template>
    <nav class="flex justify-between">
        <ul class="flex">
            <li>
                <NavLink
                    :href="route('about.index')"
                    :active="$page.component === 'About'"
                    >Home</NavLink
                >
            </li>
        </ul>

        <ul class="flex w-1/2 space-x-10 justify-end">
            <li>
                <NavLink
                    :href="route('project.index')"
                    :active="$page.component === 'Projects'"
                    >Projects</NavLink
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
