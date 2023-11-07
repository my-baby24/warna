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
    </style>
</head>
<body>

    <!-- Photo Slider Section -->
    <div id="photo-slider" class="card">
        <div class="arrow left" onclick="prevSlide()">&#10094;</div>
        <div class="slider" id="slider">
            <div class="slide"><img src="{{ asset('kuliner/images/data-wisata/danau maninjau/m.jpg') }}" alt="Wisata 1"></div>
            <div class="slide"><img src="{{ asset('kuliner/images/data-wisata/danau maninjau/m.jpg') }}" alt="Wisata 1"></div>
            <div class="slide"><img src="{{ asset('kuliner/images/data-wisata/danau maninjau/m.jpg') }}" alt="Wisata 1"></div>
            <!-- Add more slides as needed -->
        </div>
        <div class="arrow right" onclick="nextSlide()">&#10095;</div>
    </div>

    <!-- Information Section -->
    <div id="info" class="card">
        <h2>Danau Maninjau</h2>
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
    </script>

</body>
</html>
