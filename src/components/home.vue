<template>

    <div class="page-wrapper">
        <v-sheet class="hero-section">
      
      <v-container fluid class="pa-0 text-center fill-height pb-0">
        <v-row ustify="center" align="end" class="fill-height">
          <v-col cols="12" sm="10" md="8" lg="6" xl="5">
            <div class="hero-content">
              <h1 class="hero-title text-left text-white font-weight-bold">
                GRITTING<br> &<br> <span class="nowrap">WINTER MAINTENANCE</span>
              </h1>

              <!-- <h2 class="hero-subtitle text-white font-weight-regular">
                Winter Ready. Weather Tested. Always Accessible.
              </h2> -->
              <v-btn
                color="#030E44"
                size="large"
                rounded="xl"
                to="/contact"
                class="hero-button font-weight-bold mb-6 text-white"
                >Contact Us
              </v-btn>
            </div>
          </v-col>
        </v-row>
      </v-container>
    </v-sheet>
    </div>

</template>

<style scoped>

.page-wrapper {
  min-height: 100vh;
  display: flex;
  flex-direction: column;
}
.hero-section {
  background-color:black;
  background-size: cover;
  background-position: center;
  background-image: url('@/assets/images/hero-bg.webp');
  /* CRITICAL: Fixed height to prevent any layout shift */
  height: 100vh !important;
  min-height: 100vh !important;
  max-height: 100vh !important;
  flex-shrink: 0;
  position: relative;
  overflow: hidden;
}

/* Add this for the overlay */
.hero-section::before {
  content: "";
  position: absolute;
  inset: 0;
  background: rgba(0, 0, 0, 0.20); /* Adjust opacity as needed */
  z-index: 1;
  pointer-events: none;
}

/* Ensure content is above snow */
.v-container {
  position: relative;
  z-index: 2;
}

/* Hero Content Responsive Styling */
.hero-content {
  padding: 2rem 1rem;
}

.hero-title {
  font-size: 2.5rem !important;
  line-height: 1.2;
  margin-bottom: 1rem;
}

.hero-subtitle {
  font-size: 1.125rem !important;
  line-height: 1.4;
  margin-bottom: 2rem;
  opacity: 0.9;
}

.hero-button {
  font-size: 1rem !important;
  padding: 0.75rem 2rem !important;
  letter-spacing: 0.5px;
  height: auto !important;
  min-height: 48px !important;
  line-height: 1.4 !important;
  display: inline-flex !important;
  align-items: center !important;
  justify-content: center !important;
}

/* Tablet and larger */
@media (min-width: 768px) {
  .hero-content {
    padding: 3rem 2rem;
  }
  
  .hero-title {
    font-size: 3.5rem !important;
    margin-bottom: 1.5rem;
  }
  
  .hero-subtitle {
    font-size: 1.5rem !important;
    margin-bottom: 3rem;
  }
  
  .hero-button {
    font-size: 1.125rem !important;
    padding: 1rem 3rem !important;
    min-height: 56px !important;
    line-height: 1.4 !important;
  }
}

/* Desktop */
@media (min-width: 1024px) {
  .hero-content {
    padding: 4rem 2rem;
  }
  
  .hero-title {
    font-size: 4.5rem !important;
    margin-bottom: 2rem;
  }
  
  .hero-subtitle {
    font-size: 1.75rem !important;
    margin-bottom: 3rem;
  }
}

/* Large Desktop */
@media (min-width: 1440px) {
  .hero-content {
    padding: 5rem 2rem;
  }
  
  .hero-title {
    font-size: 5.5rem !important;
    margin-bottom: 2rem;
  }
  
  .hero-subtitle {
    font-size: 2rem !important;
    margin-bottom: 4rem;
  }
  
  .hero-button {
    font-size: 1.25rem !important;
    padding: 1.25rem 4rem !important;
    min-height: 64px !important;
    line-height: 1.4 !important;
  }
}

/* Extra Large Desktop */
@media (min-width: 1920px) {
  .hero-content {
    padding: 6rem 2rem;
  }
  
  .hero-title {
    font-size: 6.5rem !important;
    margin-bottom: 2.5rem;
  }
  
  .hero-subtitle {
    font-size: 2.25rem !important;
    margin-bottom: 4rem;
  }
}

.services-container{
/* Reserve exact space */
height: auto;
min-height: 600px;
width: 100% !important;
}

@media (min-width: 960px) {
  .services-container {
    height: 600px;
    min-height: 600px;
  }
}

</style>