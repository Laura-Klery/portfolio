<script>
export default {
  name: "TheHeader",
  data() {
    return {
      isResponsive: false,
      activeLink: null,
    };
  },
  methods: {
    toggle() {
      this.isResponsive = !this.isResponsive;
    },
    closeMenu() {
      this.isResponsive = !this.isResponsive;
    },
    setActiveLink: function (event) {
      this.closeMenu();
      event.preventDefault();
      var link = event.target;
      var sectionId = link.getAttribute("href");
      var section = document.querySelector(sectionId);
      if (this.activeLink) {
        this.activeLink.classList.remove("active");
      }
      link.classList.add("active");
      this.activeLink = link;
      section.scrollIntoView({ behavior: "smooth" });
    },
  },
};
</script>

<template>
  <header class="main-header">
    <nav
      id="topnav"
      class="nav"
      :class="{ topnav: true, responsive: isResponsive }"
    >
      <div class="container-logo">
        <router-link to="/" class="logo"><img src="@/assets/img/logo.svg" alt="Logo du site constitué de la lettre l et de la lettre k entouré d'accolade." /></router-link>
      </div>
      <div>
        <div class="container-links">
          <a class="link" href="#about" @click="closeMenu; setActiveLink($event)">
            Présentation
          </a>
          <a class="link" href="#skills" @click="closeMenu; setActiveLink($event)">
            Compétences
          </a>
          <a
            class="link"
            href="#formations"
            @click="closeMenu; setActiveLink($event)"
          >
            Expériences
          </a>
          <a
            class="link"
            href="#projects"
            @click="closeMenu; setActiveLink($event)"
          >
            Projets
          </a>
          <a
            class="link"
            href="#contact"
            @click="closeMenu; setActiveLink($event)"
          >
            Contact
          </a>
          <a href="https://www.linkedin.com/in/laura-klerykowski/" class="icon-container">
            <img src="@/assets/icons/linkedin.svg" alt="Lien Linkedin" />
          </a>
          <button class="icon" @click="toggle">
            <img src="@/assets/icons/menu.svg" alt="Icône du menu burger" />
          </button>
        </div>
      </div>
    </nav>
  </header>
</template>
