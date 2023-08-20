<template>
    <div>
        <CreateTaskForm />
        <ShowTaskTable />
    </div>
</template>

<script setup>
import CreateTaskForm from '@/modules/create-task-form';
import ShowTaskTable from '@/modules/show-task-table';
import { tasks } from '@/api/useTasks';

const props = defineProps({
    tasks: {
        type: Array,
        required: true,
    },
});

tasks.value.push(...props.tasks);
</script>
