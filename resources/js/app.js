import './bootstrap';

import { createApp, h } from 'vue';
import {createInertiaApp, usePage} from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3';

import PrimeVue from "primevue/config";
import 'primeicons/primeicons.css'
import 'primeflex/primeflex.css';
import 'primevue/resources/themes/vela-green/theme.css';

createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
        return pages[`./Pages/${name}.vue`]
    },
    setup({ el, App, props, plugin }) {
        const app = createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(PrimeVue, {
                ripple: true
            })
            .component('inertia-link', Link)
            .component("router-link", {
                props: ["to", "custom"],
                template: `<inertia-link :href="to"><slot/></inertia-link>`,
            });

        app.mount(el);
    },
})
