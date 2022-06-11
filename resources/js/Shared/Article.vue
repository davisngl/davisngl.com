<template>
    <article>
        <div class="meta flex justify-between mb-5">
            <span
                v-text="article.created_at"
                class="text-red-600 text-sm"
            ></span>
            <span
                v-text="article.time_to_read"
                class="text-gray-500 italic"
            ></span>
        </div>

        <h2
            v-text="article.title"
            class="text-xl font-bold pb-10 border-b-2 border-red-600"
        ></h2>

        <section v-html="article.content"></section>
    </article>
</template>

<script setup>
import { defineProps } from "vue"

defineProps({
    article: Object
})
</script>
