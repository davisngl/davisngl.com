<script setup>
import Slider from '@/Components/Support/Slider.vue'
import { Head } from '@inertiajs/vue3'
import { Link } from '@inertiajs/vue3'

const props = defineProps({
    project: Object,
})

const project = props.project.data
</script>

<template>
    <Head :title="project.name" />

    <div class="mb-5">
        <Link class="text-sm hover:underline" :href="route('project.index')"
            >&laquo; Back to projects</Link
        >
    </div>

    <section class="mt-10">
        <div class="flex flex-col mb-5 items-center">
            <h1 class="text-2xl md:text-3xl font-semibold mb-1">{{ project.name }}</h1>
            <ul v-if="project.urls" v-cloak>
                <li class="text-xs" v-for="url in project.urls">
                    <a
                        class="flex items-center space-x-2 hover:underline"
                        :href="url"
                        target="_blank"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="h-3 w-3"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244"
                            />
                        </svg>
                        <span>
                            {{ url }}
                        </span>
                    </a>
                </li>
            </ul>
        </div>

        <Slider
            :images="project.images.all"
            v-if="project.images.all.length"
            v-cloak
        />

        <article
            class="min-w-full block prose prose-p:text-gray-100 mt-5 text-justify md:text-left"
            v-html="project.description"
        ></article>

        <div class="mt-5">
            <h2 class="mb-3 text-2xl font-semibold">Technologies used</h2>
            <ul class="flex space-x-2 text-sm">
                <li
                    class="rounded-md border border-gray-100 px-3 py-1 text-white transition hover:border-red-500"
                    v-for="technology in project.technologies"
                    :key="technology"
                >
                    {{ technology }}
                </li>
            </ul>
        </div>
    </section>
</template>
