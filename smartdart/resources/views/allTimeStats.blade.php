<style>
    .form-control {
        background-color: #ffc107 !important;
        border-color: #ffc107 !important;
    }

    select option {
        background: #212529;
        color: #fff;
    }
</style>
<x-app-layout>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col flex justify-center">
                <h2 class="h2">All Time Stats</h2>
            </div>
        </div>
    </div>
    <div class="mx-auto" style="width: 50vw">
        <div class="container">
            <div class="row">
                <div class="col-6 d-flex justify-content-center h3">{{ Auth::user()->name }}</div>
                <div class="col-6">
                    <form>
                        <select class="form-control" name="user" id="userSelect">
                            <option value="" selected disabled hidden>Choose User</option>
                            @if (count($dataArray[4]) === 0)
                                <option disabled>No Users available</option>
                            @endif
                            @foreach ($dataArray[4] as $user)
                                <option value={{ $user->name }}>{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <table class="table table-striped table-dark table-borderless text-center mt-2">
                        <thead>
                            <th>Total Games</th>
                            <th>Thrown Darts</th>
                            <th>Average</th>
                            <th>Best Score</th>
                        </thead>
                        <tbody>
                            <td>{{ $dataArray[0] }}</td>
                            <td>{{ $dataArray[1] }}</td>
                            <td id="ownAverage"></td>
                            <td>{{ $dataArray[3] }}</td>
                        </tbody>
                    </table>
                </div>
                <div class="col-6">
                    <table class="table table-striped table-dark table-borderless text-center mt-2">
                        <thead>
                            <th>Total Games</th>
                            <th>Thrown Darts</th>
                            <th>Average</th>
                            <th>Best Score</th>
                        </thead>
                        <tbody>
                            <td id="totalGames">0</td>
                            <td id="thrownDarts">0</td>
                            <td id="average">0.00</td>
                            <td id="bestScore">0</td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="mx-auto" style="width: 25vw">
        <p class="mt-4" id="currentSettings"></p>
        <form>
            <select class="form-control" name="user" id="statsSelect">
                <option value="" selected disabled hidden>Choose here</option>
                <option value="0">Public</option>
                <option value="1">Hidden</option>
            </select>
        </form>
        
            <div class="container mt-3">
                <div class="row">
                    <div class="col flex justify-center">
                        <a href="{{ url('game') }}" class="btn btn-warning mr-2">Start New Game</a>
                        <a href="{{ url('gameHistory') }}" class="btn btn-warning mr-2">Your Game History</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
    const userSelector = document.getElementById("userSelect");
    const totalGamesOther = document.getElementById("totalGames");
    const thrownDartsOther = document.getElementById("thrownDarts");
    const averageOther = document.getElementById("average");
    const bestScoreOther = document.getElementById("bestScore");
    const statsSelector = document.getElementById("statsSelect");
    const currentSettings = document.getElementById("currentSettings");
    const ownAverage = document.getElementById("ownAverage");

    showSettings();
    roundOwnAverage()

    function roundOwnAverage() {
        unroundedAverage = {{ $dataArray[2] }};
        ownAverage.innerText = unroundedAverage.toFixed(2);
    }

    function showSettings() {
        if ({{ Auth::user()->areStatsPublic }} === 0) {
            currentSettings.innerText = "Own Stats currently: Public";
        } else {
            currentSettings.innerText = "Own Stats currently: Hidden";
        }
    }

    userSelector.addEventListener('change', (e) => {
        getUserStats(e.target.value);
    });

    function getUserStats(name) {
        $.ajax({
            type: "GET",
            url: 'getOtherUserStats',
            data: {
                name: name
            },
            success: function(response) {
                updateOtherUserStats(response);
            },
            error: function(err) {
                console.log(err);
            }
        })
    }

    function updateOtherUserStats(stats) {
        totalGamesOther.innerText = stats.totalGames;
        thrownDartsOther.innerText = stats.thrownDarts;
        averageOther.innerText = stats.average.toFixed(2);
        bestScoreOther.innerText = stats.bestScore;
    }

    statsSelector.addEventListener('change', (e) => {
        setUserStats(e.target.value);
    });

    function setUserStats(value) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: 'editAreStatsPublic',
            data: {
                value: value
            },
            success: function(response) {
                updateCurrentSettings(value);
            },
            error: function(err) {
                console.log(err);
            }
        })
    }

    function updateCurrentSettings(value) {
        if (value == 0) {
            currentSettings.innerText = "Own Stats currently: Public";
        } else {
            currentSettings.innerText = "Own Stats currently: Hidden";
        }
    }
</script>
