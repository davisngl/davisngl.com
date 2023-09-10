<template>
    <Head title="Article Index"/>

    <div class="flex justify-end" v-if="$page.props.auth">
        <button
            class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white disabled:bg-red-400 bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500"
        >Create Article</button>
    </div>

    <article v-for="article in articles" v-if="articles.length">
        <Link
            v-text="article.title"
            :href="route('article.show', { article: article.slug })"
            class="block my-5 hover:underline"
        ></Link>
    </article>

    <div v-else>
        No articles found. They should be arriving soon!
    </div>
</template>

<script setup>
import { Link, Head } from "@inertiajs/vue3";

defineProps({
    articles: Array
})
</script>
