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
                <h2 class="h2">Game Stats</h2>
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
                            @foreach ($dataArray[4] as $user)
                                <option value={{ $user->name }}>{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <table class="table table-striped table-dark table-borderless mt-2">
                        <thead>
                            <th>Total Games</th>
                            <th>Thrown Darts</th>
                            <th>Average</th>
                            <th>Best Score</th>
                        </thead>
                        <tbody>
                            <td>{{ $dataArray[0] }}</td>
                            <td>{{ $dataArray[1] }}</td>
                            <td>{{ $dataArray[2] }}</td>
                            <td>{{ $dataArray[3] }}</td>
                        </tbody>
                    </table>
                </div>
                <div class="col-6">
                    <table class="table table-striped table-dark table-borderless mt-2">
                        <thead>
                            <th>Total Games</th>
                            <th>Thrown Darts</th>
                            <th>Average</th>
                            <th>Best Score</th>
                        </thead>
                        <tbody>
                            <td id="totalGames">0</td>
                            <td id="thrownDarts">0</td>
                            <td id="average">0</td>
                            <td id="bestScore">0</td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col flex justify-center">
                    <a href="{{ url('game') }}" class="btn btn-warning mr-2">Start New Game</a>
                    <a href="{{ url('gameHistory') }}" class="btn btn-warning mr-2">Your Game History</a>
                </div>
            </div>
        </div>
        <!-- <p>Own Stats currently: {{ Auth::user()->areStatsPublic }}</p>
        <form>
            <select class="form-control" name="user" id="statsSelect">
                <option value="" selected disabled hidden>Choose here</option>
                <option value="0">True</option>
                <option value="1">False</option>
            </select>
        </form> -->
    </div>
</x-app-layout>
<script>
    const userSelector = document.getElementById("userSelect");
    const totalGamesOther = document.getElementById("totalGames");
    const thrownDartsOther = document.getElementById("thrownDarts");
    const averageOther = document.getElementById("average");
    const bestScoreOther = document.getElementById("bestScore");
    const statsSelector = document.getElementById("statsSelect");

    userSelector.addEventListener('change', (e) => {
        getUserStats(e.target.value);
    });

    function getUserStats(name) {
        console.log(name);
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
        averageOther.innerText = stats.average;
        bestScoreOther.innerText = stats.bestScore;
    }

    /* statsSelector.addEventListener('change', (e) => {
        setUserStats(e.target.value);
    });

    function setUserStats(value) {
        console.log(value);
        $.ajax({
            type: "POST",
            url: 'editAreStatsPublic',
            data: {
                value: value
            },
            success: function(response) {
                console.log(geht);
            },
            error: function(err) {
                console.log(err);
            }
        })
    } */
</script>
