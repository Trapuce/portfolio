<script setup>
import Projects from "./Projects.vue";
defineProps({
  categories: Object,
  projects: Object,
});
</script>
<template>
  <section
    id="portfolio"
    class="section bg-light-secondary dark:bg-dark-secondary min-h-[1400px]"
  >
    <div
      class="container mx-auto"
      v-motion
      :initial="{
        opacity: 0,
        y: 100,
      }"
      :visible="{
        opacity: 1,
        y: 0,
      }"
    >
      <div class="flex flex-col items-center text-center">
        <h2 class="section-title">Recent Projects</h2>
        <p class="subtitle">
            Discover some of my recent work showcasing my skills and expertise in various technologies. Explore the projects to see what I’ve been working on.
        </p>
      </div>
    </div>
    <Projects :categories="categories" :projects="projects" />
  </section>
</template>
