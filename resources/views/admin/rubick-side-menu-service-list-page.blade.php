<!DOCTYPE html><!--
Template Name: Midone - Admin Dashboard Template
Author: Left4code
Website: http://www.left4code.com/
Contact: muhammadrizki@left4code.com
Purchase: https://themeforest.net/user/left4code/portfolio
Renew Support: https://themeforest.net/user/left4code/portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html xmlns="http://www.w3.org/1999/xhtml" class="opacity-0" lang="en"><!-- BEGIN: Head -->

<!-- Mirrored from midone-html.vercel.app/rubick-side-menu-product-list-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Feb 2025 09:32:14 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="Koo2zWJKliRELq4FawEfkQPg3CJYusp6ppGFZw4O">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, midone Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>service List - Midone - Tailwind Admin Dashboard Template</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="dist/css/vendors/tippy.css">
    <link rel="stylesheet" href="dist/css/themes/rubick/side-nav.css">
    <link rel="stylesheet" href="dist/css/modal/servicemodal.css">
    <link rel="stylesheet" href="dist/css/vendors/simplebar.css">
    <link rel="stylesheet" href="dist/css/components/mobile-menu.css">
    <link rel="stylesheet" href="dist/css/app.css"> <!-- END: CSS Assets-->
</head>
<!-- END: Head -->
<body>
    
    <div class="rubick px-5 sm:px-8 py-5 before:content-[''] before:bg-gradient-to-b before:from-theme-1 before:to-theme-2 dark:before:from-darkmode-800 dark:before:to-darkmode-800 before:fixed before:inset-0 before:z-[-1]">
        <!-- BEGIN: Mobile Menu -->
        @include('admin.menu.mobile-menu')
        <!-- END: Mobile Menu -->
        <div class="mt-[4.7rem] flex md:mt-0">
            <!-- BEGIN: Side Menu -->
            @include('admin.menu.side-menu')
            <!-- END: Side Menu -->
            <!-- BEGIN: Content -->
            <div class="md:max-w-auto min-h-screen min-w-0 max-w-full flex-1 rounded-[30px] bg-slate-100 px-4 pb-10 before:block before:h-px before:w-full before:content-[''] dark:bg-darkmode-700 md:px-[22px]">
                <!-- BEGIN: Top Bar -->
                @include('admin.layouts.Topbar')
                <!-- END: Top Bar -->
                <h2 class="intro-y mt-10 text-lg font-medium">Service List</h2>
                <div class="mt-5 grid grid-cols-12 gap-6">
                    <div class="intro-y col-span-12 mt-2 flex flex-wrap items-center sm:flex-nowrap">
                    <button id="openModalButton" class="transition duration-200 border inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary mr-2 shadow-md">
    Add New Service
</button>
                        
                        
                    </div>
                    <!-- BEGIN: Data List -->
                    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                        <table data-tw-merge="" class="w-full text-left -mt-2 border-separate border-spacing-y-[10px]">
                            <thead data-tw-merge="" class="">
                                <tr data-tw-merge="" class="">
                                    <th data-tw-merge="" class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0">
                                        IMAGES
                                    </th>
                                    <th data-tw-merge="" class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0">
                                        SERVICE
                                    </th>
                                    <th data-tw-merge="" class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0 text-center">
                                        PRICE
                                    </th>
                                    <th data-tw-merge="" class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0 text-center">
                                        DETAILS
                                    </th>
                                    <th data-tw-merge="" class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0 text-center">
                                        ACTIONS
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            @if ($services->isEmpty())
        <tr>
            <td colspan="6" class="text-center text-gray-500 py-3">
                Tidak ada service yang tersedia. Silakan tambahkan service.
            </td>
        </tr>
    @else
                            @foreach($services as $service)
                                <tr data-tw-merge="" class="intro-x">
                                    <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-40 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                        <div class="flex">
                                            <div class="image-fit zoom-in h-10 w-10">
                                                <img data-placement="top" title="Uploaded at 19 June 2020" src="{{ asset('storage/' . $service->main_image) }}" alt="{{ $service->name_service }}" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                        <a class="whitespace-nowrap font-medium" href="#">
                                        {{ $service->name_service }}
                                        </a>
                                        
                                    </td>
                                    <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 text-center shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                    ${{ number_format($service->price, ) }}
                                    </td>
                                    <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-40 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                    <div class="flex items-center justify-center text-success">
    <i data-tw-merge="" data-lucide="check-square" class="stroke-1.5 mr-2 h-4 w-4" onclick="openModalServiceDetailsUnique({{ $service->id }})"></i>
</div>



                                    </td>
                                    <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-56 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600 before:absolute before:inset-y-0 before:left-0 before:my-auto before:block before:h-8 before:w-px before:bg-slate-200 before:dark:bg-darkmode-400">
                                        <div class="flex items-center justify-center">
                                        <a data-id="{{ $service->id }}" class="mr-3 flex items-center cursor-pointer">
    <i data-lucide="check-square" class="stroke-1.5 mr-1 h-4 w-4"></i>
    Edit
</a>
<form action="{{ route('services.destroy', $service->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this service?')" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="flex items-center text-danger">
                                    <i data-tw-merge="" data-lucide="trash" class="stroke-1.5 mr-1 h-4 w-4"></i>
                                    Delete
                                </button>
                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <!-- END: Data List -->
                    <!-- BEGIN: Pagination -->
                    
                    <!-- END: Pagination -->










<!-- Modal detail -->
<div id="modalDetailServiceUnique" class="fixed inset-0 flex items-center justify-center z-50 hidden bg-black bg-opacity-50">
    <div class="bg-white dark:bg-darkmode-800 rounded-lg shadow-lg p-4 w-11/12 max-w-md">
        <div class="flex justify-between items-center border-b pb-2">
            <h3 id="modalServiceNameUnique" class="text-base font-semibold">Service Information</h3>
            <button id="closeServiceModalUnique" class="text-gray-500 hover:text-gray-700 text-xl" onclick="closeModalServiceUnique()">×</button>
        </div>
        <div class="mt-3">
            <img id="modalMainImageUnique" class="w-full h-auto rounded mb-2" src="" alt="Service Main Image">
            <p class="text-sm"><strong>Price:</strong> <span id="modalServicePriceUnique"></span></p>
            <p class="text-sm"><strong>Description:</strong> <span id="modalServiceDescriptionUnique"></span></p>
            <p class="text-sm"><strong>Additional Words:</strong> <span id="modalAdditionalWordsUnique"></span></p>
            <div id="modalAdditionalImagesUnique" class="mt-2">
                <strong>Additional Images:</strong>
                <div class="flex gap-2 mt-1">
                    <!-- Additional images will be inserted dynamically here -->
                </div>
            </div>
        </div>
        <div class="mt-4 flex justify-end">
            <button class="px-3 py-1 bg-primary text-white rounded-md text-sm" onclick="closeModalServiceUnique()">Close</button>
        </div>
    </div>
</div>


<!-- Modal Add -->
<div id="serviceModal" class="fixed inset-0 flex items-center justify-center z-50 hidden bg-black bg-opacity-50">
    <div class="bg-white dark:bg-darkmode-800 rounded-lg shadow-lg p-5 w-full max-w-md max-h-[80vh] overflow-y-auto">
        <div class="flex justify-between items-center border-b pb-3">
            <h3 class="text-lg font-semibold">Add Service</h3>
            <button id="closeServiceModal" class="text-gray-500 hover:text-gray-700">&times;</button>
        </div>
        <div class="mt-4">
            <form id="addServiceForm" action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="add-name-service" class="inline-block mb-2">Service Name</label>
                    <input id="add-name-service" type="text" name="name_service" placeholder="Enter service name" class="w-full text-sm" required>
                </div>
                <div class="mt-3">
                    <label for="add-main-image" class="inline-block mb-2">Main Image</label>
                    <input id="add-main-image" type="file" name="main_image" class="w-full text-sm" required>
                </div>
                <div class="mt-3">
                    <label for="add-description" class="inline-block mb-2">Description</label>
                    <textarea id="add-description" name="description" placeholder="Enter service description" class="w-full text-sm" required></textarea>
                </div>
                <div class="mt-3">
                    <label for="add-additional-words" class="inline-block mb-2">Additional Words</label>
                    <textarea id="add-additional-words" name="additional_words" placeholder="Enter additional words" class="w-full text-sm"></textarea>
                </div>
                <div class="mt-3">
                    <label for="add-additional-images" class="inline-block mb-2">Additional Images</label>
                    <input id="add-additional-images" type="file" name="additional_images[]" class="w-full text-sm" multiple>
                </div>
                <div class="mt-3">
                    <label for="add-price" class="inline-block mb-2">Price</label>
                    <input id="add-price" type="number" name="price" placeholder="Enter price" class="w-full text-sm" min="0" required>
                </div>
                <div class="mt-5 flex justify-end">
                    <button type="submit" class="px-4 py-2 bg-primary text-white rounded-md">Add Service</button>
                </div>
            </form>
        </div>
    </div>
</div>

@if($services->isNotEmpty())
    <!-- Modal Edit -->
    <div id="editServiceModal" class="fixed inset-0 flex items-center justify-center z-50 hidden bg-black bg-opacity-50">
        <div class="bg-white dark:bg-darkmode-800 rounded-lg shadow-lg p-5 w-full max-w-md max-h-[80vh] overflow-y-auto">
            <div class="flex justify-between items-center border-b pb-3">
                <h3 class="text-lg font-semibold">Edit Service</h3>
                <button id="closeEditServiceModal" class="text-gray-500 hover:text-gray-700">&times;</button>
            </div>
            <div class="mt-4">
            <form id="editServiceForm" action="" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
                    
                    <div>
                        <label for="edit-name-service" class="inline-block mb-2">Service Name</label>
                        <input id="edit-name-service" type="text" name="name_service" placeholder="Enter service name" class="w-full text-sm" required>
                    </div>
                    <div class="mt-3">
        <label for="edit-main-image" class="inline-block mb-2">Main Image</label>
        <img id="edit-main-image-preview" src="" alt="Main Image Preview" class="mt-2 hidden w-32 h-32 object-cover rounded border">
        <input id="edit-main-image" type="file" name="main_image" class="w-full text-sm">
        
    </div>
                    <div class="mt-3">
                        <label for="edit-description" class="inline-block mb-2">Description</label>
                        <textarea id="edit-description" name="description" placeholder="Enter service description" class="w-full text-sm" required></textarea>
                    </div>
                    <div class="mt-3">
                        <label for="edit-additional-words" class="inline-block mb-2">Additional Words</label>
                        <textarea id="edit-additional-words" name="additional_words" placeholder="Enter additional words" class="w-full text-sm"></textarea>
                    </div>
                    <div class="mt-3">
                        <label for="edit-additional-images" class="inline-block mb-2">Additional Images</label>
                        <input id="edit-additional-images" type="file" name="additional_images[]" class="w-full text-sm" multiple>
                        
                    </div>
                    <div class="mt-5 flex justify-end">
                        <button type="submit" class="px-4 py-2 bg-primary text-white rounded-md">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endif

              
                <!-- BEGIN: Delete Confirmation Modal -->
                <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="delete-confirmation-modal" class="modal group bg-black/60 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]">
                    <div data-tw-merge="" class="w-[90%] mx-auto bg-white relative rounded-md shadow-md transition-[margin-top,transform] duration-[0.4s,0.3s] -mt-16 group-[.show]:mt-16 group-[.modal-static]:scale-[1.05] dark:bg-darkmode-600 sm:w-[460px]">
                        <div class="p-5 text-center">
                            <i data-tw-merge="" data-lucide="x-circle" class="stroke-1.5 mx-auto mt-3 h-16 w-16 text-danger"></i>
                            <div class="mt-5 text-3xl">Are you sure?</div>
                            <div class="mt-2 text-slate-500">
                                Do you really want to delete these records? <br>
                                This process cannot be undone.
                            </div>
                        </div>
                            <div class="px-5 pb-8 text-center">
                            <form action="" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?');">
                        @csrf
                        @method('DELETE')
                                <button data-tw-merge="" data-tw-dismiss="modal" type="button" class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&:hover:not(:disabled)]:bg-secondary/20 [&:hover:not(:disabled)]:dark:bg-darkmode-100/10 mr-1 w-24">Cancel</button>
                                <button data-tw-merge="" type="submit" class="btn-confirm-delete transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer bg-danger border-danger text-white dark:border-danger w-24">Delete</button>
                            </div>
                            </form>
                    </div>
                </div>
                <!-- END: Delete Confirmation Modal -->
            </div>
            <!-- END: Content -->
        </div>
    </div>
    <!-- BEGIN: Vendor JS Assets-->
    <script src="dist/js/vendors/dom.js"></script>
    <script src="dist/js/vendors/tailwind-merge.js"></script>
    <script src="dist/js/vendors/lucide.js"></script>
    <script src="dist/js/vendors/popper.js"></script>
    <script src="dist/js/vendors/dropdown.js"></script>
    <script src="dist/js/vendors/tippy.js"></script>
    <script src="dist/js/vendors/modal.js"></script>
    <script src="dist/js/vendors/transition.js"></script>
    <script src="dist/js/vendors/simplebar.js"></script>
    <script src="dist/js/components/base/theme-color.js"></script>
    <script src="dist/js/components/base/lucide.js"></script>
    <script src="dist/js/components/base/tippy.js"></script>
    <script src="dist/js/themes/rubick.js"></script>
    <script src="dist/js/components/mobile-menu.js"></script>
    <script src="dist/js/components/themes/rubick/top-bar.js"></script> <!-- END: Vendor JS Assets-->
    <!-- BEGIN: Pages, layouts, components JS Assets-->
    <!-- END: Pages, layouts, components JS Assets-->

<script>
  document.getElementById("openModalButton").addEventListener("click", function() {
    // Menampilkan modal
    document.getElementById("serviceModal").classList.remove("hidden");
});

document.getElementById("closeServiceModal").addEventListener("click", function() {
    // Menyembunyikan modal
    document.getElementById("serviceModal").classList.add("hidden");
});

// Menutup modal jika klik di luar modal
window.addEventListener("click", function(event) {
    if (event.target === document.getElementById("serviceModal")) {
        document.getElementById("serviceModal").classList.add("hidden");
    }
});

//js warna 
document.getElementById("color").addEventListener("input", function() {
    const colorInput = document.getElementById("color");
    const colorError = document.getElementById("colorError");

    // Cek apakah input sesuai dengan format kode warna (#RRGGBB atau #RGBA)
    const colorRegex = /^#[0-9A-F]{6}$/i;

    // Jika input sesuai dengan format kode warna, validasi sukses
    if (colorRegex.test(colorInput.value.toUpperCase())) {
        colorInput.value = colorInput.value.toUpperCase();  // Menyusun input menjadi kapital
        colorError.classList.add("hidden");  // Menyembunyikan pesan error
    } else {
        // Menampilkan pesan error jika input tidak valid
        colorError.classList.remove("hidden");
    }
});
</script>

  <!-- modal detail service-->
  <script>
    const uniqueServices = @json($services); // Ambil data semua layanan dari PHP

    function openModalServiceDetailsUnique(serviceId) {
        const service = uniqueServices.find(s => s.id === serviceId);

        if (service) {
            // Isi data ke modal
            document.getElementById('modalServiceNameUnique').textContent = service.name_service;
            document.getElementById('modalMainImageUnique').src = `/storage/${service.main_image}`;
            document.getElementById('modalServicePriceUnique').textContent = `Rp ${service.price.toLocaleString()}`;
            document.getElementById('modalServiceDescriptionUnique').textContent = service.description;
            document.getElementById('modalAdditionalWordsUnique').textContent = service.additional_words || '-';

            // Tampilkan gambar tambahan jika ada
            const additionalImagesContainer = document.querySelector('#modalAdditionalImagesUnique .flex');
            additionalImagesContainer.innerHTML = ''; // Kosongkan kontainer
            const additionalImages = JSON.parse(service.additional_images || '[]');
            if (additionalImages.length > 0) {
                additionalImages.forEach(image => {
                    const imgElement = document.createElement('img');
                    imgElement.src = `/storage/${image}`;
                    imgElement.classList.add('w-16', 'h-16', 'rounded', 'border');
                    additionalImagesContainer.appendChild(imgElement);
                });
            } else {
                additionalImagesContainer.textContent = 'No additional images.';
            }

            // Tampilkan modal
            document.getElementById('modalDetailServiceUnique').classList.remove('hidden');
        } else {
            alert('Service not found!');
        }
    }

    function closeModalServiceUnique() {
        document.getElementById('modalDetailServiceUnique').classList.add('hidden');
    }
</script>


<script>
   document.addEventListener("DOMContentLoaded", function () {
    const editModal = document.getElementById("editServiceModal");
    const closeEditModalButton = document.getElementById("closeEditServiceModal");
    const editForm = document.getElementById("editServiceForm");

    // Tombol Edit
    document.querySelectorAll("a[data-id]").forEach(button => {
        button.addEventListener("click", function () {
            const serviceId = this.dataset.id;

            // Reset form
            editForm.reset();
            document.getElementById("edit-main-image-preview").classList.add("hidden");

            // Fetch service data
            fetch(`/services/${serviceId}`)
                .then(response => {
                    if (!response.ok) throw new Error("Failed to fetch service data");
                    return response.json();
                })
                .then(service => {
                    // Isi form
                    editForm.action = `/services/${service.id}`;
                    document.getElementById("edit-name-service").value = service.name_service;
                    document.getElementById("edit-description").value = service.description || '';
                    document.getElementById("edit-additional-words").value = service.additional_words || '';

                    // Preview gambar utama
                    if (service.main_image) {
                        const mainImagePreview = document.getElementById("edit-main-image-preview");
                        mainImagePreview.src = `/storage/${service.main_image}`;
                        mainImagePreview.classList.remove("hidden");
                    }

                    // Tampilkan gambar tambahan
                    if (service.additional_images) {
                        console.log("Additional images:", JSON.parse(service.additional_images));
                    }

                    editModal.classList.remove("hidden");
                })
                .catch(error => {
                    console.error("Error fetching service data:", error);
                    alert("Failed to load service data. Please try again.");
                });
        });
    });

    // Tombol Close
    closeEditModalButton.addEventListener("click", function () {
        editModal.classList.add("hidden");
    });

    // Klik di luar modal
    window.addEventListener("click", function (event) {
        if (event.target === editModal) {
            editModal.classList.add("hidden");
        }
    });
});

</script>




</body>

<!-- Mirrored from midone-html.vercel.app/rubick-side-menu-product-list-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Feb 2025 09:32:15 GMT -->
</html>