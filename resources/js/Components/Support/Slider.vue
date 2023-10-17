<script setup>
import { onMounted, ref } from 'vue'
import Glide from '@glidejs/glide'
import { Autoplay, Controls } from '@glidejs/glide/entry/entry-modular.js'

const slideElement = ref()

onMounted(() => new Glide(slideElement.value).mount({ Controls, Autoplay }))
</script>

<template>
    <div class="glide" ref="slideElement">
        <div class="glide__track relative" data-glide-el="track">
            <ul class="glide__slides">
                <slot></slot>
            </ul>

            <div class="glide__arrows absolute flex justify-between inset-0 items-center" data-glide-el="controls">
                <button
                    class="glide__arrow glide__arrow--left flex justify-center align-middle bg-gray-500 w-10 h-10 bg-opacity-20 hover:bg-opacity-50 transition"
                    data-glide-dir="<"
                >
                    &lsaquo;
                </button>
                <button
                    class="glide__arrow glide__arrow--right flex justify-center align-middle bg-gray-500 w-10 h-10 bg-opacity-20 hover:bg-opacity-50 transition"
                    data-glide-dir=">"
                >
                    &rsaquo;
                </button>
            </div>
        </div>
    </div>
</template>

<style scoped>
@import '@glidejs/glide/dist/css/glide.core.min.css';
</style>
