<template>
    <Head :title="article.title" />

    <Link
        :href="route('article.index')"
        class="mb-5 block text-gray-500 hover:text-gray-300"
    >
        &laquo; Go Back
    </Link>

    <article>
        <div class="meta mb-5 flex justify-between">
            <span
                v-text="article.created_at"
                class="text-sm text-red-600"
            ></span>
            <span class="italic text-gray-500"
                >{{ article.time_to_read }} Min Read</span
            >
        </div>

        <h1
            v-text="article.title"
            class="border-b-2 border-red-600 pb-7 text-4xl"
        ></h1>

        <section
            v-html="article.content"
            class="prose mb-10 mt-7 text-gray-100"
        ></section>

        <div class="w-1/2">
            <p class="mb-2 text-xl font-bold">Share Article</p>
            <ul class="flex justify-between">
                <li>
                    <ShareLink platform="twitter" url-to-share="#"
                        >Twitter</ShareLink
                    >
                </li>
                <li>
                    <ShareLink platform="facebook" :url-to-share="article.url"
                        >Facebook</ShareLink
                    >
                </li>
                <li>
                    <ShareLink platform="linkedin" url-to-share="#"
                        >LinkedIn</ShareLink
                    >
                </li>
            </ul>
        </div>
    </article>
</template>

<script setup>
import { Link, Head } from '@inertiajs/vue3'
import ShareLink from '@/Components/ShareLink.vue'

defineProps({
    article: Object,
})
</script>
