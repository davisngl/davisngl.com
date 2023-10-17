<script setup>
import { computed, ref } from 'vue'

const props = defineProps({
    images: Array,
})

const slides = props.images
const slideCount = computed(() => slides.length - 1)

const position = ref(0)

const getSlide = (position) => {
    const slide = position > slideCount ? slides[slideCount] : slides[position]

    return slide.url
}
</script>

<template>
    <section class="lightbox-container">
        <div class="carousel relative">
            <button class="previous">&#8656;</button>
            <button class="next">&#8658;</button>

            <img :src="getSlide(position)" alt="" />

            <ul class="lightbox-preview-images flex justify-center space-x-1">
                <li
                    class="slide absolute inset-0 flex w-52 cursor-pointer object-cover opacity-0"
                    v-for="slide in slides"
                >
                    <img
                        class="block w-full object-cover object-center"
                        :src="slide.url"
                        alt="Testing"
                    />
                </li>
            </ul>
        </div>
    </section>
</template>
