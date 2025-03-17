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

<!-- Mirrored from midone-html.vercel.app/rubick-side-menu-blog-layout-2-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Feb 2025 09:32:26 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="Koo2zWJKliRELq4FawEfkQPg3CJYusp6ppGFZw4O">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, midone Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>Blog - Midone - Tailwind Admin Dashboard Template</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="dist/css/vendors/tippy.css">
    <link rel="stylesheet" href="dist/css/themes/rubick/side-nav.css">
    <link rel="stylesheet" href="dist/css/modal/blogmodal.css">
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
                <div class="intro-y mt-8 flex flex-col items-center sm:flex-row">
                    <h2 class="mr-auto text-lg font-medium">Blog Layout</h2>
                    <div class="mt-4 flex w-full sm:mt-0 sm:w-auto">
                        <button data-tw-merge="" id="openAddBlogModal" class="transition duration-200 border inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary mr-2 shadow-md">Add New Post</button>
                        
                    </div>
                </div>
                <div class="intro-y mt-5 grid grid-cols-12 gap-6">
                    <!-- BEGIN: Blog Layout -->
                    @foreach($blogs as $blog)
                    <div class="intro-y box col-span-12 md:col-span-6">
                        <div class="image-fit h-[320px] before:absolute before:left-0 before:top-0 before:z-10 before:block before:h-full before:w-full before:bg-gradient-to-t before:from-black/90 before:to-black/10">
                        <img class="rounded-t-md" src="{{ asset('storage/' . $blog->gambar) }}" alt="{{ $blog->judul }}">
                            <div class="absolute z-10 flex w-full items-center px-5 pt-6">
                                <div class="image-fit h-10 w-10 flex-none">
                                    
                                </div>
                                <div class="ml-3 mr-auto text-white">
                                    
                                    
                                </div>
                                <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative ml-3"><a data-tw-toggle="dropdown" aria-expanded="false" href="javascript:;" class="cursor-pointer flex h-8 w-8 items-center justify-center rounded-full bg-white/20"><i data-tw-merge="" data-lucide="more-vertical" class="stroke-1.5 h-4 w-4 text-white"></i>
                                    </a>
                                    <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                                        <div data-tw-merge="" class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                        <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item edit-post-btn" 
   data-id="{{ $blog->id }}" 
   data-judul="{{ $blog->judul }}" 
   data-isi="{{ $blog->isi_blog }}" 
   data-gambar="{{ asset('storage/' . $blog->gambar) }}" 
   data-tag="{{ implode(',', json_decode($blog->tag)) }}"  
   data-view="{{ $blog->view }}">
   <i data-lucide="edit" class="stroke-1.5 mr-2 h-4 w-4"></i>
   Edit Post
</a>

            
<form action="{{ route('blog.destroy', $blog->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus blog ini?')">
    @csrf
    @method('DELETE')
    <button type="submit" class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item">
        <i data-tw-merge="" data-lucide="trash" class="stroke-1.5 mr-2 h-4 w-4"></i>
        Delete Post
    </button>
</form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="absolute bottom-0 z-10 px-5 pb-6 text-white">
                            @php
                $tags = json_decode($blog->tag, true) ?? [];
            @endphp
            @foreach(array_slice($tags, 0, 3) as $tag)
                <span class="rounded bg-white/20 px-2 py-1">{{ $tag }}</span>
            @endforeach
            @if(count($tags) > 3)
                <span class="rounded bg-white/20 px-2 py-1">...</span>
            @endif
            <a class="mt-3 block text-xl font-medium" href="{{ route('blog.detail', $blog->id) }}">
    {{ $blog->judul }}
</a>

                            </div>
                        </div>
                        <div class="p-5 text-slate-600 dark:text-slate-500">
                        {!! \Illuminate\Support\Str::limit($blog->isi_blog, 50, '...') !!}
</div>


                        <div class="border-t border-slate-200/60 px-5 pb-5 pt-3 dark:border-darkmode-400">
                            <div class="flex w-full text-xs text-slate-500 sm:text-sm">
            <div class="mr-2">Views: <span class="font-medium">{{ $blog->view }}</span></div>
                            </div>
                            <div class="mt-3 flex w-full items-center">
                                
                                
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- END: Blog Layout -->
                    
                


                </div>

<!-- Modal Add -->
<div id="addBlogModal" class="hidden fixed inset-0 flex items-center justify-center z-50">
    <div class="bg-white rounded-lg shadow-lg max-w-90 w-500px max-h-80vh overflow-y-auto p-4">
        <!-- Modal Header -->
        <div class="border-b pb-2 mb-4 flex justify-between items-center">
            <h3 class="text-lg font-semibold text-gray-800">Add Blog</h3>
            <button id="closeAddBlogModal" class="text-gray-600 hover:text-gray-800">&times;</button>
        </div>

        <!-- Modal Form -->
        <form id="addBlogForm" action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
            <!-- Gambar -->
            <div class="mb-4">
                <label for="gambar" class="block text-sm font-medium text-gray-700">Gambar</label>
                <input type="file" id="gambar" name="gambar" accept="image/*" required class="w-full border rounded-md p-2">
            </div>

            <!-- Judul -->
            <div class="mb-4">
                <label for="judul" class="block text-sm font-medium text-gray-700">Judul</label>
                <input type="text" id="judul" name="judul" placeholder="Judul Blog" required class="w-full border rounded-md p-2">
            </div>

            <!-- Isi Blog -->
            <div class="mb-4">
    <label for="isi_blog" class="block text-sm font-medium text-gray-700">Isi Blog</label>
    <textarea id="isi_blog" name="isi_blog" placeholder="Tulis isi blog di sini..." rows="4" class="w-full border rounded-md p-2"></textarea>

</div>

            <!-- Tag -->
            <div class="mb-4">
                <label for="tag" class="block text-sm font-medium text-gray-700">Tag (Pisahkan dengan koma)</label>
                <input type="text" id="tag" name="tag" placeholder="Tag1, Tag2, Tag3" class="w-full border rounded-md p-2">
            </div>

            <!-- Submit Button -->
            <div class="mt-4 flex justify-end">
                <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-800">Submit</button>
            </div>
        </form>
    </div>
</div>


<!-- Modal Edit -->
<div id="editBlogModal" class="hidden fixed inset-0 flex items-center justify-center z-50">
    <div class="bg-white rounded-lg shadow-lg max-w-90 w-500px max-h-80vh overflow-y-auto p-4">
        <!-- Modal Header -->
        <div class="border-b pb-2 mb-4 flex justify-between items-center">
            <h3 class="text-lg font-semibold text-gray-800">Edit Blog</h3>
            <button id="closeEditBlogModal" class="text-gray-600 hover:text-gray-800">&times;</button>
        </div>

        <!-- Modal Form -->
        <form id="editBlogForm" action="{{ route('blog.update') }}" method="POST" enctype="multipart/form-data">
            @csrf <!-- Tambahkan token CSRF untuk keamanan -->
            <!-- Hidden Input for Blog ID -->
            <input type="hidden" id="blogId" name="blogId">

            <!-- Gambar -->
            <div class="mb-4">
                <label for="editGambar" class="block text-sm font-medium text-gray-700">Gambar</label>
                <input type="file" id="editGambar" name="editGambar" accept="image/*" class="w-full border rounded-md p-2">
            </div>

            <!-- Judul -->
            <div class="mb-4">
                <label for="editJudul" class="block text-sm font-medium text-gray-700">Judul</label>
                <input type="text" id="editJudul" name="editJudul" placeholder="Judul Blog" required class="w-full border rounded-md p-2">
            </div>

            <!-- Isi Blog -->
            <div class="mb-4">
    <label for="editIsiBlog" class="block text-sm font-medium text-gray-700">Isi Blog</label>
    <textarea id="editIsiBlog" name="editIsiBlog" placeholder="Tulis isi blog di sini..." rows="4" required class="w-full border rounded-md p-2"></textarea>
</div>

            <!-- Tag -->
            <div class="mb-4">
                <label for="editTag" class="block text-sm font-medium text-gray-700">Tag (Pisahkan dengan koma)</label>
                <input type="text" id="editTag" name="editTag" placeholder="Tag1, Tag2, Tag3" class="w-full border rounded-md p-2">
            </div>

            <!-- Submit Button -->
            <div class="mt-4 flex justify-end">
                <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-800">Update</button>
            </div>
        </form>
    </div>
</div>





            </div>
            <!-- END: Content -->
        </div>
    </div>
    <!-- BEGIN: Vendor JS Assets-->
    <script src="https://cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>
    <script src="dist/js/vendors/dom.js"></script>
    <script src="dist/js/vendors/tailwind-merge.js"></script>
    <script src="dist/js/vendors/lucide.js"></script>
    <script src="dist/js/vendors/popper.js"></script>
    <script src="dist/js/vendors/dropdown.js"></script>
    <script src="dist/js/vendors/tippy.js"></script>
    <script src="dist/js/vendors/transition.js"></script>
    <script src="dist/js/vendors/simplebar.js"></script>
    <script src="dist/js/vendors/modal.js"></script>
    <script src="dist/js/components/base/theme-color.js"></script>
    <script src="dist/js/components/base/lucide.js"></script>
    <script src="dist/js/components/base/tippy.js"></script>
    <script src="dist/js/themes/rubick.js"></script>
    <script src="dist/js/components/mobile-menu.js"></script>
    <script src="dist/js/components/themes/rubick/top-bar.js"></script> <!-- END: Vendor JS Assets-->
    <!-- BEGIN: Pages, layouts, components JS Assets-->
    <!-- END: Pages, layouts, components JS Assets-->

    <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>
    



    <script>
document.addEventListener("DOMContentLoaded", function () {
    let editorInstance; // Variabel untuk menyimpan instance CKEditor

    // Membuka modal add
    document.getElementById("openAddBlogModal").addEventListener("click", function () {
        document.getElementById("addBlogModal").classList.remove("hidden");

        // Inisialisasi CKEditor untuk textarea isi_blog jika belum diinisialisasi
        if (!editorInstance) {
            ClassicEditor.create(document.querySelector("#isi_blog"))
                .then(editor => {
                    editorInstance = editor;
                    console.log("CKEditor initialized.");
                })
                .catch(error => {
                    console.error("Error initializing CKEditor:", error);
                });
        }
    });

    // Tombol untuk menutup modal
    document.getElementById("closeAddBlogModal").addEventListener("click", function () {
        // Menyembunyikan modal
        document.getElementById("addBlogModal").classList.add("hidden");

        // Hapus instance CKEditor jika modal ditutup
        if (editorInstance) {
            editorInstance.destroy()
                .then(() => {
                    editorInstance = null;
                    console.log("CKEditor destroyed.");
                })
                .catch(error => console.error("Error destroying CKEditor:", error));
        }
    });

    // Menutup modal jika klik di luar area modal
    window.addEventListener("click", function (event) {
        const modal = document.getElementById("addBlogModal");
        if (event.target === modal) {
            modal.classList.add("hidden");

            // Hapus instance CKEditor jika modal ditutup
            if (editorInstance) {
                editorInstance.destroy()
                    .then(() => {
                        editorInstance = null;
                        console.log("CKEditor destroyed.");
                    })
                    .catch(error => console.error("Error destroying CKEditor:", error));
            }
        }
    });

    // Sinkronkan isi CKEditor ke textarea sebelum submit
    document.getElementById("addBlogForm").addEventListener("submit", function (event) {
        if (editorInstance) {
            const editorData = editorInstance.getData(); // Ambil data dari CKEditor
            document.querySelector("#isi_blog").value = editorData; // Sinkronkan ke textarea
            console.log("Data CKEditor disinkronkan:", editorData);
        }
    });
});
</script>




<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Referensi elemen modal
        const modal = document.getElementById('editBlogModal');
        const closeModalBtn = document.getElementById('closeEditBlogModal');

        // Tombol Edit Post
        const editButtons = document.querySelectorAll('.edit-post-btn');

        // Variabel untuk menyimpan instance editor
        let editorInstance;

        // Tambahkan event listener ke setiap tombol edit
        editButtons.forEach((button) => {
            button.addEventListener('click', function () {
                // Ambil data dari atribut tombol
                const blogId = this.getAttribute('data-id');
                const judul = this.getAttribute('data-judul');
                const isi = this.getAttribute('data-isi');
                const gambar = this.getAttribute('data-gambar');
                const tag = this.getAttribute('data-tag');

                // Isi data ke dalam form modal
                document.getElementById('blogId').value = blogId;
                document.getElementById('editJudul').value = judul;
                document.getElementById('editIsiBlog').value = isi;
                document.getElementById('editTag').value = tag;

                // Tampilkan preview gambar
                const imageInput = document.getElementById('editGambar');
                const imagePreview = document.createElement('img');
                imagePreview.src = gambar;
                imagePreview.alt = "Preview Gambar";
                imagePreview.classList.add('w-full', 'rounded-md', 'mb-2');
                imageInput.insertAdjacentElement('beforebegin', imagePreview);

                // Hapus instance editor sebelumnya jika ada
                if (editorInstance) {
                    editorInstance.destroy()
                        .then(() => {
                            initializeEditor();
                        });
                } else {
                    initializeEditor();
                }

                // Tampilkan modal
                modal.classList.remove('hidden');
            });
        });

        function initializeEditor() {
            ClassicEditor.create(document.querySelector("#editIsiBlog"))
                .then(editor => {
                    editorInstance = editor; // Simpan instance editor
                })
                .catch(error => {
                    console.error("Error initializing editor:", error);
                });
        }

        // Tombol untuk menutup modal
        closeModalBtn.addEventListener('click', function () {
            modal.classList.add('hidden');

            // Hapus preview gambar saat modal ditutup
            const previewImage = document.querySelector('#editBlogModal img');
            if (previewImage) {
                previewImage.remove();
            }

            // Hapus instance CKEditor
            if (editorInstance) {
                editorInstance.destroy()
                    .then(() => {
                        editorInstance = null; // Reset instance editor
                    });
            }
        });

        // Close modal jika klik di luar modal
        window.addEventListener('click', function (event) {
            if (event.target === modal) {
                modal.classList.add('hidden');

                // Hapus preview gambar saat modal ditutup
                const previewImage = document.querySelector('#editBlogModal img');
                if (previewImage) {
                    previewImage.remove();
                }

                // Hapus instance CKEditor
                if (editorInstance) {
                    editorInstance.destroy()
                        .then(() => {
                            editorInstance = null; // Reset instance editor
                        });
                }
            }
        });
    });
</script>




</body>

<!-- Mirrored from midone-html.vercel.app/rubick-side-menu-blog-layout-2-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Feb 2025 09:32:26 GMT -->
</html>