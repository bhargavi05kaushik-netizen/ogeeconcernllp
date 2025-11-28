
<div id="popup" class="popup">
  <div class="popup-content">

    <span class="close" onclick="closePopup()">&times;</span>

    <div class="popup-inner">
      
      <!-- LEFT SIDE -->
      <div class="popup-left">
        <img src="images/ogeelogo.png" class="logo">
        <h2 class="company-name">OGEE CONCERN LLP</h2>
      </div>

      <!-- RIGHT SIDE -->
      <div class="popup-right">
        <h2>Fill The Details</h2>

        <form id="offerForm">
          <input type="text" name="name" placeholder="Enter your name" required>
          <input type="tel" name="mobile" placeholder="Enter mobile no." required>
          <input type="text" name="pincode" placeholder="Enter pincode" required>
          <input type="text" name="address" placeholder="Enter address" required>
          <textarea name="requirement" placeholder="Enter your requirement" required></textarea>
          <button type="submit">Submit</button>
        </form>
      </div>

    </div>

  </div>
</div>


<!-- ================= POPUP CSS ================= -->
<style>

 .popup {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0,0,0,0.7);
  display: none;
  justify-content: center;
  align-items: center;
  z-index: 99999;
}

.popup-content {
  background: #fff;
  width: 60%;
  padding: 25px;
  border-radius: 12px;
  position: relative;
}

.close {
  /* font-size: 25px;
  cursor: pointer;
  position: absolute;
  right: 15px;
  top: 10px; */
  z-index: 999999;
}

/* 2 COLUMN LAYOUT */
.popup-inner {
  display: flex;
  gap: 20px;
  align-items: center;
}

.popup-left {
  width: 35%;
  text-align: center;
  padding: 30px 20px;
  border-right: 2px solid #eee;

  /* FIX 1: Add border radius here */
  border-radius: 12px 12px 12px 12px;

  /* Background image (Laravel safe) */
  /* background-image: url('{{ asset("images/worker.jpg") }}'); */
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;

  /* FIX 2: height */
  min-height: 300px;

  position: relative;
}

.popup-left .logo {
  width: 190px;
  margin-bottom: 10px;
}

.popup-left::before {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;

  background: rgba(0,0,0,0.4);
  border-radius: inherit; /* FIX 3 */
}

.popup-left * {
  position: relative;
  z-index: 2;
  color: white;
}

@media(max-width: 768px){
  .popup-left {
    border-bottom: 2px solid #eee;
    border-right: none;
    border-radius: 12px 12px 0 0;
  }
}
.company-name {
  font-size: 22px;
  font-weight: bold;
  color: rgba(211, 158, 45, 1);
}

/* RIGHT SIDE */
.popup-right {
  width: 60%;
}

#offerForm input,
#offerForm textarea,
#offerForm button {
  width: 100%;
  display: block;
  padding: 10px;
  margin: 8px 0;
  border: 1px solid #ccc;
  border-radius: 6px;
}

#offerForm button {
    max-width: 120px;
}
#offerForm textarea {
  height: 80px;
  resize: none;
}

#offerForm button {
  background: #ff5722;
  color: white;
  border: none;
  cursor: pointer;
}

/* =============================
   RESPONSIVE FOR MOBILE
============================= */
@media (max-width: 768px) {

  .popup-content {
    width: 90%;
    padding: 20px;
  }

  .popup-inner {
    flex-direction: column;   /* stack layout */
    text-align: center;
  }

  .popup-left {
    width: 100%;
    border-right: none;
    padding-right: 0;
    border-bottom: 2px solid #f0f0f0;
    padding-bottom: 15px;
  }

  .popup-right {
    width: 100%;
    padding-top: 15px;
  }

  .popup-left .logo {
    width: 90px;
  }

  .company-name {
    font-size: 18px;
  }
}
@media(max-width: 768px){
  .close {
    top: 5px !important;
    right: 5px !important;
    font-size: 22px !important;
    z-index: 999999; /* ensure visible */
    color: #000;     /* make sure visible over light bg */
  }
}
</style>

<!-- ================= POPUP JS ================= -->
<script>
function openPopup() {
    document.getElementById("popup").style.display = "flex";
}

function closePopup() {
    document.getElementById("popup").style.display = "none";
}

// Show popup after 15 seconds (always)
setTimeout(() => {
    openPopup();
}, 15000);

// Form Submit → AJAX → Laravel Email
document.getElementById("offerForm").addEventListener("submit", function (e) {
    e.preventDefault();

    let formData = new FormData(this);

    fetch("{{ route('popup.send') }}", {
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": "{{ csrf_token() }}"
        },
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        alert("Data submitted!");
        closePopup();
    })
    .catch(error => console.error("Error:", error));
});
</script>
