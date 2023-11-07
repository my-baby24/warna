<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisata Maninjau</title>
    <style>
        /* Styling for the layout */
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
            width: 50%;
            height: 400px;
            margin-left: 1px; /* Menggeser ke sebelah kanan */
            margin-right: 80px; /* Menambahkan margin kanan */
        }

        .slider {
            display: flex;
            transition: transform 1s ease-in-out; /* Memperlambat transisi untuk tampilan yang lebih mulus */
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
    </style>
</head>
<body>

    <!-- Photo Slider Section -->
    <div id="photo-slider" class="card">
        <div class="arrow left" onclick="prevSlide()">&#10094;</div>
        <div class="slider" id="slider">
            <div class="slide"><img src="{{ asset('kuliner/images/data-wisata/danau singkarak/m.jpg') }}" alt="Wisata 1"></div>
            <div class="slide"><img src="{{ asset('kuliner/images/data-wisata/masjid raya sumbar/m.jpg') }}" alt="Wisata 2"></div>
            <div class="slide"><img src="{{ asset('kuliner/images/data-wisata/LEMBAH ANAI/m.jpg') }}" alt="Wisata 3"></div>
            <!-- Add more slides as needed -->
        </div>
        <div class="arrow right" onclick="nextSlide()">&#10095;</div>
    </div>

    <!-- Information Section -->
    <div id="info" class="card">
        <h2>Danau Singkarak</h2>
        <p><strong>Alamat:</strong> kecamatan Tanjung Raya, Kabupaten Agam, provinsi Sumatera Barat, Indonesia.</p>
        <p><strong>Jarak:</strong> 33 KM</p>
        <div class="advantage">
            <p><strong>Keunggulan Wisata:</strong> Deskripsi keunggulan wisata dengan tampilan yang bagus.</p>
        </div>
        <p><strong>Deskripsi Wisata:</strong> Alkisah pada suatu masa berdiri tegak sebuah gunung bernama Gunung Tinjau. Gunung Tinjau memiliki kawah yang sangat luas, namun dalam waktu singkat berubah 
        menjadi sebuah danau yang indah. Kejadian tersebut tak lepas dari legenda setempat, yaitu tentang ulah dari Bujang Sembilan.</p>
    </div>

    <!-- Google Maps Section -->
    <div id="map">
        <!-- Embed Google Maps iframe with the location -->
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127672.0923272644!2d100.10545526713337!3d-0.3281459907637223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd51493dd7c7663%3A0xdc30ab6afb30d576!2sDanau%20Maninjau!5e0!3m2!1sid!2sid!4v1699341246909!5m2!1sid!2sid"
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
        </iframe>
    </div>

    <script>
    // JavaScript for continuous photo slider
    const slider = document.getElementById('slider');
    const slides = document.querySelectorAll('.slide');
    const slideWidth = slides[0].clientWidth;
    let currentSlide = slides.length - 1;

    setInterval(() => {
        nextSlide();
    }, 40000); // Set interval to 40 seconds

    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        updateSlider();
    }

    function prevSlide() {
        currentSlide = (currentSlide - 1 + slides.length) % slides.length;
        updateSlider();
    }

    function updateSlider() {
        const translateValue = -currentSlide * slideWidth;
        slider.style.transition = 'transform 1s ease-in-out';
        slider.style.transform = `translate(${translateValue}px)`;
    }

    // Untuk mengatasi masalah saat diklik kiri
    document.querySelector('.arrow.left').addEventListener('click', () => {
        prevSlide();
    });

    // Untuk mengatasi masalah saat diklik kanan
    document.querySelector('.arrow.right').addEventListener('click', () => {
        nextSlide();
    });
</script>



</body>
</html>
