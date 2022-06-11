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
            class="mt-10"
        ></section>
    </article>
</template>

<script setup>
import { Link, Head } from "@inertiajs/inertia-vue3"

defineProps({
    article: Object
})
</script>
