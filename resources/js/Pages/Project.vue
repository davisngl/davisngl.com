<script setup>
import Lightbox from '@/Components/Lightbox.vue'
import Modal from '@/Components/Support/Modal.vue'
import { ref } from 'vue'

const props = defineProps({
    project: Object,
})

const project = props.project.data

const showModal = ref(false)
</script>

<template>
    Hello, this is {{ project.name }}

    <button
        class="border border-white px-5 py-3 transition hover:border-red-500"
        @click="showModal = true"
    >
        Show Modal
    </button>

    <Modal :show="showModal" @close="showModal = false">
        <template #header>
            Add Team Player
        </template>

        <template #default>
            There are no spots left. Sorry for inconvenience.
        </template>
    </Modal>
</template>
