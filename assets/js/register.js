// --- REGISTER.JS ---
// Select the form
const registerForm = document.querySelector("form");

// Listen for form submission
registerForm.addEventListener("submit", function (e) {
  e.preventDefault(); // prevent real submission for validation

  const username = document.getElementById("username").value.trim();
  const email = document.getElementById("email").value.trim();
  const password = document.getElementById("password").value.trim();

  // --- Validation ---
  if (!username || !email || !password) {
    alert("⚠️ Please fill in all fields.");
    return;
  }

  // Email format check
  const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
  if (!email.match(emailPattern)) {
    alert("❌ Please enter a valid email address.");
    return;
  }

  // Password strength check
  if (password.length < 6) {
    alert("🔒 Password must be at least 6 characters long.");
    return;
  }

  // If everything is okay
  alert("✅ Registration successful!");
  registerForm.submit(); // now allow actual submission to register.php
});

