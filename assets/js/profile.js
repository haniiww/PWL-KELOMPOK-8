const popup = document.getElementById("popup");
const editBtn = document.getElementById("editNameBtn");
const saveBtn = document.getElementById("saveName");
const cancelBtn = document.getElementById("cancelPopup");
const nameDisplay = document.getElementById("profileName");
const input = document.getElementById("newName");

// buka popup
editBtn.addEventListener("click", () => {
  popup.style.display = "flex";
  input.value = nameDisplay.textContent.trim();
  input.focus();
});

// simpan nama baru
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

  // Get user ID from URL or assume it's available (e.g., from session)
  const urlParams = new URLSearchParams(window.location.search);
  const userId = urlParams.get('id') || 1; // Default to 1 if not present, adjust as needed

  // Send AJAX request to update username in database
  fetch('User_input/update_username.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded',
    },
    body: `user_id=${userId}&new_name=${encodeURIComponent(newName)}`
  })
  .then(response => response.json())
  .then(data => {
    if (data.success) {
      nameDisplay.childNodes[0].textContent = newName + " "; // ubah teks sebelum ikon
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

// tombol cancel
cancelBtn.addEventListener("click", () => {
  popup.style.display = "none";
});

// klik di luar popup untuk tutup
window.addEventListener("click", (e) => {
  if (e.target === popup) popup.style.display = "none";
});


