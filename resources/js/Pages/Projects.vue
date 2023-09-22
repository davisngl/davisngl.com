<script setup>
import { Head, Link } from '@inertiajs/vue3'
import Notification from "@/Shared/Notification.vue";

const props = defineProps({
    projects: {
        type: Object,
        required: true
    }
})

const projects = props.projects.data
</script>

<template>
    <Head title="All Projects" />

    <div class="grid gap-4 grid-cols-3 grid-rows-3" v-if="projects.length">
        <Link :href="route('project.show', { project: project.id })" v-for="project in projects" :key="project.id">
            <div>
                <h2>{{ project.name }}</h2>
            </div>
        </Link>
    </div>

    <Notification type="warning" title="Oh-ouh..." v-else>
        Seems like someone's a lazy developer... Give him a message on LinkedIn and keep him busy!
    </Notification>
</template>
