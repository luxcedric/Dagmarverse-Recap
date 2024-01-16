<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>home</title>

        <meta charset="utf-8" />
        <title>Draggable Image Slider | CodingNepal</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        />

        <link href="{{ asset('css/slider.css') }}" rel="stylesheet">
        <script src="{{ asset('js/slider.js')}}" defer></script>

    </head>

    <body>
    <div class="wrapper2" id="wrapper2"></div>

<div class="wrapper">
  <i id="left" class="fa-solid fa-angle-left"></i>
  <div class="carousel">
    <div class="carousel-item">
      <div class="story s1">
        <div class="back"></div>

        <h1>dagmar</h1>
        <h1 id="tests">Jahresrückblick</h1>
        <h1 class="test2">2023</h1>
      </div>
    </div>
    <div class="carousel-item">
      <div class="story s2">
        <div style="width: 80%">
          <h2>Hey du</h2>
          <h3 class="h3">Schön, dass du da bist!</h3>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="story s3">
        <h3>
          Nimm dir ein paar Minuten Zeit und schau dir an was du dieses Jahr
          erreicht hast.
        </h3>
      </div>
    </div>
    <div class="carousel-item">
      <div class="story s4">
        <h3>Du bist bereits</h3>
        <h2>{{$membersince}}</h2>
        <h3>Tage Teil unserer Community!</h3>
      </div>
    </div>
    <div class="carousel-item">
      <div class="story s5">
        <h3>Deine <span>dagmarverse Time</span> liegt dieses Jahr bei</h3>
        <h2>{{$hourswatched}}</h2>
      </div>
    </div>
    <div class="carousel-item">
      <div class="story s6">
        <h3>
          In diesem <span>Monat</span> warst du besonders aktiv dabei:
        </h3>
        <div>
          <p style="font-weight: bold">Januar</p>
          <div
            class="bar"
            style="background-color: rgb(255, 0, 102); width: 100%"
          ></div>
        </div>
        <div>
          <p>Februar</p>
          <div class="bar"></div>
        </div>
        <div>
          <p>März</p>
          <div class="bar"></div>
        </div>
        <div>
          <p>April</p>
          <div class="bar"></div>
        </div>
        <div>
          <p>Mai</p>
          <div class="bar"></div>
        </div>
        <div>
          <p>Juni</p>
          <div class="bar"></div>
        </div>
        <div>
          <p>Juli</p>
          <div class="bar"></div>
        </div>
        <div>
          <p>August</p>
          <div class="bar"></div>
        </div>
        <div>
          <p>September</p>
          <div class="bar"></div>
        </div>
        <div>
          <p>Oktober</p>
          <div class="bar"></div>
        </div>
        <div>
          <p>November</p>
          <div class="bar"></div>
        </div>
        <div>
          <p>Dezember</p>
          <div class="bar"></div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="story s7">
        <h3>In dieser Zeit hast du folgende Themenbereiche erkundet:</h3>
        <div>
          <img src="./assets/bagpack.png" alt="" />
          <h3>{{$genre_1}}</h3>
        </div>
        <div>
          <img src="./assets/money.png" alt="" />
          <h3>{{$genre_2}}</h3>
        </div>
        <div>
          <img src="./assets/lamp.png" alt="" />
          <h3>{{$genre_3}}</h3>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="story s8">
        <div>
          <h3>Lust auf ein kleines Quiz?</h3>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="story s9">
        <h4>
          Mit welchem dieser Themen hast du dich am meisten beschäftigt?
        </h4>
        <div class="right">
          <h3>1.</h3>
          <h3>Geld für morgen</h3>
        </div>
        <div class="left">
          <h3>2.</h3>
          <h3>Gründung</h3>
        </div>
        <div class="right">
          <h3>3.</h3>
          <h3>Job</h3>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="story s10">
        <h3>Du hast</h3>
        <h2>Gründung</h2>
        <h3>gewählt</h3>
      </div>
    </div>
    <div class="carousel-item">
      <div class="story s11">
        <h3>Das ist natürlich völlig</h3>
        <h2>RICHTIG</h2>
        <h3><span>Gut gemacht!</span></h3>
        <h3>
          Mit diesem Thema hast du dich <span>52 Stunden</span> beschäftigt
        </h3>
      </div>
    </div>
    <div class="carousel-item">
      <div class="story s12">
        <h3>
          In diesem Jahr hast du viele verschiedene Coaches kennengelernt...
        </h3>
      </div>
    </div>
    <div class="carousel-item">
      <div class="story s13">
        <h3>Die meiste Zeit hast du mit</h3>
        <h2>Cédric Lux</h2>
        <h3>verbracht!</h3>
        <img src="./assets/s13.png" alt="" />
      </div>
    </div>
    <div class="carousel-item">
      <div class="story s14">
        <video width="250" height="400" controls>
          <source src="./assets/vidio.mp4" type="video/mp4" />
          Your browser does not support the video tag.
        </video>
      </div>
    </div>
    <div class="carousel-item story s15">
      <div class="story s15">
        <h3>Diese Ziele hast du dir gesetzt:</h3>
        <h3 class="text"><span>2000€ sparen</span></h3>
        <h3 class="text"><span>Auto kaufen</span></h3>
        <h3 class="text"><span>Geld anlegen</span></h3>
      </div>
    </div>
    <div class="carousel-item">
      <div class="story s16">
        <h3>Hand aufs Herz...</h3>
        <h3 class="text">
          ... wie fleißig hast du an deinen Zielen gearbeitet?
        </h3>
      </div>
    </div>
    <div class="carousel-item">
      <div class="story s17">
        <h3>WOW!</h3>
        <h3 class="text"><span>Du kannst stolz auf dich sein!</span></h3>
      </div>
    </div>
    <div class="carousel-item">
      <div class="story s18">
        <p>
          Lass uns dazu deine Ziele für das nächste Jahr zusammen herausfinden
        </p>
      </div>
    </div>
    <div class="carousel-item">
      <div class="story s19">
        <p>Ziele werden aufgelistet...</p>
      </div>
    </div>
    <div class="carousel-item">
      <div class="story s20">
        <p>Wähle deine 3. wichtigsten Ziele für das nächste Jahr:</p>
        <div class="grids">
          <div>Geld sparen</div>
          <div>Haus kaufen</div>
          <div>Organisations Skills lernen</div>
          <div>Startup gründen</div>
          <div>Neuen Job</div>
          <div>Auto kaufen</div>
          <div>Finanzielle Unabhängigkeit</div>
          <div>Familie gründen</div>
          <div>Aktien anlegen</div>
          <div>Besser Pitchen</div>
          <div>Social Skills</div>
          <div>Netzwerk erweitern</div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="story s21">
        <h2>Priorisiere deine Ziele:</h2>
        <p>Ziehe sie dazu in die gewünschte Rheinfolge</p>
        <img src="./assets/handj.gif" style="width: 80px" alt="" />
        <div class="grids">
          <div class="number">1</div>
          <div class="content">Haus kaufen</div>
          <div class="number">2</div>
          <div class="content">Geld sparen</div>
          <div class="number">3</div>
          <div class="content">Neuen Job</div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="story s22">
        <h2>Priorisiere deine Ziele:</h2>
        <p>Ziehe sie dazu in die gewünschte Rheinfolge</p>
        <img src="./assets/handj.gif" style="width: 80px" alt="" />
        <div class="grids">
          <div class="number">1</div>
          <div class="content">Neuen Job</div>
          <div class="number">2</div>
          <div class="content">Geld sparen</div>
          <div class="number">3</div>
          <div class="content">Haus kaufen</div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="story s23">
        <h2>Sehr gut!</h2>
        <p>Jetzt wo du deine drei wichtigsten Ziel für 2024 weißt,</p>
        <p>lass uns diese ein wenig zum Leben erwecken!</p>
      </div>
    </div>
    <div class="carousel-item story s24">
      <div class="story s23">
        <h2>Suche dir nun zu jedem Ziel ein passendes Unterziel aus</h2>
      </div>
    </div>
    <div class="carousel-item">
      <div class="story s2x">
        <h1>Neuer Job</h1>
        <p>wähle aus:</p>
        <div class="grids">
          <div>Bewerbungsunterlagen <br> überarbeiten</div>
          <div>Berufsnetzwerk <br> ausbauen</div>
          <div>Organisations <br> Skills lernen</div>
          <div>Stellenausschreibungen <br> recherchieren</div>
          <div>Stellenausschreibungen <br> recherchieren</div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="story s2x">
        <h1>Geld sparen</h1>
        <p>wähle aus:</p>
        <div class="grids">
          <div>Budget erstellen </div>
          <div>Notfallfonds aufbauen</div>
          <div>Preisvergleiche durchführen</div>
          <div>Ausgaben überprüfen</div>         
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="story s2x">
        <h1>Haus kaufen</h1>
        <p>wähle aus:</p>
        <div class="grids">
           <div>Budget festlegen</div>
           <div>Immobilienmarkt  <br>
            analysieren</div>
           <div>Immobilien besichtigen</div>
           <div>Angebote vergleichen</div>
        </div>
      </div>
    </div>

    <div class="carousel-item">
      <div class="story s26">
        <p>
          Welches <span>Bild</span> passt am ehesten zu deiner Vorstellung?
        </p>
        <p>Klicke es einfach an</p>
        <img src="./assets/handj.gif" style="width: 80px" alt="" />
      </div>
    </div>
    <div class="carousel-item">
      <div class="story s27">
        <h2>Dein erstes Ziel ist:</h2>
        <div class="box">Neuer Job</div>
        <br />
        <p>Wähle aus:</p>
        <br />
        <div class="grid">
          <img src="./assets/img1.jpg" alt="" />
          <img src="./assets/img2.jpg" alt="" />
          <img src="./assets/img3.jpg" alt="" />
          <img src="./assets/img4.jpg" alt="" />
          <img src="./assets/img5.jpg" alt="" />
          <img src="./assets/img6.jpg" alt="" />
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="story s28">
        <h2>Dein erstes Ziel ist:</h2>
        <div class="box">Geld sparen</div>
        <p>Wähle aus:</p>
        <div class="grid">
          <img src="./assets/geld1.jpg" alt="" />
          <img src="./assets/geld2.jpg" alt="" />
          <img src="./assets/geld3.jpg" alt="" />
          <img src="./assets/geld4.jpg" alt="" />
          <img src="./assets/geld5.jpg" alt="" />
          <img src="./assets/geld6.jpg" alt="" />
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="story s29">
        <h2>Dein drittes Ziel ist:</h2>
        <div class="box">Haus kaufen</div>
        <p>Wähle aus:</p>
        <div class="grid">
          <img src="./assets/house1.jpg" alt="" />
          <img src="./assets/house2.jpg" alt="" />
          <img src="./assets/house3.jpg" alt="" />
          <img src="./assets/house4.jpg" alt="" />
          <img src="./assets/house5.jpg" alt="" />
          <img src="./assets/house6.jpg" alt="" />
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="story s30">
        <p>Deine Top 3 wird gebaut . . .</p>
      </div>
    </div>
    <div class="carousel-item">
      <div class="story s31">
        <p>Bevor du deine Top3 siehst</p>
      </div>
    </div>
    <div class="carousel-item">
      <div class="story s32">
        <p>
          Basierend auf deinen Zielen für das nächste Jahr könnte dir dieser
          neue Kurs gefallen:
        </p>
      </div>
    </div>
    <div class="carousel-item">
      <div class="story s33">
        <img src="./assets/imgback.png" alt="" />
        <div class="box">Zur Merkliste hinzufügen</div>
      </div>
    </div>
    <div class="carousel-item story s34">
      <div class="story s34">
        <p>Deine Top3 wird gebaut . . .</p>
      </div>
    </div>
    <div class="carousel-item">
      <div class="story s35">
        <div class="inner">
          <h2>Meine Top 3 2024</h2>
          <div class="grid">
            <img
              src="./assets/img1.jpg"
              alt=""
            />
            <h1 class="textd">Ich werde neue Fähigkeiten lernen</h1>
            <img
              src="./assets/geld1.jpg"
              alt=""
            />
            <h1 class="textd">Ich werde ein Sparfuchs</h1>

            <img
              src="./assets/house1.jpg"
              alt=""
            />
            <h1 class="textd">Ich werde ein neues Zuhause haben.</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="story s36">
        <h4>Nichts ist schöner sich gegenseitig zu motivieren</h4>
        <h4>Passe deine Top 3 an und teile sie mit deinen Freunden!</h4>
      </div>
    </div>
    <div class="carousel-item">
      <div class="story s37">
        <div class="grid">
          <h1>20</h1>
          <h1 style="text-align: end">24</h1>
        </div>
        <div class="footer">
          <h3>yeay!</h3>
          <h3>2024 kann kommen</h3>
        </div>
      </div>
    </div>
    <!-- Add more carousel items as needed -->
  </div>
  <i id="right" class="fa-solid fa-angle-right"></i>
</div>

    </body>

</html>