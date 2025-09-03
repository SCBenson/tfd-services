<template>
    <v-container class="text-center px-8">
        <h1>About Us</h1>
        
        <!-- Machinery Carousel -->
        <v-row class="mt-2 mb-4 justify-center">
            <v-col cols="12" sm="10" md="8" lg="6" xl="5">
                <v-card class="machinery-carousel-card" elevation="4">
                    <v-card-title class="pb-4">
                        <h2 class="text-h5 text-wrap">Our Winter Maintenance Equipment</h2>
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
        
        <v-row>
            <v-col>
                <v-card>
                    <v-card-title>Our Expertise</v-card-title>
                    <v-card-text>With hundreds of accredited winter maintenance 
                        professionals on standby, we deliver both proactive and 
                        reactive services tailored to your specific needs. 
                        Our experienced teams utilise cutting-edge weather 
                        forecasting technology and modern equipment to ensure 
                        optimal timing and effectiveness of our interventions.
                    </v-card-text>
                </v-card>
            </v-col>
            
            <v-col>
                <v-card>
                    <v-card-title>Winter Maintenance Planning</v-card-title>
                    <v-card-text>Comprehensive site assessments and customised 
                        maintenance strategies to keep your business running 
                        smoothly throughout winter.
                    </v-card-text>
                </v-card>
            </v-col>
            <v-col>
                <v-card>
                    <v-card-title>Gritting & Salt Spreading</v-card-title>
                    <v-card-text>Professional application of de-icing materials 
                        using specialised machinery for roads, car parks, and 
                        pedestrian areas.
                    </v-card-text>
                </v-card>
            </v-col>
                        <v-col>
                <v-card>
                    <v-card-title>Snow Clearance & Ploughing</v-card-title>
                    <v-card-text>Rapid deployment of snow removal teams with 
                        dedicated ploughing equipment for everything from large 
                        retail complexes to pedestrian walkways.
                    </v-card-text>
                </v-card>
            </v-col>
                        <v-col>
                <v-card>
                    <v-card-title>24-Hour Response</v-card-title>
                    <v-card-text>Round-the-clock monitoring and deployment 
                        ensuring immediate response when weather conditions 
                        demand action.
                    </v-card-text>
                </v-card>
            </v-col>
                        <v-col>
                <v-card>
                    <v-card-title>Our Commitment</v-card-title>
                    <v-card-text>Safety drives everything we do. Our fully trained 
                        professionals use appropriate thermal high-visibility workwear 
                        and operate modern, well-maintained equipment. We understand 
                        that winter weather doesn't follow business hours, which is 
                        why our teams are ready to deploy at any time to maintain safe 
                        access for your staff, visitors, and customers.
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