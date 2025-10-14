<template>
    <v-app-bar
    height="56"
    class="px-2 px-sm-8 header-bar"
    color="#18355b"
    scroll-behavior="hide"
    scroll-threshold="100"
    app
    >
    <template v-slot:prepend>
    <img class="company-logo" :src="logoUrl" alt="Company Logo" />

    <v-toolbar-title
    class="nav-title font-weight-bold text-body-1"
    >
    <router-link to="/" class="no-underline text-white nav-title font-weight-bold">TFD Services</router-link>
    </v-toolbar-title>
    </template>

    <v-spacer></v-spacer>

    <div class="d-flex justify-end align-center font-weight-bold nav-links">
        <router-link to="/" class="no-underline text-white nav-link">Home</router-link>
        <router-link to="/about" class="no-underline text-white nav-link">About</router-link>
        <router-link to="/contact" class="no-underline text-white nav-link">Contact</router-link>
    </div>
    

    </v-app-bar>




</template>

<script setup>
import logoUrl from '@/assets/images/tfd-logo_bg-edited.webp';
import { ref } from 'vue';
const drawer = ref(false);
</script>

<style scoped>
.header-bar {
  overflow: visible !important;
  position: relative;
}
.no-underline {
  text-decoration: none;
}

.company-logo {
  position: fixed;
  left: 16px;
  top: 0%;
  z-index: 9999;
  height: 80px;
  width: 80px;
  filter: drop-shadow(0 4px 8px rgba(0, 0, 0, 0.3));
}
/* Navigation Links Styling */
.nav-links {
  gap: clamp(6px, 0.8vw, 12px);
  flex-shrink: 1;
  min-width: 0;
}

.nav-link {
  font-size: clamp(0.8rem, 1.2vw, 1.3rem);
  padding: clamp(5px, 1vw, 8px) clamp(8px, 1.5vw, 12px);
  transition: all 0.3s ease;
  border-radius: 4px;
  white-space: nowrap;
  flex-shrink: 1;
  min-width: 0;
}

.nav-link:hover {
  background-color: rgba(255, 255, 255, 0.1);
  transform: translateY(-1px);
}

/* Large Desktop Spacing */
@media (min-width: 1200px) {
  .nav-links {
    gap: clamp(16px, 2vw, 24px);
  }
  
  .nav-link {
    font-size: clamp(1.1rem, 1.3vw, 1.4rem);
    padding: clamp(10px, 1.2vw, 18px) clamp(16px, 2vw, 28px);
  }
}

/* Extra Large Desktop */
@media (min-width: 1440px) {
  .nav-links {
    gap: clamp(4px, 2.5vw, 8px);
  }
  
  .nav-link {
    font-size: clamp(1.2rem, 1.4vw, 1.5rem);
    padding: clamp(12px, 1.4vw, 20px) clamp(20px, 2.5vw, 32px);
  }
}

/* Nav Title Responsive Styling */
.nav-title {
  font-size: clamp(0.8rem, 1.2vw, 1.3rem);
  transition: all 0.3s ease;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  padding: clamp(5px, 1vw, 16px) clamp(8px, 1.5vw, 24px);
  display: flex;
  align-items: center;
}

/* Mobile Specific Styles */
@media (max-width: 480px) {
  .nav-title {
    font-size: 0.85rem;
    margin-left: 30px;
    padding: 5px 8px;
  }
  
  .company-logo {
    height: 75px !important;
    width: 75px !important;
    left: 4px !important;
    top: 0px !important;
  }
  
  .header-bar {
    padding-left: 2px !important;
    padding-right: 2px !important;
  }
  
  .nav-links {
    gap: 6px;
    margin-right: 4px;
  }
  
  .nav-link {
    font-size: 0.8rem;
    padding: 5px 8px;
  }
}

@media (max-width: 360px) {
  .nav-title {
    font-size: 0.8rem;
    margin-left: 10px;
    padding: 4px 6px;
  }
  
  .company-logo {
    height: 75px !important;
    width: 75px !important;
    left: 4px !important;
    top: 0px !important;
  }
  
  .nav-link {
    font-size: 0.75rem;
    padding: 4px 6px;
  }
}

@media (min-width: 312px){
  .nav-title {
    margin-left: 30px;
  }
}

@media (min-width: 500px){
  .nav-title {
    margin-left: 35px;
  }
}

@media (min-width: 600px){
  .nav-title {
    margin-left: 25px;
    font-size: 1rem;
  }
}

/* Medium screens - 1200px and below */
@media (max-width: 1200px) and (min-width: 900px) {
  .nav-title {
    margin-left: 15px;
    font-size:1rem;
  }
}

@media (max-width: 900px) and (min-width: 750px) {
  .nav-title {
    margin-left: 20px;
    font-size:1rem;
  }
}

@media (max-width: 750) and (min-width: 601px) {
  .nav-title {
    margin-left: 35px;
    font-size:1rem;
  }
}

/* Large Desktop */
@media (min-width: 1200px) {
  .nav-title {
    margin-left: 15px;
    font-size: clamp(1.1rem, 1.3vw, 1.4rem);
    padding: clamp(10px, 1.2vw, 18px) clamp(16px, 2vw, 28px);
  }
}

/* Extra Large Desktop */
@media (min-width: 1440px) {
  .nav-title {
    margin-left: 15px;
    font-size: clamp(1.2rem, 1.4vw, 1.5rem);
    padding: clamp(12px, 1.4vw, 20px) clamp(20px, 2.5vw, 32px);
  }
}

/* Ensure header content doesn't overflow */
@media (max-width: 768px) {
  .header-bar .v-toolbar-title {
    max-width: calc(100vw - 180px);
  }
}

</style>