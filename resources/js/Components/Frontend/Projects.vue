<script setup>
import Project from "./Project.vue";
import { ref, computed } from "vue";

const props = defineProps({
    categories: Object,
    projects: Object,
});

const filteredProjects = ref(props.projects.data);
const selectedCategory = ref("all");

// Pagination states
const currentPage = ref(1);
const pageSize = ref(6); // Number of projects per page

// Filter projects by category
const filterProjects = (id) => {
  if (id === "all") {
    filteredProjects.value = props.projects.data;
    selectedCategory.value = id;
  } else {
    filteredProjects.value = props.projects.data.filter((project) => {
        return project.category.id === id;
    });
    selectedCategory.value = id;
  }
  currentPage.value = 1; // Reset to the first page whenever the filter changes
};

// Calculate the paginated projects based on the current page and page size
const paginatedProjects = computed(() => {
  const start = (currentPage.value - 1) * pageSize.value;
  const end = start + pageSize.value;
  return filteredProjects.value.slice(start, end);
});

// Calculate the total number of pages
const totalPages = computed(() => {
  return Math.ceil(filteredProjects.value.length / pageSize.value);
});

// Navigate to a specific page
const goToPage = (page) => {
  if (page >= 1 && page <= totalPages.value) {
    currentPage.value = page;
  }
};
</script>

<template>
  <div class="container mx-auto">
    <nav class="mb-12 border-b-2 border-light-tail-100 dark:text-dark-navy-100">
      <ul class="flex flex-col lg:flex-row justify-evenly items-center">
        <li class="cursor-pointer capitalize m-4">
          <button
            @click="filterProjects('all')"
            class="
              flex
              text-center
              px-4
              py-2
              hover:bg-accent
              text-white
              rounded-md
            "
            :class="[
              selectedCategory === 'all'
                ? 'bg-accent'
                : 'bg-light-tail-500 dark:bg-dark-navy-100',
            ]"
          >
            All
          </button>
        </li>
        <li
          class="cursor-pointer capitalize m-4"
          v-for="projectCategory in categories.data"
          :key="projectCategory.id"
        >
          <button
            @click="filterProjects(projectCategory.id)"
            class="
              flex
              text-center
              px-4
              py-2
              hover:bg-accent
              text-white
              rounded-md
            "
            :class="[
              selectedCategory == projectCategory.id
                ? 'bg-accent'
                : 'bg-light-tail-500 dark:bg-dark-navy-100',
            ]"
          >
            {{ projectCategory.name }}
          </button>
        </li>
      </ul>
    </nav>
    <section class="grid gap-y-12 lg:grid-cols-3 lg:gap-8">
      <Project
        v-for="project in paginatedProjects"
        :key="project.id"
        :project="project"
      />
    </section>
    <div class="flex justify-center mt-8">
      <button
        @click="goToPage(currentPage - 1)"
        :disabled="currentPage === 1"
        class="px-4 py-2 mx-1 bg-light-tail-500 dark:bg-dark-navy-100 text-white rounded-md hover:bg-accent"
      >
        Previous
      </button>
      <span class="px-4 py-2 mx-1">{{ currentPage }} / {{ totalPages }}</span>
      <button
        @click="goToPage(currentPage + 1)"
        :disabled="currentPage === totalPages"
        class="px-4 py-2 mx-1 bg-light-tail-500 dark:bg-dark-navy-100 text-white rounded-md hover:bg-accent"
      >
        Next
      </button>
    </div>
  </div>
</template>
