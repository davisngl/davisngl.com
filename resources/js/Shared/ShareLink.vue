<template>
    <a :href="sharingUrl" target="_blank">
        <slot />
    </a>
</template>

<script setup>
import { ref } from "vue"

const props = defineProps({
    urlToShare: String,
    platform: String
})

const mapping = {
    twitter: 'testing-twitter',
    facebook: `https://www.facebook.com/sharer/sharer.php?u=${props.urlToShare}&display=popup`,
    linkedin: 'testing-linkedin'
}

const sharingUrl = ref('')

sharingUrl.value = mapping[props.platform] || '#'
</script>
