<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<br><br><br><br><br>

<div class="col-sm-12 logo-">
<h1 class="text-center text-danger" style="font-size:70px;"> SCHNELLLER </h1>
</div>

<h1 class="text-center text-success" style="text-shadow: 2px 2px 4px #fff;"> Unverbindliches Angebot anfordern</h1>

<div class="col-lg-6 col-sm-12">
<form id="regForm" action="?do=sent" method="post">
    <!-- One "tab" for each step in the form: -->

<div class="tab"><!--5-->
    <h2 class="text-center">was soll umgezugen werden</h2>
    <nav class="slct-bx">
        <h4 id="drdn-one">haushaltsgeräte <i class="fas fa-chevron-circle-down"></i></h4>
        <div id="grp-one" class="opt-bx">
            <div class="form-group form-check col-sm-10">
              <label class="form-check-label" for="wasch_Check">Wachmaschiene</label>
              <input type="checkbox" class="form-check-input" id="wasch_Check" name="wasch">
            </div>
            <div class="form-group form-check col-sm-10">
              <label class="form-check-label" for="kuhl_Check">Kühlschrank</label>
              <input type="checkbox" class="form-check-input" id="kuhl_Check" name="kuhl_Check">
            </div>
            <div class="form-group form-check col-sm-10">
              <label class="form-check-label" for="backofen_Check">Backofen</label>
              <input type="checkbox" class="form-check-input" id="backofen_Check" name="backofen_Check">
            </div>
            <div class="form-group form-check col-sm-10">
              <label class="form-check-label" for="Spul_Check">Spülmaschine</label>
              <input type="checkbox" class="form-check-input" id="Spul_Checka" name="Spul_Checka">
            </div>
            <div class="form-group form-check col-sm-10">
              <label class="form-check-label" for="fernseher_Check">Fernseher</label>
              <input type="number" class="form-check-input" id="fernseher_Check" name="fernseher_Check">
            </div>

        </div>
        <h4 id="drdn-tow">Wohnmöbel<i class="fas fa-chevron-circle-down"></i></h4>
        <div id="grp-tow" class="opt-bx">
        <div class="form-group form-check row">
            <label class="form-check-label"for="sofa_Check">Sofa-Landschaft</label>
              <input type="checkbox" class="text-left form-check-input" id="sofa_Check" name="sofa_Check">
            </div>
            <div class="form-group form-check row">
              <label class="form-check-label"for="bett_Check">Bett</label>
              <input type="checkbox" class="form-check-input" id="bett_Check" name="bett_Check">
            </div>
            <div class="form-group form-check row">
              <label class="form-check-label"for="schrank_Check">Schrank</label>
              <input type="checkbox" class="form-check-input" id="schrank_Check" name="schrank_Check">
            </div>
            
        </div>
        <h4 id="drdn-three">Büromöbel<i class="fas fa-chevron-circle-down"></i></h4>
        <div id="grp-three" class="opt-bx">
            <div class="form-group form-check row">
              <label class="form-check-label"for="drucker_Check">Drucker</label>
              <input type="checkbox" class="form-check-input" id="drucker_Check" name="drucker_Check">
            </div>
            <div class="form-group form-check row">
              <label class="form-check-label"for="burotisch_Check">Bürotisch</label>
              <input type="checkbox" class="form-check-input" id="burotisch_Check" name="burotisch_Check">
            </div>
        </div>
      </nav>
</div>

  <div class="tab"><!--1-->
    <h2 class="text-center">Contact Info:</h2> 
    <p><input placeholder="vollständige Name ...." oninput="this.className = ''" name="name" ></p>
    <p><input placeholder="E-mail..." oninput="this.className = ''" name="email" ></p>
    <p><input type="number" placeholder="Phone..."  name="Nummer" ></p>
  </div>
  <div class="tab"><!--2-->
  <h2 class="text-center">von :</h2>
    <div class="col-xs-9"><p><input type="text" placeholder="Strasse" name="str"></p></div>
    <div class="col-xs-3"><p class="col-xs-3"><input  type="text" placeholder="Hausnuumer" name="hnr"></p></div>
      <p><input type=string placeholder="(PLZ)" maxlength="5" minlength="5" name="plz" /></p>
      <p><input type="text" placeholder="Ort" name="ort"></p>
  </div>
  <div class="tab"><!--3-->
  <h2 class="text-center">nach :</h2>
    <nav class="">
          <p><input type="text" placeholder="Strasse" name="str1"></p>
          <p><input type="text" placeholder="Hausnuumer" name="hnr1"></p><br>
          <p><input type=string placeholder="(PLZ)" maxlength="5" minlength="5" name="plz1" /></p>
          <p><input type="text" placeholder="Ort" name="ort1"></p>
      </nav>
  </div>
  <div class="tab"><!--4-->
  <h2 class="text-center">wann :</h2>
    <p><input type="datetime-local"  name="date" ></p>
  </div>




  <div class="tab"> <!--6-->
    <h2 class="text-center">nach :</h2>
    <nav class="">
          <h1>bitte überprufen Sie Ihre eingegebene dann "Jetzt vereinbaren"  drücken</h1>
      </nav>
  </div>


  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Zurück</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)"><span>NÄCHST </span></button>
    </div>
  </div>

  <!-- Circles which indicates the steps of the form: -->

  <div style="text-align:center;margin-top:40px;">

    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>


  </div>

  <input type="submit" name="send" value="Jetzt vereinbaren" id="send" />
</form>
</div>
<div class="col-lg-6 col-sm-12"></div>