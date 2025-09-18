<template>
  <div class="about-draft-root">
    <!-- Header Bar -->

    <!-- Hero Section -->
    <section class="about-hero">
      <div class="about-hero-content">
        <div class="about-hero-text">
          <h1>KEEPING ROADS &amp; SURFACES SAFE THIS WINTER</h1>
          <div class="about-hero-buttons">
            <v-btn color="primary" class="about-hero-btn">CALL US NOW</v-btn>
            <v-btn color="white" class="about-hero-btn about-hero-btn-outline">GET A QUOTE</v-btn>
          </div>
        </div>
        <img src="@/assets/images/machinery/image1.webp" alt="Winter Truck" class="mb-2 about-hero-img" />
      </div>
    </section>

    <!-- About Us Section -->
    <section class="about-section about-us-section">
      <div class="about-us-content">
        <div class="about-us-text">
          <h2>ABOUT US</h2>
          <p>
            TFD Services provides professional salting, gritting, and snow clearing solutions throughout Galway city and county to ensure roads, car parks, industrial sites, and public areas remain safe throughout winter. With modern equipment, skilled operators, and a strong focus on reliability, we help businesses and communities stay moving during harsh weather.
          </p>
        </div>
        <img src="@/assets/images/machinery/image2.webp" alt="About Truck" class=" mt-2 about-us-img" />
      </div>
    </section>

    <!-- Our Services Section -->
    <section class="about-section about-services-section">
      <h2>OUR SERVICES</h2>
      <div class="about-services-grid">
        <div class="about-service-card">
          <v-icon size="36">mdi-shovel</v-icon>
          <div class="about-service-title">Pre-emptive Salting &amp; Gritting</div>
        </div>
        <div class="about-service-card">
          <v-icon size="36">mdi-clock-outline</v-icon>
          <div class="about-service-title">24/7 Reactive Call-Outs</div>
        </div>
        <div class="about-service-card">
          <v-icon size="36">mdi-truck-snowflake</v-icon>
          <div class="about-service-title">Snow Clearing &amp; Ploughing</div>
        </div>
        <div class="about-service-card">
          <v-icon size="36">mdi-warehouse</v-icon>
          <div class="about-service-title">Salt Supply &amp; Storage</div>
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
            <li>Fally Trained Operators</li>
            <li>Modern Flet &amp; Equipment</li>
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
    <section class="about-section testimonials-section">
      <h2 class="testimonials-title">Testimonials</h2>
      <div class="testimonials-list">
        <div class="testimonial-card">
          <p class="testimonial-text">
            "TFD Services provided Galway County Council with an excellent Winter Maintenance Service in gritting roads during cold weather along with vehicle hire. The works were carried out efficiently and effectively with a reliable and prompt backup services and we would highly recommend the company for similar works."
          </p>
          <div class="testimonial-author">
            <span class="testimonial-name">Fergal Fahey</span>
            <span class="testimonial-role">Executive Engineer</span>
            <span class="testimonial-org">Galway County Council</span>
          </div>
        </div>
        <div class="testimonial-card">
          <p class="testimonial-text">
            "TFD Services have provided Winter Maintenance/Salting services on behalf of Aramark Property and IDA Ireland. During this time, we have found TFD and their staff representatives to be excellent in terms of service and reaction times, always conducting themselves in a professional manner. The businesses located on the various IDA Business Parks have provided positive feedback in terms of the service levels provided by TFD.<br><br>
            We have no hesitation in recommending TFD Services."
          </p>
          <div class="testimonial-author">
            <span class="testimonial-name">Diane Fogarty Charles</span>
            <span class="testimonial-role">Property Manager</span>
            <span class="testimonial-org">Aramark Property</span>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script setup>
// No logic needed for wireframe
</script>

<style scoped>
.about-draft-root {
  background: #fff;
  font-family: 'Montserrat', Arial, sans-serif;
  color: #1a2330;
}

/* Hero */
.about-hero {
  background: #e7eef5;
  padding: 32px 0 0 0;
}
.about-hero-content {
  max-width: 1200px;
  margin: 0 auto;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
  gap: 32px;
}
.about-hero-text {
  flex: 1 1 340px;
  min-width: 280px;
}
.about-hero-text h1 {
  font-size: 2.2rem;
  font-weight: bold;
  margin-bottom: 24px;
  color: #1a2330;
  line-height: 1.1;
}
.about-hero-buttons {
  display: flex;
  gap: 16px;
  flex-wrap: wrap;
}
.about-hero-btn {
  font-weight: bold;
  font-size: 1rem;
  border-radius: 8px;
  padding: 10px 28px;
  letter-spacing: 1px;
}
.about-hero-btn-outline {
  border: 2px solid #3777a5 !important;
  color: #3777a5 !important;
  background: #fff !important;
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
  background: #fff;
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
.testimonial-card {
  background: #f8fafc;
  border-radius: 12px;
  box-shadow: 0 2px 12px rgba(0,0,0,0.06);
  padding: 28px 24px;
  position: relative;
  border-left: 5px solid #3777a5;
}

.testimonial-text {
  font-size: 1.08rem;
  color: #222;
  font-style: italic;
  margin-bottom: 18px;
  line-height: 1.6;
}
.testimonial-author {
  display: flex;
  flex-direction: column;
  gap: 2px;
  font-size: 1rem;
  color: #18355b;
  font-weight: 500;
}
.testimonial-name {
  font-weight: bold;
  color: #3777a5;
}
.testimonial-role {
  font-size: 0.98rem;
  color: #555;
}
.testimonial-org {
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
@media (max-width: 900px) {
  .about-hero-content,
  .about-us-content,
  .about-safety-why-grid {
    flex-direction: column;
    align-items: stretch;
    gap: 24px;
  }
  .about-hero-img,
  .about-us-img {
    max-width: 100%;
    margin: 0 auto;
  }
  .about-hero-content {
    gap: 24px;
    padding: 0 0 24px 0;
  }
  .about-hero-text h1 {
    font-size: 1.5rem;
  }
  .about-section {
    padding: 0 8px;
  }
  .about-service-card {
    min-width: 140px;
    max-width: 100%;
    padding: 16px 8px;
  }
  .about-safety-card, .about-why-card {
    min-width: 0;
    max-width: 100%;
    padding: 20px 10px;
  }
  .about-cta-section {
    padding: 20px 0;
    font-size: 1rem;
  }
}

@media (max-width: 600px) {
  .about-hero-content,
  .about-us-content,
  .about-safety-why-grid {
    gap: 16px;
  }
  .about-hero-text h1 {
    font-size: 1.1rem;
  }
  .about-section {
    padding: 0 4px;
  }
  .about-service-card {
    padding: 12px 4px;
  }
  .about-cta-section {
    padding: 12px 0;
    font-size: 0.95rem;
  }
}

@media (max-width: 600px) {
  .testimonials-section {
    padding: 0 4px;
  }
  .testimonial-card {
    padding: 18px 8px;
  }
  .testimonials-title {
    font-size: 1.15rem;
  }
  .testimonial-text {
    font-size: 0.98rem;
  }
}
</style>