import { createApp } from 'vue/dist/vue.esm-bundler';

import Tasks from '@/pages/tasks';

const app = createApp({
    components: {
        Tasks,
    },
});

document.querySelector('.app') && app.mount('.app');
