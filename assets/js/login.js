// --- LOGIN.JS ---
const loginForm = document.querySelector("form");

loginForm.addEventListener("submit", function (e) {
  e.preventDefault();

  const username = document.getElementById("username").value.trim();
  const password = document.getElementById("password").value.trim();

  // Validation
  if (!username || !password) {
    alert("⚠️ Please fill in both fields.");
    return;
  }

  if (password.length < 6) {
    alert("🔒 Password must be at least 6 characters long.");
    return;
  }

  // If valid
  alert("✅ Login successful!");
  loginForm.submit();
});
