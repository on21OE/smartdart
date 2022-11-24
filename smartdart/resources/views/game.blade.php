<style>
    .con {
        display: flex;
        justify-content: center;
    }

    .countButton {
        width: 100px;
    }

    .parent {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        grid-template-rows: repeat(9, 1fr);
        grid-column-gap: 10px;
        grid-row-gap: 10px;
        justify-items: center;
    }

    .div1 {
        grid-area: 1 / 1 / 2 / 4;
    }

    .div2 {
        grid-area: 1 / 4 / 2 / 7;
    }

    .div3 {
        grid-area: 2 / 1 / 3 / 3;
    }

    .div4 {
        grid-area: 2 / 3 / 3 / 5;
    }

    .div5 {
        grid-area: 2 / 5 / 3 / 7;
    }

    .div6 {
        grid-area: 3 / 1 / 4 / 3;
    }

    .div7 {
        grid-area: 3 / 3 / 4 / 5;
    }

    .div8 {
        grid-area: 3 / 5 / 4 / 7;
    }

    .div9 {
        grid-area: 4 / 1 / 5 / 3;
    }

    .div10 {
        grid-area: 4 / 3 / 5 / 5;
    }

    .div11 {
        grid-area: 4 / 5 / 5 / 7;
    }

    .div12 {
        grid-area: 5 / 1 / 6 / 3;
    }

    .div13 {
        grid-area: 5 / 3 / 6 / 5;
    }

    .div14 {
        grid-area: 5 / 5 / 6 / 7;
    }

    .div15 {
        grid-area: 6 / 1 / 7 / 3;
    }

    .div16 {
        grid-area: 6 / 3 / 7 / 5;
    }

    .div17 {
        grid-area: 7 / 1 / 8 / 3;
    }

    .div18 {
        grid-area: 6 / 5 / 7 / 7;
    }

    .div19 {
        grid-area: 7 / 3 / 8 / 5;
    }

    .div20 {
        grid-area: 7 / 5 / 8 / 7;
    }

    .div21 {
        grid-area: 8 / 1 / 9 / 3;
    }

    .div22 {
        grid-area: 8 / 3 / 9 / 5;
    }

    .div23 {
        grid-area: 8 / 5 / 9 / 7;
    }

    .div24 {
        grid-area: 9 / 3 / 10 / 5;
    }

    .div25 {
        grid-area: 1 / 1 / 2 / 2;
    }
</style>
<x-app-layout>
    <h1 class="h1 justify-content-center d-flex mt-5 mb-5">Game</h1>
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-12">
                <table class="table table-striped table-dark table-borderless">
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
                        <tr>
                            <th>Score</th>
                            <th>Best Score</th>
                            <th>Thrown Darts</th>
                            <th>Average</th>
                        </tr>
                        <tr>
                            <td id="scoreElement">501</td>
                            <td id="bestScoreElement">0</td>
                            <td id="thrownDartsElement">0</td>
                            <td id="averageElement">0</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="con">
        <div class="parent">
            <div class="div1"> <button id="double" class="btn btn-warning px-6">Double</button> </div>
            <div class="div2"> <button id="triple" class="btn btn-warning px-6">Triple</button> </div>
            <div class="div3"> <button id="1" class="countButton btn btn-warning px-6">1</button> </div>
            <div class="div4"> <button id="2" class="countButton btn btn-warning px-6">2</button></div>
            <div class="div5"> <button id="3" class="countButton btn btn-warning px-6">3</button> </div>
            <div class="div6"> <button id="4" class="countButton btn btn-warning px-6">4</button> </div>
            <div class="div7"> <button id="5" class="countButton btn btn-warning px-6">5</button> </div>
            <div class="div8"> <button id="6" class="countButton btn btn-warning px-6">6</button></div>
            <div class="div9"> <button id="7" class="countButton btn btn-warning px-6">7</button></div>
            <div class="div10"> <button id="8" class="countButton btn btn-warning px-6">8</button></div>
            <div class="div11"> <button id="9" class="countButton btn btn-warning px-6">9</button> </div>
            <div class="div12"> <button id="10" class="countButton btn btn-warning px-6">10</button></div>
            <div class="div13"> <button id="11" class="countButton btn btn-warning px-6">11</button> </div>
            <div class="div14"> <button id="12" class="countButton btn btn-warning px-6">12</button></div>
            <div class="div15"> <button id="13" class="countButton btn btn-warning px-6">13</button> </div>
            <div class="div16"> <button id="14" class="countButton btn btn-warning px-6">14</button> </div>
            <div class="div17"> <button id="15" class="countButton btn btn-warning px-6">15</button> </div>
            <div class="div18"> <button id="16" class="countButton btn btn-warning px-6">16</button> </div>
            <div class="div19"> <button id="17" class="countButton btn btn-warning px-6">17</button></div>
            <div class="div20"> <button id="18" class="countButton btn btn-warning px-6">18</button></div>
            <div class="div21"> <button id="19" class="countButton btn btn-warning px-6">19</button></div>
            <div class="div22"> <button id="20" class="countButton btn btn-warning px-6">20</button></div>
            <div class="div23"> <button id="25" class="countButton btn btn-warning px-6">25</button></div>
            <div class="div24"> <button id="0" class="countButton btn btn-warning px-6">0</button></div>
            <div class="div25"> </div>
        </div>
    </div>
    </div>
    <form id="form" method="post" action="{{ url('saveGame') }}" style="display: none">
        @csrf
        <div class="col-3">
            <label class="form-label">thrownDarts</label>
            <input id="thrownDarts" type="text" class="form-control" name="thrownDarts"
                placeholder="Thrown Darts">
        </div>
        <div class="col-3">
            <label class="form-label">bestScore</label>
            <input id="bestScore" type="text" class="form-control" name="bestScore" placeholder="Best Score">
        </div>
        <div class="col-3">
            <label class="form-label">average</label>
            <input id="average" type="text" class="form-control" name="average" placeholder="Average">
        </div>
        <button type="submit" class="btn btn-warning">Submit</button>
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
    let scoreThisRound = 0;
    let scoreLastRound;
    let double = false;
    let triple = false;

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
    const multiButtons = document.querySelectorAll(".btn-group > .btn");
    const doubleButton = document.querySelector("#double");
    const tripleButton = document.querySelector("#triple");

    const bull = document.getElementById("25");

    doubleButton.addEventListener("click", () => {
        if (double) {
            double = false;
            $("#double").removeClass("btn-dark");
            $("#double").addClass("btn-warning");
        } else {
            double = true;
            triple = false;
            $("#double").removeClass("btn-warning");
            $("#double").addClass("btn-dark");
            $("#triple").removeClass("btn-dark");
            $("#triple").addClass("btn-warning");
            bull.removeAttribute("disabled", "");
        }
    })

    tripleButton.addEventListener("click", () => {
        if (triple) {
            triple = false;
            $("#triple").removeClass("btn-dark");
            $("#triple").addClass("btn-warning");
            bull.removeAttribute("disabled", "");
        } else {
            triple = true;
            double = false;
            $("#triple").removeClass("btn-warning");
            $("#triple").addClass("btn-dark");
            $("#double").removeClass("btn-dark");
            $("#double").addClass("btn-warning");
            bull.setAttribute("disabled", "");
        }
        console.log("double", double, "triple", triple)
    })

    countButtons.forEach((countButton) => {
        countButton.addEventListener("click", (e) => {
            if (throw1Element.innerText === "") {
                throw1 = parseInt(e.target.innerText);
                if (double) {
                    throw1 = throw1 * 2;
                } else if (triple) {
                    throw1 = throw1 * 3;
                }
                throw1Element.innerText = throw1;
                updateScore(throw1, false, 1);
                checkIfWon();
                checkIfOverthrow();
                resetMulti();
            } else if (throw2Element.innerText === "") {
                throw2 = parseInt(e.target.innerText);
                if (double) {
                    throw2 = throw2 * 2;
                } else if (triple) {
                    throw2 = throw2 * 3;
                }
                throw2Element.innerText = throw2;
                updateScore(throw2, false, 2);
                checkIfWon();
                checkIfOverthrow();
                resetMulti();
            } else if (throw3Element.innerText === "") {

                throw3 = parseInt(e.target.innerText);
                if (double) {
                    throw3 = throw3 * 2;
                } else if (triple) {
                    throw3 = throw3 * 3;
                }
                throw3Element.innerText = throw3;
                updateScore(throw3, true, 3);
                checkIfWon();
                checkIfOverthrow();
                resetMulti();
            }
        })
    })

    function updateScore(currentThrow, isLastRound, currentRound) {
        thrownDarts = thrownDarts + 1;
        scoreThisRound = scoreThisRound + currentThrow;
        console.log("ScoreThisRound:", scoreThisRound);
        if (score - currentThrow >= 0) {
            score = score - currentThrow;
            if (isLastRound && scoreThisRound > bestScore) {
                bestScoreLastRound = bestScore;
                bestScore = scoreThisRound;
            }
        } else {
            console.log(score);
            score = scoreLastRound;
            console.log("scoreLastRound", scoreLastRound);
            average = averageLastRound / thrownDarts;
            if (currentRound === 1) {
                thrownDarts = thrownDarts + 2;
            } else if (currentRound === 2) {
                thrownDarts = thrownDarts + 1;
            }

            throw1Element.innerText = "";
            throw2Element.innerText = "";
            throw3Element.innerText = "";

            scoreElement.innerText = score;
            thrownDartsInput.value = thrownDarts;
            bestScoreInput.value = bestScore;
            averageInput.value = average;
        }
        console.log("score", score);

        averageLastRound = average;
        average = (501 - score) / thrownDarts;
        average = average.toFixed(2);
        if (isLastRound) {
            scoreThisRound = 0;
            scoreLastRound = score;
        }
        updateTable(isLastRound);
    }

    function updateTable(isLastRound) {
        scoreElement.innerText = score;
        bestScoreElement.innerText = bestScore;
        thrownDartsElement.innerText = thrownDarts;
        averageElement.innerText = average;

        if (isLastRound) {
            throw1Element.innerText = "";
            throw2Element.innerText = "";
            throw3Element.innerText = "";
        }

        thrownDartsInput.value = thrownDarts;
        bestScoreInput.value = bestScore;
        averageInput.value = average;
    }

    function checkIfWon() {
        if (score === 0) {
            document.getElementById("form").submit();
        }
    }

    function checkIfOverthrow() {
        if (score < 0) {
            console.log(score);
            score = scoreLastRound;
            console.log("scoreLastRound", scoreLastRound);
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

    function resetMulti() {
        double = false;
        $("#double").removeClass("btn-dark");
        $("#double").addClass("btn-warning");

        triple = false;
        $("#triple").removeClass("btn-dark");
        $("#triple").addClass("btn-warning");
    }

    /* function startRound() {
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
        average = average.toFixed(2);

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
        
    } */



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
            url: "{{ route('addGame') }}",
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
