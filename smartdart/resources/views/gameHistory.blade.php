<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col flex justify-center">
                <h2 class="h2">Your Games</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                    <table class="table"> 
                        <thead>
                            <tr>
                                <th>GameId</th>
                                <th>UserId</th>
                                <th>Thrown Darts</th>
                                <th>Best Score</th>
                                <th>Average</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $gameStat)
                            <tr>
                                <td>{{$gameStat->id}}</td>
                                <td>{{$gameStat->userId}}</td>
                                <td>{{$gameStat->thrownDarts}}</td>
                                <td>{{$gameStat->bestScore}}</td>
                                <td>{{$gameStat->average}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>