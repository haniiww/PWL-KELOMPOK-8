const popup = document.getElementById("popup");
const editBtn = document.getElementById("editNameBtn"); // pastikan ID tombol edit sesuai
const saveBtn = document.getElementById("saveName");
const nameDisplay = document.getElementById("profileName");
const input = document.getElementById("newName");

// buka popup
editBtn.addEventListener("click", () => {
  popup.style.display = "flex";
  input.value = nameDisplay.textContent;
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

  nameDisplay.textContent = newName;
  popup.style.display = "none";
});

// klik di luar popup untuk tutup
window.addEventListener("click", (e) => {
  if (e.target === popup) popup.style.display = "none";
});

