<x-app-layout>
    <div class="container mt-5">
        <div class="row">
            <div class="col flex justify-center">
                <h2 class="h2 mb-5">Your Games</h2>
            </div>
        </div>
        <div class="row mb-4 flex justify-center">
            @if(Session::has('success'))
            <div class="card text-center border-warning" style="width: 25vw">
                <div class="card-body border-warning"> 
                    {{Session::get('success')}}
                </div>
            </div>
            @endif
        </div>
        <div class="row">
            <div class="col">
                    <table class="table table-striped table-dark text-center"> 
                        <thead>
                            <tr>
                                <th>Game ID</th>
                                <th>Thrown Darts</th>
                                <th>Best Score</th>
                                <th>Average</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $gameStat)
                            <tr>
                                <td>{{$gameStat->id}}</td>
                                <td>{{$gameStat->thrownDarts}}</td>
                                <td>{{$gameStat->bestScore}}</td>
                                <td>{{$gameStat->average}}</td>
                                <td>
                                    <a href="{{url("editHistory/".$gameStat->id)}}" class="btn btn-warning">Edit</a>
                                    <a href="{{url("deleteHistory/".$gameStat->id)}}" class="btn btn-warning">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$data->links()}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>