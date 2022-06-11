<template>
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
import { Link } from "@inertiajs/inertia-vue3";

defineProps({
    articles: Array
})
</script>
