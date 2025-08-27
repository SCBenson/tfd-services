const express = require("express");
const sgMail = require("@sendgrid/mail");
const cors = require("cors");
require("dotenv").config();

const app = express();
const PORT = process.env.PORT || 3000;

// Set SendGrid API key
sgMail.setApiKey(process.env.SENDGRID_API_KEY);

// Middleware
app.use(cors());
app.use(express.json());

// Contact form endpoint
app.post("/api/contact", async (req, res) => {
  try {
    const { name, email, phone, subject, message } = req.body;

    // Create email content with form data
    const msg = {
      to: process.env.TO_EMAIL, // Your Gmail (where you want to receive notifications)
      from: process.env.FROM_EMAIL, // Your verified sender Gmail
      subject: `New Contact Form: ${subject}`,
      text: `
        New contact form submission:
        
        Name: ${name}
        Email: ${email}
        Phone: ${phone}
        Subject: ${subject}
        Message: ${message}
      `,
      html: `
        <h3>New Contact Form Submission</h3>
        <p><strong>Name:</strong> ${name}</p>
        <p><strong>Email:</strong> ${email}</p>
        <p><strong>Phone:</strong> ${phone}</p>
        <p><strong>Subject:</strong> ${subject}</p>
        <p><strong>Message:</strong> ${message}</p>
      `,
    };

    await sgMail.send(msg);
    console.log("Email sent successfully");
    res.status(200).json({ success: true, message: "Email sent successfully" });
  } catch (error) {
    console.error("SendGrid error:", error);
    res.status(500).json({ success: false, message: "Failed to send email" });
  }
});

// Health check endpoint
app.get("/api/health", (req, res) => {
  res.json({ status: "Server is running" });
});

app.listen(PORT, () => {
  console.log(`Server running on port ${PORT}`);
});
