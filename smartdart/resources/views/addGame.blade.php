<x-app-layout>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="h2">Add Student</h2>
                <form method="post" action="{{url('saveGame')}}">
                    @csrf
                    <div class="col-3">
                        <label class="form-label">thrownDarts</label>
                        <input type="text" class="form-control" name="thrownDarts" placeholder="Thrown Darts">
                    </div>
                    <div class="col-3">
                        <label class="form-label">bestScore</label>
                        <input type="text" class="form-control" name="bestScore" placeholder="Best Score">
                    </div>
                    <div class="col-3">
                        <label class="form-label">average</label>
                        <input type="text" class="form-control" name="average" placeholder="Average">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>