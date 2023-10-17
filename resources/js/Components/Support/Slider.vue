<template>
    <div class="flex flex-col space-y-2 items-center">
        <Swiper
            :modules="modules"
            :pagination="{
            clickable: true,
        }"
            :space-between="50"
            navigation
            :zoom="{
            maxRatio: 3
        }"
        >
            <SwiperSlide v-for="image in props.images" :key="image">
                <div class="swiper-zoom-container">
                    <img :src="image" class="w-full"/>
                </div>
            </SwiperSlide>
        </Swiper>

        <p v-if="props.helperText" class="text-xs">{{ props.helperText }}</p>
    </div>
</template>

<script setup>
import { Swiper, SwiperSlide } from 'swiper/vue'
import { Navigation, Pagination, Zoom } from 'swiper/modules'
import 'swiper/css'
import 'swiper/css/zoom'
import 'swiper/css/pagination'
import 'swiper/css/navigation'

const modules = [
    Navigation,
    Pagination,
    Zoom,
]

const props = defineProps({
    images: {
        type: Array,
        required: true,
    },
    helperText: {
        type: String,
        default: 'Double-click to zoom the image'
    }
})
</script>

<style>

.swiper {
    @apply w-full;
}

.swiper-slide {
    overflow: visible;
}

.swiper-pagination-bullet {
    @apply w-3 h-3;
}

.swiper-pagination-bullet-active {
    @apply bg-red-300;
}

.swiper-button-prev, .swiper-button-next {
    @apply text-red-300;
}
</style>
