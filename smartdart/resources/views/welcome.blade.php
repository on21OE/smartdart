<x-app-layout>
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        
        <div class="container">
            <div class="row">
                <div class="col-12 flex justify-center">
                    <h2 class="h2" style="color: white">Welcome to DartSmart {{ Auth::user()->name }}</h2>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-12 flex justify-center">
                    <h5 class="h5" style="color: white">The only way to play Darts</h5>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-3 flex justify-center">
                    <a href="{{ url('/game') }}" class="btn btn-primary">Start Game</a>
                </div>
                <div class="col-3 flex justify-center">
                    <a href="{{ url('/statistics') }}" class="btn btn-primary">Show Statistics</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>