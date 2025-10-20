<template>
  <div class="contact-page">
    <v-container fluid class="py-8">
      <v-row justify="start" align="start" class="contact-main-row">
        <!-- Contact Form Column -->
        <v-col cols="12" sm="12" md="10" lg="6" xl="5" class="contact-form-col">
          <v-card class="contact-form-card" elevation="8">
            <v-card-title class="text-center pa-4 text-custom-navy">
              <h1 class="text-h4 font-weight-bold">Contact Us</h1>
              <p class="text-subtitle-1 mt-2 text-custom-navy text-wrap">
                Tell us about your winter service needs...
              </p>
            </v-card-title>
            
            <v-card-text class="pa-6">
              <v-form ref="contactForm" v-model="formValid">
                <v-row>
                  <v-col cols="12">
                    <v-text-field
                      class="text-custom-navy"
                      v-model="form.firstName"
                      label="First Name"
                      variant="outlined"
                      :rules="nameRules"
                      required
                      density="comfortable"
                    ></v-text-field>
                  </v-col>
                  
                  <v-col cols="12">
                    <v-text-field
                      class="text-custom-navy"
                      v-model="form.phone"
                      label="Phone Number"
                      variant="outlined"
                      :rules="phoneRules"
                      required
                      density="comfortable"
                      type="tel"
                    ></v-text-field>
                  </v-col>
                  
                  <v-col cols="12">
                    <v-text-field
                      class="text-custom-navy"
                      v-model="form.email"
                      label="Email Address"
                      variant="outlined"
                      :rules="emailRules"
                      required
                      density="comfortable"
                      type="email"
                    ></v-text-field>
                  </v-col>
                  
                  <v-col cols="12">
                    <v-text-field
                      class="text-custom-navy"
                      v-model="form.subject"
                      label="Subject"
                      variant="outlined"
                      :rules="subjectRules"
                      required
                      density="comfortable"
                    ></v-text-field>
                  </v-col>
                  
                  <v-col cols="12">
                    <v-textarea
                      class="text-custom-navy"
                      v-model="form.message"
                      label="Message"
                      variant="outlined"
                      :rules="messageRules"
                      required
                      rows="6"
                      density="comfortable"
                      placeholder="Tell us about your winter maintenance needs..."
                    ></v-textarea>
                  </v-col>
                </v-row>
                
                <div class="text-center mt-4">
                  <v-btn
                    color="primary"
                    size="large"
                    variant="elevated"
                    :disabled="!formValid || loading"
                    :loading="loading"
                    @click="submitForm"
                    class="px-8"
                  >
                    <v-icon left class="mr-2">mdi-send</v-icon>
                    Submit Message
                  </v-btn>
                </div>
                <div class="text-center mt-4" v-if="loading">
                  <v-progress-circular indeterminate color="primary"></v-progress-circular>
                  <p class="mt-2">Sending message...</p>
                </div>
                <v-alert v-if="successMessage" type="success" class="mt-4">
                  {{ successMessage }}
                </v-alert>
                <v-alert v-if="errorMessage" type="error" class="mt-4">
                  {{ errorMessage }}
                </v-alert>
              </v-form>
            </v-card-text>
          </v-card>
        </v-col>
      </v-row>
    </v-container>
  </div>
</template>

<script setup>
import { ref } from 'vue'

const formValid = ref(false)
const contactForm = ref(null)

const loading = ref(false)
const successMessage = ref('')
const errorMessage = ref('')

const form = ref({
  firstName: '',
  phone: '',
  email: '',
  subject: '',
  message: ''
})

// Validation rules
const nameRules = [
  v => !!v || 'First name is required',
  v => (v && v.length >= 2) || 'First name must be at least 2 characters'
]

const phoneRules = [
  v => !!v || 'Phone number is required',
  v => /^[\+]?[\s\-\(\)]*([0-9][\s\-\(\)]*){10,}$/.test(v) || 'Please enter a valid phone number'
]

const emailRules = [
  v => !!v || 'Email is required',
  v => /.+@.+\..+/.test(v) || 'Please enter a valid email address'
]

const subjectRules = [
  v => !!v || 'Subject is required',
  v => (v && v.length >= 3) || 'Subject must be at least 3 characters'
]

const messageRules = [
  v => !!v || 'Message is required',
  v => (v && v.length >= 10) || 'Message must be at least 10 characters'
]

const submitForm = async () => {
  const { valid } = await contactForm.value.validate()
  
  if (valid) {
    loading.value = true
    successMessage.value = ''
    errorMessage.value = ''
    
    try {
      const response = await fetch('https://tfdservices.ie/send-email.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({
          firstName: form.value.firstName,
          phone: form.value.phone,
          email: form.value.email,
          subject: form.value.subject,
          message: form.value.message
        })
      })
      
      const result = await response.json()
      
      if (result.success) {
        successMessage.value = "Thank you for your message! We will get back to you soon."
        contactForm.value.reset()
        Object.keys(form.value).forEach(key => form.value[key] = '')
      } else {
        errorMessage.value = result.message || "An error occurred while sending your message. Please try again later."
      }
    } catch (error) {
      console.error('Error sending message:', error)
      errorMessage.value = "An error occurred while sending your message. Please try again later."
    } finally {
      loading.value = false
    }
  }
}
</script>

<style scoped>

.contact-page {
  background-color: #000000;
  background-image: url('@/assets/images/hero-bg.webp');
  background-size: cover;
  min-height: 100vh;
  padding: 40px 0;
}

/* Main grid layout */
.contact-main-row {
  max-width: 1400px;
  margin: 0 auto; /* Centered by default for mobile */
}

/* Contact Form Styles */
.contact-form-col {
  display: flex;
  align-items: stretch;
}

.contact-form-card {
  background-color: #ffffff !important;
  border-radius: 16px;
  box-shadow: 0 8px 32px rgba(255, 255, 255, 0.1);
  width: 100%;
  height: fit-content;
}


/* Mobile Styles (xs, sm) */
@media (max-width: 959px) {
  .contact-page {
    padding: 20px 0;
  }
  
  .contact-main-row {
    margin: 0 auto;
    padding: 0 16px;
    justify-content: center !important;
  }
  
  .contact-form-col {
    margin-bottom: 24px;
  }
  

}

/* Tablet Styles (md) */
@media (min-width: 960px) and (max-width: 1263px) {
  .contact-main-row {
    margin: 0 auto;
    padding: 0 32px;
    justify-content: center !important;
  }
}

/* Desktop Styles (lg) */
@media (min-width: 1264px) and (max-width: 1903px) {
  .contact-main-row {
    margin: 0;
    margin-left: 48px;
    padding: 0;
    justify-content: flex-start !important;
  }
  
  .contact-form-col {
    padding-right: 16px;
  }
  
}

/* Large Desktop Styles (xl+) */
@media (min-width: 1904px) {
  .contact-main-row {
    margin: 0;
    margin-left: 64px;
    padding: 0;
    justify-content: flex-start !important;
  }
  
  .contact-form-col {
    padding-right: 24px;
  }
  
}
</style>