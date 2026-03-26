<!DOCTYPE html>
<html>
<head>
	<title>Allo pressing</title>

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
  margin-right: 150px;
  margin-left: 210px;
 
}
.wizard-steps .steps-wrapper {
  display: flex;
  justify-content: space-evenly;
}
.wizard-steps .steps-wrapper .step {
  display: flex;
  flex-direction: column;
  align-items: center;
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
font-size: 20px;
  font-weight: bold;}
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
.title-me img{
  width: 50px;

}
  .title-me {
      background-color: #5DFC70;
      text-align: center;
      padding-top: 8px;
      padding-bottom: 8px;
      color: #0D80C0;
      margin-left: 40px;
      margin-right: 40px;

  }
.img-express img{
  width: 250px;
margin-left: auto;
margin-right: auto;
background-position: relative;
background-repeat: no-repeat;
background-size: cover;
display: block;
}
@media only screen and (max-width: 900px) {
.wizard-steps{
                margin:0;
            }
            .wizard-steps .steps-wrapper{
                
                display: flow-root;
            }
            .line{
                display:none;
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
   <?php require('menu-mobile.php') ?>
  <?php require('menu.php')?>
  </header>
  <br>
  <br>
  <div class="title-me">
    <h1> Mode Express</h1>

  </div>
  <br><br><br>
<div class="wizard-steps">
  <div class="steps-wrapper">
    <div class="step completed">
      <span class="step-number"></span>
      <span class="step-name">Vêtements : le jour même</span>
      <p class="step-name"></p>
    </div>
    <div class="step completed">
      <span class="step-number"></span>
      <span class="step-name">Couvertures et couettes : 24h</span>
    </div>
    <div class="step completed">
      <span class="step-number"></span>
      <span class="step-name">Tapis : 48h (Selon la disponibilité)</span>
    </div>

  </div>
  <div class="line"></div>
</div>
<div class="img-express">
  <img src="assets/img/free-shiping.PNG">
</div>
  <br><br><br>



<?php require('resources/footer.php');?>
</body>
</html>