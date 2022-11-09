<x-app-layout>
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="container">
            <div class="row">
                <h1 class="h1" style="color: white">Game</h1>
            </div>
            <div class="row">
                <div class="col">
                    <p id="playerName">Name</p>
                </div>
                <div class="col">
                    <p id="count1"></p>
                </div>
                <div class="col">
                    <p id="count2"></p>
                </div>
                <div class="col">
                    <p id="count3"></p>
                </div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-1">
                    <button id="1" class="btn btn-primary px-6">1</button>
                </div>
                <div class="col-1">
                    <button id="1" class="btn btn-primary px-6">2</button>
                </div>
                <div class="col-1">
                    <button id="1" class="btn btn-primary px-6">3</button>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button id="1" class="btn btn-primary px-4">4</button>
                    <button id="1" class="btn btn-primary px-4">5</button>
                    <button id="1" class="btn btn-primary px-4">6</button>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button id="1" class="btn btn-primary px-4">7</button>
                    <button id="1" class="btn btn-primary px-4">8</button>
                    <button id="1" class="btn btn-primary px-4">9</button>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button id="1" class="btn btn-primary px-4">10</button>
                    <button id="1" class="btn btn-primary px-4">11</button>
                    <button id="1" class="btn btn-primary px-4">12</button>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button id="1" class="btn btn-primary px-4">13</button>
                    <button id="1" class="btn btn-primary px-4">14</button>
                    <button id="1" class="btn btn-primary px-4">15</button>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button id="1" class="btn btn-primary px-4">16</button>
                    <button id="1" class="btn btn-primary px-4">17</button>
                    <button id="1" class="btn btn-primary px-4">18</button>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button id="1" class="btn btn-primary px-4">19</button>
                    <button id="1" class="btn btn-primary px-4">20</button>
                    <button id="1" class="btn btn-primary px-4">25</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        let count1;
        const count1p = document.querySelector("#count1") 

        document.addEventListener("click", () => {
            count1 = 5;
            count1p.innerText = count1;
        });
    </script>
</x-app-layout>