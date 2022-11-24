<x-app-layout>
    <div class="container mt-5">
        <div class="row">
            <div class="col flex justify-center">
                <h2 class="h2">Edit History</h2>
            </div>
        </div>
    </div>
    <div class="mx-auto" style="width: 25vw">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form method="POST" action="{{url('updateHistory')}}">
                    @csrf
                    <input type="hidden" name="id" value="{{$data->id}}">
                    <div class="md-3">
                        <p>Thrown Darts</p>
                        <input type="text" class="form-control rounded border-warning" name="thrownDarts" placeholder="Thrown Darts" value="{{$data->thrownDarts}}">
                        @error('thrownDarts')
                        <div class="alert alert-warning"> {{$message}}</div>
                        @enderror
                    </div>
                    <div class="md-3 mt-2">
                        <p>Best Score</p>
                        <input type="text" class="form-control rounded border-warning" name="bestScore" placeholder="Best Score" value="{{$data->bestScore}}">
                        @error('bestScore')
                        <div class="alert alert-warning"> {{$message}}</div>
                        @enderror
                    </div>
                    <div class="md-3 mt-2">
                        <p>Average</p>
                        <input type="text" class="form-control rounded border-warning" name="average" placeholder="Average" value="{{$data->average}}">
                        @error('average')
                        <div class="alert alert-warning"> {{$message}}</div>
                        @enderror
                    </div>
                    <div class="justify-content-center d-flex mt-2">
                        <button type="submit" class="btn btn-warning me-2 bg-warning">Edit</button>
                        <a href="{{url('gameHistory')}}" class="btn btn-dark"> Back</a>
                    </div>
                </form>
            </div>
        </div>
</x-app-layout>