<template>
  <div class="about-draft-root">
    <!-- Header Bar -->

    <!-- Hero Section -->
    <section class="about-hero">
      <div class="about-hero-content">
        <div class="about-hero-text">
          <h1 class=" text-white">WINTER MAINTENANCE <br> SPECIALISTS</h1>
          <div class="about-hero-buttons">
            <a href="tel:+353868733145">
            <v-btn color="blue" class="about-hero-btn">CALL US NOW</v-btn></a>
            <v-btn to="/contact" color="white" class="about-hero-btn about-hero-btn-outline">GET A QUOTE</v-btn>
          </div>
        </div>
      </div>
    </section>

    <!-- About Us Section -->
    <section class="about-section about-us-section">
      <div class="about-us-content">
        <div class="about-us-text">
          <h2>ABOUT US</h2>
          <p>
            TFD Services provides professional salting, gritting, and snow clearing solutions throughout Galway City and county to ensure roads, car parks, industrial sites, and public areas remain safe throughout winter. With modern equipment, skilled operators, and a strong focus on reliability, we help businesses and communities stay moving during harsh weather.
          </p>
        </div>
        <div class="about-us-carousel mt-2">
          <v-carousel
            cycle
            height="220"
            hide-delimiters
            show-arrows="hover"
            interval="4000"
            class="machinery-carousel"
          >
            <v-carousel-item
              v-for="(img, i) in machineryImages"
              :key="i"
            >
              <v-img
                :src="img"
                :alt="`Machinery image ${i + 1}`"
                class="carousel-img"
                cover
              />
            </v-carousel-item>
          </v-carousel>
        </div>
        <!-- <img src="@/assets/images/machinery/image2.webp" alt="About Truck" class=" mt-2 about-us-img" /> -->
      </div>
    </section>

    <!-- Our Services Section -->
    <section class="about-section about-services-section">
      <h2>OUR SERVICES</h2>
      <div class="about-services-grid">
        <div class="about-service-card">
          <v-icon size="36" color="white">mdi-shovel</v-icon>
          <div class="about-service-title text-white">Pre-emptive Salting &amp; Gritting</div>
        </div>
        <div class="about-service-card">
          <v-icon size="36" color="white">mdi-clock-outline</v-icon>
          <div class="about-service-title text-white">24/7 Reactive Call-Outs</div>
        </div>
        <div class="about-service-card">
          <v-icon size="36" color="white">mdi-truck-snowflake</v-icon>
          <div class="about-service-title text-white">Snow Clearing &amp; Ploughing</div>
        </div>
        <div class="about-service-card">
          <v-icon size="36" color="white">mdi-warehouse</v-icon>
          <div class="about-service-title text-white">Salt Supply &amp; Storage</div>
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
      <h2>BE WINTER READY – PROTECT YOUR SITE TODAY!</h2>
    </section>
    <!-- Testimonials Section as Carousel -->
    <section class="about-section testimonials-section">
      <h2 class="testimonials-title">Testimonials</h2>
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
            <p class="testimonial-text">
              "{{ testimonial.text }}"
            </p>
            <div class="testimonial-author">
              <span class="testimonial-name">{{ testimonial.name }}</span>
              <span class="testimonial-role">{{ testimonial.role }}</span>
              <span class="testimonial-org">{{ testimonial.org }}</span>
            </div>
          </div>
        </v-carousel-item>
      </v-carousel>
    </section>
  </div>
</template>

<script setup>
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
const testimonials = [
  {
    text: `TFD Services provided Galway County Council with an excellent Winter Maintenance Service in gritting roads during cold weather along with vehicle hire. The works were carried out efficiently and effectively with a reliable and prompt backup services and we would highly recommend the company for similar works.`,
    name: "Fergal Fahey",
    role: "Executive Engineer",
    org: "Galway County Council"
  },
  {
    text: `TFD Services have provided Winter Maintenance/Salting services on behalf of Aramark Property and IDA Ireland. During this time, we have found TFD and their staff representatives to be excellent in terms of service and reaction times, always conducting themselves in a professional manner. The businesses located on the various IDA Business Parks have provided positive feedback in terms of the service levels provided by TFD.

We have no hesitation in recommending TFD Services.`,
    name: "Diane Fogarty Charles",
    role: "Property Manager",
    org: "Aramark Property"
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
  background: url('@/assets/images/hero-bg.webp') center center/cover no-repeat;
  position: relative;
  padding: 0;
  min-height: 100vh;
  display: flex;
  align-items: center;
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
  justify-content: flex-start;
  align-items: center;
  min-height: 100vh;
}
.about-hero-text {
  max-width: 600px;
  text-align: left;
}
.about-hero-text h1 {
  font-size: clamp(2.5rem, 6vw, 5.5rem);
  font-weight: bold;
  margin-bottom: clamp(24px, 4vw, 48px);
  color: white;
  line-height: 1.1;
  letter-spacing: clamp(1px, 0.2vw, 3px);
  text-shadow: 3px 3px 12px rgba(0,0,0,0.8);
}
.about-hero-buttons {
  display: flex;
  gap: clamp(16px, 3vw, 32px);
  flex-wrap: wrap;
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
}
.about-hero-btn:hover {
  text-decoration: none;
}
.about-hero-btn-outline {
  border: 2px solid white !important;
  color: white !important;
  background: transparent !important;
}
.about-hero-img {
  flex: 1 1 340px;
  max-width: 400px;
  width: 100%;
  border-radius: 8px;
  box-shadow: 0 2px 12px rgba(0,0,0,0.08);
  object-fit: cover;
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
  font-size: 1.5rem;
  font-weight: bold;
  margin-bottom: 12px;
  color: #1a2330;
}
.about-us-img {
  flex: 1 1 240px;
  max-width: 320px;
  width: 100%;
  border-radius: 8px;
  object-fit: cover;
}
.about-us-carousel {
  flex: 1 1 240px;
  max-width: 320px;
  width: 100%;
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 2px 12px rgba(0,0,0,0.08);
  background: #e7eef5;
  margin: 0 auto;
  min-width: 180px;
}
.carousel-img {
  object-fit: cover;
  width: 100%;
  height: 220px;
}

/* Services */
.about-services-section h2 {
  font-size: 1.3rem;
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
  max-width: 420px;
  padding: 32px 24px;
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
}
.testimonials-title {
  text-align: center;
  font-size: 1.5rem;
  font-weight: bold;
  color: #1a2330;
  margin-bottom: 28px;
  letter-spacing: 1px;
}
.testimonials-list {
  display: flex;
  flex-direction: column;
  gap: 28px;
}
.v-carousel .testimonial-card {
  background: #f8fafc;
  border-radius: 12px;
  box-shadow: 0 2px 12px rgba(0,0,0,0.06);
  padding: 28px 24px;
  position: relative;
  border-left: 5px solid #3777a5;
  margin: 0 8px;
  min-height: 350px;
}

.v-carousel .testimonial-text {
  font-size: 1.08rem;
  color: #222;
  font-style: italic;
  margin-bottom: 18px;
  line-height: 1.6;
}
.v-carousel .testimonial-author {
  display: flex;
  flex-direction: column;
  gap: 2px;
  font-size: 1rem;
  color: #18355b;
  font-weight: 500;
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

/* CTA */
.about-cta-section {
  background: #f5f7fa;
  text-align: center;
  padding: 32px 0;
  border-radius: 8px;
  margin-bottom: 32px;
}
.about-cta-section h2 {
  color: #1a2330;
  font-size: 1.2rem;
  font-weight: bold;
  letter-spacing: 1px;
}

/* Responsive */
@media (max-width: 1200px) {
  .about-hero-content {
    padding: 0 clamp(12px, 2vw, 32px);
  }
}

@media (max-width: 900px) {
  .about-hero-content {
    justify-content: center;
    text-align: center;
  }
  .about-hero-text {
    text-align: center;
    max-width: 100%;
  }
  .about-hero-text h1 {
    letter-spacing: 1px;
  }
  .about-hero-buttons {
    justify-content: center;
  }
  .about-us-carousel {
    max-width: 100%;
    margin-top: 24px;
  }
  .carousel-img {
    height: 160px;
  }
}

@media (max-width: 600px) {
  .about-hero-content {
    padding: 0 12px;
  }
  .about-hero-text h1 {
    letter-spacing: 0.5px;
  }
  .about-hero-buttons {
    flex-direction: column;
    align-items: center;
    gap: 16px;
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
    min-width: 200px;
    max-width: 320px;
    width: 100%;
    padding: 20px 16px;
  }
  .about-cta-section {
    padding: 12px 0;
    font-size: 0.95rem;
  }
  .carousel-img {
    height: 100px;
  }
  .testimonials-section {
    padding: 0 4px;
  }
  .testimonials-carousel {
    padding: 0 4px;
  }
  .v-carousel .testimonial-card {
    padding: 18px 8px;
    height: 400px;
  }
  .testimonials-title {
    font-size: 1.15rem;
  }
  .v-carousel .testimonial-text {
    font-size: 0.98rem;
  }
  .about-us-text {
    padding: 0 16px;
  }
  .about-us-text h2 {
    text-align: center;
    font-size: 1.3rem;
  }
  .about-us-text p {
    text-align: left;
    line-height: 1.6;
    margin-bottom: 16px;
  }
}
</style>