<script setup>
import {ref} from "vue";

const isNavOpen = ref(false)

const toggleNav = () => {
  isNavOpen.value = !isNavOpen.value
}

</script>

<template>
  <header class="main-header">
    <nav id="topnav" class="nav" :class="{ 'nav-open': isNavOpen }">
      <div class="logo"><router-link to="/"><img src="../../assets/img/logo.svg" alt="Logo du site constitué de la lettre l et de la lettre k entouré d'accolade." /></router-link></div>
      <div class="menu">
        <div class="menu-icon" @click="toggleNav" :class="{ 'cross': isNavOpen }">
          <span class="line1"></span>
          <span class="line2"></span>
          <span class="line3"></span>
        </div>
        <ul>
          <li><a href="#about" @click="toggleNav()">Présentation</a></li>
          <li><a href="#skills" @click="toggleNav()">Compétences</a></li>
          <li><a href="#formations" @click="toggleNav()">Expériences</a></li>
          <li><a href="#projects" @click="toggleNav()">Projets</a></li>
          <li><a href="#contact" @click="toggleNav()">Contact</a></li>
        </ul>
        <div class="social-icons">
          <a href="https://www.linkedin.com/in/laura-klerykowski/" target="_blank" rel="noopener noreferrer">
            <img src="../../assets/img/icons/linkedin.svg" alt="LinkedIn" />
          </a>
        </div>
      </div>
    </nav>
  </header>
</template>
