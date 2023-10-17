<script setup>
import Slider from '@/Components/Support/Slider.vue'

const props = defineProps({
    project: Object,
})

const project = props.project.data
</script>

<template>
    Hello, this is {{ project.name }}
    <Slider>
        <img
            class="object-cover object-center"
            :src="image"
            alt=""
            v-for="image in project.images.all"
            width="768"
            height="390"
        />
    </Slider>
</template>
