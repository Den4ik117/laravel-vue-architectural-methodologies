import { createApp } from 'vue/dist/vue.esm-bundler';

const app = createApp({
    components: {},
});

document.querySelector('.app') && app.mount('.app');
