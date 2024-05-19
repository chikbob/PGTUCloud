import {createApp, h} from 'vue';
import {createInertiaApp} from '@inertiajs/inertia-vue3';
import {createPinia} from "pinia";

import 'sweetalert2/src/sweetalert2.scss'

const pinia = createPinia();

createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./pages/**/*.vue', {eager: true})
        return pages[`./pages/${name}.vue`]
    },
    setup({el, App, props, plugin}) {
        createApp({render: () => h(App, props)})
            .use(plugin)
            .use(pinia)
            .mount(el)
    },
});
