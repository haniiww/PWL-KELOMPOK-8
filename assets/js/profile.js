// =========================
// profile.js
// =========================

const popup = document.getElementById("popup");
const editBtn = document.getElementById("editNameBtn");
const saveBtn = document.getElementById("saveName");
const cancelBtn = document.getElementById("cancelPopup");
const nameDisplay = document.getElementById("profileName");
const input = document.getElementById("newName");

// --- Edit name popup
if (editBtn) {
  editBtn.addEventListener("click", () => {
    popup.style.display = "flex";
    input.value = nameDisplay.childNodes[0].textContent.trim();
    input.focus();
  });
}

if (saveBtn) {
  saveBtn.addEventListener("click", () => {
    const newName = input.value.trim();
    if (newName.length === 0) {
      alert("Name cannot be empty!");
      return;
    }
    if (newName.length > 20) {
      alert("Name must be 20 characters or less!");
      return;
    }

    // Send AJAX request to update username in database
    fetch('../User_input/update_username.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
      },
      body: `user_id=${userId}&new_name=${encodeURIComponent(newName)}`
    })
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        nameDisplay.childNodes[0].textContent = newName + " ";
        popup.style.display = "none";
        alert("Name updated successfully!");
      } else {
        alert("Error: " + data.message);
      }
    })
    .catch(error => {
      console.error('Error:', error);
      alert("An error occurred while updating the name.");
    });
  });
}

if (cancelBtn) {
  cancelBtn.addEventListener("click", () => {
    popup.style.display = "none";
  });
}

window.addEventListener("click", (e) => {
  if (e.target === popup) popup.style.display = "none";
});

// =========================
// Change profile picture
// =========================

const savedPic = localStorage.getItem("tempProfilePic");
if (savedPic) {
  const img = document.getElementById("profileImage");
  if (img) img.src = savedPic;
}

const profilePicWrapper = document.getElementById("profilePicWrapper");
const profileInput = document.getElementById("profileInput");
const profileImage = document.getElementById("profileImage");

if (profilePicWrapper && profileInput && profileImage) {
  // buka file picker saat klik wrapper
  profilePicWrapper.addEventListener("click", () => {
    profileInput.click();
  });

  // saat user memilih file
  profileInput.addEventListener("change", function () {
    const file = this.files[0];
    if (!file) return;

    // validasi type
    const allowed = ['image/jpeg','image/jpg','image/png','image/webp'];
    if (!allowed.includes(file.type)) {
      alert("Tipe file tidak didukung. Gunakan JPG/PNG/WEBP.");
      profileInput.value = "";
      return;
    }

    // cek ukuran maksimum (2MB)
    const maxSize = 2 * 1024 * 1024;
    if (file.size > maxSize) {
      alert("Ukuran file maksimal 2MB!");
      profileInput.value = "";
      return;
    }

    const reader = new FileReader();
    reader.onload = function (e) {
      profileImage.src = e.target.result;
      localStorage.setItem("tempProfilePic", e.target.result);
    };
    reader.readAsDataURL(file);

    const formData = new FormData();
    formData.append("profile_picture", file);
    formData.append("user_id", userId);

    fetch("../User_input/uploadProfile.php", {
      method: "POST",
      body: formData
    })
    .then(res => res.json())
    .then(response => {
      if (response.success) {
        alert("Foto profil berhasil diunggah!");

        if (response.url) {
          profileImage.src = response.url;
          localStorage.removeItem("tempProfilePic");
        }

      } else {
        alert("Upload gagal: " + (response.message || "Unknown error"));
        location.reload(); 
      }
    })
    .catch(err => {
      console.error("Upload error:", err);
      alert("Terjadi kesalahan saat upload.");
      location.reload();
    });
  });
}

