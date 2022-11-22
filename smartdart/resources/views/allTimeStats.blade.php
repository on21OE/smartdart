<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col flex justify-center">
                <h2 class="h2">Game Stats</h2>
            </div>
        </div>
    </div>

    <div class="mx-auto" style="width: 50vw">
        <div class="container border border-dark">
            <div class="row">
                <div class="col-6 d-flex justify-content-center">{{ Auth::user()->name }}</div>
                <div class="col-6 d-flex justify-content-center">Some other User</div>
            </div>
            <div class="row">
                <div class="col-3 d-flex flex-column align-items-end">
                    <p>Total Games</p>                
                    <p>Thrown Darts</p>
                    <p>Thrown Darts</p>
                    <p>Best Score</p>
                </div>
                <div class="col-3">
                    <p></p>
                    <p>{{$dataArray[0]}}</p>
                    <p>{{$dataArray[1]}}</p>
                    <p>{{$dataArray[2]}}</p>
                    <p>{{$dataArray[3]}}</p>
                </div>
                <div class="col-3 d-flex flex-column align-items-end">
                    <p>Total Games</p>             
                    <p>Thrown Darts</p>
                    <p>Thrown Darts</p>
                    <p>Best Score</p>
                </div>
                <div class="col-3">
                    <p></p>
                    <p>{{$dataArray[4]}}</p>
                    <p>{{$dataArray[5]}}</p>
                    <p>{{$dataArray[6]}}</p>
                    <p>{{$dataArray[7]}}</p>
                </div>
            </div>
        </div>
    </div>      
</x-app-layout>