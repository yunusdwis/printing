<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" class="opacity-0" lang="en"><!-- BEGIN: Head -->

<!-- Mirrored from midone-html.vercel.app/rubick-side-menu-users-layout-2-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Feb 2025 09:32:23 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="Koo2zWJKliRELq4FawEfkQPg3CJYusp6ppGFZw4O">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, midone Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>Users Layout - Midone - Tailwind Admin Dashboard Template</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="dist/css/vendors/simplebar.css">
    <link rel="stylesheet" href="dist/css/components/mobile-menu.css">
    <link rel="stylesheet" href="dist/css/modal/usersmodal.css">
    <link rel="stylesheet" href="dist/css/vendors/tippy.css">
    <link rel="stylesheet" href="dist/css/themes/rubick/side-nav.css">
    <style>
    .action-buttons form {
        display: inline-block;
        margin-left: 0px; /* jarak antara Profile dan Delete */
    }

    .btn-danger {
        padding: 6px 12px;
        border: none;
        border-radius: 6px;
        background-color: #dc3545;
        color: white;
        cursor: pointer;
        font-size: 14px;
        display: inline-flex;
        align-items: center;
        gap: 4px;
        transition: background-color 0.2s ease;
    }

    .btn-danger:hover {
        background-color: #c82333;
    }

    .action-buttons button {
        margin-right: 8px; /* jarak antar tombol secara umum */
    }

    .custom-button {
    width: 100%;
    background-color: #3B82F6; /* blue-500 */
    color: white;
    padding: 0.5rem 0;
    border: none;
    border-radius: 0.375rem;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.custom-button:hover {
    background-color: #2563EB; /* blue-600 */
}
</style>


    <link rel="stylesheet" href="dist/css/app.css"> <!-- END: CSS Assets-->
</head>
<!-- END: Head -->
<body>
    <div>
        <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="theme-switcher" class="modal group bg-black/60 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]">
            <div data-tw-merge="" class="w-[90%] ml-auto h-screen flex flex-col bg-white relative shadow-md transition-[margin-right] duration-[0.6s] -mr-[100%] group-[.show]:mr-0 dark:bg-darkmode-600 sm:w-[460px]"><a class="absolute inset-y-0 left-0 right-auto my-auto -ml-[60px] flex h-8 w-8 items-center justify-center rounded-full border border-white/90 bg-white/5 text-white/90 transition-all hover:rotate-180 hover:scale-105 hover:bg-white/10 focus:outline-none sm:-ml-[105px] sm:h-14 sm:w-14" data-tw-dismiss="modal" href="javascript:;">
                    <i data-tw-merge="" data-lucide="x" class="h-3 w-3 stroke-[1] sm:h-8 sm:w-8"></i>
                </a>
                <div data-tw-merge="" class="overflow-y-auto flex-1 p-0">
                    <div class="flex flex-col">
                        <div class="px-8 pt-6 pb-8">
                            <div class="text-base font-medium">Themes</div>
                            <div class="mt-0.5 text-slate-500">Choose your theme</div>
                            <div class="mt-5 grid grid-cols-2 gap-x-5 gap-y-3.5">
                                <div>
                                    <a href="rubick-side-menu-dashboard-overview-1-page.html" class="h-28 cursor-pointer bg-slate-50 box p-1 block border-2 border-theme-1/60">
                                        <div class="w-full h-full overflow-hidden rounded-md image-fit">
                                            <img class="w-full h-full" src="dist/images/themes/rubick.png" alt="Midone - Admin Dashboard Template">
                                        </div>
                                    </a>
                                    <div class="mt-2.5 text-center text-xs capitalize">
                                        rubick
                                    </div>
                                </div>
                                <div>
                                    <a href="icewall-side-menu-dashboard-overview-1-page.html" class="h-28 cursor-pointer bg-slate-50 box p-1 block">
                                        <div class="w-full h-full overflow-hidden rounded-md image-fit">
                                            <img class="w-full h-full" src="dist/images/themes/icewall.png" alt="Midone - Admin Dashboard Template">
                                        </div>
                                    </a>
                                    <div class="mt-2.5 text-center text-xs capitalize">
                                        icewall
                                    </div>
                                </div>
                                <div>
                                    <a href="tinker-side-menu-dashboard-overview-1-page.html" class="h-28 cursor-pointer bg-slate-50 box p-1 block">
                                        <div class="w-full h-full overflow-hidden rounded-md image-fit">
                                            <img class="w-full h-full" src="dist/images/themes/tinker.png" alt="Midone - Admin Dashboard Template">
                                        </div>
                                    </a>
                                    <div class="mt-2.5 text-center text-xs capitalize">
                                        tinker
                                    </div>
                                </div>
                                <div>
                                    <a href="enigma-side-menu-dashboard-overview-1-page.html" class="h-28 cursor-pointer bg-slate-50 box p-1 block">
                                        <div class="w-full h-full overflow-hidden rounded-md image-fit">
                                            <img class="w-full h-full" src="dist/images/themes/enigma.png" alt="Midone - Admin Dashboard Template">
                                        </div>
                                    </a>
                                    <div class="mt-2.5 text-center text-xs capitalize">
                                        enigma
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-b border-dashed"></div>
                        <div class="px-8 pt-6 pb-8">
                            <div class="text-base font-medium">Layouts</div>
                            <div class="mt-0.5 text-slate-500">Choose your layout</div>
                            <div class="mt-5 grid grid-cols-3 gap-x-5 gap-y-3.5">
                                <div>
                                    <a href="rubick-side-menu-dashboard-overview-1-page.html" class="h-24 cursor-pointer bg-slate-50 box p-1 block border-2 border-theme-1/60">
                                        <div class="w-full h-full overflow-hidden rounded-md">
                                            <img class="w-full h-full" src="dist/images/layouts/side-menu.png" alt="Midone - Admin Dashboard Template">
                                        </div>
                                    </a>
                                    <div class="mt-2.5 text-center text-xs capitalize">
                                        side menu
                                    </div>
                                </div>
                                <div>
                                    <a href="rubick-simple-menu-dashboard-overview-1-page.html" class="h-24 cursor-pointer bg-slate-50 box p-1 block">
                                        <div class="w-full h-full overflow-hidden rounded-md">
                                            <img class="w-full h-full" src="dist/images/layouts/simple-menu.png" alt="Midone - Admin Dashboard Template">
                                        </div>
                                    </a>
                                    <div class="mt-2.5 text-center text-xs capitalize">
                                        simple menu
                                    </div>
                                </div>
                                <div>
                                    <a href="rubick-top-menu-dashboard-overview-1-page.html" class="h-24 cursor-pointer bg-slate-50 box p-1 block">
                                        <div class="w-full h-full overflow-hidden rounded-md">
                                            <img class="w-full h-full" src="dist/images/layouts/top-menu.png" alt="Midone - Admin Dashboard Template">
                                        </div>
                                    </a>
                                    <div class="mt-2.5 text-center text-xs capitalize">
                                        top menu
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-b border-dashed"></div>
                        <div class="px-8 pt-6 pb-8">
                            <div class="text-base font-medium">Accent Colors</div>
                            <div class="mt-0.5 text-slate-500">
                                Choose your accent color
                            </div>
                            <div class="mt-5 grid grid-cols-2 gap-3.5">
                                <div>
                                    <a data-theme-color="default" class="h-14 cursor-pointer bg-slate-50 box p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                        <div class="h-full overflow-hidden rounded-md">
                                            <div class="flex items-center h-full gap-1 -mx-2">
                                                <div class="w-1/2 h-[200%] bg-theme-1 rotate-12 default"></div>
                                                <div class="w-1/2 h-[200%] bg-theme-2 rotate-12 default"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a data-theme-color="theme-1" class="h-14 cursor-pointer bg-slate-50 box p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                        <div class="h-full overflow-hidden rounded-md">
                                            <div class="flex items-center h-full gap-1 -mx-2">
                                                <div class="w-1/2 h-[200%] bg-theme-1 rotate-12 theme-1"></div>
                                                <div class="w-1/2 h-[200%] bg-theme-2 rotate-12 theme-1"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a data-theme-color="theme-2" class="h-14 cursor-pointer bg-slate-50 box p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                        <div class="h-full overflow-hidden rounded-md">
                                            <div class="flex items-center h-full gap-1 -mx-2">
                                                <div class="w-1/2 h-[200%] bg-theme-1 rotate-12 theme-2"></div>
                                                <div class="w-1/2 h-[200%] bg-theme-2 rotate-12 theme-2"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a data-theme-color="theme-3" class="h-14 cursor-pointer bg-slate-50 box p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                        <div class="h-full overflow-hidden rounded-md">
                                            <div class="flex items-center h-full gap-1 -mx-2">
                                                <div class="w-1/2 h-[200%] bg-theme-1 rotate-12 theme-3"></div>
                                                <div class="w-1/2 h-[200%] bg-theme-2 rotate-12 theme-3"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a data-theme-color="theme-4" class="h-14 cursor-pointer bg-slate-50 box p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                        <div class="h-full overflow-hidden rounded-md">
                                            <div class="flex items-center h-full gap-1 -mx-2">
                                                <div class="w-1/2 h-[200%] bg-theme-1 rotate-12 theme-4"></div>
                                                <div class="w-1/2 h-[200%] bg-theme-2 rotate-12 theme-4"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="border-b border-dashed"></div>
                        <div class="px-8 pt-6 pb-8">
                            <div class="text-base font-medium">Appearance</div>
                            <div class="mt-0.5 text-slate-500">
                                Choose your appearance
                            </div>
                            <div class="mt-5 grid grid-cols-2 gap-3.5">
                                <div>
                                    <a data-appearance-mode="light" class="h-12 cursor-pointer bg-slate-50 box p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                        <div class="h-full overflow-hidden rounded-md bg-slate-200"></div>
                                    </a>
                                    <div class="mt-2.5 text-center text-xs capitalize">
                                        Light
                                    </div>
                                </div>
                                <div>
                                    <a data-appearance-mode="dark" class="h-12 cursor-pointer bg-slate-50 box p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                        <div class="h-full overflow-hidden rounded-md bg-slate-900"></div>
                                    </a>
                                    <div class="mt-2.5 text-center text-xs capitalize">
                                        Dark
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fixed bottom-0 right-0 z-50 flex items-center justify-center mb-5 mr-5 text-white rounded-full shadow-lg cursor-pointer h-14 w-14 bg-theme-1" data-tw-toggle="modal" data-tw-target="#theme-switcher">
            <i data-tw-merge="" data-lucide="settings" class="stroke-1.5 w-5 h-5 animate-spin"></i>
        </div>
    </div>
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
                <h2 class="intro-y mt-10 text-lg font-medium">Users Layout</h2>
                <div class="mt-5 grid grid-cols-12 gap-6">
                    <div class="intro-y col-span-12 mt-2 flex flex-wrap items-center sm:flex-nowrap">
                    <button id="openCreateUserModal" data-tw-merge="" class="transition duration-200 border inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary mr-2 shadow-md">Add New User</button>
                        <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative">
                            <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                                <div data-tw-merge="" class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                    <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="users" class="stroke-1.5 mr-2 h-4 w-4"></i>
                                        Add Group</a>
                                    <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="message-circle" class="stroke-1.5 mr-2 h-4 w-4"></i>
                                        Send
                                        Message</a>
                                </div>
                            </div>
                        </div>
                        <div class="mx-auto hidden text-slate-500 md:block">
                            Showing 1 to 10 of 150 entries
                        </div>
                        <div class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto md:ml-0">
                            <div class="relative w-56 text-slate-500">
                                <input data-tw-merge="" type="text" placeholder="Search..." class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 !box w-56 pr-10">
                                <i data-tw-merge="" data-lucide="search" class="stroke-1.5 absolute inset-y-0 right-0 my-auto mr-3 h-4 w-4"></i>
                            </div>
                        </div>
                    </div>
                    <!-- BEGIN: Users Layout -->
                    @foreach($users as $user)
                    <div class="intro-y col-span-12 md:col-span-6">
                        <div class="box">
                            <div class="flex flex-col items-center p-5 lg:flex-row">
                                <div class="image-fit h-24 w-24 lg:mr-1 lg:h-12 lg:w-12">
                                <img class="rounded-full" 
                                src="{{ $user->profile ? asset($user->profile) : asset('dist/images/fakers/profile-defult2.jpg') }}"
                                    alt="{{ $user->name }}">
                                </div>
                                <div class="mt-3 text-center lg:ml-2 lg:mr-auto lg:mt-0 lg:text-left">
                                    <a class="font-medium" href="#">
                                    {{ $user->email }}
                                    </a>
                                    <div class="mt-0.5 text-xs text-slate-500">
                                    {{ $user->name }}
                                    </div>
                                </div>
                                <div class="mt-4 flex lg:mt-0 action-buttons">
                                    <button class="openEditUserModal transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary mr-2 px-2 py-1"
                                        data-id="{{ $user->id }}"
                                        data-name="{{ $user->name }}"
                                        data-email="{{ $user->email }}"
                                            data-role="{{ $user->role }}"
                                        data-profile="{{ asset($user->profile) }}">
                                        Edit
                                    </button>
                                    <button data-user-id="{{ $user->id }}" class="viewProfileButton transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&:hover:not(:disabled)]:bg-secondary/20 [&:hover:not(:disabled)]:dark:bg-darkmode-100/10 px-2 py-1">Profile</button>
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus user ini?')">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">
            <i class="fas fa-trash-alt"></i>Delete
        </button>
    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- BEGIN: Users Layout -->
                    <!-- BEGIN: Pagination -->
                    <div class="intro-y col-span-12 flex flex-wrap items-center sm:flex-row sm:flex-nowrap">
                        <nav class="w-full sm:mr-auto sm:w-auto">
                            <ul class="flex w-full mr-0 sm:mr-auto sm:w-auto">
                                <li class="flex-1 sm:flex-initial">
                                    <a data-tw-merge="" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3"><i data-tw-merge="" data-lucide="chevrons-left" class="stroke-1.5 h-4 w-4"></i></a>
                                </li>
                                <li class="flex-1 sm:flex-initial">
                                    <a data-tw-merge="" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3"><i data-tw-merge="" data-lucide="chevron-left" class="stroke-1.5 h-4 w-4"></i></a>
                                </li>
                                <li class="flex-1 sm:flex-initial">
                                    <a data-tw-merge="" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3">...</a>
                                </li>
                                <li class="flex-1 sm:flex-initial">
                                    <a data-tw-merge="" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3">1</a>
                                </li>
                                <li class="flex-1 sm:flex-initial">
                                    <a data-tw-merge="" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3 !box dark:bg-darkmode-400">2</a>
                                </li>
                                <li class="flex-1 sm:flex-initial">
                                    <a data-tw-merge="" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3">3</a>
                                </li>
                                <li class="flex-1 sm:flex-initial">
                                    <a data-tw-merge="" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3">...</a>
                                </li>
                                <li class="flex-1 sm:flex-initial">
                                    <a data-tw-merge="" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3"><i data-tw-merge="" data-lucide="chevron-right" class="stroke-1.5 h-4 w-4"></i></a>
                                </li>
                                <li class="flex-1 sm:flex-initial">
                                    <a data-tw-merge="" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3"><i data-tw-merge="" data-lucide="chevrons-right" class="stroke-1.5 h-4 w-4"></i></a>
                                </li>
                            </ul>
                        </nav>
                        <select data-tw-merge="" class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out text-sm border-slate-200 shadow-sm rounded-md py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1 !box mt-3 w-20 sm:mt-0">
                            <option>10</option>
                            <option>25</option>
                            <option>35</option>
                            <option>50</option>
                        </select>
                    </div>
                    <!-- END: Pagination -->


<!-- Modal Detail User -->
<div id="detailUserModal" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-black bg-opacity-50">
    <div class="bg-white p-6 rounded-2xl shadow-xl w-full max-w-md relative">
        <!-- Modal Header -->
        <div class="flex justify-between items-center border-b pb-3 mb-4">
            <h3 class="text-xl font-bold text-gray-800">Detail Pengguna</h3>
            <button id="closeDetailUserModal" class="text-gray-400 text-2xl hover:text-gray-600">&times;</button>
        </div>

        <!-- Profile Section -->
        <div class="flex flex-col items-center text-center mb-4">
            <!-- Avatar with image -->
            <div class="w-24 h-24 rounded-full overflow-hidden bg-gray-200 flex items-center justify-center mb-3">
                <img id="detail-profile"  alt="Foto Profil" class="w-full h-full object-cover">
            </div>

            <h4 class="text-lg font-semibold text-gray-700" id="detail-name"></h4>
            <p class="text-sm text-gray-500" id="detail-email"></p>
        </div>

        <!-- Detail Fields -->
        <div class="space-y-3">
            <div>
                <p class="text-xs text-gray-500 font-medium">Tanggal Verifikasi Email</p>
                <div class="detail-value" id="detail-verified"></div>
            </div>
            <div>
                <p class="text-xs text-gray-500 font-medium">Dibuat pada</p>
                <div class="detail-value" id="detail-created"></div>
            </div>
            <div>
                <p class="text-xs text-gray-500 font-medium">Terakhir Diperbarui</p>
                <div class="detail-value" id="detail-updated"></div>
            </div>
            <!-- New Role Section -->
            <div>
                <p class="text-xs text-gray-500 font-medium">Role Pengguna</p>
                <div class="detail-value" id="detail-role"></div> <!-- Display role here -->
            </div>
        </div>
    </div>
</div>


<!-- Modal Create User -->
<div id="createUserModal" class="user-modal-overlay hidden">
    <div class="user-modal-content">
        <div class="user-modal-header">
            <h3 class="user-modal-title">Add User</h3>
            <button id="closeCreateUserModal" class="user-modal-close">&times;</button>
        </div>
        <div class="mt-4">
            <form id="createUserForm" method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data">
                @csrf
                <!-- Profile Image -->
                <div class="mb-4">
                    <label for="profile" class="user-form-label">Profile Image</label>
                    <input type="file" id="profile" name="profile" accept="image/*" class="user-form-input" required>
                </div>

                <!-- Name -->
                <div class="mb-4">
                    <label for="name" class="user-form-label">Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter full name" class="user-form-input" required>
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="user-form-label">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter email" class="user-form-input" required>
                </div>

                <!-- Role -->
                <div class="mb-4">
                    <label for="role" class="user-form-label">Role</label>
                    <select id="role" name="role" class="user-form-input" required>
                        <option value="" disabled selected>Select role</option>
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="user-form-label">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter password" class="user-form-input" required>
                </div>

                <!-- Confirm Password -->
                <div class="mb-4">
                    <label for="password_confirmation" class="user-form-label">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Re-type password" class="user-form-input" required>
                </div>

                <!-- Submit Button -->
                <div class="text-right">
                    <button type="submit" class="user-submit-btn">Create User</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Edit User -->
<div id="editUserModal" class="hidden fixed inset-0 bg-gray-500 bg-opacity-75 flex justify-center items-center z-50">
    <div class="bg-white p-8 rounded-lg shadow-lg w-96">
        <div class="flex justify-between items-center">
            <h3 class="text-xl font-semibold">Edit User</h3>
            <button id="closeEditUserModal" class="text-gray-500 hover:text-gray-700">&times;</button>
        </div>
        <form id="editUserForm" enctype="multipart/form-data" method="POST">
    @csrf
    @method('PUT')
        <label for="edit-profile-img" class="block mt-4">Profile Image</label>
        <img id="edit-profile-image" src="" alt="Profile Image" class="w-24 h-24 rounded-full mt-2 mb-4" />
        <input type="file" id="edit-profile-img" name="edit-profile-img" class="mt-2 w-full border p-2 rounded-md" />


            <label for="edit-name" class="block mt-4">Name</label>
            <input type="text" id="edit-name" name="edit-name" class="mt-2 w-full border p-2 rounded-md" />

            <label for="edit-email" class="block mt-4">Email</label>
            <input type="email" id="edit-email" name="edit-email" class="mt-2 w-full border p-2 rounded-md" />

            <!-- Role -->
            <label for="edit-role" class="block mt-4">Role</label>
            <select id="edit-role" name="edit-role" class="mt-2 w-full border p-2 rounded-md">
                <option value="" disabled selected>Select role</option>
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>

            <label for="edit-password" class="block mt-4">Password</label>
            <input type="password" id="edit-password" name="edit-password" class="mt-2 w-full border p-2 rounded-md" />

            <label for="edit-confirm-password" class="block mt-4">Confirm Password</label>
            <input type="password" id="edit-confirm-password" name="edit-confirm-password" class="mt-2 w-full border p-2 rounded-md" />

            <div class="mt-6">
    <button type="submit" class="custom-button">Save Changes</button>
</div>

        </form>
    </div>
</div>

                </div>
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
    <script src="dist/js/vendors/transition.js"></script>
    <script src="dist/js/vendors/simplebar.js"></script>
    <script src="dist/js/vendors/modal.js"></script>
    <script src="dist/js/components/base/theme-color.js"></script>
    <script src="dist/js/components/base/lucide.js"></script>
    <script src="dist/js/themes/rubick.js"></script>
    <script src="dist/js/components/mobile-menu.js"></script>
    <script src="dist/js/components/themes/rubick/top-bar.js"></script>
    <script>
  document.addEventListener('DOMContentLoaded', function () {
    const profileButtons = document.querySelectorAll('.viewProfileButton');  // Tombol untuk membuka modal detail
    const modal = document.getElementById('detailUserModal');
    const closeButton = document.getElementById('closeDetailUserModal');

    // Fungsi untuk membuka modal dengan data pengguna
    profileButtons.forEach(button => {
        button.addEventListener('click', function () {
            const userId = this.dataset.userId;  // Ambil ID pengguna dari data atribut tombol
            fetchUserDetails(userId);  // Ambil detail pengguna dari server
            modal.classList.remove('hidden');
        });
    });

    // Tutup modal saat tombol × ditekan
    closeButton.addEventListener('click', function () {
        modal.classList.add('hidden');
    });

    // Tutup modal jika klik di luar konten modal
    window.addEventListener('click', function (e) {
        if (e.target === modal) {
            modal.classList.add('hidden');
        }
    });

    // Ambil data pengguna dan tampilkan di modal
    function fetchUserDetails(userId) {
        fetch(`/users/${userId}`)  // Mengambil data pengguna dari server
            .then(response => response.json())
            .then(data => {
                // Update elemen modal dengan data pengguna
                document.getElementById('detail-name').textContent = data.name;
                document.getElementById('detail-email').textContent = data.email;
                document.getElementById('detail-role').textContent = data.role;
                document.getElementById('detail-verified').textContent = data.email_verified_at;
                document.getElementById('detail-created').textContent = data.created_at;
                document.getElementById('detail-updated').textContent = data.updated_at;
                document.getElementById('detail-profile').src = data.profile || 'dist/images/fakers/profile-defult2.jpg';
            })
            .catch(error => console.error('Error fetching user details:', error));
    }
});


</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const openModalButton = document.getElementById('openCreateUserModal');
        const modal = document.getElementById('createUserModal');
        const closeButton = document.getElementById('closeCreateUserModal');

        // Buka modal saat tombol Add New User ditekan
        openModalButton.addEventListener('click', function () {
            modal.classList.remove('hidden');
        });

        // Tutup modal saat tombol × ditekan
        closeButton.addEventListener('click', function () {
            modal.classList.add('hidden');
        });

        // Tutup modal jika klik di luar konten modal
        window.addEventListener('click', function (e) {
            if (e.target === modal) {
                modal.classList.add('hidden');
            }
        });
    });
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const editModal = document.getElementById('editUserModal');
    const closeEditButton = document.getElementById('closeEditUserModal');
    const editForm = document.getElementById('editUserForm');

    // Event listener semua tombol edit
    document.querySelectorAll('.openEditUserModal').forEach(button => {
        button.addEventListener('click', function () {
            // Ambil data dari data-* attribute
            const id = this.dataset.id;
            const name = this.dataset.name;
            const email = this.dataset.email;
            const role = this.dataset.role;
            const profile = this.dataset.profile; // Ambil URL profile image

            // Isi data ke form modal
            document.getElementById('edit-name').value = name;
            document.getElementById('edit-email').value = email;
            document.getElementById('edit-role').value = role;
            document.getElementById('editUserForm').dataset.id = id; // simpan ID user

            // Set gambar profil di modal
            const profileImage = document.getElementById('edit-profile-image');
            if (profile) {
                profileImage.src = profile; // Set src untuk gambar profil
                profileImage.classList.remove('hidden'); // Pastikan gambar muncul
            }

            editModal.classList.remove('hidden');
        });
    });

    // Tutup modal
    closeEditButton.addEventListener('click', () => editModal.classList.add('hidden'));
    window.addEventListener('click', function (e) {
        if (e.target === editModal) editModal.classList.add('hidden');
    });

    // Submit form edit
    editForm.addEventListener('submit', function (e) {
        e.preventDefault();

        const id = editForm.dataset.id;
        const formData = new FormData(editForm);
        formData.append('_method', 'PUT'); // Laravel expects PUT for update

        fetch(`/update-user/${id}`, {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                alert('User updated!');
                location.reload();
            } else {
                alert('Update failed!');
            }
        })
        .catch(err => {
            console.error(err);
            alert('Error updating user!');
        });
    });
});

</script>




 <!-- END: Vendor JS Assets-->
    <!-- BEGIN: Pages, layouts, components JS Assets-->
    <!-- END: Pages, layouts, components JS Assets-->
</body>

<!-- Mirrored from midone-html.vercel.app/rubick-side-menu-users-layout-2-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Feb 2025 09:32:23 GMT -->
</html>