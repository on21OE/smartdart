<x-app-layout>
    <div class="container  mt-5">
        <div class="row">
            <div class="col-md-12">
                <h2 class="h2">Edit History</h2>
                <form method="POST" action="{{url('updateHistory')}}">
                    @csrf
                    <input type="hidden" name="id" value="{{$data->id}}">
                    <div class="md-3">
                        <label class="form-label" >Thrown Darts</label>
                        <input type="text" class="form-control" name="thrownDarts" placeholder="Thrown Darts" value="{{$data->thrownDarts}}">
                        @error('thrownDarts')
                        <div class="alert alert-danger"> {{$message}}</div>
                        @enderror

                    </div>
                    <div class="md-3">
                        <label class="form-label" >Best Score</label>
                        <input type="text" class="form-control" name="bestScore" placeholder="Best Score" value="{{$data->bestScore}}">
                        @error('bestScore')
                        <div class="alert alert-danger"> {{$message}}</div>
                        @enderror

                    </div>
                    <div class="md-3">
                        <label class="form-label" >Average</label>
                        <input type="text" class="form-control" name="average" placeholder="Average" value="{{$data->average}}">
                        @error('average')
                        <div class="alert alert-danger"> {{$message}}</div>
                        @enderror

                    </div>
                    <button type="submit" class="btn btn-primary">Updaten</button>
                    <a href="{{url('paymentlist')}}" class="btn btn-danger"> Back</a>
                </form>
</x-app-layout>