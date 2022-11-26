<x-app-layout>
    <div class="container mt-5">
        <div class="row">
            <div class="col flex justify-center">
                <h2 class="h2">Game Stats</h2>
            </div>
        </div>
        <div class="row">
            <div class="col flex justify-center">
                <h4 class="h4">You won!</h4>
            </div>
        </div>
    </div>

    <div class="mx-auto" style="width: 50vw">
        <table class="table table-striped table-dark text-center mt-4">
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
                <a href="{{ url('allTimeStats') }}" class="btn btn-warning mr-2">All Time Stats</a>
            </div>
        </div>
    </div>


</x-app-layout>
