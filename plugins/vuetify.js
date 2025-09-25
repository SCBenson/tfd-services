/**
 * plugins/vuetify.js
 *
 * Framework documentation: https://vuetifyjs.com`
 */

// Styles
import "@mdi/font/css/materialdesignicons.css";
import "vuetify/styles";

// Composables
import { createVuetify } from "vuetify";

// Components
import * as components from "vuetify/components";
import * as directives from "vuetify/directives";

const mainTheme = {
  dark: false,
  colors: {
    background: "#e5e5e5",
    primary: "#FFFFFF",
    "custom-orange": "#f4b754",
    "custom-blue": "#87CEEB",
    "custom-white": "#e5e5e5",
    "custom-navy": "#030E44",
  },
};

// https://vuetifyjs.com/en/introduction/why-vuetify/#feature-guides
export default createVuetify({
  components,
  directives,
  theme: {
    defaultTheme: "mainTheme",
    themes: {
      mainTheme,
    },
  },
});
