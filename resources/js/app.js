import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue3'
import { ZiggyVue } from 'ziggy'
import { Ziggy } from 'ziggy'

import Main from '../js/Layouts/Main'

createInertiaApp({
    resolve: name => {
        const page = require(`./Pages/${name}`).default

        if (page.layout === undefined) {
            page.layout = Main
        }

        return page
    },
    title: title => {
        return title
            ? `${title} - Thought Repository`
            : 'Thought Repository'
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue, Ziggy)
            .mount(el)
    },
})
