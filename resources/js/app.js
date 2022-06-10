import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue3'

import Main from '../js/Layouts/Main'

createInertiaApp({
    resolve: name => {
        const page = require(`./Pages/${name}`).default

        page.layout ??= Main

        return page
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mount(el)
    },
})
