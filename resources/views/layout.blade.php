<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- instruksi : ganti title menggunakan yield  -->
    <title>My App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <nav class="bg-red-500 shadow-lg">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between items-center h-16 text-white">
                <div class="text-xl font-semibold">
                    My App
                </div>
                <!-- instruksi : buat menu menggunakan section navigation dan show -->


            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-6xl mx-auto mt-6 px-4">
        
        <!-- instruksi : Buat breadcrumb dengan foreach array -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <!-- instruksi : isi kontent dengan yield content  -->
             @yield('content')
        </div>
    </main>

    <!-- Footer -->    
    <footer class="bg-red-500 shadow-lg mt-8 fixed bottom-0 left-0 right-0">
        <div class="max-w-6xl mx-auto px-4 py-6">
            <p class="text-center text-white">© 2023 My App. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>