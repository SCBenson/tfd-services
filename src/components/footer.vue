<template>
  <v-footer color="#030E44" class="pa-6">
    <v-container>
      <v-row class="align-center">
        <!-- Navigation Links Column -->
        <v-col cols="12" md="6" lg="8" xl="9" class="text-center text-md-start">
          <div class="nav-links-container">
            <router-link to="/" class="no-underline text-white footer-link">Home</router-link>
            <router-link to="/about" class="no-underline text-white footer-link">About</router-link>
            <router-link to="/contact" class="no-underline text-white footer-link">Contact</router-link>
          </div>
        </v-col>
        
        <!-- Company Name and Copyright -->
        <v-col cols="12" md="6" lg="4" xl="3" class="text-center text-md-end">
          <div class="text-white company-name">
            TFD Services &copy; {{ currentYear }}
          </div>
        </v-col>
      </v-row>
    </v-container>
  </v-footer>
</template>

<script setup>
const currentYear = new Date().getFullYear()
</script>

<style scoped>
.no-underline {
  text-decoration: none;
}

.nav-links-container {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.footer-link {
  transition: all 0.3s ease;
  font-size: 1rem;
  margin: 8px 0;
}

.footer-link:hover {
  text-decoration: underline;
  opacity: 0.8;
}

.company-name {
  font-size: 1rem;
  font-weight: 500;
}

/* Medium screens and up - horizontal layout */
@media (min-width: 768px) {
  .nav-links-container {
    flex-direction: row;
    justify-content: flex-start;
  }
  
  .footer-link {
    margin: 0 16px 0 0;
  }
}

/* Laptop styles (1024px and up) */
@media (min-width: 1024px) {
  .footer-link {
    font-size: 1.1rem;
    margin: 0 32px 0 0;
  }
  
  .company-name {
    font-size: 1.1rem;
  }
}

/* Large monitor styles (1440px and up) */
@media (min-width: 1440px) {
  .footer-link {
    font-size: 1.2rem;
    margin: 0 48px 0 0;
  }
  
  .company-name {
    font-size: 1.2rem;
  }
}

/* Extra large monitor styles (1920px and up) */
@media (min-width: 1920px) {
  .footer-link {
    font-size: 1.3rem;
    margin: 0 64px 0 0;
  }
  
  .company-name {
    font-size: 1.3rem;
  }
}
</style>