<script setup>
import { RouterView } from 'vue-router'
</script>

<template>
  <the-header/>
  <main class="container">
    <RouterView />
  </main>
  <the-footer/>
</template>
