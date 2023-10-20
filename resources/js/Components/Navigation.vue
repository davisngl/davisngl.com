<script setup>
import NavLink from '@/Components/NavLink.vue'
import { ref } from 'vue'
import { vOnClickOutside } from '@vueuse/components'

const mobileNavigation = ref(null)

const openMobileNavigation = () => {
    mobileNavigation.value.classList.remove('-translate-x-full')
}

const closeMobileNavigation = () => {
    mobileNavigation.value.classList.add('-translate-x-full')
}
</script>

<template>
    <div>
        <nav class="flex justify-end">
            <button
                class="block focus:outline-none md:hidden"
                @click="openMobileNavigation"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="h-10 w-10"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
                    />
                </svg>
            </button>

            <nav class="hidden md:flex md:flex-1 md:justify-between">
                <div class="flex">
                    <NavLink
                        :href="route('about.index')"
                        :active="$page.component === 'About'"
                        >Home
                    </NavLink>
                </div>

                <div class="flex w-1/2 justify-end space-x-10">
                    <NavLink
                        :href="route('project.index')"
                        :active="$page.component === 'Projects'"
                        >Projects
                    </NavLink>

                    <NavLink
                        :href="route('contact.index')"
                        :active="$page.component === 'Contact'"
                        >Contact
                    </NavLink>
                </div>
            </nav>
        </nav>

        <nav
            ref="mobileNavigation"
            v-on-click-outside="closeMobileNavigation"
            class="fixed inset-y-0 left-0 flex h-screen w-64 -translate-x-full transform flex-col space-y-2 bg-gray-800 bg-opacity-95 pt-10 text-xl duration-200 z-10"
        >
            <div
                class="mx-7 flex justify-end focus:outline-none"
                @click="closeMobileNavigation"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="h-10 w-10"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M6 18L18 6M6 6l12 12"
                    />
                </svg>
            </div>

            <NavLink
                class="block px-10 py-2.5"
                :href="route('about.index')"
                :active="$page.component === 'About'"
                >Home
            </NavLink>

            <NavLink
                class="block px-10 py-2.5"
                :href="route('project.index')"
                :active="$page.component === 'Projects'"
                >Projects
            </NavLink>

            <NavLink
                class="block px-10 py-2.5"
                :href="route('contact.index')"
                :active="$page.component === 'Contact'"
                >Contact
            </NavLink>
        </nav>
    </div>
</template>
