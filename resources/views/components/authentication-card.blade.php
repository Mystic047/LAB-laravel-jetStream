<div class="min-h-screen flex flex-col sm:justify-center items-center bg-gray-100 relative">
    <!-- Background Image -->
    <img id="background" class="absolute top-0 w-full h-full object-cover z-0" src="https://wallpapercave.com/wp/VmZHnTO.jpg" alt="Background Image" />
    <div class="relative bg-white bg-opacity-20 backdrop-filter backdrop-blur-md shadow-md   ">
        {{ $slot }}
    </div>
</div>
