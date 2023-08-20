import { ref } from 'vue';
import axios from 'axios';

export const tasks = ref([]);

export const useTasks = () => {
    const store = async (form, onSuccess = undefined, onError = undefined) => {
        const url = '/tasks';

        try {
            const data = await axios.post(url, form);

            tasks.value.push(data.data.data);

            onSuccess && onSuccess(data);
        } catch (e) {
            onError && onError(e);
        }
    };

    return {
        store,
    };
};
