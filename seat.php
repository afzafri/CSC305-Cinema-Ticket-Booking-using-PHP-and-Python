<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Choose seats</title>

<meta name="viewport" content="width=device-width">
    
    <link rel="stylesheet" href="./template/css/normalize.css">
	<link rel="stylesheet" href="./template/css/style.css">
    
  </head>

  <body>
  <form id='chooseSeatForm'>
    <div class="plane">
    <h3>Please choose your seats</h3>
    Seats Chosen: <input type="text" id="choosenSeats" readonly="readonly"> <button id="confirmBut">Confirm</button>

    <br><br>
  <div class="exit exit--front fuselage">
    
  </div>
  <ol class="cabin fuselage">
    <li class="row row--1">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="1A" value="1A"/>
          <label for="1A">1A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="1B" value="1B"/>
          <label for="1B">1B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="1C" value="1C"/>
          <label for="1C">1C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="1D" value="1D"/>
          <label for="1D">1D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="1E" value="1E"/>
          <label for="1E">1E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="1F" value="1F"/>
          <label for="1F">1F</label>
        </li>
      </ol>
    </li>
    <li class="row row--2">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="2A" value="2A"/>
          <label for="2A">2A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="2B" value="2B"/>
          <label for="2B">2B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="2C" value="2C"/>
          <label for="2C">2C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="2D" value="2D" disabled="disable"/>
          <label for="2D">2D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="2E" value="2E" disabled="disable"/>
          <label for="2E">2E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="2F" value="2F"/>
          <label for="2F">2F</label>
        </li>
      </ol>
    </li>
    <li class="row row--3">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="3A" value="3A" disabled="disable" />
          <label for="3A">3A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="3B" value="3B" disabled="disable"/>
          <label for="3B">3B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="3C" value="3C"/>
          <label for="3C">3C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="3D" value="3D"/>
          <label for="3D">3D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="3E" value="3E"/>
          <label for="3E">3E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="3F" value="3F"/>
          <label for="3F">3F</label>
        </li>
      </ol>
    </li>
    <li class="row row--4">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="4A" value="4A"/>
          <label for="4A">4A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="4B" value="4B"/>
          <label for="4B">4B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="4C" value="4C"/>
          <label for="4C">4C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="4D" value="4D" disabled="disable"/>
          <label for="4D">4D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="4E" value="4E"/>
          <label for="4E">4E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="4F" value="4F"/>
          <label for="4F">4F</label>
        </li>
      </ol>
    </li>
    <li class="row row--5">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="5A" value="5A"/>
          <label for="5A">5A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="5B" value="5B"/>
          <label for="5B">5B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="5C" value="5C"/>
          <label for="5C">5C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="5D" value="5D"/>
          <label for="5D">5D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="5E" value="5E"/>
          <label for="5E">5E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="5F" value="5F"/>
          <label for="5F">5F</label>
        </li>
      </ol>
    </li>

  </ol>

  <div class="exit exit--back fuselage">
    
  </div>

<center><hr width="250px" color="black" size="20px">SCREEN</center>

</div>
    </form>


    <script src='./template/js/modernizr.js'></script>
    <script src='./template/js/jquery.js'></script>
    <script src='./template/js/script.js'></script>
  </body>
</html>
