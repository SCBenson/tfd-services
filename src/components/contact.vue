<template>
  <div class="contact-page">
    <v-container class="py-8">
      <v-row justify="center">
        <v-col cols="12" sm="10" md="8" lg="6">
          <v-card class="contact-form-card" elevation="8">
            <v-card-title class="text-center pa-6">
              <h1 class="text-h4 font-weight-bold">Contact Us</h1>
              <p class="text-subtitle-1 mt-2 text-grey-darken-1">
                Get in touch with our winter maintenance experts
              </p>
            </v-card-title>
            
            <v-card-text class="pa-6">
              <v-form ref="contactForm" v-model="formValid">
                <v-row>
                  <v-col cols="12">
                    <v-text-field
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
                    :disabled="!formValid"
                    @click="submitForm"
                    class="px-8"
                  >
                    <v-icon left class="mr-2">mdi-send</v-icon>
                    Submit Message
                  </v-btn>
                </div>
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
    // Here you would typically send the form data to your backend
    console.log('Form submitted:', form.value)
    
    // For now, just show a success message
    alert('Thank you for your message! We will get back to you soon.')
    
    // Reset the form
    contactForm.value.reset()
    Object.keys(form.value).forEach(key => {
      form.value[key] = ''
    })
  }
}
</script>

<style scoped>
.contact-page {
  background-color: #000000;
  min-height: 100vh;
  padding: 40px 0;
}

.contact-form-card {
  background-color: #ffffff !important;
  border-radius: 16px;
  box-shadow: 0 8px 32px rgba(255, 255, 255, 0.1);
}

@media (max-width: 600px) {
  .contact-page {
    padding: 20px 0;
  }
  
  .contact-form-card {
    margin: 0 16px;
  }
}
</style>