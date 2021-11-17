
        <link rel ="stylesheet" type="text/css" href="calculate.css">


<body>
<h2>Oma kalkulaator</h2>
<br>
<input type="button" onclick="history.back();" class="b1" value="Tagasi";/>
<br>
<h1>Sentimeeter</h1>
<form name="cm">
    <label for="resenie">Sisesta </label>
    <input type="number" name="resenie" id="resenie">
    <label for="resenie">cm = </label>
    <select name="dlina" onchange="perevodsm(event)">

        <option value=""></option>
        <option value="kilo">Kilomeetr</option>
        <option value="metr">Meetr</option>
        <option value="deci">Decimeetr</option>
        <option value="canti">Santimeetr</option>


    </select>
    <div id="otvet">Vastus</div>
</form>
<br>
<img src="/pildid/lkk.jpeg" alt="pilt" id="pilt">

<h1>Decimeter</h1>
<form name="dm">
    <label for="resenie3">Sisesta </label>
    <input type="number3" name="resenie3" id="resenie3">
    <label for="resenie3">dm = </label>
    <select name="dlina3" onchange="perevodeci(event)">

        <option value=""></option>
        <option value="kilo3">Kilomeetr</option>
        <option value="metr3">Meetr</option>
        <option value="deci3">Decimeetr</option>
        <option value="canti3">Santimeetr</option>



    </select>
    <div id="otvet3">Vastus</div>
</form>


<h1>Meter</h1>
<form name="m">
    <label for="resenie2">Sisesta </label>
    <input type="number2" name="resenie2" id="resenie2">
    <label for="resenie2">m = </label>
    <select name="dlina2" onchange="perevodm(event)">

        <option value=""></option>
        <option value="kilo2">Kilomeetr</option>
        <option value="metr2">Meetr</option>
        <option value="deci2">Decimeetr</option>
        <option value="canti2">Santimeetr</option>



    </select>
    <div id="otvet2">Vastus</div>
</form>

<h1>Kilometer</h1>
<form name="km">
    <label for="resenie4">Sisesta </label>
    <input type="number4" name="resenie4" id="resenie4">
    <label for="resenie4">km = </label>
    <select name="dlina4" onchange="perevodkm(event)">

        <option value=""></option>
        <option value="kilo4">Kilomeetr</option>
        <option value="metr4">Meetr</option>
        <option value="deci4">Decimeetr</option>
        <option value="canti4">Santimeetr</option>



    </select>
    <div id="otvet4">Vastus</div>
</form>
    <br>
<br>
<br>
    <h3>GitHub:</h3>
    <a href="https://github.com/Danil-Akulin/calculator">Git</a>



<br>



<script src="/js/calculate.js"></script>
</body>