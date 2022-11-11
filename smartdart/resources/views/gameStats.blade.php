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
                <div class="col-6 d-flex flex-column align-items-end">
                    <p>GameId</p>                
                    <p>UserId</p>
                    <p>Thrown Darts</p>
                    <p>Best Score</p>
                    <p>Average</p>
                </div>
                <div class="col-6">
                    <p>{{$data->id}}</p>
                    <p>{{$data->userId}}</p>
                    <p>{{$data->thrownDarts}}</p>
                    <p>{{$data->bestScore}}</p>
                    <p>{{$data->average}}</p>
                </div>
            </div>
        </div>
    </div>      
</x-app-layout>