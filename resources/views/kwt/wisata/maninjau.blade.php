<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisata Maninjau</title>
    <style>
        /* Gaya untuk tata letak */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            align-items: center;
        }

        .card {
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            width: 40%;
        }

        #photo-slider {
            overflow: hidden;
            position: relative;
        }

        #map {
        width: 75%; /* Ubah lebar peta menjadi 100% */
        height: 400px;
        margin-left: 1px; /* Menggeser ke sebelah kanan */
        margin-right: 80px; /* Menambahkan margin kanan */
    }


        .slider {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .slide {
            min-width: 100%;
            box-sizing: border-box;
            overflow: hidden;
        }

        .slide img {
            width: 100%;
            height: auto;
            max-width: 100%;
        }

        .arrow {
            position: absolute;
            top: 50%;
            font-size: 24px;
            cursor: pointer;
            z-index: 1;
            user-select: none;
        }

        .arrow.left {
            left: 10px;
        }

        .arrow.right {
            right: 10px;
        }

        #info, #map {
            box-sizing: border-box;
            padding: 20px;
        }

        #info h2 {
            margin-bottom: 10px;
        }

        #info p {
            margin-bottom: 20px;
        }

        #info .advantage {
            float: right;
            width: 100%;
        }

        /* Gaya untuk tombol deskripsi */
        #showDescription {
            cursor: pointer;
            color: #007BFF;
            text-decoration: underline;
            margin-top: 10px;
            display: inline-block;
        }

        /* Gaya untuk modal deskripsi */
        #descriptionModal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        #descriptionContent {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            width: 80%; /* Ubah lebar modal sesuai kebutuhan */
            max-width: 800px; /* Batasi lebar maksimum jika perlu */
            margin: 0 auto;
        }

        #closeModal {
            cursor: pointer;
            color: #007BFF;
            text-align: right;
            margin-top: 10px;
            font-size: 20px;
        }

    </style>
</head>
<body>

    <!-- Bagian Foto Slider -->
    <div id="photo-slider" class="card">
        <div class="arrow left" onclick="prevSlide()">&#10094;</div>
        <div class="slider" id="slider">
            <div class="slide"><img src="{{ asset('kuliner/images/data-wisata/danau maninjau/m.jpg') }}" alt="Wisata 1"></div>
            <div class="slide"><img src="{{ asset('kuliner/images/data-wisata/danau maninjau/m.jpg') }}" alt="Wisata 1"></div>
            <div class="slide"><img src="{{ asset('kuliner/images/data-wisata/danau maninjau/m.jpg') }}" alt="Wisata 1"></div>
            <!-- Tambahkan lebih banyak slide jika diperlukan -->
        </div>
        <div class="arrow right" onclick="nextSlide()">&#10095;</div>
    </div>

    <!-- Bagian Informasi -->
    <div id="info" class="card">
        <h2>Danau Maninjau</h2>
        <p><strong>Alamat:</strong> kecamatan Tanjung Raya, Kabupaten Agam, provinsi Sumatera Barat, Indonesia.</p>
        <p><strong>Jarak:</strong> 33 KM</p>
        <div class="advantage">
            <p><strong>Keunggulan Wisata:</strong> Deskripsi keunggulan wisata dengan tampilan yang bagus.</p>
        </div>
        <p><strong>Deskripsi Wisata:</strong>
            <!-- Tombol untuk menampilkan modal deskripsi -->
            <span id="showDescription" onclick="openDescriptionModal()">Lihat Deskripsi</span>
        </p>
        <p><strong>Sumber:</strong> <a href="https://indonesiakaya.com/pustaka-indonesia/danau-maninjau-danau-legendaris-di-jantung-agam/#:~:text=Menurut%20sejarahnya%2C%20danau%20ini%20terbentuk,dan%20Danau%20Batur%20di%20Bali." target="_blank">https://indonesiakaya.com/</a></p>
    </div>

    <!-- Bagian Google Maps -->
    <div id="map">
        <!-- Sematkan iframe Google Maps dengan lokasi -->
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127672.0923272644!2d100.10545526713337!3d-0.3281459907637223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd51493dd7c7663%3A0xdc30ab6afb30d576!2sDanau%20Maninjau!5e0!3m2!1sid!2sid!4v1699341246909!5m2!1sid!2sid"
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
        </iframe>
    </div>

    <!-- Modal Deskripsi -->
    <div id="descriptionModal">
        <div id="descriptionContent">
            <div id="closeModal" onclick="closeDescriptionModal">&#10006; Tutup</div>
            <h2>Danau Maninjau</h2>
            <!-- Tambahkan deskripsi lengkap di sini -->
            <p>
                Danau Maninjau merupakan sebuah danau vulkanik yang berada tepat di jantung Kabupaten Agam, Sumatera Barat. Terletak di ketinggian kurang lebih 460 meter di atas permukaan laut, danau ini membentang seluas 100 km persegi dengan kedalaman rata-rata 105 meter. ...
            </p>
        </div>
    </div>

    <script>
        // JavaScript untuk foto slider berkelanjutan
        const slider = document.getElementById('slider');
        let isSliding = true;

        setInterval(() => {
            if (isSliding) {
                nextSlide();
            }
        }, 1500);

        function nextSlide() {
            const firstSlide = document.querySelector('.slide');
            slider.appendChild(firstSlide.cloneNode(true));
            slider.style.transition = 'none';
            slider.style.transform = 'translate(0)';
            setTimeout(() => {
                slider.style.transition = 'transform 0.5s ease-in-out';
                slider.style.transform = 'translate(-100%)';
            }, 10);
        }

        function prevSlide() {
            const lastSlide = document.querySelector('.slide:last-child');
            slider.insertBefore(lastSlide.cloneNode(true), slider.firstChild);
            slider.style.transition = 'none';
            slider.style.transform = 'translate(-100%)';
            setTimeout(() => {
                slider.style.transition = 'transform 0.5s ease-in-out';
                slider.style.transform = 'translate(0)';
            }, 10);
        }

        // JavaScript untuk modal deskripsi
        const descriptionModal = document.getElementById('descriptionModal');
        const closeModalButton = document.getElementById('closeModal');

        closeModalButton.addEventListener('click', closeDescriptionModal);

        function openDescriptionModal() {
            descriptionModal.style.display = 'flex';
            isSliding = false; // Jeda slider ketika modal terbuka
        }

        function closeDescriptionModal() {
            descriptionModal.style.display = 'none';
            isSliding = true; // Lanjutkan slider ketika modal tertutup
        }
    </script>

</body>
</html>
