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
                I am Daouda Traore, a Master's student in Software Engineering at the University of Rennes 1, seeking an apprenticeship.
                I have worked with the Software Development Life Cycle (SDLC) and agile methodologies.
                I have expertise in Java , PHP , JavaScript,Laravel.I also have a good understanding of Python, SpringBoot, Angular, MongoDB, Vuejs, and Postgresql.
                I am a lover of innovation and everything related to generating new knowledge. I face problems with a smile and solve them as soon as possible. I am very calculated about the time I spend and the work I do.
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
