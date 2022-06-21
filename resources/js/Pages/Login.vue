<template>
    <form @submit.prevent="authenticate">
        <div>
            <label for="email">E-mail address</label>
            <input
                type="text"
                id="email"
                name="email"
                class="shadow-sm mt-2 bg-gray-200 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                v-model="credentials.email"
            />
            <span class="mt-1 text-red-700 text-sm" v-if="credentials.errors.email" v-text="credentials.errors.email"></span>
        </div>

        <div class="mt-5">
            <label for="password">Password</label>
            <input
                type="password"
                id="password"
                name="password"
                class="shadow-sm mt-2 bg-gray-200 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                v-model="credentials.password"
            />
            <span class="mt-1 text-red-700 text-sm" v-if="credentials.errors.password" v-text="credentials.errors.password"></span>
        </div>

        <div class="mt-5 flex justify-end">
            <button
                type="submit"
                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 disabled:bg-indigo-400"
                v-bind:disabled="credentials.processing"
            >Authenticate</button>
        </div>
    </form>
</template>

<script setup>
import { useForm } from "@inertiajs/inertia-vue3"

const credentials = useForm({
    email: null,
    password: null
})

function authenticate() {
    credentials.post(route('login.store'), {
        onError: () => credentials.reset('password')
    })
}
</script>

<script>
import Auth from "../Layouts/Auth"

export default {
    layout: Auth
}
</script>

<style scoped>

</style>
