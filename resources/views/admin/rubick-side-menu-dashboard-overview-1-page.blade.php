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

<!-- Mirrored from midone-html.vercel.app/rubick-side-menu-dashboard-overview-1-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Feb 2025 09:28:45 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="Koo2zWJKliRELq4FawEfkQPg3CJYusp6ppGFZw4O">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, midone Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>Dashboard - Midone - Tailwind Admin Dashboard Template</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="dist/css/vendors/tippy.css">
    <link rel="stylesheet" href="dist/css/vendors/litepicker.css">
    <link rel="stylesheet" href="dist/css/vendors/tiny-slider.css">
    <link rel="stylesheet" href="dist/css/themes/rubick/side-nav.css">
    <link rel="stylesheet" href="dist/css/vendors/leaflet.css">
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
                <div class="grid grid-cols-16 gap-6">
                    <div class="col-span-16 2xl:col-span-9">
                        <div class="grid grid-cols-16 gap-6">
                            <!-- BEGIN: General Report -->
                            <div class="col-span-12 mt-8">
                                    <div class="intro-y flex h-10 items-center">
                                                                        <h2 class="mr-5 truncate text-lg font-medium">General Report</h2>
                                                                        
                                                                    </div>
                                                                    <div class="mt-5 grid grid-cols-12 gap-6">
                                                                            <div class="intro-y col-span-12 sm:col-span-6 xl:col-span-3">
                                        <div class="relative zoom-in before:box before:absolute before:inset-x-3 before:mt-3 before:h-full before:bg-slate-50 before:content-['']">
                                            <div class="box p-5">
                                                <div class="flex">
                                                    <i class="fa-solid fa-users text-success" style="font-size: 25px;"></i>
                                                    <div class="ml-auto">
                                                        <div data-placement="top" title="{{ $activeUsers }} users active" class="tooltip cursor-pointer flex justify-center items-center rounded-full bg-success py-[3px] px-2 text-xs font-medium text-white">
                                                            {{ $activeUsers }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-6 text-3xl font-medium leading-8">{{ number_format($totalUsers) }}</div>
                                                <div class="mt-1 text-base text-slate-500">Total Users</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="intro-y col-span-12 sm:col-span-6 xl:col-span-3">
                                        <div class="relative zoom-in before:box before:absolute before:inset-x-3 before:mt-3 before:h-full before:bg-slate-50 before:content-['']">
                                            <div class="box p-5">
                                                <div class="flex">
                                                    <i class="fa-solid fa-box text-success" style="font-size: 25px;"></i>
                                                    <div class="ml-auto">
                                                        <div data-placement="top" title="{{ $newProducts }} product baru ditambahkan" class="tooltip cursor-pointer flex justify-center items-center rounded-full bg-success py-[3px] px-2 text-xs font-medium text-white">
                                                            +{{ $newProducts }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-6 text-3xl font-medium leading-8">{{ number_format($totalProducts) }}</div>
                                                <div class="mt-1 text-base text-slate-500">
                                                    Total Products
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="intro-y col-span-12 sm:col-span-6 xl:col-span-3">
                                        <div class="relative zoom-in before:box before:absolute before:inset-x-3 before:mt-3 before:h-full before:bg-slate-50 before:content-['']">
                                            <div class="box p-5">
                                                <div class="flex">
                                                    <i class="fa-solid fa-blog text-success" style="font-size: 25px;"></i>
                                                    <div class="ml-auto">
                                                        <div data-placement="top" title="{{ $newBlogs }} blog baru ditambahkan" class="tooltip cursor-pointer flex justify-center items-center rounded-full bg-success py-[3px] px-2 text-xs font-medium text-white">
                                                            +{{ $newBlogs }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-6 text-3xl font-medium leading-8">{{ number_format($totalBlogs) }}</div>
                                                <div class="mt-1 text-base text-slate-500">
                                                    Total Blogs
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="intro-y col-span-12 sm:col-span-6 xl:col-span-3">
                                        <div class="relative zoom-in before:box before:absolute before:inset-x-3 before:mt-3 before:h-full before:bg-slate-50 before:content-['']">
                                            <div class="box p-5">
                                                <div class="flex">
                                                    <i class="fa-solid fa-phone text-success" style="font-size: 25px;"></i>
                                                    <div class="ml-auto">
                                                        <div data-placement="top" title="{{ $newContacts }} pesan baru" class="tooltip cursor-pointer flex justify-center items-center rounded-full bg-success py-[3px] px-2 text-xs font-medium text-white">
                                                            +{{ $newContacts }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-6 text-3xl font-medium leading-8">{{ number_format($totalContacts) }}</div>
                                                <div class="mt-1 text-base text-slate-500">
                                                    Total Contact
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: General Report -->
                            <!-- END: General Report -->
                            <!-- BEGIN: Weekly Top Products -->
                            <div class="col-span-12 mt-6">
                                <div class="intro-y block h-10 items-center sm:flex">
                                    <h2 class="mr-5 truncate text-lg font-medium">
                                        Weekly Top Products
                                    </h2>
                                    <div class="mt-3 flex items-center sm:ml-auto sm:mt-0">
                                        <button data-tw-merge="" class="transition duration-200 border shadow-sm items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed !box flex text-slate-600 dark:text-slate-300"><i data-tw-merge="" data-lucide="file-text" class="stroke-1.5 mr-2 hidden h-4 w-4 sm:block"></i>
                                            Export to Excel</button>
                                        <button data-tw-merge="" class="transition duration-200 border shadow-sm items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed !box ml-3 flex text-slate-600 dark:text-slate-300"><i data-tw-merge="" data-lucide="file-text" class="stroke-1.5 mr-2 hidden h-4 w-4 sm:block"></i>
                                            Export to PDF</button>
                                    </div>
                                </div>
                                <div class="intro-y mt-8 overflow-auto sm:mt-0 lg:overflow-visible">
                                    <table data-tw-merge="" class="w-full text-left border-separate border-spacing-y-[10px] sm:mt-2">
                                        <thead data-tw-merge="" class="">
                                            <tr data-tw-merge="" class="">
                                                <th data-tw-merge="" class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0">
                                                    IMAGES
                                                </th>
                                                <th data-tw-merge="" class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0">
                                                    PRODUCT NAME
                                                </th>
                                                <th data-tw-merge="" class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0 text-center">
                                                    STOCK
                                                </th>
                                                <th data-tw-merge="" class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0 text-center">
                                                    STATUS
                                                </th>
                                                <th data-tw-merge="" class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0 text-center">
                                                    ACTIONS
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr data-tw-merge="" class="intro-x">
                                                <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-40 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                                    <div class="flex">
                                                        <div class="image-fit zoom-in h-10 w-10">
                                                            <img data-placement="top" title="Uploaded at 1 September 2021" src="dist/images/fakers/preview-14.jpg" alt="Midone - Tailwind Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                                        </div>
                                                        <div class="image-fit zoom-in -ml-5 h-10 w-10">
                                                            <img data-placement="top" title="Uploaded at 22 October 2021" src="dist/images/fakers/profile-15.jpg" alt="Midone - Tailwind Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                                        </div>
                                                        <div class="image-fit zoom-in -ml-5 h-10 w-10">
                                                            <img data-placement="top" title="Uploaded at 26 December 2021" src="dist/images/fakers/profile-5.jpg" alt="Midone - Tailwind Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                                    <a class="whitespace-nowrap font-medium" href="#">
                                                        Nikon Z6
                                                    </a>
                                                    <div class="mt-0.5 whitespace-nowrap text-xs text-slate-500">
                                                        Photography
                                                    </div>
                                                </td>
                                                <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                                    119
                                                </td>
                                                <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-40 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                                    <div class="flex items-center justify-center text-success">
                                                        <i data-tw-merge="" data-lucide="check-square" class="stroke-1.5 mr-2 h-4 w-4"></i>
                                                        Active
                                                    </div>
                                                </td>
                                                <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-56 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600 before:absolute before:inset-y-0 before:left-0 before:my-auto before:block before:h-8 before:w-px before:bg-slate-200 before:dark:bg-darkmode-400">
                                                    <div class="flex items-center justify-center">
                                                        <a class="mr-3 flex items-center" href="#">
                                                            <i data-tw-merge="" data-lucide="check-square" class="stroke-1.5 mr-1 h-4 w-4"></i>
                                                            Edit
                                                        </a>
                                                        <a class="flex items-center text-danger" href="#">
                                                            <i data-tw-merge="" data-lucide="trash" class="stroke-1.5 mr-1 h-4 w-4"></i>
                                                            Delete
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr data-tw-merge="" class="intro-x">
                                                <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-40 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                                    <div class="flex">
                                                        <div class="image-fit zoom-in h-10 w-10">
                                                            <img data-placement="top" title="Uploaded at 20 March 2022" src="dist/images/fakers/preview-4.jpg" alt="Midone - Tailwind Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                                        </div>
                                                        <div class="image-fit zoom-in -ml-5 h-10 w-10">
                                                            <img data-placement="top" title="Uploaded at 12 June 2022" src="dist/images/fakers/profile-4.jpg" alt="Midone - Tailwind Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                                        </div>
                                                        <div class="image-fit zoom-in -ml-5 h-10 w-10">
                                                            <img data-placement="top" title="Uploaded at 13 February 2021" src="dist/images/fakers/profile-5.jpg" alt="Midone - Tailwind Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                                    <a class="whitespace-nowrap font-medium" href="#">
                                                        Sony A7 III
                                                    </a>
                                                    <div class="mt-0.5 whitespace-nowrap text-xs text-slate-500">
                                                        Photography
                                                    </div>
                                                </td>
                                                <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                                    82
                                                </td>
                                                <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-40 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                                    <div class="flex items-center justify-center text-success">
                                                        <i data-tw-merge="" data-lucide="check-square" class="stroke-1.5 mr-2 h-4 w-4"></i>
                                                        Active
                                                    </div>
                                                </td>
                                                <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-56 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600 before:absolute before:inset-y-0 before:left-0 before:my-auto before:block before:h-8 before:w-px before:bg-slate-200 before:dark:bg-darkmode-400">
                                                    <div class="flex items-center justify-center">
                                                        <a class="mr-3 flex items-center" href="#">
                                                            <i data-tw-merge="" data-lucide="check-square" class="stroke-1.5 mr-1 h-4 w-4"></i>
                                                            Edit
                                                        </a>
                                                        <a class="flex items-center text-danger" href="#">
                                                            <i data-tw-merge="" data-lucide="trash" class="stroke-1.5 mr-1 h-4 w-4"></i>
                                                            Delete
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr data-tw-merge="" class="intro-x">
                                                <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-40 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                                    <div class="flex">
                                                        <div class="image-fit zoom-in h-10 w-10">
                                                            <img data-placement="top" title="Uploaded at 19 April 2021" src="dist/images/fakers/preview-9.jpg" alt="Midone - Tailwind Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                                        </div>
                                                        <div class="image-fit zoom-in -ml-5 h-10 w-10">
                                                            <img data-placement="top" title="Uploaded at 28 August 2020" src="dist/images/fakers/profile-8.jpg" alt="Midone - Tailwind Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                                        </div>
                                                        <div class="image-fit zoom-in -ml-5 h-10 w-10">
                                                            <img data-placement="top" title="Uploaded at 15 June 2020" src="dist/images/fakers/profile-7.jpg" alt="Midone - Tailwind Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                                    <a class="whitespace-nowrap font-medium" href="#">
                                                        Nikon Z6
                                                    </a>
                                                    <div class="mt-0.5 whitespace-nowrap text-xs text-slate-500">
                                                        Photography
                                                    </div>
                                                </td>
                                                <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                                    76
                                                </td>
                                                <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-40 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                                    <div class="flex items-center justify-center text-success">
                                                        <i data-tw-merge="" data-lucide="check-square" class="stroke-1.5 mr-2 h-4 w-4"></i>
                                                        Active
                                                    </div>
                                                </td>
                                                <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-56 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600 before:absolute before:inset-y-0 before:left-0 before:my-auto before:block before:h-8 before:w-px before:bg-slate-200 before:dark:bg-darkmode-400">
                                                    <div class="flex items-center justify-center">
                                                        <a class="mr-3 flex items-center" href="#">
                                                            <i data-tw-merge="" data-lucide="check-square" class="stroke-1.5 mr-1 h-4 w-4"></i>
                                                            Edit
                                                        </a>
                                                        <a class="flex items-center text-danger" href="#">
                                                            <i data-tw-merge="" data-lucide="trash" class="stroke-1.5 mr-1 h-4 w-4"></i>
                                                            Delete
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr data-tw-merge="" class="intro-x">
                                                <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-40 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                                    <div class="flex">
                                                        <div class="image-fit zoom-in h-10 w-10">
                                                            <img data-placement="top" title="Uploaded at 5 April 2021" src="dist/images/fakers/preview-5.jpg" alt="Midone - Tailwind Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                                        </div>
                                                        <div class="image-fit zoom-in -ml-5 h-10 w-10">
                                                            <img data-placement="top" title="Uploaded at 9 July 2020" src="dist/images/fakers/profile-2.jpg" alt="Midone - Tailwind Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                                        </div>
                                                        <div class="image-fit zoom-in -ml-5 h-10 w-10">
                                                            <img data-placement="top" title="Uploaded at 13 April 2020" src="dist/images/fakers/profile-1.jpg" alt="Midone - Tailwind Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                                    <a class="whitespace-nowrap font-medium" href="#">
                                                        Samsung Q90 QLED TV
                                                    </a>
                                                    <div class="mt-0.5 whitespace-nowrap text-xs text-slate-500">
                                                        Electronic
                                                    </div>
                                                </td>
                                                <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                                    135
                                                </td>
                                                <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-40 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                                    <div class="flex items-center justify-center text-success">
                                                        <i data-tw-merge="" data-lucide="check-square" class="stroke-1.5 mr-2 h-4 w-4"></i>
                                                        Active
                                                    </div>
                                                </td>
                                                <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-56 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600 before:absolute before:inset-y-0 before:left-0 before:my-auto before:block before:h-8 before:w-px before:bg-slate-200 before:dark:bg-darkmode-400">
                                                    <div class="flex items-center justify-center">
                                                        <a class="mr-3 flex items-center" href="#">
                                                            <i data-tw-merge="" data-lucide="check-square" class="stroke-1.5 mr-1 h-4 w-4"></i>
                                                            Edit
                                                        </a>
                                                        <a class="flex items-center text-danger" href="#">
                                                            <i data-tw-merge="" data-lucide="trash" class="stroke-1.5 mr-1 h-4 w-4"></i>
                                                            Delete
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="intro-y mt-3 flex flex-wrap items-center sm:flex-row sm:flex-nowrap">
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
                            </div>
                            <!-- END: Weekly Top Products -->
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
    <script src="dist/js/vendors/tippy.js"></script>
    <script src="dist/js/vendors/dayjs.js"></script>
    <script src="dist/js/vendors/litepicker.js"></script>
    <script src="dist/js/vendors/popper.js"></script>
    <script src="dist/js/vendors/dropdown.js"></script>
    <script src="dist/js/vendors/tiny-slider.js"></script>
    <script src="dist/js/vendors/transition.js"></script>
    <script src="dist/js/vendors/chartjs.js"></script>
    <script src="dist/js/vendors/leaflet-map.js"></script>
    <script src="dist/js/vendors/axios.js"></script>
    <script src="dist/js/utils/colors.js"></script>
    <script src="dist/js/utils/helper.js"></script>
    <script src="dist/js/vendors/simplebar.js"></script>
    <script src="dist/js/vendors/modal.js"></script>
    <script src="dist/js/components/base/theme-color.js"></script>
    <script src="dist/js/components/base/lucide.js"></script>
    <script src="dist/js/components/base/tippy.js"></script>
    <script src="dist/js/components/base/litepicker.js"></script>
    <script src="dist/js/components/report-line-chart.js"></script>
    <script src="dist/js/components/report-pie-chart.js"></script>
    <script src="dist/js/components/report-donut-chart.js"></script>
    <script src="dist/js/components/report-donut-chart-1.js"></script>
    <script src="dist/js/components/simple-line-chart-1.js"></script>
    <script src="dist/js/components/base/tiny-slider.js"></script>
    <script src="dist/js/themes/rubick.js"></script>
    <script src="dist/js/components/base/leaflet-map-loader.js"></script>
    <script src="dist/js/components/mobile-menu.js"></script>
    <script src="dist/js/components/themes/rubick/top-bar.js"></script>
     <!-- END: Vendor JS Assets-->
    <!-- BEGIN: Pages, layouts, components JS Assets-->
    <!-- END: Pages, layouts, components JS Assets-->
</body>

<!-- Mirrored from midone-html.vercel.app/rubick-side-menu-dashboard-overview-1-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Feb 2025 09:29:37 GMT -->
</html>