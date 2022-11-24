<x-app-layout>
    <div class="container mt-5">
        <div class="row">
            <div class="col flex justify-center">
                <h2 class="h2">Game Stats</h2>
            </div>
        </div>
    </div>

    <div class="mx-auto" style="width: 50vw">
        <table class="table table-striped table-dark table-borderless mt-5">
            <thead>
                <th>GameId</th>
                <th>Thrown Darts</th>
                <th>Best Score</th>
                <th>Average</th>
            </thead>
            <tbody>
                <td>{{ $data->id }}</td>
                <td>{{ $data->thrownDarts }}</td>
                <td>{{ $data->bestScore }}</td>
                <td>{{ $data->average }}</td>
            </tbody>
        </table>

    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col flex justify-center">
                <a href="{{ url('game') }}" class="btn btn-warning mr-2">Start New Game</a>
                <a href="{{ url('gameHistory') }}" class="btn btn-warning mr-2">Your Game History</a>
                <a href="{{ url('allTimeStats') }}" class="btn btn-warning mr-2">AllTime Stats</a>
            </div>
        </div>
    </div>


</x-app-layout>
