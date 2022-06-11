<template>
    <Link :class="{ 'font-bold': active }">
        <slot />
    </Link>
</template>

<script setup>
import { Link } from "@inertiajs/inertia-vue3"
import { defineProps } from "vue"

defineProps({
    active: Boolean,
})
</script>
