// Login sederhana
function login() {
  const user = document.getElementById("username").value;
  const pass = document.getElementById("password").value;
  const errorMsg = document.getElementById("error-msg");

  if (user === "admin" && pass === "admin123") {
    window.location.href = "admin-dashboard.html";
  } else {
    errorMsg.textContent = "Username atau password salah!";
  }
}

// Simpan harga ke localStorage
function simpanHarga() {
  const hargaKiloan = document.getElementById("harga-kiloan").value;
  const hargaSatuan = document.getElementById("harga-satuan").value;
  const hargaExpress = document.getElementById("harga-express").value;
  const hargaPremium = document.getElementById("harga-premium").value;

  localStorage.setItem("hargaKiloan", hargaKiloan);
  localStorage.setItem("hargaSatuan", hargaSatuan);
  localStorage.setItem("hargaExpress", hargaExpress);
  localStorage.setItem("hargaPremium", hargaPremium);

  document.getElementById("status-msg").textContent = "Harga berhasil disimpan!";
}

// Bisa juga di halaman layanan.html nanti, ambil harga dari localStorage
