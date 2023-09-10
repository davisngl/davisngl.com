<template>
    <Link :class="{ 'font-bold': active }">
        <slot />
    </Link>
</template>

<script setup>
import { Link } from "@inertiajs/vue3"

defineProps({
    active: Boolean,
})
</script>
