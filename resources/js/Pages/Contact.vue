<template>
    <Head title="Contact Me" />

    <Notification class="my-5" title="You are in luck!" v-if="$page.props.flash.success">
        {{ $page.props.flash.success }}
    </Notification>

    <form @submit.prevent="submit">
        <div class="mb-5">
            <label for="email" class="block text-sm font-medium">Your E-Mail Address</label>
            <div class="mt-1">
                <input v-model="form.email" type="email" name="email" id="email" class="bg-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="you@example.com">
                <span class="error-message text-sm" v-if="form.errors.email" v-text="form.errors.email"></span>
            </div>
        </div>

        <div class="mb-5">
            <label for="message" class="block text-sm font-medium">Your Message</label>
            <div class="mt-1">
                <textarea
                    v-model="form.message"
                    rows="10"
                    name="message"
                    id="message"
                    class="bg-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                ></textarea>
                <span class="error-message text-sm" v-if="form.errors.message" v-text="form.errors.message"></span>
            </div>
        </div>

        <div class="flex justify-end mt-10">
            <button type="submit"
                    :disabled="form.processing"
                    class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white disabled:bg-red-400 bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                Send Message
                <!-- Heroicon name: solid/mail -->
                <svg class="ml-2 -mr-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                     fill="currentColor" aria-hidden="true">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                </svg>
            </button>
        </div>
    </form>
</template>

<script setup>
    import { useForm, Head } from "@inertiajs/inertia-vue3";
    import Notification from "../Shared/Notification";

    const form = useForm({
        email: null,
        message: null
    })

    function submit () {
        form.post(route('contact.store'), {
            onSuccess: () => form.reset()
        })
    }
</script>

<style scoped>

</style>
