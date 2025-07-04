<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $data['judul'] ?? 'Jepretin'; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

<header class="bg-[#D6B49A] px-6 py-4">
    <div class="relative max-w-7xl mx-auto flex items-center justify-between">
        <!-- Logo -->
        <div class="flex-shrink-0">
            <img src="<?= BASEURL ?>/assets/image/Logo_Putih_Nama.png" alt="Logo" class="h-12 object-contain" />
        </div>

        <!-- Search Bar -->
        <div class="absolute left-1/2 transform -translate-x-1/2 w-full max-w-md z-0">
            <input type="text" placeholder="Cari berdasarkan lokasi..."
                class="w-full px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-white text-sm shadow" />
        </div>

        <!-- Tombol Login & Registrasi -->
        <div class="flex items-center space-x-3 z-10">
            <a href="<?= BASEURL ?>/users/registrasi"
                class="px-4 py-2 bg-white text-[#8A6843] rounded-md hover:bg-gray-100 text-sm font-semibold transition">
                Registrasi
            </a>
            <a href="<?= BASEURL ?>/users/login"
                class="px-4 py-2 bg-[#8A6843] text-white rounded-md hover:bg-[#7a5934] text-sm font-semibold transition">
                Login
            </a>
        </div>
    </div>

    <!-- Navigation Links -->
    <nav class="mt-4 max-w-7xl mx-auto flex flex-wrap justify-center gap-2 text-white text-sm font-semibold">
        <a href="<?= BASEURL ?>/kategori/dslr" class="transition hover:bg-white hover:text-[#6f5633] px-4 py-1 rounded-full">DSLR</a>
        <a href="<?= BASEURL ?>/kategori/mirrorless" class="transition hover:bg-white hover:text-[#6f5633] px-4 py-1 rounded-full">Mirrorless</a>
        <a href="<?= BASEURL ?>/kategori/actioncam" class="transition hover:bg-white hover:text-[#6f5633] px-4 py-1 rounded-full">Action Cam</a>
        <a href="<?= BASEURL ?>/kategori/lensa" class="transition hover:bg-white hover:text-[#6f5633] px-4 py-1 rounded-full">Lensa</a>
        <a href="<?= BASEURL ?>/kategori/aksesoris" class="transition hover:bg-white hover:text-[#6f5633] px-4 py-1 rounded-full">Aksesoris</a>
        <a href="<?= BASEURL ?>/kategori/laptop" class="transition hover:bg-white hover:text-[#6f5633] px-4 py-1 rounded-full">Laptop</a>
        <a href="<?= BASEURL ?>/kategori/drone" class="transition hover:bg-white hover:text-[#6f5633] px-4 py-1 rounded-full">Drone</a>
        <a href="<?= BASEURL ?>/kategori/ledtv" class="transition hover:bg-white hover:text-[#6f5633] px-4 py-1 rounded-full">LED TV</a>
    </nav>

</header>
