<template>

    <div class="page-wrapper">
        <v-sheet class="hero-section">
      <v-container fluid class="pa-0 text-center fill-height pb-0">
        <v-row>
          <v-col cols="12">
            <h1 class="mt-12 text-custom-blue font-weight-bold">
              TFD Services
            </h1>

            <h2 class="mx-2 text-white font-weight-regular">
              Winter Ready. Weather Tested. Always Accessible.
            </h2>
            <v-btn
              color="custom-blue"
              size="large"
              rounded="xl"
              class="font-weight-bold mt-16 text-white"
              >Contact Us</v-btn
            >
          </v-col>
        </v-row>
      </v-container>
    </v-sheet>
        <v-sheet class="mx-0 bg-custom-white">
      <v-container class="services-container d-flex align-center justify-center pt-0">
        <v-row class="mx-4 mx-sm-6 mx-md-12" style="max-width: 1200px;">
          <v-col align="center" cols="12" class="py-6"><h1>What we offer</h1></v-col>
          <v-col align="center" cols="12" md="3" class="px-4"><v-card class="home-card card-slide-up">
            <v-img src="@/assets/home/briefcase.webp" alt="briefcase icon representing tailored services" class="icons"></v-img><v-card-title class="text-no-wrap title-height">Example 1</v-card-title><p class="card-text">Description 1</p></v-card></v-col>
          <v-col align="center" cols="12" md="3" class="px-4"><v-card class="home-card card-slide-up">
            <v-img src="@/assets/home/interactive.webp" alt="interactive icon representing online learning" class="icons"></v-img><v-card-title class="text-no-wrap title-height">Example 2</v-card-title><p class="card-text">Description 2</p></v-card></v-col>
          <v-col align="center" cols="12" md="3" class="px-4"><v-card class="home-card card-slide-up">
            <v-img src="@/assets/home/communication.webp" alt="Communication icon representing coversation focused learning" class="icons"></v-img><v-card-title class="text-no-wrap title-height">Example 3</v-card-title><p class="card-text">Description 3</p></v-card></v-col>
          <v-col align="center" cols="12" md="3" class="px-4"><v-card class="home-card card-slide-up">
            <v-img src="@/assets/home/rocket.webp" alt="Rocket icon representing advanced comprehension language education" class="icons"></v-img><v-card-title class="text-no-wrap title-height">Example 4</v-card-title><p class="card-text">Description 4</p></v-card></v-col>
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
  background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
    url("@/assets/images/tfd-logo-full.webp");
  background-size: cover;
  background-position: center;
  /* CRITICAL: Fixed height to prevent any layout shift */
  height: 100vh !important;
  min-height: 100vh !important;
  max-height: 100vh !important;
  flex-shrink: 0;
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