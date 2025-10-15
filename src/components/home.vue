<template>

    <div class="page-wrapper">
        <v-sheet class="hero-section">
      
      <v-container fluid class="pa-0 pb-0 hero-container">
        <v-row justify="start" align="center" class="hero-row">
          <v-col cols="12" sm="10" md="8" lg="6" xl="5" class="hero-col">
            <div class="hero-content">
              <h1 class="hero-title text-left text-custom-navy">
                Gritting and <br> Winter <br>Maintenance
              </h1>

              <!-- <h2 class="hero-subtitle text-white font-weight-regular">
                Winter Ready. Weather Tested. Always Accessible.
              </h2> -->
              <div class="hero-button-container">
                <v-btn
                  color="#18355b"
                  size="large"
                  rounded="xl"
                  to="/contact"
                  class="hero-button font-weight-bold mb-6 text-white text-none"
                  >CONTACT US
                </v-btn>
              </div>
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
  /* Flexible height that adapts to content and zoom levels */
  min-height: 100vh !important;
  height: auto !important;
  flex-shrink: 0;
  position: relative;
  overflow: hidden;
  display: flex;
  align-items: center;
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

.hero-container {
  min-height: 100vh;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: flex-start;
  padding-left: 2%;
  padding-top: 100px; /* Lower content by 100px */
}

.hero-row {
  min-height: 100vh;
  width: 100%;
  margin: 0;
  justify-content: flex-start !important;
}

.hero-col {
  text-align: left;
}

/* Hero Content Responsive Styling */
.hero-content {
  padding: 2rem 1rem 2.5rem 1rem;
  text-align: left;
  max-width: 100%;
}

.hero-title {
  font-family: "ErasDemi", "PrimaryFont", "Montserrat", Arial, sans-serif !important;
  font-size: 2.5rem !important;
  line-height: 1.2;
  margin-bottom: 1rem;
  font-weight: bold;
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

.hero-button-container {
  text-align: left;
}
@media (max-width: 800px) and (min-width: 600px) {
  /* .hero-title {
    font-size: 2rem !important;
  } */

  .hero-col{
    padding: 0 !important;
  }
  .hero-title {
    font-size: 2.7rem !important;
    text-align: center !important;

  }
  
  .hero-content{
    padding-left: 0px !important;
    width: 60%;
  }

  .hero-button-container {
    text-align: center !important; /* Center the button container */
 /* Match the h1's margin-left */
  }

  .hero-button{
    font-size: 1.3rem !important;
    padding: 0.5rem 1rem !important;
    min-height: 70px !important;
    line-height: 1.8 !important;
    margin-left: 0 !important; /* Remove the manual margin */
  }
}
/* Specific font-size adjustments for small screens */
@media (max-width: 600px) and (min-width: 476px) {
  /* .hero-title {
    font-size: 2rem !important;
  } */

  .hero-col{
    padding: 0 !important;
  }
  .hero-title {
    font-size: 2.4rem !important;
    text-align: center !important;

  }
  
  .hero-content{
    padding-left: 0px !important;
    width: 60%;
  }

  .hero-button-container {
    text-align: center !important; /* Center the button container */
 /* Match the h1's margin-left */
  }

  .hero-button{
    font-size: 1rem !important;
    padding: 0.5rem 1rem !important;
    min-height: 40px !important;
    line-height: 1.5 !important;
    margin-left: 0 !important; /* Remove the manual margin */
  }
}

@media (max-width: 475px) and (min-width: 411px) {
  /* .hero-title {
    font-size: 1.7rem !important;
  } */
  .hero-title {
    font-size: 2rem !important;
    text-align: center !important;

  }
  
  .hero-content{
    padding-left: 0px !important;
    width: 60%;
  }

  .hero-button-container {
    text-align: center !important; /* Center the button container */
 /* Match the h1's margin-left */
  }

  .hero-button{
    font-size: 1rem !important;
    padding: 0.5rem 1rem !important;
    min-height: 40px !important;
    line-height: 1.5 !important;
    margin-left: 0 !important; /* Remove the manual margin */
  }

}

@media (max-width: 410px) and (min-width: 371px) {
  /* .hero-title {
    font-size: 1.5rem !important;
  } */
      .hero-title {
    position: relative;
    left: -80px;
    font-size: 1.3rem !important;
    text-align: center !important;
  }
  .hero-content{
    padding-left: 0px !important;
  }
}

@media (max-width: 370px) and (min-width: 341px) {
  /* .hero-title {
    font-size: 1.4rem !important;
  } */
   .hero-title {
    position: relative;
    left: -80px;
    font-size: 1.3rem !important;
    text-align: center !important;
  }
  .hero-content{
    padding-left: 0px !important;
  }
  
}

@media (max-width: 340px) and (min-width: 320px) {
  .hero-title {
    position: relative;
    left: -80px;
    font-size: 1.3rem !important;
    text-align: center !important;
  }
  .hero-content{
    padding-left: 0px !important;
  }
  .hero-button-container{
    position: relative;
    left: -15px;
  }

  .hero-button{
    font-size: 1rem !important;
    padding: 0.5rem 1rem !important;
    min-height: 40px !important;
    line-height: 1.5 !important;
  }

}

/* Mobile-only styles */
@media (max-width: 767px) {
  .hero-container {
    align-items: center !important;
    padding: 180px 8px 40px 8px !important;
    min-height: 100vh;
    padding-left: 8px !important;
  }
  
  .hero-row {
    align-items: center !important;
    min-height: auto;
    justify-content: flex-start !important;
  }
  
  .hero-col {
    text-align: left;
  }
  
  .hero-button-container {
    text-align: left;
  }
}

/* Tablet and larger */
/* @media (min-width: 768px) {
  .hero-container {
    padding-left: 4% !important;
    padding-top: 100px !important;
  }
  
  .hero-content {
    padding: 3rem 2rem 2.5rem 2rem;
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
} */

/* Desktop */
@media (min-width: 1024px) {
  .hero-container {
    padding-left: 3% !important;
  }
  
  .hero-content {
    padding: 4rem 2rem 2.5rem 2rem;
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
  .hero-container {
    padding-left: 2% !important;
  }
  
  .hero-content {
    padding: 5rem 2rem 2.5rem 2rem;
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
  .hero-container {
    padding-left: 1.5% !important;
  }
  
  .hero-content {
    padding: 6rem 2rem 2.5rem 2rem;
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

/* High zoom level protection */
@media (max-height: 600px) {
  .hero-section {
    min-height: auto !important;
    height: auto !important;
    padding: 40px 0;
  }
  
  .hero-container {
    min-height: auto !important;
    padding: 40px 0 !important;
  }
  
  .hero-row {
    min-height: auto !important;
  }
  
  .hero-content {
    padding: 2rem 1rem !important;
  }
  
  .hero-title {
    font-size: clamp(2rem, 8vw, 4rem) !important;
    margin-bottom: 1rem !important;
  }
  
  .hero-subtitle {
    font-size: clamp(1rem, 4vw, 1.5rem) !important;
    margin-bottom: 1.5rem !important;
  }
  
  .hero-button {
    font-size: clamp(0.875rem, 3vw, 1rem) !important;
    padding: 0.75rem 2rem !important;
    min-height: 44px !important;
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