<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareerLink - Find Your Opportunity</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-r from-blue-500 to-white min-h-screen flex flex-col">
    <!-- Navbar -->
    <header class="bg-blue-700 text-white py-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center px-6">
            <h1 class="text-2xl font-bold">CareerLink</h1>
            <nav class="space-x-6">
                <a href="#about" class="hover:underline">About Us</a>
                <a href="#features" class="hover:underline">Features</a>
                <a href="./auth/login.php" class="hover:underline">sign in</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="flex-grow bg-white text-center py-20">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-blue-700 mb-4">Find Your Dream Job or Hire the Best Talent</h2>
            <p class="text-gray-700 mb-6">CareerLink connects candidates and recruiters to create opportunities that matter.</p>
            <div class="space-x-4">
                <a href="./auth/login.php" class="bg-blue-600 text-white py-2 px-4 rounded-lg shadow hover:bg-blue-700">For Job Seekers</a>
                <a href="./auth/login.php" class="bg-blue-600 text-white py-2 px-4 rounded-lg shadow hover:bg-blue-700">For Recruiters</a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 bg-gradient-to-l from-blue-100 to-white">
        <div class="container mx-auto px-6 text-center">
            <h3 class="text-3xl font-bold text-blue-700 mb-12">Our Features</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-6 bg-white rounded-lg shadow-lg">
                    <h4 class="text-2xl font-bold text-blue-600 mb-2">Personalized Job Matches</h4>
                    <p class="text-gray-600">Find jobs tailored to your skills and preferences.</p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-lg">
                    <h4 class="text-2xl font-bold text-blue-600 mb-2">Robust Talent Pool</h4>
                    <p class="text-gray-600">Recruiters gain access to top talent across industries.</p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-lg">
                    <h4 class="text-2xl font-bold text-blue-600 mb-2">Easy Application Process</h4>
                    <p class="text-gray-600">Seamlessly apply for jobs or manage job listings.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="container mx-auto px-6 text-center">
            <h3 class="text-3xl font-bold text-blue-700 mb-12">Get in Touch</h3>
            <p class="text-gray-700 mb-6">Have questions or need assistance? We’re here to help!</p>
            <a href="#" class="bg-blue-600 text-white py-2 px-6 rounded-lg shadow hover:bg-blue-700">Contact Us</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-blue-700 text-white py-4">
        <div class="container mx-auto text-center px-6">
            <p>&copy; 2025 CareerLink. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
