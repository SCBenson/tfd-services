<template>
    <v-container class="text-center px-8" style="max-width: 1200px;">
        <h1 class="text-h3 mb-6">About Us</h1>
        
        <!-- Machinery Carousel -->
        <v-row class="mt-2 mb-4 justify-center">
            <v-col cols="12" sm="10" md="8" lg="6" xl="5">
                <v-card class="machinery-carousel-card" elevation="4">
                    <v-card-title class="pb-4">
                        <h2 class="text-h4 font-weight-bold text-wrap">Our Winter Maintenance Equipment</h2>
                    </v-card-title>
                    <v-carousel
                        v-model="currentSlide"
                        :cycle="true"
                        interval="6000"
                        hide-delimiters
                        show-arrows="hover"
                        class="machinery-carousel"
                        height="400"
                    >
                        <v-carousel-item
                            v-for="(image, index) in machineryImages"
                            :key="index"
                            class="carousel-item"
                        >
                            <v-img
                                :src="image.src"
                                :alt="image.alt"
                                contain
                                class="carousel-image"
                                height="100%"
                            ></v-img>
                        </v-carousel-item>
                    </v-carousel>
                </v-card>
            </v-col>
        </v-row>
        
        <!-- Company Overview -->
        <v-row class="mb-6">
            <v-col cols="12">
                <v-card class="pa-6" elevation="2">
                    <v-card-text class="text-center">
                        <h2 class="text-h4 mb-4 font-weight-bold">Professional Winter Maintenance Services</h2>
                        <p class="text-body-1 text-grey-darken-1 mb-0">
                            Our winter services help clients deal with adverse weather conditions by maintaining access to their property, 
                            keeping staff and visitors safe and ensuring business continuity throughout the winter months.
                        </p>
                    </v-card-text>
                </v-card>
            </v-col>
        </v-row>

        <!-- Services Grid -->
        <v-row class="mb-6">
            <v-col cols="12" md="6" lg="4">
                <v-card class="h-100" elevation="3">
                    <v-card-title class="bg-primary text-white text-h6">
                        <v-icon class="mr-2">mdi-truck</v-icon>
                        Gritting & Salt Spreading
                    </v-card-title>
                    <v-card-text class="pa-4">
                        <p class="text-body-1">Professional proactive and reactive gritting services for car parks, roads, and pathways. 
                        We apply salt before frost, ice, or snowfall forms using predictive weather forecasting to 
                        prevent bonding with road surfaces.</p>
                    </v-card-text>
                </v-card>
            </v-col>
            
            <v-col cols="12" md="6" lg="4">
                <v-card class="h-100" elevation="3">
                    <v-card-title class="bg-primary text-white text-h6">
                        <v-icon class="mr-2">mdi-snowflake</v-icon>
                        Snow Clearance & Ploughing
                    </v-card-title>
                    <v-card-text class="pa-4">
                        <p class="text-body-1">Rapid deployment of snow removal teams with dedicated ploughing equipment for everything from 
                        large retail complexes to pedestrian walkways. Our teams coordinate on-site attendance, 
                        often working overnight when snowfall reaches 5cm depth.</p>
                    </v-card-text>
                </v-card>
            </v-col>
            
            <v-col cols="12" md="6" lg="4">
                <v-card class="h-100" elevation="3">
                    <v-card-title class="bg-primary text-white text-h6">
                        <v-icon class="mr-2">mdi-clock-outline</v-icon>
                        24-Hour Response
                    </v-card-title>
                    <v-card-text class="pa-4">
                        <p class="text-body-1">Round-the-clock monitoring and deployment across Galway city and county. 
                        We use the most up-to-date weather reporting to monitor conditions and deploy 
                        our teams to provide safe access for staff, visitors, and customers.</p>
                    </v-card-text>
                </v-card>
            </v-col>
        </v-row>

        <!-- Key Features -->
        <v-row class="mb-6">
            <v-col cols="12" md="6">
                <v-card class="h-100" elevation="2">
                    <v-card-title class="text-h6">
                        <v-icon class="mr-2 text-orange">mdi-shield-check</v-icon>
                        Our Expertise
                    </v-card-title>
                    <v-card-text class="pa-4">
                        <p class="text-body-1">With hundreds of accredited winter maintenance professionals on standby, we deliver both 
                        proactive and reactive services tailored to your specific needs. Our experienced teams utilise 
                        cutting-edge weather forecasting technology and modern equipment to ensure optimal timing and 
                        effectiveness of our interventions.</p>
                    </v-card-text>
                </v-card>
            </v-col>
            
            <v-col cols="12" md="6">
                <v-card class="h-100" elevation="2">
                    <v-card-title class="text-h6">
                        <v-icon class="mr-2 text-orange">mdi-safety-goggles</v-icon>
                        Safety First
                    </v-card-title>
                    <v-card-text class="pa-4">
                        <p class="text-body-1">Health and safety is our priority. Our fully trained professionals use appropriate thermal 
                        high-visibility workwear and operate modern, well-maintained equipment. We understand that 
                        winter weather doesn't follow business hours, which is why our teams are ready to deploy at 
                        any time to maintain safe access.</p>
                    </v-card-text>
                </v-card>
            </v-col>
        </v-row>

        <!-- Coverage Area -->
        <v-row class="mb-6">
            <v-col cols="12">
                <v-card class="text-center pa-6" elevation="2">
                    <v-card-title class="text-h6 mb-4">
                        <v-icon class="mr-2 text-primary">mdi-map-marker-radius</v-icon>
                        Service Coverage
                    </v-card-title>
                    <v-card-text>
                        <p class="text-body-1 mb-0">
                            Local teams operate across <strong>Galway city and county</strong> with the capability to deploy 
                            anywhere across the country. From large retail car parks to pedestrian footpaths and walkways, 
                            we provide comprehensive winter maintenance solutions for all facility types.
                        </p>
                    </v-card-text>
                </v-card>
            </v-col>
        </v-row>
    </v-container>

</template>

<script setup>
import { ref } from 'vue'

const currentSlide = ref(0)

// Import all machinery images
const machineryImages = ref([
    { src: new URL('@/assets/images/machinery/image1.webp', import.meta.url).href, alt: 'Winter maintenance equipment 1' },
    { src: new URL('@/assets/images/machinery/image2.webp', import.meta.url).href, alt: 'Winter maintenance equipment 2' },
    { src: new URL('@/assets/images/machinery/image3.webp', import.meta.url).href, alt: 'Winter maintenance equipment 3' },
    { src: new URL('@/assets/images/machinery/image4.webp', import.meta.url).href, alt: 'Winter maintenance equipment 4' },
    { src: new URL('@/assets/images/machinery/image5.webp', import.meta.url).href, alt: 'Winter maintenance equipment 5' },
    { src: new URL('@/assets/images/machinery/image6.webp', import.meta.url).href, alt: 'Winter maintenance equipment 6' },
    { src: new URL('@/assets/images/machinery/image7.webp', import.meta.url).href, alt: 'Winter maintenance equipment 7' },
    { src: new URL('@/assets/images/machinery/image8.webp', import.meta.url).href, alt: 'Winter maintenance equipment 8' },
    { src: new URL('@/assets/images/machinery/image9.webp', import.meta.url).href, alt: 'Winter maintenance equipment 9' },
    { src: new URL('@/assets/images/machinery/image10.webp', import.meta.url).href, alt: 'Winter maintenance equipment 10' },
    { src: new URL('@/assets/images/machinery/image11.webp', import.meta.url).href, alt: 'Winter maintenance equipment 11' },
    { src: new URL('@/assets/images/machinery/image12.webp', import.meta.url).href, alt: 'Winter maintenance equipment 12' },
    { src: new URL('@/assets/images/machinery/image13.webp', import.meta.url).href, alt: 'Winter maintenance equipment 13' }
])
</script>

<style scoped>
.machinery-carousel-card {
    margin-bottom: 32px;
}

.machinery-carousel {
    border-radius: 8px;
    overflow: hidden;
}

.carousel-item {
    border-radius: 8px;
    background-color: #f5f5f5;
    display: flex;
    align-items: center;
    justify-content: center;
}

.carousel-image {
    object-fit: contain !important;
}

/* Mobile responsiveness */
@media (max-width: 600px) {
    .machinery-carousel {
        height: 250px !important;
    }
}

/* Tablet responsiveness */
@media (min-width: 601px) and (max-width: 960px) {
    .machinery-carousel {
        height: 350px !important;
    }
}

/* Desktop and larger */
@media (min-width: 961px) {
    .machinery-carousel {
        height: 450px !important;
    }
}

/* Large screens */
@media (min-width: 1440px) {
    .machinery-carousel {
        height: 550px !important;
    }
}
</style>