// server.js
const express = require("express");
const bodyParser = require("body-parser");
const app = express();
const port = 3000;

app.use(bodyParser.urlencoded({ extended: false }));
app.use(bodyParser.json());

// Handle registration form submission
app.post("/submit_registration_form", (req, res) => {
    const { username, email, password } = req.body;

    // Save the user data to a database or perform necessary actions
    // You should use parameterized queries to prevent SQL injection

    res.send("Registration successful!");
});

// Handle contact form submission
app.post("/submit_contact_form", (req, res) => {
    const { name, email, subject, message } = req.body;

    // Send an email (example, you may need to configure your mail server)

    res.send("Message sent successfully!");
});

app.listen(port, () => {
    console.log(`Server listening at http://localhost:${3000}`);
});
