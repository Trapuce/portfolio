<template>
    <section id="about" class="section bg-light-secondary dark:bg-dark-secondary">
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
        <div class="flex flex-col xl:flex-row gap-24">
          <img
            class="object-cover h-full w-[566px] md:mx-auto lg:mx-0 rounded-2xl"
            src="../../../../public/img/logo.jpg"
            alt="about"
          />
          <div
            class="
              flex flex-col
              items-center
              text-center
              lg:items-start lg:text-left
            "
          >
            <div class="flex flex-col">
              <h2 class="text-3xl lg:text-4xl font-medium lg:font-extrabold mb-3">
                About Me
              </h2>
              <P class="mb-4 text-accent">Software Engineer</P>
              <hr class="mb-8 opacity-90 dark:opacity-5" />
              <p class="mb-8">
                I am Daouda Traore, a Master's student in Software Engineering at the University of Rennes 1, seeking an apprenticeship. I specialize in front-end development with React, Vue.js, and Angular, and have collaborated on back-end projects using Laravel. My recent work includes a mixed reality app for 3D printing visualization and a Pokédex app using Angular and SpringBoot. I am proficient in Java, JavaScript, Python, PHP, and C++, and have experience with databases like MySQL and MongoDB. Fluent in French and intermediate in English, I also enjoy video editing and design, and share my projects on YouTube.

              </p>
            </div>
            <a href="#contact" class="btn btn-md bg-accent text-light-tail-100">
              Contact me
            </a>
          </div>
        </div>
      </div>
    </section>
  </template>
