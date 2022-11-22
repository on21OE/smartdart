<x-app-layout>
    <h1 class="h1 justify-content-center d-flex">Game</h1>
    <a href="{{url('addGame')}}">Add</a>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <table class="table"> 
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Throw 1</th>
                                <th>Throw 2</th>
                                <th>Throw 3</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ Auth::user()->name }}</td>
                                <td id="throw1"></td>
                                <td id="throw2"></td>
                                <td id="throw3"></td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table"> 
                        <thead>
                            <tr>
                                <th>Score</th>
                                <th>Best Score</th>
                                <th>Thrown Darts</th>
                                <th>Average</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td id="scoreElement"></td>
                                <td id="bestScoreElement"></td>
                                <td id="thrownDartsElement"></td>
                                <td id="averageElement"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-1">
                    <button id="1" class="countButton btn btn-primary px-6">1</button>
                </div>
                <div class="col-1">
                    <button id="2" class="countButton btn btn-primary px-6">2</button>
                </div>
                <div class="col-1">
                    <button id="3" class="countButton btn btn-primary px-6">3</button>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-1">
                    <button id="4" class="countButton btn btn-primary px-6">4</button>
                </div>
                <div class="col-1">
                    <button id="5" class="countButton btn btn-primary px-6">5</button>
                </div>
                <div class="col-1">
                    <button id="6" class="countButton btn btn-primary px-6">6</button>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-1">
                    <button id="7" class="countButton btn btn-primary px-6">7</button>
                </div>
                <div class="col-1">
                    <button id="8" class="countButton btn btn-primary px-6">8</button>
                </div>
                <div class="col-1">
                    <button id="9" class="countButton btn btn-primary px-6">9</button>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-1">
                    <button id="10" class="countButton btn btn-primary px-6">10</button>
                </div>
                <div class="col-1">
                    <button id="11" class="countButton btn btn-primary px-6">11</button>
                </div>
                <div class="col-1">
                    <button id="12" class="countButton btn btn-primary px-6">12</button>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-1">
                    <button id="13" class="countButton btn btn-primary px-6">13</button>
                </div>
                <div class="col-1">
                    <button id="14" class="countButton btn btn-primary px-6">14</button>
                </div>
                <div class="col-1">
                    <button id="15" class="countButton btn btn-primary px-6">15</button>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-1">
                    <button id="16" class="countButton btn btn-primary px-6">16</button>
                </div>
                <div class="col-1">
                    <button id="17" class="countButton btn btn-primary px-6">17</button>
                </div>
                <div class="col-1">
                    <button id="18" class="countButton btn btn-primary px-6">18</button>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-1">
                    <button id="19" class="countButton btn btn-primary px-6">19</button>
                </div>
                <div class="col-1">
                    <button id="20" class="countButton btn btn-primary px-6">20</button>
                </div>
                <div class="col-1">
                    <button id="25" class="countButton btn btn-primary px-6">25</button>
                </div>
            </div>
        </div>
        <form id="form" method="post" action="{{url('saveGame')}}"  style="display: none">
            @csrf
            <div class="col-3">
                <label class="form-label">thrownDarts</label>
                <input id="thrownDarts" type="text" class="form-control" name="thrownDarts" placeholder="Thrown Darts">
            </div>
            <div class="col-3">
                <label class="form-label">bestScore</label>
                <input id="bestScore" type="text" class="form-control" name="bestScore" placeholder="Best Score">
            </div>
            <div class="col-3">
                <label class="form-label">average</label>
                <input id="average" type="text" class="form-control" name="average" placeholder="Average">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </div>
</x-app-layout>
<script>
    let throw1;
    let throw2;
    let throw3;

    let thrownDarts = 0;
    let bestScore = 0;
    let bestScoreLastRound;
    let average;
    let averageLastRound;
    let score = 501;
    let scoreThisRound;
    let scoreLastRound;

    const thrownDartsInput = document.getElementById("thrownDarts");
    const bestScoreInput = document.getElementById("bestScore");
    const averageInput = document.getElementById("average");

    const scoreElement = document.getElementById("scoreElement");
    const bestScoreElement = document.getElementById("bestScoreElement");
    const thrownDartsElement = document.getElementById("thrownDartsElement");
    const averageElement = document.getElementById("averageElement");

    const throw1Element = document.querySelector("#throw1");
    const throw2Element = document.querySelector("#throw2");
    const throw3Element = document.querySelector("#throw3");

    const countButtons = document.querySelectorAll(".countButton");

    countButtons.forEach((countButton) => {
        countButton.addEventListener("click", (e) => {
            console.log(throw1Element.innerText, throw2Element.innerText, throw3Element.innerText)
            if (throw1Element.innerText === "") {
                throw1 = parseInt(e.target.innerText);
                throw1Element.innerText = throw1;
            } else if (throw2Element.innerText === "") {
                throw2 = parseInt(e.target.innerText);
                throw2Element.innerText = throw2;
            } else if (throw3Element.innerText === "") {
                throw3 = parseInt(e.target.innerText);
                throw3Element.innerText = throw3;
                startRound();
            } 
        })
    })

    function startRound() {
        thrownDarts = thrownDarts + 3;
        scoreThisRound = throw1 + throw2 + throw3;
        scoreLastRound = score;
        score = score - scoreThisRound;
        if (scoreThisRound > bestScore) {
            bestScoreLastRound = bestScore;
            bestScore = scoreThisRound;
        }
        averageLastRound = average;
        average = (501 - score) / thrownDarts;

        scoreElement.innerText = score;
        bestScoreElement.innerText = bestScore;
        thrownDartsElement.innerText = thrownDarts;
        averageElement.innerText = average;

        throw1Element.innerText = "";
        throw2Element.innerText = "";
        throw3Element.innerText = "";

        thrownDartsInput.value = thrownDarts;
        bestScoreInput.value = bestScore;
        averageInput.value = average;

        checkIfWon();
        checkIfOverthrow();
        
    }

     function checkIfWon() {
        if (score === 0) {
            document.getElementById("form").submit();
        }
    }

    function checkIfOverthrow() {
        if (score < 0) {
            score = scoreLastRound;
            average = averageLastRound / thrownDarts;
            bestScore = bestScoreLastRound;

            throw1Element.innerText = "";
            throw2Element.innerText = "";
            throw3Element.innerText = "";

            scoreElement.innerText = score;
            thrownDartsInput.value = thrownDarts;
            bestScoreInput.value = bestScore;
            averageInput.value = average;
        }
    }

    /* button1.addEventListener("click", () => {
        console.log(thrownDarts, bestScore, average);
        thrownDarts = 5;
        bestScore = 20;
        thrownDartsInput.value = thrownDarts;
        bestScoreInput.value = bestScore;
        averageInput.value = average;
        document.getElementById("form").submit();
    }); */



    /* $.ajax({
            url: "{{ route("addGame") }}",
            type:"POST",
            data:{
              thrownDarts: thrownDarts,
              bestScore: bestScore,
              average: average
            },
            success:function(response){
              console.log(response);
              if(response) {
                $('.success').text(response.success);
                $("#ajaxform")[0].reset();
              }
            },
            error: function(error) {
             console.log(error);
            }
           }); */
    



   /* button1.addEventListener("click", () => {
        throw1 = button1.innerText;
        throw1Element.innerText = throw1;
    }); */
</script>
