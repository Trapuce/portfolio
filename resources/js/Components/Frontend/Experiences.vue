<script setup>

</script>


<template>

<section id="experiences" class="bg-light-primary
      dark:bg-dark-primary">
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
        <h2 class="section-title">Work Experience </h2>

      </div>
  <div class="max-w-4xl mx-auto p-4">
    <div class="relative border-l-4 border-gray-300 ml-4">
      <!-- First Job -->
      <div class="mb-8 ml-8">
  <div class="absolute w-6 h-6 bg-light-tail-100 dark:bg-dark-navy-500 rounded-full -left-4 border-4 border-white"></div>
  <time class="mb-1 text-sm font-normal leading-none">From June 2024 to August 2024, Creteil, Paris</time>
  <h3 class="text-lg font-semibold">AW Service - Software Developer Internship</h3>
  <p class="text-base font-normal">Technologies: React, Vue.js, Angular, Laravel</p>
  <p class="text-base font-normal">Developed and maintained user interfaces using React, Vue.js, Angular, JavaScript, and iCalendar, in collaboration with the back-end team working on Laravel.</p>
</div>
      <!-- Second Job -->
      <div class="mb-8 ml-8">
  <div class="absolute w-6 h-6 bg-light-tail-100 dark:bg-dark-navy-500 rounded-full -left-4 border-4 border-white"></div>
  <time class="mb-1 text-sm font-normal leading-none">From June 2021 to September 2021, Bamako, Mali</time>
  <h3 class="text-lg font-semibold">Ministry of Economy and Finance - Full Stack Developer Pre-employment Internship</h3>
  <p class="text-base font-normal">Technologies: PHP, JavaScript, SQL, Bootstrap, UML</p>
  <p class="text-base font-normal">Designed and developed a web application for archive management, gaining skills in system administration and closely collaborating with the development team.</p>
</div>

      <!-- Third Job -->
      <div class="mb-8 ml-8">
  <div class="absolute w-6 h-6 bg-light-tail-100 dark:bg-dark-navy-500 rounded-full -left-4 border-4 border-white"></div>
  <time class="mb-1 text-sm font-normal leading-none">From December 2019 to February 2020, Bamako</time>
  <h3 class="text-lg font-semibold">Harlem Auto Service - Freelance Developer</h3>
  <p class="text-base font-normal">Technologies: HTML, CSS, JavaScript, Ajax, PHP, Bootstrap</p>
  <p class="text-base font-normal">As a freelancer, I had the opportunity to collaborate with Harlem Auto Service, a company based in Bamako, Mali, to design and develop a custom web application tailored to their specific needs for managing inventory, invoices, orders, and repairs.</p>
  <p class="text-base font-normal">Currently successfully deployed with two companies (Harlem, Traore Kounda).</p>
</div>
    </div>
  </div>
      </div>
</section>

</template>
