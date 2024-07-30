<script setup>
import Hero from '@/Components/Frontend/Hero.vue';
import Promote from '@/Components/Frontend/Promote.vue';
import About from '@/Components/Frontend/About.vue';
import Skills from '@/Components/Frontend/Skills.vue';
import Portfolio from "@/Components/Frontend/Portfolio.vue";
import ContactMe from '@/Components/Frontend/ContactMe.vue';
import Education from '@/Components/Frontend/Education.vue';
import Services from '@/Components/Frontend/Services.vue';

import FrontendLayout from '@/Layouts/Frontend.vue';
import { Head, Link } from '@inertiajs/vue3';
import Experiences from '@/Components/Frontend/Experiences.vue';


defineProps({
    skills:Object,
    projects:Object,
    categories:Object
})
</script>

<template>
    <Head title="Welcome" />
 <FrontendLayout>
    <!-- hero section-->
    <Hero />
        <!-- promote tail-100-->
    <Promote />
            <!-- About-->
    <About />
    <!-- skills-->
    <Skills :skills="skills" />
    <!-- EDUCATION-->

    <Education />

    <!-- projects -->
    <Portfolio :categories="categories" :projects="projects" />
    <!-- Education -->
<Experiences />
<Services />
    <!-- Contact -->
    <ContactMe />
     </FrontendLayout>
</template>
