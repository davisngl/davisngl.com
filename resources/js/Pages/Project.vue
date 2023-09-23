<script setup>
const props = defineProps({
    project: Object
})

const project = props.project.data
</script>

<template>
    Hello, this is {{project.name}}
</template>
