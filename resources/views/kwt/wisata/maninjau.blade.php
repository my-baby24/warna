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
        <p><strong>Deskripsi Wisata:</strong> 
        Danau Maninjau merupakan sebuah danau vulkanik yang berada tepat di jantung Kabupaten Agam, Sumatera Barat. Terletak di ketinggian kurang lebih 460 meter diatas permukaan laut, danau ini membentang seluas 100 km persegi dengan kedalaman rata-rata 105 meter. Dengan luasnya tersebut, Maninjau menjadi danau terluas kesebelas di Indonesia. Menurut sejarahnya, danau ini terbentuk akibat erupsi vulkanik dari Gunung Sitinjau yang terjadi kurang lebih 52.000 tahun yang lalu. Kaldera yang terbentuk sedemikian luas kemudian berkembang menjadi sebuah danau. Hal ini sama seperti yang terjadi pada Danau Toba di Sumatera Utara dan Danau Batur di Bali.
        Di luar kacamata keilmuan, terdapat sebuah legenda yang berkembang secara turun temurun di kalangan masyarakat setempat mengenai asal muasal dari danau ini. Legenda ini dikenal orang sebagai ‘Bujang Sembilan’, yang menceritakan kisah 10 bersaudara kakak beradik yang terdiri dari 9 orang bujang dan seorang gadis.
        Alkisah sang gadis menjalin kasih dengan pemuda bernama Sigiran, tetapi kisah cinta berujung dengan munculnya fitnah dari kesembilan bujang. Para bujang ini menuduh hubungan yang terjadi antara keduanya telah melampaui batas norma masyarakat.
        Dengan tuduhan yang dilontarkan oleh kesembilan saudaranya, sang gadis beserta kekasihnya kemudian bersumpah. Keduanya akan melompat ke kawah Gunung Tinjau (Sitinjau) untuk membuktikan kesucian diri mereka.
        Sebelum melompat, mereka berkata dengan lantang, jika mereka bersalah maka gunung tersebut tidak akan meletus, tetapi jika mereka berdua tidak bersalah maka gunung tersebut akan meletus. Kisah ini pun berakhir dengan meletusnya Gunung Sitinjau sehingga membuktikan keduanya tidak bersalah.
        Daya tarik Danau Maninjau terletak pada keindahan panorama alamnya yang bisa dilihat dari kejauhan. Karenanya, tidak lengkap jika membahas Danau Maninjau tanpa membahas spot ideal untuk menikmatinya. Terutama bagi para pecinta fotografi pastinya tidak ingin melewatkan keindahan tersebut tanpa mengabadikannya.
        Spot terbaik untuk mengamati Danau Maninjau adalah dari tengah kawasan yang disebut kelok 44, yaitu dari sekitar kelok 23 hingga kelok 30. Di sekitar area inilah pemandangan bentangan danau yang dihiasi hamparan sawah nan subur terlihat sangat indah dan dapat memberikan ketenangan hati bagi mereka yang menyaksikannya.</p>

        <p><strong>Sumber:</strong> <a href="https://indonesiakaya.com/pustaka-indonesia/danau-maninjau-danau-legendaris-di-jantung-agam/#:~:text=Menurut%20sejarahnya%2C%20danau%20ini%20terbentuk,dan%20Danau%20Batur%20di%20Bali." target="_blank">https://indonesiakaya.com/</a></p>
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
