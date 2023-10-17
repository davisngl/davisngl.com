<script setup>
import Slider from '@/Components/Support/Slider.vue'
import { Head } from '@inertiajs/vue3'

const props = defineProps({
    project: Object,
})

const project = props.project.data
</script>

<template>
    <Head :title="project.name" />

    <Slider :images="project.images.all" />
</template>
