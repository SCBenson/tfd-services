<template>
  <div class="about-draft-root">
    <!-- Header Bar -->

    <!-- Hero Section -->
    <section class="about-hero">
      <div class="about-hero-content">
        <div class="about-hero-text">
          <h1 class="">Winter <br class="mobile-break"> Maintenance <br> Specialists</h1>
          <div class="about-hero-buttons">
            <a href="tel:+353868733145">
              <v-btn 
                color="#18355b"
                size="large"
                rounded="xl" 
                class="about-hero-btn">
                  CALL US NOW
              </v-btn>
            </a>
            <v-btn size="large" rounded="xl" to="/contact" color="white" class="quote-button about-hero-btn about-hero-btn-outline">GET A QUOTE</v-btn>
          </div>
        </div>
      </div>
    </section>

    <!-- About Us Section -->
    <section class="about-section about-us-section">
      <div class="about-us-content">
        <div class="about-us-text text-custom-navy">
          <h2 class="text-custom-navy mt-2">ABOUT US</h2>
          <p>
            TFD Services provides professional salting, gritting, and snow clearing solutions throughout Galway City and County to ensure roads, car parks, industrial sites, and public areas remain safe throughout winter. With modern equipment, skilled operators, and a strong focus on reliability, we help businesses and communities stay moving during harsh weather.
          </p>
        </div>
                <div class="machinery-carousel-container">
          <div class="machinery-carousel">
            <div class="carousel-track" :style="{ transform: `translateX(-${currentSlide * 100}%)` }">
              <div 
                v-for="(img, i) in machineryImages" 
                :key="i" 
                class="carousel-slide"
              >
                <img :src="img" :alt="`Machinery image ${i + 1}`" class="carousel-image" />
              </div>
            </div>
            <button @click="prevSlide" class="carousel-btn carousel-btn-prev">‹</button>
            <button @click="nextSlide" class="carousel-btn carousel-btn-next">›</button>
            <div class="carousel-indicators">
              <span 
                v-for="(img, i) in machineryImages" 
                :key="i" 
                class="carousel-indicator"
                :class="{ active: i === currentSlide }"
                @click="currentSlide = i"
              ></span>
            </div>
          </div>
        </div>
        <!-- <img src="@/assets/images/machinery/image2.webp" alt="About Truck" class=" mt-2 about-us-img" /> -->
      </div>
    </section>

    <!-- Our Services Section -->
    <section class="about-section about-services-section">
      <h2 class="text-custom-navy">OUR SERVICES</h2>
      <div class="about-services-grid">
        <div class="about-service-card">
          <v-icon size="36" color="white">mdi-shovel</v-icon>
          <div class="about-service-title text-white">Pre-emptive <br> Salting  &amp; Gritting</div>
        </div>
        <div class="about-service-card">
          <v-icon size="36" color="white">mdi-clock-outline</v-icon>
          <div class="about-service-title text-white">24/7 Reactive <br> Call-Outs</div>
        </div>
        <div class="about-service-card">
          <v-icon size="36" color="white">mdi-truck-snowflake</v-icon>
          <div class="about-service-title text-white">Snow Clearing <br> &amp; Ploughing</div>
        </div>
        <div class="about-service-card">
          <v-icon size="36" color="white">mdi-warehouse</v-icon>
          <div class="about-service-title text-white">Salt Supply <br> &amp; Storage</div>
        </div>
      </div>
    </section>

    <!-- Safety & Quality / Why Choose Us Section -->
    <section class="about-section about-safety-why-section">
      <div class="about-safety-why-grid">
        <div class="about-safety-card">
          <h3>SAFETY &amp; QUALITY IS OUR PRIORITY</h3>
          <ul>
            <li>24/7 Weather Monitoring</li>
            <li>Fully Trained Operators</li>
            <li>Modern Fleet &amp; Equipment</li>
            <li>Health &amp; Safety Compliant</li>
          </ul>
        </div>
        <div class="about-why-card">
          <h3>WHY CHOOSE US</h3>
          <ul>
            <li>Reliable Proven Track Record</li>
            <li>Flexible Contracts &amp; Competitive Pricing</li>
            <li>Local Knowledge &amp; Rapid Response</li>
          </ul>
        </div>
      </div>
    </section>

    <!-- Call to Action -->
    <section class="about-section about-cta-section">
      <h2 class="text-custom-navy">BE WINTER READY – PROTECT YOUR SITE TODAY!</h2>
    </section>
    <!-- Testimonials Section as Carousel -->
    <section class="testimonials-section">
      <h2 class="testimonials-title text-custom-navy">Testimonials</h2>
      <v-carousel
        cycle
        hide-delimiters
        show-arrows="hover"
        interval="10000"
        height="auto"
        class="testimonials-carousel"
      >
        <v-carousel-item v-for="(testimonial, i) in testimonials" :key="i">
          <div class="testimonial-card">
            <p class="testimonial-text text-custom-navy">
              "{{ testimonial.text }}"
            </p>
            <div class="testimonial-author">
              <span class="testimonial-name text-custom-navy">{{ testimonial.name }}</span>
              <span class="testimonial-role text-custom-navy">{{ testimonial.role }}</span>
              <span class="testimonial-org">{{ testimonial.org }}</span>
              <v-img :src="testimonial.logo" height="70" width="200" class="testimonial-logo"></v-img>
            </div>
          </div>
        </v-carousel-item>
      </v-carousel>
    </section>
  </div>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue'

const currentSlide = ref(0)
let autoSlideInterval = null

const machineryImages = [
  new URL('@/assets/images/machinery/image1.webp', import.meta.url).href,
  new URL('@/assets/images/machinery/image2.webp', import.meta.url).href,
  new URL('@/assets/images/machinery/image3.webp', import.meta.url).href,
  new URL('@/assets/images/machinery/image4.webp', import.meta.url).href,
  new URL('@/assets/images/machinery/image5.webp', import.meta.url).href,
  new URL('@/assets/images/machinery/image6.webp', import.meta.url).href,
  new URL('@/assets/images/machinery/image7.webp', import.meta.url).href,
  new URL('@/assets/images/machinery/image8.webp', import.meta.url).href,
  new URL('@/assets/images/machinery/image9.webp', import.meta.url).href,
  new URL('@/assets/images/machinery/image10.webp', import.meta.url).href,
]

const nextSlide = () => {
  currentSlide.value = (currentSlide.value + 1) % machineryImages.length
}

const prevSlide = () => {
  currentSlide.value = currentSlide.value === 0 ? machineryImages.length - 1 : currentSlide.value - 1
}

const startAutoSlide = () => {
  autoSlideInterval = setInterval(nextSlide, 4000)
}

const stopAutoSlide = () => {
  if (autoSlideInterval) {
    clearInterval(autoSlideInterval)
  }
}

onMounted(() => {
  startAutoSlide()
})

onUnmounted(() => {
  stopAutoSlide()
})
const testimonials = [
  {
    text: `TFD Services provided Galway County Council with an excellent Winter Maintenance Service in gritting roads during cold weather along with vehicle hire. The works were carried out efficiently and effectively with a reliable and prompt backup services and we would highly recommend the company for similar works.`,
    name: "Fergal Fahey",
    role: "Executive Engineer",
    org: "Galway County Council",
    logo: new URL('@/assets/images/galway-county-council.webp', import.meta.url).href
  },
  {
    text: `TFD Services have provided Winter Maintenance/Salting services on behalf of Aramark Property and IDA Ireland. During this time, we have found TFD and their staff representatives to be excellent in terms of service and reaction times, always conducting themselves in a professional manner. The businesses located on the various IDA Business Parks have provided positive feedback in terms of the service levels provided by TFD.

We have no hesitation in recommending TFD Services.`,
    name: "Diane Fogarty Charles",
    role: "Property Manager",
    org: "Aramark Property",
    logo: new URL('@/assets/images/aramark-logo.webp', import.meta.url).href
  }
]
</script>

<style scoped>
.about-draft-root {
  background: #fff;
  font-family: 'Montserrat', Arial, sans-serif;
  color: #1a2330;
}

/* Hero */
.about-hero {
  background: url('@/assets/images/hero-bg.webp') center no-repeat;
  background-size: cover;
  position: relative;
  padding: 0;
  height: 60vh;
  display: flex;
  align-items: center;
  width: 100%;
}
/* Add overlay for contrast */
.about-hero::before {
  content: "";
  position: absolute;
  inset: 0;
  background: rgba(0,0,0,0.3);
  z-index: 1;
  pointer-events: none;
}
.about-hero-content {
  max-width: 1200px;
  margin: 0 auto;
  width: 100%;
  padding: 0 clamp(16px, 3vw, 48px);
  position: relative;
  z-index: 2;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 60vh;
  overflow: hidden;
}
.about-hero-text {
  font-family: "ErasDemi", "PrimaryFont", "Montserrat", Arial, sans-serif !important;
  max-width: min(600px, 80vw);
  text-align: left;
  margin: 0 auto;
  transform: translateX(max(-15%, -150px));
  max-height: 100%;
  overflow: hidden;
}
.about-hero-text h1 {
  font-size: clamp(1.8rem, 6vw, 5.5rem);
  font-weight: bold;
  margin-bottom: clamp(16px, 4vw, 48px);
  color: #18355b;
  line-height: 1.2;
  letter-spacing: clamp(0.5px, 0.2vw, 3px);
}
.mobile-break {
  display: none;
}
.about-hero-buttons {
  display: flex;
  gap: clamp(16px, 3vw, 32px);
  flex-wrap: wrap;
}
.about-hero-buttons a {
  text-decoration: none !important;
}

.about-hero-btn {
  font-weight: bold;
  font-size: clamp(1rem, 2.5vw, 1.4rem);
  border-radius: 8px;
  padding: clamp(12px, 2.5vw, 20px) clamp(24px, 4vw, 40px);
  letter-spacing: 1px;
  min-width: clamp(140px, 18vw, 180px);
  text-align: center;
  display: flex;
  align-items: center;
  justify-content: center;
  text-decoration: none;
  transition: all 0.3s ease;
  border-bottom: none;
}
.about-hero-btn:hover {
  text-decoration: none;
}
.about-hero-btn-outline {
  color: white !important;
  background-color: #18355b !important;
}
.about-hero-img {
  flex: 1 1 340px;
  max-width: 400px;
  width: 100%;
  border-radius: 8px;
  box-shadow: 0 2px 12px rgba(0,0,0,0.08);
  object-fit: contain;
}

/* About Us */
.about-section {
  max-width: 1200px;
  margin: 0 auto 32px auto;
  padding: 0 16px;
}
.about-us-content {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  gap: 32px;
}
.about-us-text {
  flex: 1 1 320px;
}
.about-us-text h2 {
  font-size: 2rem;
  font-weight: bold;
  margin-bottom: 12px;
  color: #1a2330;
  text-align: center;
}
.about-us-text p {
  text-align: justify;
}
.about-us-img {
  flex: 1 1 240px;
  max-width: 320px;
  width: 100%;
  border-radius: 8px;
  object-fit: cover;
}
.machinery-carousel-container {
  flex: 1 1 300px;
  max-width: 400px;
  width: 100%;
  margin: 0 auto;
  min-width: 200px;
}

.machinery-carousel {
  position: relative;
  width: 100%;
  height: 300px;
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 2px 12px rgba(0,0,0,0.08);
  background: #e7eef5;
  margin-top: 20px;
}

.carousel-track {
  display: flex;
  width: 100%;
  height: 100%;
  transition: transform 0.3s ease-in-out;
}

.carousel-slide {
  min-width: 100%;
  height: 100%;
}

.carousel-image {
  width: 100%;
  height: 100%;
  object-fit: contain;
  display: block;
}

.carousel-btn {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background: rgba(0,0,0,0.5);
  color: white;
  border: none;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  font-size: 20px;
  cursor: pointer;
  z-index: 10;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: background-color 0.2s;
}

.carousel-btn:hover {
  background: rgba(0,0,0,0.7);
}

.carousel-btn-prev {
  left: 10px;
}

.carousel-btn-next {
  right: 10px;
}

.carousel-indicators {
  position: absolute;
  bottom: 10px;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
  gap: 8px;
  z-index: 10;
}

.carousel-indicator {
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: rgba(255,255,255,0.5);
  cursor: pointer;
  transition: background-color 0.2s;
}

.carousel-indicator.active {
  background: white;
}

/* Services */
.about-services-section h2 {
  font-size: 2rem;
  font-weight: bold;
  margin-bottom: 24px;
  color: #1a2330;
  text-align: center;
}
.about-services-grid {
  display: flex;
  flex-wrap: wrap;
  gap: 24px;
  justify-content: center;
}
.about-service-card {
  background: #18355b;
  border-radius: 8px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.06);
  padding: 24px 16px;
  min-width: 180px;
  max-width: 220px;
  min-height: 180px;
  max-height: 180px;
  flex: 1 1 180px;
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
}
.about-service-title {
  margin-top: 12px;
  font-weight: 600;
  font-size: 1rem;
}

/* Safety & Why Choose Us */
.about-safety-why-grid {
  display: flex;
  flex-wrap: wrap;
  gap: 32px;
  justify-content: center;
}
.about-safety-card, .about-why-card {
  background: #18355b;
  color: #fff;
  border-radius: 8px;
  flex: 1 1 320px;
  min-width: 260px;
  max-width: 450px;
  height: 220px;
  padding: 10px 24px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.08);
}
.about-safety-card h3, .about-why-card h3 {
  font-size: 1.1rem;
  font-weight: bold;
  margin-bottom: 18px;
  letter-spacing: 1px;
}
.about-safety-card ul, .about-why-card ul {
  list-style: none;
  padding: 0;
  margin: 0;
  margin-bottom: 32px;
}
.about-safety-card li, .about-why-card li {
  margin-bottom: 10px;
  font-size: 1rem;
  position: relative;
  padding-left: 22px;
}
.about-safety-card li::before, .about-why-card li::before {
  content: "✔";
  color: #7edfff;
  position: absolute;
  left: 0;
  font-size: 1rem;
}

.testimonials-section {
  margin-top: 32px;
  margin-bottom: 32px;
  padding: 0 16px;
  max-width: 900px;
  margin-left: auto;
  margin-right: auto;
}
.testimonials-carousel {
  max-width: 700px;
  margin: 0 auto;
  background-color: #fff;
}
.testimonials-title {
  text-align: center;
  font-size: 2rem;
  font-weight: bold;
  color: #1a2330;
  margin-bottom: 3px;
  letter-spacing: 1px;

}
.testimonials-list {
  display: flex;
  flex-direction: column;
  gap: 28px;
}
.testimonial-card{
  background: #fff;
}

.v-carousel .testimonial-card {
  background: #fff;
  border-radius: 12px;
  padding: 0 24px 28px 24px;
  position: relative;
  margin: 10px 8px;
  min-height: 420px;
}

.v-carousel .testimonial-card::before {
  content: '';
  position: absolute;
  left: 0;
  top: 0;
  width: 3px;
  background-color: #18355b;
  height: calc(100% - 56px);
}

.v-carousel .testimonial-card::after {
  content: '';
  position: absolute;
  right: 0;
  top: 0;
  width: 3px;
  background-color: #18355b;
  height: calc(100% - 56px);
}

.v-carousel .testimonial-text {
  font-size: 0.9rem;
  color: #222;
  font-style: italic;
  margin-bottom: 18px;
  line-height: 1.6;
  text-align: justify;
}
.v-carousel .testimonial-author {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 2px;
  font-size: 1rem;
  color: #18355b;
  font-weight: 500;
  text-align: center;
}
.v-carousel .testimonial-name {
  font-weight: bold;
  color: #3777a5;
}
.v-carousel .testimonial-role {
  font-size: 0.98rem;
  color: #555;
}
.v-carousel .testimonial-org {
  font-size: 0.98rem;
  color: #888;
}
.v-carousel .testimonial-logo {
  margin-top: 12px;
  border-radius: 4px;
  object-fit: contain;
}

/* CTA */
.about-cta-section {
  background: #f5f7fa;
  text-align: center;
  padding: 32px 0;
  border-radius: 8px;
  margin-bottom: 32px;
}
.about-cta-section h2 {
  color: #18355b;
  font-size: 2.2rem;
  font-weight: 1000;
  letter-spacing: 1px;
}

/* Responsive */
@media (min-width: 1440px) {
  .about-section {
    max-width: 1600px;
    margin: 0 auto 48px auto;
    padding: 0 32px;
  }
  .about-us-content {
    gap: 64px;
  }
  .about-us-text h2 {
    font-size: 2.5rem;
    margin-bottom: 24px;
  }
  .about-us-text p {
    font-size: 1.2rem;
    line-height: 1.7;
  }
  .machinery-carousel-container {
    max-width: 500px;
  }
  .machinery-carousel {
    height: 400px;
  }
  .about-services-section h2 {
    font-size: 2.5rem;
    margin-bottom: 40px;
  }
  .about-services-grid {
    gap: 40px;
    max-width: 1400px;
    margin: 0 auto;
  }
  .about-service-card {
    min-width: 260px;
    max-width: 320px;
    min-height: 260px;
    max-height: 260px;
    padding: 40px 24px;
  }
  .about-service-title {
    font-size: 1.2rem;
    margin-top: 16px;
  }
  .about-safety-why-grid {
    gap: 64px;
    max-width: 1400px;
    margin: 0 auto;
  }
  .about-safety-card h3, .about-why-card h3 {
    font-size: 1.4rem;
    margin-bottom: 24px;
  }
  .about-safety-card li, .about-why-card li {
    font-size: 1.1rem;
    margin-bottom: 14px;
  }
  .about-safety-card, .about-why-card {
    height: 280px;
    padding: 32px 40px;
    max-width: 600px;
  }
  .about-cta-section {
    padding: 48px 0;
  }
  .about-cta-section h2 {
    font-size: 2.8rem;
  }
  .testimonials-section {
    max-width: 1200px;
    padding: 0 32px;
  }
  .testimonials-title {
    font-size: 2.5rem;
    margin-bottom: 32px;
  }
  .testimonials-carousel {
    max-width: 900px;
  }
  .v-carousel .testimonial-text {
    font-size: 1rem;
    line-height: 1.7;
  }
  .v-carousel .testimonial-author {
    font-size: 1.1rem;
  }
  .v-carousel .testimonial-card {
    padding: 0 36px 40px 36px;
    min-height: 480px;
  }
}

@media (min-width: 901px) {
  .about-hero-text {
    margin-left: 80px;
  }
}

@media (min-width: 1024px) {
  .about-hero-content {
    margin-left: 0;
    padding-left: clamp(48px, 5vw, 80px);
    justify-content: center;
  }
  .about-hero-text {
    transform: translateX(max(-20%, -200px));
    max-width: min(600px, 70vw);
  }
}

@media (min-width: 704px) and (max-width: 867px) {
  .about-safety-card, .about-why-card {
    height: 220px;
    max-height: 220px;
  }
}

@media (max-width: 1200px) {
  .about-hero-content {
    padding: 0 clamp(12px, 2vw, 32px);
  }
  .about-hero-text {
    max-width: min(600px, 85vw);
    transform: translateX(max(-15%, -120px));
  }
}

@media (max-width: 1024px) {
  .mobile-break {
    display: inline;
  }
}

@media (max-width: 900px) {
  .about-hero {
    background-size: cover;
    background-position: center center;
  }
  .about-hero-content {
    justify-content: flex-start;
    align-items: flex-end;
    text-align: left;
    padding-left: clamp(16px, 4vw, 48px);
    padding-right: clamp(16px, 4vw, 48px);
    padding-bottom: clamp(24px, 4vw, 48px);
  }
  .about-hero-text {
    text-align: left;
    max-width: min(85vw, 500px);
    transform: translateX(0);
    margin: 0;
  }
  .about-hero-text h1 {
    letter-spacing: 1px;
    text-align: left;
  }
  .about-hero-buttons {
    justify-content: flex-start;
  }
  .mobile-break {
    display: inline;
  }
  .machinery-carousel-container {
    max-width: 100%;
    margin-top: 24px;
  }
  .machinery-carousel {
    height: 250px;
  }
}

@media (max-width: 320px) {
  .about-safety-card, .about-why-card {
    height: 220px;
    max-height: 220px;
  }
}

@media (max-width: 450px) {
  .about-hero {
    background-size: cover;
    background-position: center center;
    height: 60vh;
  }
  .about-hero-content {
    padding: 0 16px 32px 16px;
    height: 60vh;
    justify-content: flex-start;
    align-items: flex-end;
  }
  .about-hero-text {
    transform: translateX(0);
    text-align: left;
    max-width: min(90vw, 400px);
    margin: 0;
  }
  .about-hero-text h1 {
    font-size: clamp(1.5rem, 5vw, 3rem);
    letter-spacing: 0.5px;
    line-height: 1.3;
    margin-bottom: clamp(12px, 3vw, 24px);
    text-align: left;
  }
  .about-hero-buttons {
    justify-content: flex-start;
  }
  .mobile-break {
    display: inline;
  }
}

@media (max-width: 300px) {
  .about-hero-content {
    padding: 0 12px;
  }
  .about-hero-text {
    text-align: left;
    max-width: 95vw;
  }
  .about-hero-text h1 {
    text-align: left;
  }
  .about-hero-buttons {
    flex-direction: column;
    align-items: flex-start;
    gap: 16px;
    justify-content: flex-start;
  }
  .about-hero-btn {
    width: auto;
    min-width: 160px;
    max-width: 200px;
  }
  .about-section {
    padding: 0 4px;
  }
  .about-services-grid {
    flex-direction: column;
    gap: 12px;
    align-items: center;
  }
  .about-service-card {
    padding: 8px 12px;
    width: 280px;
    height: 60px;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    gap: 12px;
    text-align: center;
  }
  .about-service-title {
    margin-top: 0;
    font-size: 0.9rem;
  }
  .about-safety-why-grid {
    flex-direction: column;
    gap: 16px;
    justify-content: center;
    align-items: center;
    padding: 0 20px;
  }
  .about-safety-card, .about-why-card {
    max-height: 280px;
    min-width: 200px;
    max-width: 320px;
    width: 100%;
    padding: 20px 16px;
  }
  .about-cta-section {
    padding: 12px 0;
    font-size: 0.95rem;
  }
  .machinery-carousel-container {
    width: 400px;
    max-width: 400px;
    margin: 16px auto;
  }
  .machinery-carousel {
    height: 450px;
  }
  .testimonials-section {
    padding: 0 4px;
  }
  .testimonials-carousel {
    padding: 0 4px;
  }
  .v-carousel .testimonial-card {
    padding: 0 8px 18px 8px;
    height: 480px;
  }
  .testimonials-title {
    font-size: 1.15rem;
  }
  .v-carousel .testimonial-text {
    font-size: 0.85rem;
    text-align: center;
  }
  .about-us-text {
    padding: 0 16px;
  }
  .about-us-text h2 {
    text-align: center;
    font-size: 1.3rem;
  }
  .about-us-text p {
    text-align: center;
    line-height: 1.6;
    margin-bottom: 16px;
  }
}
</style>