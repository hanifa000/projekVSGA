// Toggle class active
const navbarNav = document.querySelector(".navbar-nav");

// ketika humburger menu di klik
document.querySelector("#hamburger-menu").onclick = () => {
  navbarNav.classList.toggle("active");
};

//Klik diluar sidebar untuk menghilangkan nav
const humburger = document.querySelector("#hamburger-menu");

document.addEventListener("click", function (e) {
  if (!humburger.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove("active");
  }
});

// scroll produk
const scrollContainer = document.getElementById('product-container');
const scrollLeft = document.getElementById('scroll-left');
const scrollRight = document.getElementById('scroll-right');

function updateScrollButtons() {
const scrollWidth = scrollContainer.scrollWidth;
const clientWidth = scrollContainer.clientWidth;
            
// Tampilkan atau sembunyikan tombol berdasarkan lebar kontainer
if (scrollWidth > clientWidth) {
scrollLeft.style.display = 'block';
scrollRight.style.display = 'block';
} else {
scrollLeft.style.display = 'none';
scrollRight.style.display = 'none';
}
}

scrollLeft.addEventListener('click', () => {
scrollContainer.scrollBy({
left: -320,  // Sesuaikan nilai ini sesuai dengan lebar kartu dan gap
behavior: 'smooth'
});
});

scrollRight.addEventListener('click', () => {
scrollContainer.scrollBy({
left: 320,  // Sesuaikan nilai ini sesuai dengan lebar kartu dan gap
behavior: 'smooth'
});
});

// Panggil updateScrollButtons saat halaman dimuat dan saat ukuran jendela berubah
window.addEventListener('load', updateScrollButtons);
window.addEventListener('resize', updateScrollButtons);

// galeri nampil
    function showProductDetails(id) {
        var product = products.find(p => p.id === id);
        document.getElementById("modal-body").innerHTML = `
            <h2>${product.name}</h2>
            <img src="${product.image}" alt="${product.name}" style="width: 100%; height: auto;">
            <p>${product.description}</p>
        `;
        document.getElementById("product-modal").style.display = "block";
    }

    function closeModal() {
        document.getElementById("product-modal").style.display = "none";
    }

// pop up keranjang
function addToCart() {
  alert("Produk telah ditambahkan ke keranjang!");
  return true;
}
