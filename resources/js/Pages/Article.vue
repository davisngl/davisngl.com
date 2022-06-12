<template>
    <Head :title="article.title"/>

    <Link
        :href="route('article.index')"
        class="block mb-5 text-gray-500 hover:text-gray-300"
    >
        &laquo; Go Back
    </Link>

    <article>
        <div class="meta flex justify-between mb-5">
            <span
                v-text="article.created_at"
                class="text-red-600 text-sm"
            ></span>
            <span class="text-gray-500 italic">{{ article.time_to_read }} Min Read</span>
        </div>

        <h1
            v-text="article.title"
            class="text-4xl pb-10 border-b-2 border-red-600"
        ></h1>

        <section
            v-html="article.content"
            class="my-10"
        ></section>

        <div class="w-1/2">
            <p class="text-xl font-bold mb-2">Share Article</p>
            <ul class="flex justify-between">
                <li><ShareLink platform="twitter" url-to-share="#">Twitter</ShareLink></li>
                <li><ShareLink platform="facebook" :url-to-share="article.url">Facebook</ShareLink></li>
                <li><ShareLink platform="linkedin" url-to-share="#">LinkedIn</ShareLink></li>
            </ul>
        </div>
    </article>
</template>

<script setup>
import { Link, Head } from "@inertiajs/inertia-vue3"
import ShareLink from "../Shared/ShareLink";

defineProps({
    article: Object
})
</script>
