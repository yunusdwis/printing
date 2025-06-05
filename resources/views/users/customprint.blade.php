<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Custom Print Page | Prinoz</title>
    <meta name="author" content="ui-drops" />
    <meta name="description" content="Prinoz - Printing company & Service Html Template" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.svg') }}" />

    <!-- CSS Dependencies -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/color.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />

    <!-- Custom Styles -->
    <style>
        .product-image {
            width: 100%;
            height: 200px;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 8px;
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .product-image:hover img {
            transform: scale(1.05);
        }

        .preview-container {
            padding: 20px;
            border: 2px dashed #aaa;
            border-radius: 10px;
            min-height: 300px;
            background-color: #f9f9f9;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        #mockupImage {
            max-width: 100%;
            max-height: 300px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: 0.3s;
        }

        button.btn-primary {
            padding: 12px 30px;
            font-size: 16px;
            border-radius: 6px;
            background-color: #306EE8;
            border: none;
            transition: background-color 0.3s ease;
        }

        button.btn-primary:hover {
            background-color: #1e52c3;
        }

        /* Gaya untuk pilihan media dengan gambar */
        .media-select-container {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .media-option {
            cursor: pointer;
            border: 3px solid transparent;
            border-radius: 12px;
            padding: 10px;
            transition: border-color 0.3s ease;
            width: 120px;
            text-align: center;
            user-select: none;
            background: white;
            box-shadow: 0 3px 10px rgb(0 0 0 / 0.1);
        }

        .media-option img {
            max-width: 100%;
            border-radius: 8px;
        }
        

        .media-option.selected {
            border-color: #306EE8;
            box-shadow: 0 0 12px #306EE8;
        }

        .media-option p {
            margin-top: 8px;
            font-weight: 600;
            font-size: 14px;
            color: #333;
        }

        /* Mockup desain overlay pada media */
        .mockup-overlay {
            position: absolute;
            pointer-events: none; /* agar tidak mengganggu klik */
            object-fit: contain;
        }

        /* Posisi dan ukuran overlay desain sesuai media */
        /* overlay mug */
        .overlay-mug {
            top: 90px;
            left: 70px;
            width: 100px;
            height: 100px;
            border-radius: 15px;
            background: white;
            box-shadow: 0 0 8px rgba(0,0,0,0.15);
        }
        /* overlay kaos */
        .overlay-shirt {
            top: 80px;
            left: 55px;
            width: 180px;
            height: 180px;
            border-radius: 15px;
            background: white;
            box-shadow: 0 0 8px rgba(0,0,0,0.15);
        }
    </style>
</head>
<body>
    <!-- Preloader -->
    @include('users.component.PreloaderStart')

    <!-- Mouse Cursor -->
    @include('users.component.cursor')

    <!-- Offcanvas Menu -->
    @include('users.component.offcanvas')

    <!-- Header -->
    @include('users.layouts.header')

    <!-- Breadcrumb -->
    <div class="breadcrumb-section section-bg-2">
        <div class="container-fluid">
            <div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{ asset('assets/img/breadcrumb-bg.jpg') }}');">
                <div class="flower-shape">
                    <img src="{{ asset('assets/img/flower-shape.png') }}" alt="Flower Shape" />
                </div>
                <div class="star-shape">
                    <img src="{{ asset('assets/img/star-shape.png') }}" alt="Star Shape" />
                </div>
                <div class="container">
                    <div class="page-heading center">
                        <h6>Digital Printing Service</h6>
                        <h1>Custom Print Page</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Custom Print Section -->
    <section class="custom-print-section section-padding">
        <div class="container">
            <div class="section-title text-center mb-50">
                <h2>Custom Printing Interface</h2>
                <p>Upload desainmu dan lihat preview hasilnya di berbagai media cetak!</p>
            </div>

            <form id="customPrintForm" enctype="multipart/form-data">
                <div class="row justify-content-center">
                    <!-- Upload Desain -->
                    <div class="col-md-6 mb-4">
                        <label for="uploadDesign" class="form-label">Upload Desain Anda (jpg/png)</label>
                        <input type="file" class="form-control" id="uploadDesign" name="design" accept="image/*" required />
                    </div>

                    <!-- Pilih Media Cetak dengan gambar -->
                    <div class="col-md-6 mb-4">
                        <label class="form-label d-block mb-3">Pilih Media Cetak</label>
                        <div class="media-select-container" id="mediaSelectContainer">
                            <div class="media-option" data-media="mug" tabindex="0">
                                <img src="{{ asset('assets/img/mockup/gelas.png') }}" alt="Gelas" />
                                <p>Gelas</p>
                            </div>
                            <div class="media-option" data-media="shirt" tabindex="0">
                                <img src="{{ asset('assets/img/mockup/kaos.png') }}" alt="Kaos" />
                                <p>Kaos</p>
                            </div>
                        </div>
                        <input type="hidden" id="mediaSelect" required />
                    </div>

                    <!-- Tombol Preview -->
                    <div class="col-12 text-center mt-4">
                        <button type="button" class="btn btn-primary" onclick="previewDesign()">Lihat Hasil</button>
                    </div>

                    <!-- Preview Mockup -->
                    <div class="col-12 mt-5 text-center">
                        <h5>Hasil Mockup:</h5>
                        <div class="preview-container" id="previewContainer" style="position:relative;">
                            <img
                                id="mockupBase"
                                src=""
                                alt="Mockup Media"
                                style="max-width:300px; max-height:300px; border-radius: 10px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); display:none;"
                            />
                            <img
                                id="mockupDesign"
                                class="mockup-overlay"
                                src=""
                                alt="Desain Preview"
                                style="display:none;"
                            />
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- CTA Section -->
    @include('users.layouts.ctasection')

    <!-- Footer -->
    @include('users.layouts.footer')

    <!-- JavaScript Dependencies -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/all.min.js') }}"></script>
    <script src="{{ asset('assets/js/meanmenu.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script>
        // Pilih media cetak
        const mediaOptions = document.querySelectorAll('.media-option');
        const mediaSelectInput = document.getElementById('mediaSelect');
        const mockupBase = document.getElementById('mockupBase');
        const mockupDesign = document.getElementById('mockupDesign');
        const previewContainer = document.getElementById('previewContainer');

        mediaOptions.forEach(option => {
            option.addEventListener('click', () => {
                // Hapus kelas selected dari semua opsi
                mediaOptions.forEach(opt => opt.classList.remove('selected'));
                // Tambah kelas selected ke opsi yang diklik
                option.classList.add('selected');
                // Set nilai mediaSelectInput
                mediaSelectInput.value = option.dataset.media;
            });
            option.addEventListener('keydown', (e) => {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    option.click();
                }
            });
        });

        function previewDesign() {
            const fileInput = document.getElementById('uploadDesign');
            const selectedMedia = mediaSelectInput.value;

            if (!fileInput.files.length) {
                alert('Silakan upload desain Anda terlebih dahulu.');
                return;
            }
            if (!selectedMedia) {
                alert('Silakan pilih media cetak terlebih dahulu.');
                return;
            }

            // Baca file desain user
            const file = fileInput.files[0];
            const reader = new FileReader();

            reader.onload = function (e) {
                const desainURL = e.target.result;

                // Set gambar base mockup sesuai media
                if (selectedMedia === 'mug') {
                    mockupBase.src = "{{ asset('assets/img/mockup/gelas.png') }}";
                    mockupBase.style.display = 'block';
                    // Posisi dan ukuran overlay desain
                    mockupDesign.style.top = '90px';
                    mockupDesign.style.left = '70px';
                    mockupDesign.style.width = '100px';
                    mockupDesign.style.height = '100px';
                    mockupDesign.style.borderRadius = '15px';
                } else if (selectedMedia === 'shirt') {
                    mockupBase.src = "{{ asset('assets/img/mockup/kaos.png') }}";
                    mockupBase.style.display = 'block';
                    // Posisi dan ukuran overlay desain
                    mockupDesign.style.top = '80px';
                    mockupDesign.style.left = '55px';
                    mockupDesign.style.width = '180px';
                    mockupDesign.style.height = '180px';
                    mockupDesign.style.borderRadius = '15px';
                }

                // Set gambar desain overlay dan tampilkan
                mockupDesign.src = desainURL;
                mockupDesign.style.position = 'absolute';
                mockupDesign.style.display = 'block';
                mockupDesign.style.objectFit = 'contain';

                // Pastikan preview container posisi relatif untuk posisi absolut overlay
                previewContainer.style.position = 'relative';
            };

            reader.readAsDataURL(file);
        }
    </script>
</body>
</html>
