<template>
    <v-app-bar
    height="56"
    class="px-2 px-sm-8"
    color="#030E44"
    scroll-behavior="hide"
    scroll-threshold="100"
    app
    >
    <template v-slot:prepend>
    <img :src="logoUrl" height="100" width="100" alt="Company Logo" />

    <v-toolbar-title
    class="nav-title font-weight-bold text-body-1"
    >
    <router-link to="/" class="no-underline text-white">TFD Services</router-link>
    </v-toolbar-title>
    </template>

    <v-spacer></v-spacer>

    <v-container class="d-md-flex justify-end align-center font-weight-bold gap-4">
        <router-link to="/" class="no-underline text-white mx-2">Home</router-link>
        <router-link to="/about" class="no-underline text-white mx-2">About</router-link>
        <router-link to="/contact" class="no-underline text-white mx-2">Contact</router-link>
    </v-container>

    <!-- <template v-slot:append>

      <v-app-bar-nav-icon
        class="d-flex d-md-none"
        variant="text"
        color="white"
        @click.stop="drawer = !drawer"
      >
      </v-app-bar-nav-icon>
    </template> -->
    

    </v-app-bar>



    <v-navigation-drawer v-model="drawer" location="right" app temporary class="overflow-x-hidden" width="200">
    <v-list>
      <!-- For items WITHOUT sublinks -->
      <v-list-item to="/">
        Home
      </v-list-item>
      <v-list-item to="/about">
        About
      </v-list-item>
      <v-list-item to="/contact">
        Contact
      </v-list-item>
      <!-- For items WITH sublinks -->
    </v-list>
  </v-navigation-drawer>
</template>

<script setup>
import logoUrl from '@/assets/images/tfd-logo_bg-edited.webp';
import { ref } from 'vue';
const drawer = ref(false);
</script>

<style scoped>
.no-underline {
  text-decoration: none;
}
</style>