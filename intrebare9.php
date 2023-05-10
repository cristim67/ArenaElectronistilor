<!DOCTYPE html>

<?php require_once "controllerUserData.php"; ?>

<?php

if( $_SESSION['email']){

}
else header('Location: login-user.php');
?>

<?php require_once "cachecontrol.php"; ?>


<html>
<head>
	<title>Arena Electronistilor</title>
	
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  
	<style>
		body {
      zoom:0.85;
        overflow-y: hidden; /* Hide vertical scrollbar */
  overflow-x: hidden; /* Hide horizontal scrollbar */
 background-image: linear-gradient(to bottom right, var(--secondary), var(--primary));
		}

		.container {
			display: grid;
			grid-template-columns: 1fr 1rem 1fr;
			grid-template-rows: repeat(8, 1fr);
			height: 100vh;
			align-items: center;
			justify-items: center;
		}

		.card {
			position: relative;
			width: 250px;
			height: 200px;
			perspective: 1000px;
			transition: transform 0.8s;
			cursor: pointer;
      margin-bottom: 100px;
		}
.button1 {
  position: relative;
  background-color: #4CAF50;
  border: none;
  font-size: 28px;
  color: #FFFFFF;
  padding: 20px;
  width: 200px;
  text-align: center;
  transition-duration: 0.4s;
  text-decoration: none;
  overflow: hidden;
  cursor: pointer;
}
.button1:after {
  content: "";
  background: #f1f1f1;
  display: block;
  position: absolute;
  padding-top: 300%;
  padding-left: 350%;
  margin-left: -20px !important;
  margin-top: -120%;
  opacity: 0;
  transition: all 0.8s
}

.button1:active:after {
  padding: 0;
  margin: 0;
  opacity: 1;
  transition: 0s
}
:root {
  --primary: #FFCE00;
  --secondary: #FE4880;
  --dark: #212121;
  --light: #F3F3F3;
}

		.card.clicked .flipper {
			transform: rotateY(180deg);
		}

		.front,
		.back {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			backface-visibility: hidden;
			transform-style: preserve-3d;
			box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
			background-color: #E2E2E2;
			padding: 20px;
			text-align: center;
			font-size: 24px;
			line-height: 1.2;
			color: #333;
		}

		.back {
			transform: rotateY(180deg);
			font-size: 16px;
			line-height: 1.2;
			color: #423E3B;
			background-color: #fff;
		}

		.flipper {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			transform-style: preserve-3d;
			transition: transform 0.8s;
		}
.pop-up {
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  padding: 1rem;
  height:400px;
  width:350px;
  

  border: 1px solid #000;
  	box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  background-color: red;
    display: flex;
  flex-wrap: wrap;
  align-content: center;
  margin:auto;
  
}
* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body {
  background-color: #f4c531;
}
.wrapper {
  box-sizing: content-box;
  width: 26.87em;
  padding: 2.5em 3em;
  background-color: #ffffff;
  position: absolute;
  transform: translate(-50%, -50%);
  left: 50%;
  top: 50%;
  border-radius: 0.6em;
  box-shadow: 0 0.9em 2.8em rgba(86, 66, 0, 0.2);
}
.game-container {
  position: relative;
  width: 100%;
  display: grid;
  gap: 0.6em;
}
.stats-container {
  text-align: right;
  margin-bottom: 1.2em;
}
.stats-container span {
  font-weight: 600;
}
.card-container {
  position: relative;
  width: 6.25em;
  height: 6.25em;
  cursor: pointer;
}
.card-before,
.card-after {
  position: absolute;
  border-radius: 5px;
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  border: 4px solid #000000;
  transition: transform 0.7s ease-out;
  backface-visibility: hidden;
}
.card-before {
  background-color: #f4c531;
  font-size: 2.8em;
  font-weight: 600;
}
.card-after {
  background-color: #ffffff;
  transform: rotateY(180deg);
}
.card-container.flipped .card-before {
  transform: rotateY(180deg);
}
.card-container.flipped .card-after {
  transform: rotateY(0deg);
}
.controls-container {
  position: absolute;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  width: 100%;
  height: 100%;
  background-color: #f4c531;
  top: 0;
}
button {
  border: none;
  border-radius: 0.3em;
  padding: 1em 1.5em;
  cursor: pointer;
}
#stop {
  font-size: 1.1em;
  display: block;
  margin: 1.1em auto 0 auto;
  background-color: #000000;
  color: #ffffff;
}
.controls-container button {
  font-size: 1.3em;
  box-shadow: 0 0.6em 2em rgba(86, 66, 0, 0.2);
}
.hide {
  display: none;
}
#result {
  text-align: center;
}
#result h2 {
  font-size: 2.5em;
}
#result h4 {
  font-size: 1.8em;
  margin: 0.6em 0 1em 0;
}
* {
  box-sizing: border-box;
  outline: none;
  user-select: none;
}
.flipper-timer {
  position: relative;
  width: 200px;
  height: 200px;
  margin: 0 auto;
  perspective: 1000px;
}

.flipper-timer .flipper {
  position: absolute;
  width: 100%;
  height: 100%;
  transform-style: preserve-3d;
  transition: transform 0.6s ease;
}

.flipper-timer .front,
.flipper-timer .back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.flipper-timer .front {
  background-color: #2196f3;
  color: white;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 5rem;
}

.flipper-timer .back {
  background-color: #f44336;
  color: white;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 3rem;
  transform: rotateY(180deg);
}

.flipper-timer.clicked .flipper {
  transform: rotateY(180deg);
}


	</style>
</head>
<body> 

<div ></div>
 <div  style="

margin-bottom: 1rem;
 text-align: center;">
     
     </div>
     <div style="position:absolute; background-color:#fff;box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;   border-radius: 10px;margin-left:2rem; zoom:0.80; ">
       <div style="text-align:left;margin-left:3rem; margin-right:3rem;margin-top:1rem; margin-bottom:2rem; "> <h1>Clasament   </div>
        
      
        <?php 
       
         $query = mysqli_query($con,'SELECT * FROM echipe ORDER BY punctaj DESC' );
        
        $i=1;
        
$array =  array("intrebare"=>"DE UNDE MĂNÂNCĂ STUDENȚII CÂND NU AU MÂNCARE DE ACASĂ?","raspuns1"=>"CANTINĂ", "raspuns2"=>"AUCHAN", "raspuns3"=>"LUCA", "raspuns4"=>"CARTOFISSERIE", "raspuns5"=>"DRISTOR/BĂNEASA", "raspuns6"=>"AFI-FOOD COURT","punctaj1"=>"39","punctaj2"=>"28","punctaj3"=>"15","punctaj4"=>"9","punctaj5"=>"5","punctaj6"=>"4","prev"=>"intrebare8.php", "next"=>"intrebare10.php");
         while($row = mysqli_fetch_array($query)) {
         
            echo '<h2 style="margin-left:0.4rem; margin-bottom:1rem;">';
             echo $i.". ".$row[echipa]." ".$row[punctaj];
             echo'</h2>';
             $i=$i+1;

         }
        ?>
        
        </div>
        
        <div style="background-color:#fff;box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;   border-radius: 10px;height:80px; width:200px;margin:auto; margin-right:2rem;  justify-content: center;
  align-items: center;">
        <div style="text-align:center;">
      <div class="sum" style="
  margin-top: 2rem;
  zoom:2;
  "> Suma: 0</div>
  <div id="lives" style="
    zoom:2;

  margin-bottom: 1rem;">  Vieti : 3</div>
  
        
    
        </div>
        </div>
         
       
  <div class="flipper-timer" style="zoom:0.4;margin-top:-12rem; background-color:#fff; border-radius: 100px;">
  <div class="front" style="background-color:#fff; color:black;border-radius: 100px;">
    <h1 style="zoom:0.8">15</h1>
  </div>
  <div class="back" style="border-radius: 100px;">
    <h1>FLIPPER TIMER</h1>
  </div>
</div>
    
     </div>
   <div style="text-align:center;  width: 600px; height:80px;
  align-items: center;

background-color:#fff;box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;   border-radius: 10px;margin:auto; ">
       
     <h1 style="margin-top:4.4rem; margin-bottom: 7.4rem;"> <?php echo$array["intrebare"]; ?> </h1>
    
     </div>
     <div>

	<div class="container" style=" text-align: center; margin-top:10.4rem; margin-left:4rem;" >

		<div class="card" data-number="<?php echo$array["punctaj1"]; ?>">
			<div class="flipper" >
				<div class="front">
      
					<h1 style="text-align:center;margin-top:4rem;">1</h1>
				</div>
				<div class="back">
					
          
          <h1 style="text-align:center;margin-top:1.5rem;"><?php echo$array["raspuns1"]; ?> </h1>
  <h1 style="text-align:center;margin-top:1rem;">~ <?php echo$array["punctaj1"]; ?> ~ </h1>


				</div>
			</div>
		</div>
		<div class="card" data-number="<?php echo$array["punctaj2"]; ?>">
			<div class="flipper" >
				<div class="front">
          <h1 style="text-align:center;margin-top:4rem;">2</h1>
				</div>
				<div class="back">
          <h1 style="text-align:center;margin-top:1.5rem;"><?php echo$array["raspuns2"]; ?></h1>
          
  <h1 style="text-align:center;margin-top:1rem;">~ <?php echo$array["punctaj2"]; ?> ~ </h1>

				</div>
			</div>  
  </div>
  <div class="card" data-number="<?php echo$array["punctaj3"]; ?>">
    <div class="flipper" >
      <div class="front">
        <h1 style="text-align:center;margin-top:4rem;">3</h1>
      </div>
      <div class="back">
        <h1 style="text-align:center;margin-top:1.5rem;"><?php echo$array["raspuns3"]; ?></h1>
        
  <h1 style="text-align:center;margin-top:1rem;">~ <?php echo$array["punctaj3"]; ?> ~ </h1>
      </div>
    </div>
  </div>
  <div class="card" data-number="<?php echo$array["punctaj4"]; ?>">
    <div class="flipper" >
      <div class="front">
        <h1 style="text-align:center;margin-top:4rem;">4</h1>
        
      </div>
      <div class="back">
   
        <h1 style="text-align:center;margin-top:1.5rem;zoom:0.8;"><?php echo$array["raspuns4"]; ?></h1>
        
  <h1 style="text-align:center;margin-top:1rem;">~ <?php echo$array["punctaj4"]; ?> ~ </h1>

      </div>
    </div>  
</div>

<div class="card" data-number="<?php echo$array["punctaj5"]; ?>">
  <div class="flipper" >
    <div class="front">
      <h1 style="text-align:center;margin-top:4rem;">5</h1>
      
        
    </div>
    <div class="back">
      <h1 style="text-align:center;margin-top:1.5rem;zoom:0.7;"><?php echo$array["raspuns5"]; ?></h1>
      
  <h1 style="text-align:center;margin-top:1rem;">~ <?php echo$array["punctaj5"]; ?> ~ </h1>
    </div>
  </div>
</div>
<div class="card" data-number="<?php echo$array["punctaj6"]; ?>">
  <div class="flipper" >
    <div class="front">
      <h1 style="text-align:center;margin-top:4rem;">6</h1>
      
    </div>
    <div class="back">
      <h1 style="text-align:center;margin-top:1.5rem;zoom:0.8;"><?php echo$array["raspuns6"]; ?></h1>
      
  <h1 style="text-align:center;margin-top:1rem;">~ <?php echo$array["punctaj6"]; ?> ~ </h1>
    </div>
  </div>  
</div>

 
  <div>

   
    </div>
  <div>

	</div>
	<div id="pop-up"></div>
</div>

	<script>
	
	
	function next(){
	    
	   location.href="<?php echo$array["next"]; ?>";
	    
	}
		function runda(){
	    
	   location.href="rundarapida.php";
	    
	}
	function prev(){
	    location.href="<?php echo$array["prev"]; ?>";
	}
	
	
	document.addEventListener('keyup', event => {
  if (event.code === 'Space') {
    updateLives();
  }
})

	document.addEventListener('keyup', event => {
  if (event.code === 'Enter') {
    next();
  }
})

	document.addEventListener('keyup', event => {
  if (event.code === 'ShiftLeft') {
    runda();
  }
})

	document.addEventListener('keyup', event => {
  if (event.code === 'ControlLeft') {
    prev();
  }
})

const goodAudio = new Audio();
goodAudio.src = 'good.mp3';
goodAudio.load();
function playGood() {
    goodAudio.currentTime = 0;
  goodAudio.play();
}

document.addEventListener('keydown', function(event) {
  if (event.key === '1') {
    var card = document.querySelector('[data-number="<?php echo$array["punctaj1"]; ?>"]');
    card.classList.toggle('clicked');
    playGood()
    
  } else if (event.key === '2') {
    var card = document.querySelector('[data-number="<?php echo$array["punctaj2"]; ?>"]');
    card.classList.toggle('clicked');
    playGood()
  }
  else if(event.key==='3'){
      var card=document.querySelector('[data-number="<?php echo$array["punctaj3"]; ?>"]')
        card.classList.toggle('clicked');
        playGood()
  }
  else if(event.key==='4'){
      var card=document.querySelector('[data-number="<?php echo$array["punctaj4"]; ?>"]')
        card.classList.toggle('clicked');
        playGood()
  }
    else if(event.key==='5'){
      var card=document.querySelector('[data-number="<?php echo$array["punctaj5"]; ?>"]')
        card.classList.toggle('clicked');
        playGood()
  }
    else if(event.key==='6'){
      var card=document.querySelector('[data-number="<?php echo$array["punctaj6"]; ?>"]')
        card.classList.toggle('clicked');
        playGood()
  }
});
	
		const cards = document.querySelectorAll('.card');

		cards.forEach(card => {
			card.addEventListener('click', () => {
				card.classList.toggle('clicked');
			});
		});

    // Declaram variabila sumei si initializam cu 0
const cardValues = document.querySelectorAll('.card');
const clickedCards = new Set();
let sum = 0;

document.addEventListener('keydown', function(event) {
  const cardNumber = parseInt(event.key);
  const card = cards[cardNumber - 1];
  if (card && !clickedCards.has(card)) {
    const cardValue = parseInt(card.getAttribute('data-number'));
    sum += cardValue;
    document.querySelector('.sum').textContent = `Suma: ${sum}`;
    card.classList.add('clicked');
    clickedCards.add(card);
  }
});

function playBeep() {
  const audio = new Audio('beep.mp3');
  audio.play();
}
const wrongAudio = new Audio();
wrongAudio.src = 'wrong.mp3';
wrongAudio.load();
function playWrong() {
    wrongAudio.currentTime = 0;
  wrongAudio.play();
}

const timerDisplay = document.querySelector('.flipper-timer .front h1');
const flipperTimer = document.querySelector('.flipper-timer');

let countdown = 15;
let timerId;
let intervalId;
let timeoutId;
function startTimer() {
  timerId = setInterval(() => {
    countdown--;
    timerDisplay.textContent = countdown;
    if (countdown === 0) {
      clearInterval(timerId);
      flipperTimer.classList.add('clicked');
    }
  }, 1000);
}

function resetTimer() {
  clearInterval(timerId);
  countdown = 15;
  timerDisplay.textContent = countdown;
  flipperTimer.classList.remove('clicked');
}

document.addEventListener('keydown', function(event) {
  if (event.key === '7'  && !intervalId) {
     intervalId = setInterval(playBeep, 1000);
      timeoutId = setTimeout(function() {
      clearInterval(intervalId);
    }, 15000);
    startTimer();
  } else if (event.key === '8') {
      clearInterval(intervalId);
    clearTimeout(timeoutId);
    intervalId = undefined; 
    resetTimer();
  }
});

let numLives = 3;
function showPopUp(numX) {
  const popUp = document.createElement('div');
  popUp.classList.add('pop-up');
  playWrong();
  if (numX === 0) {
    numX = 3;
  } 

  popUp.innerHTML = '<div style="text-align:center; margin:auto;"><h1 style="align-content:center;color:white;zoom:3.5;">X</h1></div>'.repeat(numX);
 
  
  document.body.appendChild(popUp);
  setTimeout(() => popUp.remove(), 2500);
}
function updateLives() {
  numLives--;
  if (numLives < 0) {
    numLives = 0;
    sum = 0;
  }
  document.getElementById('lives').innerHTML = `Vieti: ${numLives}`;
  showPopUp(3 - numLives);
}


	</script>
	
	

</body>
</html>
