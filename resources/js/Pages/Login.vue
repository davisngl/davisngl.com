<template>
    <form @submit.prevent="authenticate">
        <slot name="rated"></slot>
        <div>
            <label for="email">E-mail address</label>
            <input
                type="text"
                id="email"
                name="email"
                class="mt-2 block w-full rounded-md border-gray-300 bg-gray-200 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                v-model="credentials.email"
            />
            <span
                class="mt-1 text-sm text-red-700"
                v-if="credentials.errors.email"
                v-text="credentials.errors.email"
            ></span>
        </div>

        <div class="mt-5">
            <label for="password">Password</label>
            <input
                type="password"
                id="password"
                name="password"
                class="mt-2 block w-full rounded-md border-gray-300 bg-gray-200 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                v-model="credentials.password"
            />
            <span
                class="mt-1 text-sm text-red-700"
                v-if="credentials.errors.password"
                v-text="credentials.errors.password"
            ></span>
        </div>

        <div class="mt-5 flex justify-end">
            <button
                type="submit"
                class="inline-flex items-center rounded-md border border-transparent bg-indigo-600 px-3 py-2 text-sm font-medium leading-4 text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:bg-indigo-400"
                v-bind:disabled="credentials.processing"
            >
                Authenticate
            </button>
        </div>
    </form>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3'

const credentials = useForm({
    email: null,
    password: null,
})

function authenticate() {
    credentials.post(route('login.store'), {
        onError: () => credentials.reset('password'),
    })
}
</script>

<script>
import Auth from '@/Layouts/Auth.vue'

export default {
    layout: Auth,
}
</script>

<style scoped></style>
