 {{-- Header Section --}}
 <header class="bg-white/30 backdrop-blur-md top-0 left-0 w-full items-center z-20 fixed">
     <div class="container mx-auto flex justify-between items-center px-4 py-1">
         <a href="#">
             <img src="{{ asset('storage/logo/logo.png') }}" alt="logo" class="w-8 my-2">
         </a>
         <nav class="flex space-x-8">
             <a href="{{ route('home') }}"
                 class="text-base text-white py-2 hover:text-primary transition duration-300">Home</a>
             <a href="#memory" class="text-base text-white py-2 hover:text-primary transition duration-300">Memory</a>
             <a href="#structure" class="text-base text-white py-2 hover:text-primary transition duration-300">Structure
                 &
                 Schedule</a>
         </nav>
     </div>
 </header>
