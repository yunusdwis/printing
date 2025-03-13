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

<!-- Mirrored from midone-html.vercel.app/rubick-side-menu-categories-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Feb 2025 09:32:07 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="Koo2zWJKliRELq4FawEfkQPg3CJYusp6ppGFZw4O">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, midone Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>Categories - Midone - Tailwind Admin Dashboard Template</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="dist/css/vendors/tippy.css">
    <link rel="stylesheet" href="dist/css/modal/categoriesmodal.css">
    <link rel="stylesheet" href="dist/css/themes/rubick/side-nav.css">
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
                <h2 class="intro-y mt-10 text-lg font-medium">Categories List</h2>
                <div class="mt-5 grid grid-cols-12 gap-6">
<div class="intro-y col-span-12 mt-2 flex flex-wrap items-center sm:flex-nowrap">
<div class="flex flex-wrap justify-between gap-4 w-full">
    <!-- Button Add New Product -->
    <div class="flex">
    <button id="openCategoryModal" data-tw-merge="" class="transition duration-200 border inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary mr-2 shadow-md">
    Add New Category
</button>
    </div>
    
    <!-- Button Add New Category -->
    <div class="flex ml-auto">
        <button 
            id="navigateButton" 
    onclick="window.location.href='{{ url('/rubick-side-menu-product-list-page') }}';"
            class="transition duration-200 border inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none shadow-lg bg-white text-[#1E40AF] border-[#1E40AF] hover:bg-gray-100 hover:border-[#1E40AF] hover:shadow-xl mr-4">
            Product
        </button>
        
    </div>
</div>



         
                    </div>
                    <!-- BEGIN: Data List -->
                    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
    <table data-tw-merge="" class="w-full text-left -mt-2 border-separate border-spacing-y-[10px]">
        <thead data-tw-merge="">
            <tr data-tw-merge="">
                <th data-tw-merge="" class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0">
                    CATEGORY NAME
                </th>
                <th data-tw-merge="" class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0 text-center">
                    ACTIONS
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr data-tw-merge="" class="intro-x">
                    
                    <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                        <a class="whitespace-nowrap font-medium" href="#">
                            {{ $category->category_name }}
                        </a>
                    </td>
                    <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-56 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                        <div class="flex items-center justify-center">
                        <a href="#" class="editCategoryBtn mr-3 flex items-center" data-id="{{ $category->id }}" data-name="{{ $category->name }}">
    <i data-lucide="check-square" class="stroke-1.5 mr-1 h-4 w-4"></i>
    Edit
</a>


                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this category?')" style="display:inline;">
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
        </tbody>
    </table>
</div>

                    <!-- END: Data List -->
                    

                     
                     <!-- Modal Add -->
    <div id="categoryModal" class="fixed inset-0 flex items-center justify-center z-50 hidden bg-black bg-opacity-50">
        <div class="bg-white dark:bg-darkmode-800 rounded-lg shadow-lg p-5 w-full max-w-md">
            <div class="flex justify-between items-center border-b pb-3">
                <h3 class="text-lg font-semibold">Add Category</h3>
                <button id="closeCategoryModal" class="text-gray-500 hover:text-gray-700">&times;</button>
            </div>
            <div class="mt-4">
                <form id="categoryForm" action="{{ route('categories.store') }}" method="POST">
                    @csrf
                    

                    <div class="mt-3">
                        <label for="category-name" class="inline-block mb-2">Category Name</label>
                        <input id="category-name" type="text" name="category_name" placeholder="Enter category name" class="w-full text-sm">
                    </div>
                    <div class="mt-5 flex justify-end">
                        <button type="submit" class="px-4 py-2 bg-primary text-white rounded-md">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<!-- modal edit -->
<div id="editCategoryModal" class="fixed inset-0 flex items-center justify-center z-50 hidden bg-black bg-opacity-50">
    <div class="bg-white dark:bg-darkmode-800 rounded-lg shadow-lg p-5 w-full max-w-md">
        <div class="flex justify-between items-center border-b pb-3">
            <h3 class="text-lg font-semibold">Edit Category</h3>
            <button id="closeEditCategoryModal" class="text-gray-500 hover:text-gray-700">&times;</button>
        </div>
        <div class="mt-4">
            <form id="editCategoryForm" method="POST">
                <!-- CSRF Token -->
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PUT"> <!-- Laravel membutuhkan ini untuk update -->
                
                <!-- Hidden input untuk ID Kategori -->
                <input type="hidden" id="edit-category-id" name="category_id"> 

                <div class="mt-3">
                    <label for="edit-category-name" class="inline-block mb-2">Category Name</label>
                    <input id="edit-category-name" type="text" name="category_name" placeholder="Enter category name"
                        class="w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 p-2">
                </div>
                <div class="mt-5 flex justify-end">
                    <button type="submit" class="px-4 py-2 bg-primary text-white rounded-md shadow-sm hover:bg-primary-dark">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>



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
                            <button data-tw-merge="" data-tw-dismiss="modal" type="button" class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&:hover:not(:disabled)]:bg-secondary/20 [&:hover:not(:disabled)]:dark:bg-darkmode-100/10 mr-1 w-24">Cancel</button>
                            <button data-tw-merge="" type="button" class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-danger border-danger text-white dark:border-danger w-24">Delete</button>
                        </div>
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


        <!-- JS modal-->
        <script>
            // add
    document.getElementById("openCategoryModal").addEventListener("click", function() {
        document.getElementById("categoryModal").classList.remove("hidden");
    });

    document.getElementById("closeCategoryModal").addEventListener("click", function() {
        document.getElementById("categoryModal").classList.add("hidden");
    });


    // Show the Add Category Modal
    document.getElementById("openCategoryModal").addEventListener("click", function() {
        document.getElementById("categoryModal").classList.remove("hidden");
    });

    // Close the Add Category Modal
    document.getElementById("closeCategoryModal").addEventListener("click", function() {
        document.getElementById("categoryModal").classList.add("hidden");
    });


    //modal edit
    document.addEventListener("DOMContentLoaded", function () {
    // Tangkap semua tombol Edit
    document.querySelectorAll(".editCategoryBtn").forEach(button => {
        button.addEventListener("click", function (e) {
            e.preventDefault();

            // Ambil data dari atribut tombol
            const categoryId = this.dataset.id;
            const categoryName = this.dataset.name;

            // Debugging untuk memastikan data benar
            console.log({ categoryId, categoryName });

            // Isi data ke dalam modal
            document.getElementById("edit-category-id").value = categoryId; // ID kategori
            document.getElementById("edit-category-name").value = categoryName; // Nama kategori

            // Tampilkan modal
            document.getElementById("editCategoryModal").classList.remove("hidden");
        });
    });

    // Tutup modal saat klik tombol Close
    document.getElementById("closeEditCategoryModal").addEventListener("click", function () {
        document.getElementById("editCategoryModal").classList.add("hidden");
    });

    // Tutup modal jika klik di luar area modal
    window.addEventListener("click", function (event) {
        const modal = document.getElementById("editCategoryModal");
        if (event.target === modal) {
            modal.classList.add("hidden");
        }
    });
});




    //modal delete
    // Open Modal (Manually)
    document.getElementById("openModalBtn").addEventListener("click", function() {
        document.getElementById("delete-confirmation-modal").classList.remove("hidden");
    });

    // Close Modal (Manually)
    document.getElementById("closeModalBtn").addEventListener("click", function() {
        document.getElementById("delete-confirmation-modal").classList.add("hidden");
    });



    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Menangani klik tombol edit
            document.querySelectorAll(".editCategoryBtn").forEach(button => {
                button.addEventListener("click", function (event) {
                    event.preventDefault(); // Hindari reload saat tombol diklik

                    let categoryId = this.getAttribute("data-id");

                    // Ambil data kategori dari server
                    fetch(`/rubick-side-menu-categories-page/edit/${categoryId}`)
                        .then(response => response.json())
                        .then(data => {
                            // Isi data ke dalam form modal
                            document.getElementById("edit-category-id").value = data.id;
                            document.getElementById("edit-category-for").value = data.category_for;
                            document.getElementById("edit-category-name").value = data.category_name;

                            // Tampilkan modal edit
                            const editModal = document.getElementById("editCategoryModal");
                            editModal.classList.remove("hidden");

                            // Trigger custom event untuk memuat dropdown
                            const event = new CustomEvent("show", { detail: data });
                            editModal.dispatchEvent(event);
                        })
                        .catch(error => console.error("Error fetching category data:", error));
                });
            });

            // Menangani submit form edit kategori
            document.getElementById("editCategoryForm").addEventListener("submit", function (event) {
                event.preventDefault();

                let categoryId = document.getElementById("edit-category-id").value;
                let formData = new FormData(this);

                fetch(`/rubick-side-menu-categories-page/update/${categoryId}`, {
                    method: "POST",
                    body: formData,
                    headers: {
                        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content"),
                        "X-Requested-With": "XMLHttpRequest"
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert("Category updated successfully!");
                        location.reload();
                    } else {
                        alert("Failed to update category.");
                    }
                })
                .catch(error => console.error("Error updating category:", error));
            });

            // Menutup modal edit
            document.getElementById("closeEditCategoryModal").addEventListener("click", function () {
                document.getElementById("editCategoryModal").classList.add("hidden");
            });

            // Script untuk memuat data kategori ke dropdown pada modal edit
            document.getElementById("editCategoryModal").addEventListener("show", function (event) {
                const category = event.detail; // Data kategori yang diterima
                const categoryForDropdown = document.getElementById("edit-category-for");
                categoryForDropdown.value = category.category_for || ''; // Atur nilai dropdown
            });
        });
    </script>



</body>

<!-- Mirrored from midone-html.vercel.app/rubick-side-menu-categories-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Feb 2025 09:32:08 GMT -->
</html>