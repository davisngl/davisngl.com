<script setup>
import { Head, Link } from '@inertiajs/vue3'
import Notification from '@/Components/Notification.vue'

const props = defineProps({
    projects: {
        type: Object,
        required: true,
    },
})

const projects = props.projects.data
</script>

<template>
    <Head title="All Projects" />

    <div class="my-32 flex flex-col space-y-12 px-10 lg:px-0">
        <article
            v-if="projects.length"
            v-for="project in projects"
            :key="project.id"
        >
            <Link :href="route('project.show', { project: project.slug })">
                <div class="flex flex-col md:flex-row md:space-x-5">
                    <aside class="w-full md:w-1/2">
                        <img
                            class="w-full"
                            :src="project.images.thumb"
                            :alt="project.name"
                            loading="lazy"
                            width="438"
                            height="223"
                        />
                    </aside>

                    <aside class="w-full md:w-1/2 mt-3 md:mt-0">
                        <h2 class="text-center text-xl font-semibold">
                            {{ project.name }}
                        </h2>

                        <p
                            class="prose text-white"
                            v-html="project.description"
                        ></p>
                    </aside>
                </div>
            </Link>

            <div class="mt-5 hidden md:items-center space-x-2 md:flex">
                <Link
                    class="glow border border-white px-4"
                    :href="route('project.show', { project: project.slug })"
                    >Open</Link
                >

                <a
                    class="glow flex items-center justify-between space-x-3 border border-white px-4"
                    v-if="project.urls?.github"
                    :href="project.urls?.github"
                    target="_blank"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="h-6 w-6"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5"
                        />
                    </svg>
                    <span>Code</span>
                </a>

                <a
                    class="glow flex items-center justify-between space-x-3 border border-white px-4"
                    v-if="project.urls?.live"
                    :href="project.urls?.live"
                    target="_blank"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="h-6 w-6"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244"
                        />
                    </svg>
                    <span>Live URL</span>
                </a>
            </div>
        </article>

        <Notification type="warning" title="Oh-ouh..." v-else>
            There's no projects as of yet
        </Notification>
    </div>
</template>
