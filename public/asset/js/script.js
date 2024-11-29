document.querySelectorAll('.kategori-checkbox').forEach(checkbox => {
    checkbox.addEventListener('change', () => {
      const selectedCategories = Array.from(document.querySelectorAll('.kategori-checkbox:checked'))
        .map(cb => cb.value); // Ambil nilai kategori yang dipilih
      
      // Kirim ke server dengan AJAX
      fetch('/filter-kategori', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: JSON.stringify({ kategori: selectedCategories })
      })
      .then(response => response.json())
      .then(data => {
        // Update tampilan produk
        const productContainer = document.querySelector('#product-container');
        productContainer.innerHTML = data.html; // Tampilkan produk hasil filter
      });
    });
  });
  