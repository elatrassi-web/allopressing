<!DOCTYPE html>
<html>
<head>
	<title>Allo pressing</title>
                <link rel="shortcut icon" href="assets/img/icon.png">
	
	<style type="text/css">
		body {
  font-family: Lato, sans-serif;
  color: #333333;
  margin: 30px;
}

.wizard-steps {
  height: 100%;
  padding: 10px;
  background-color: white;
   
}
.wizard-steps .steps-wrapper {
  display: flex;
  justify-content: space-around;
}
.step .completed .ca{
        margin-left:25px

}


.wizard-steps .steps-wrapper .step {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-left:50px;
}
.wizard-steps .steps-wrapper .step .step-number {
  font-size: 1.5em;
  color: #9b9b9b;
  background-color: #e6e6e6;
  border: 10px solid white;
  width: 2.5em;
  height: 2.5em;
  line-height: 2.5em;
  text-align: center;
  border-radius: 50%;
  z-index: 15;
  transition: 0.25s ease-in-out;
}
.wizard-steps .steps-wrapper .step .step-name {
  color: #b0b0b0;
  transition: 0.25s ease-in-out;
   font-size: 15px;
    text-align: center;
  font-weight: bold;
  margin-top:-8px;
}
.wizard-steps .steps-wrapper .step.completed .step-number {
  color: white;
  background-color: #5DFC70;
}
.wizard-steps .steps-wrapper .step.completed .step-name {
  color: #0D80C0;
}
.wizard-steps .line {
  width: 100%;
  height: 2px;
  background-color: #e6e6e6;
  position: relative;
  top: calc( -1em - 10px - 2.5em + 2px + -1px );
  z-index: 5;
}

.wizard-steps .step:first-of-type .step-name:after {
  content: "";
  height: 2px;
  width: calc(100% / 2);
  display: block;
  position: relative;
  top: calc( -1em - 10px - 2.5em + ( 2px * 2 ) + -1px );
  background-color: white;
  z-index: 10;
}
.wizard-steps .step:last-of-type .step-name:after {
  content: "";
  height: 2px;
  width: calc(100% / 2);
  display: block;
  position: relative;
  top: calc( -1em - 10px - 2.5em + ( 2px * 2 ) + -1px );
  left: 50%;
  background-color: white;
  z-index: 10;
}
.title-pl img{
  width: 50px;
}
  .title-pl {
      background-color: #5DFC70;
      text-align: center;
      padding-top: 8px;
      padding-bottom: 8px;
      color: #0D80C0;
      margin-left: 40px;
      margin-right: 40px;
      margin-top:20px;
      margin-bottom:10px;

  }
  .img-express{
      display:flex;
      width:100%;
      padding:10px;
      margin-left: auto;
      margin-right: auto;
      
  }
.img-express img{
 width:300px;
   margin-left: auto;
   margin-right: auto;
   background-position: relative;
   background-repeat: no-repeat;
   background-size: cover;
   display: block;
}
@media only screen and (max-width: 900px) {
  
    .wizard-steps .steps-wrapper .step.completed .step-number{
        margin-top: -10px;
    }
     .img-express{
      display:grid;
      width:100%;
      padding:10px;
      margin-left: auto;
      margin-right: auto;
      
  }
  
  
  .img-express img{
     
      height:160px;
      
  }
  #home-sur{
      display:flex;
      
  }
            .wizard-steps .steps-wrapper{
                display: flow-root;
            }
            span .step-name {
                padding-right: 10px;
            }
            .wizard-steps .steps-wrapper .step .step-name{
                                font-size:20px;

            }
            .wizard-steps .steps-wrapper .step{
                margin-top: auto;
                margin-bottom: auto;
                position: relative;
                top:5px;
                bottom:5px;
                height:180px;
                margin-left: auto;
                margin-right:auto;
            }
           
            .line{
                display:none;
            }
            .step .step-name{
                text-align: center;
            }
           
        }
	</style>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-203843026-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-203843026-1');
</script>
</head>
<body>
    <header>
  <?php require('menu-mobile.php')?>
  <?php require('menu.php')?>
  </header>
 
 
  <div class="title-pl">
    <h1> Sur place</h1>

  </div>
  <div id="home-sur"> 
<div class="wizard-steps">
  <div class="steps-wrapper">
    <div class="step completed ca">
      <span class="step-number"></span>
      <span class="step-name">Canapés</span>
    </div>
    <div class="step completed ma">
      <span class="step-number"></span>
      <span class="step-name">Matelas</span>
    </div>
    <div class="step completed ta">
      <span class="step-number"></span>
      <span class="step-name">Tapis<br> <small>(Sauf les cas délicats )</small></span>
    </div>
      <div class="step completed so">
      <span class="step-number"></span>
      <span class="step-name">Sol<br><small>(prochainement)</small></span>
    </div>

  </div>
  <div class="line"></div>
</div>
<div class="img-express">
  <img src="assets/img/canapé.jpg">
  <img src="assets/img/nettoyagematelas.jpeg">
  <img src="assets/img/nettoyagetapis.jpg">
  <img src="assets/img/sol.jpg">


</div>
  </div>
  <br><br><br>



<?php require('resources/footer.php');?>
</body>
</html>