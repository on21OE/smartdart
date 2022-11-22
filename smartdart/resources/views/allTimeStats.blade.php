<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col flex justify-center">
                <h2 class="h2">Game Stats</h2>
            </div>
        </div>
    </div>


    <div class="mx-auto" style="width: 50vw">
        <div class="container border border-dark">
            <div class="row">
                <div class="col-6 d-flex justify-content-center">{{ Auth::user()->name }}</div>
                <div class="col-6 d-flex justify-content-center">
                    <form>
                        <select class="form-control" name="user" id="userSelect">
                            <option value="" selected disabled hidden>Choose here</option>
                            @foreach ($dataArray[4] as $user)
                                <option value={{ $user->name }}>{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-3 d-flex flex-column align-items-end">
                    <p>Total Games</p>
                    <p>Thrown Darts</p>
                    <p>Average</p>
                    <p>Best Score</p>
                </div>
                <div class="col-3">
                    <p></p>
                    <p>{{ $dataArray[0] }}</p>
                    <p>{{ $dataArray[1] }}</p>
                    <p>{{ $dataArray[2] }}</p>
                    <p>{{ $dataArray[3] }}</p>
                </div>
                <div class="col-3 d-flex flex-column align-items-end">
                    <p>Total Games</p>
                    <p>Thrown Darts</p>
                    <p>Average</p>
                    <p>Best Score</p>
                </div>
                <div class="col-3">
                    <p></p>
                    <p id="totalGames"></p>
                    <p id="thrownDarts"></p>
                    <p id="average"></p>
                    <p id="bestScore"></p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
    const selector = document.getElementById("userSelect");
    const totalGamesOther = document.getElementById("totalGames");
    const thrownDartsOther = document.getElementById("thrownDarts");
    const averageOther = document.getElementById("average");
    const bestScoreOther = document.getElementById("bestScore");

    selector.addEventListener('change', (e) => {
        getUserStats(e.target.value);
    })

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
</script>
