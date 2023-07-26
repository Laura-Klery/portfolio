<script setup>
import filter from "@/assets/js/filter.js";
</script>

<template>
  <div v-for="skill in filter" :key="skill.id" class="card-filter">
    <img :src="`src/assets/img/skill/${skill.picture}`" :alt="`${skill.name}`" class="card-filter--image" />
    <span class="card-filter--title">{{ skill.name }}</span>
  </div>
</template>
