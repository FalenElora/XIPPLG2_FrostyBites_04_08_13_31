// Ambil elemen input pencarian dan produk
const searchInput = document.getElementById("searchInput");
const items = document.querySelectorAll(".products .Product");

// Tambahkan event listener pada input pencarian
searchInput.addEventListener("input", () => {
    filterData(searchInput.value);
});

// Fungsi untuk memfilter data produk
function filterData(search) {
    items.forEach((item) => { 
        const itemName = item.querySelector('h3').textContent.toLowerCase();
        if (itemName.includes(search.toLowerCase())) {
            item.classList.remove('d-none');
        } else {
            item.classList.add('d-none');
        }
    });
}
