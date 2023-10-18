<template>
    <Head title="Article Index" />

    <article v-for="article in articles" v-if="articles.length">
        <Link
            v-text="article.title"
            :href="route('article.show', { article: article.slug })"
            class="my-5 block hover:underline"
        ></Link>
    </article>

    <div v-else>No articles found. They should be arriving soon!</div>
</template>

<script setup>
import { Link, Head } from '@inertiajs/vue3'

defineProps({
    articles: Array,
})
</script>
