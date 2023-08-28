<div class="min-h-screen bg-gray-100">
    @include('layouts.navigation')

    <!-- Page Heading -->
    {{-- <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            {{ $header }}
        </div>
    </header> --}}

    <div class=" flex space-x-4">
        <dashboardLayout />

    <!-- Page Content -->
    
    <main class="flex-1">

       <div class="max-w-6xl mx-auto">
       {{ $slot }}
       </div>
    </main>
        
    </div>

    
</div>
