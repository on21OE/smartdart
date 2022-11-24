<x-app-layout>  
        <div class="container mt-5">
            <div class="row mb-4">
                <div class="col flex justify-center">
                    <img src="{{asset('logo/LogoSmartDartWithText.png') }}" width="200px">
                </div>
            </div>
            <div class="row">
                <div class="col-12 flex justify-center">
                    <h2 class="h2">Welcome to SmartDart {{ Auth::user()->name }}</h2>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-12 flex justify-center">
                    <h5 class="h5">The only way to play Darts</h5>
                </div>
            </div>
            
        </div>
        <div class="container">
            <div class="row">
                <div class="col flex justify-center">
                    <a href="{{ url('game') }}" class="btn btn-warning mr-2">Start New Game</a>
                    <a href="{{ url('gameHistory') }}" class="btn btn-warning mr-2">Your Game History</a>
                    <a href="{{ url('allTimeStats') }}" class="btn btn-warning mr-2">AllTime Stats</a>
                </div>
            </div>
        </div>
</x-app-layout>