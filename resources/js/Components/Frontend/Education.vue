<script setup>
</script>


<template>

<section id="education" class="bg-light-primary dark:bg-dark-primary py-4">
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
<div class=" py-8 mx-auto max-w-7xl space-y-10" id="education">
  <h1 class=" font-bold text-2xl text-center py-2">EDUCATION</h1>

  <div class="flex flex-col md:flex-row border-2">
    <div class="md:w-1/4 flex flex-col-reverse justify-center border-e-2 px-4 bg-light-tail-100 dark:bg-dark-navy-500  shadow-2xl">
      <h1 class="text-center text-xl font-bold">Master's Degree</h1>
      <span class="text-center pb-2">2023 - 2025 (Expected)</span>
    </div>
    <div class="flex flex-col p-4 space-y-1 md:w-1/2">
      <h1 class=" text-2xl">Software Engineering</h1>
      <h2 class=" text-xl">University Rennes</h2>
      <div class="list-disc pl-14">
        <li>Currently pursuing a Master's degree in Software Engineering.</li>
        <li>Expected to complete the program in June 2024.</li>
        <li>Acquiring in-depth knowledge of software development, design principles, and the software development life cycle.`</li>
      </div>
    </div>
  </div>

  <div class="flex flex-col md:flex-row border-2">
    <div class="md:w-1/4 flex flex-col-reverse justify-center border-e-2 px-4 bg-light-tail-100 dark:bg-dark-navy-500  shadow-2xl">
      <h1 class="text-center text-xl font-bold">Bachelor's Degree</h1>
      <span class="text-center pb-2">2021-2023</span>
    </div>
    <div class="flex flex-col p-4 space-y-1 md:w-1/2">
      <h1 class=" text-2xl">Computer Science</h1>
      <h2 class=" text-xl">University Caen</h2>
      <div class="list-disc pl-14">
        <li>Covering algorithms, databases, web technologies, and programming languages (C, Python, Java).</li>
        <li>Explored advanced topics like artificial intelligence, software design, and system/network architecture.</li>
      </div>
    </div>
  </div>

  <div class="flex flex-col md:flex-row border-2 mb-8">
  <div class="md:w-1/4 flex flex-col-reverse justify-center border-e-2 px-4 bg-light-tail-100 dark:bg-dark-navy-500 shadow-2xl">
    <h1 class="text-center text-xl font-bold">Bachelor's Degree</h1>
    <span class="text-center pb-2">2019 - 2021</span>
  </div>
  <div class="flex flex-col p-4 space-y-1 md:w-1/2">
    <h1 class="text-2xl">Mathematics and Computer Science</h1>
    <h2 class="text-xl">Faculty of Science and Technology (FST), Bamako, BA, Mali</h2>
    <div class="list-disc pl-14">
      <li>Developed strong analytical and problem-solving skills.</li>
      <li>Proficient in programming language  C.</li>
      <li>Gained a solid foundation in mathematical concepts and their applications in computer science.</li>
      <li>Experience with database management using SQL.</li>
    </div>
  </div>
</div>
</div>
</div>
</section>

</template>
