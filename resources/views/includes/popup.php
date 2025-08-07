<!-- Popup Form -->
<div id="popupForm" class="popup-overlay">
  <div class="popup-content">
    <span class="close-btn" onclick="closePopup()">&times;</span>
    <h2>Contact Us</h2>
    <form>
      <input type="text" placeholder="Your Name" required />
      <input type="email" placeholder="Your Email" required />
      <input type="tel" placeholder="Phone Number" required />
      <input type="text" placeholder="Preferred Time (e.g., 10am - 12pm)" required />
      <textarea placeholder="Your Message" required></textarea>
      <button type="submit">Send Message</button>
    </form>
  </div>
</div>

<script>
  // Show popup after 5 seconds
  window.onload = function () {
    setTimeout(() => {
      document.getElementById("popupForm").style.display = "flex";
    }, 1000);
  };

  // Close popup
  function closePopup() {
    document.getElementById("popupForm").style.display = "none";
  }
</script>