<script setup>
defineProps({
    show: Boolean
})

defineEmits(['close'])
</script>

<template>
    <Transition name="modal">
        <div
            class="grid place-items-center fixed inset-0 bg-black bg-opacity-20 rounded-lg"
            v-if="show"
        >
            <div class="flex flex-col justify-between pb-5 w-[80vw] max-w-6xl bg-gray-50 text-gray-900 p-5">
                <header class="text-lg font-semibold">
                    <slot name="header">Default Header</slot>
                </header>

                <main>
                    <slot></slot>
                </main>

                <footer class="pt-5">
                    <slot name="footer">
                        <button
                            class="border hover:bg-green-100 border-gray-900 px-5 py-1 transition hover:border-green-500"
                            @click="$emit('close')"
                        >
                            Close
                        </button>
                    </slot>
                </footer>
            </div>
        </div>
    </Transition>
</template>

<style scoped>
.modal-enter-from {
    @apply opacity-0 scale-110;
}

.modal-enter-to {
    @apply opacity-100 scale-100;
}

.modal-enter-active {
    @apply transition duration-300;
}

.modal-leave-active {
    @apply transition duration-200;
}

.modal-leave-to {
    @apply opacity-0 scale-110;
}
</style>
