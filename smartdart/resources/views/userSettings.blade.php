<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col flex justify-center">
                <h2 class="h2">User Settings</h2>
            </div>
        </div>
    </div>

    <div class="mx-auto" style="width: 50vw">
        <div class="container border border-dark">
            <div class="row">
                <div class="col-6 d-flex flex-column align-items-end">       
                    <p>Willkommen {{ Auth::user()->name }}</p>
                    <a href="{{ url('/game') }}" class="btn btn-primary">StatsPublic</a>
                    <form action="{{ url("changeUserName") }}" method="post">
                        @csrf
                        <label for="userName">Change UserName</label>
                        <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                        <input type="text" name="name" value="{{ Auth::user()->name }}">
                        @error("name")
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                        @enderror
                        <button class="button btn-primary" type="submit">Save</button>
                    </form>
                    <a href="{{ url('/game') }}" class="btn btn-primary">Delete User</a>
                </div>
            </div>
        </div>
    </div>      
</x-app-layout>