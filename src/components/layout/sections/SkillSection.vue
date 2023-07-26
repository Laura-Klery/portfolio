<script setup>
import CardFilter from "@/components/CardFilter.vue";
</script>

<template>
  <section id="skills">
    <h2>Compétences</h2>
    <div class="filters">
      <ul>
        <li>Toutes</li>
        <li>Front-End</li>
        <li>CMS & plugins</li>
        <li>Back-End</li>
        <li>Tests</li>
        <li>UX/UI Design</li>
        <li>Outils</li>
      </ul>
    </div>
    <CardFilter />
  </section>
</template>