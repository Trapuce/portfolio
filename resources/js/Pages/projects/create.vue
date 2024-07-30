<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';

defineProps({
    skills:Array,
    categories: Array
});

const form = useForm({
    name: '',
    image: null,
     skill_id:  '',
     category_id: '',
    project_url: '',
});

const submit = () => {
    form.post(route('projects.store'));
};
</script>

<template>
    <Head title="New Project" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">New Project</h2>
        </template>

        <div class="py-12">
            <div class="max-w-md mx-auto sm:px-6 lg:px-8 bg-white">
                <form class="p-4" @submit.prevent="submit">
                    <div>
                        <InputLabel for="skill_id" value="Skill" />

                        <select v-model="form.skill_id" id="skill.id" name="skill.id" class="mt-1 block w-full pl-3 pr-10 py-2  text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm  rounded-md" >
                            <option v-for="skill in skills" :key="skill.id" :value="skill.id">{{skill.name}}</option>
                        </select>
                    </div>
                    <div>
                        <InputLabel for="category_id" value="Category" />

                        <select v-model="form.category_id" id="category.id" name="category.id" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                            <option v-for="category in categories" :key="category.id" :value="category.id">{{ category.name }}</option>
                        </select>
                    </div>
            <div>
                <InputLabel for="name" value="Name" />

                <TextInput
                    id="name"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.name"
                    required
                    autofocus
                    autocomplete="username"
                />

                <InputError class="mt-2" :message="form.errors.name" />
            </div>
            <div>
                <InputLabel for="project_url" value="Project_url" />

                <TextInput
                    id="project_url"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.project_url"
                    required
                    autofocus
                    autocomplete="projectUrl"
                />

                <InputError class="mt-2" :message="form.errors.project_url" />
            </div>

            <div class="mt-4">
             <InputLabel for="image" value="Image" />

                <TextInput
                    id="image"
                    type="file"
                    class="mt-1 block w-full"
                    @input="form.image = $event.target.files[0]"
                />

                <InputError class="mt-2" :message="form.errors.image" />
            </div>



            <div class="flex items-center justify-end mt-4">

                <PrimaryButton class="ms-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                   Store
                </PrimaryButton>
            </div>
        </form>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
