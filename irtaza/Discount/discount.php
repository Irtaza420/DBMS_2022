<head>
<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>AIM</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">

<style>
# Shop Banner Styles

/* -----------------------------------------------------------------------------

# Base - Genral & Typography

----------------------------------------------------------------------------- */
html {
  font-size: 14px;
  font-weight: 400;
  line-height: 28px;
  height: 100%;
}

body {
  font-family: "Open Sans", sans-serif;
  font-weight: 400;
  font-size: 1rem;
  letter-spacing: 0.1px;
  line-height: 1.8;
  color: goldenrod;
  overflow-x: hidden;
}

body img {
  max-width: 100%;
}

a {
  cursor: pointer;
  text-decoration: none;
  -webkit-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
background-color: goldrenrod
}

a:hover {
  color: black;
  text-decoration: none;
}

h1, .h1,
h2, .h2,
h3, .h3,
h4, .h4,
h5, .h5,
h6, .h6 {
  font-family: "Poppins", sans-serif;
  font-weight: 700;
  margin: 0 0 1.25rem 0;
  color: goldenrod;
}

h1:last-child, .h1:last-child,
h2:last-child, .h2:last-child,
h3:last-child, .h3:last-child,
h4:last-child, .h4:last-child,
h5:last-child, .h5:last-child,
h6:last-child, .h6:last-child {
  margin: 0;
}

h1, .h1 {
  font-size: 4rem;
  font-weight: 700;
  line-height: 4rem;
}

@media only screen and (max-width: 767.96px) {
  h1, .h1 {
    font-size: 3rem;
    line-height: 3.25rem;
  }
}

@media only screen and (max-width: 575.96px) {
  h1, .h1 {
    font-size: 2.5rem;
    line-height: 2.75rem;
  }
}

h2, .h2 {
  font-size: 3rem;
  font-weight: 700;
  line-height: 3.25rem;
}

@media only screen and (max-width: 767.96px) {
  h2, .h2 {
    font-size: 2.5rem;
    line-height: 2.75rem;
  }
}

@media only screen and (max-width: 575.96px) {
  h2, .h2 {
    font-size: 2rem;
    line-height: 2.25rem;
  }
}

h3, .h3 {
  font-size: 2rem;
  font-weight: 700;
  line-height: 2.25rem;
}

@media only screen and (max-width: 575.96px) {
  h3, .h3 {
    font-size: 1.75rem;
    line-height: 2rem;
  }
}

h4, .h4 {
  font-size: 1.5rem;
  font-weight: 700;
  line-height: 1.75rem;
}

@media only screen and (max-width: 575.96px) {
  h4, .h4 {
    font-size: 1.25rem;
    line-height: 1.5rem;
  }
}

h5, .h5 {
  font-size: 1.25rem;
  font-weight: 700;
  line-height: 1.5rem;
}

h6, .h6 {
  font-size: 1rem;
  font-weight: 700;
  line-height: 1.5rem;
}

p {
  font-family: "Open Sans", sans-serif;
  font-weight: 400;
  font-size: 1rem;
  letter-spacing: 0.1px;
  line-height: 1.8;
  color: goldenrod;
  margin: 0 0 1.25rem 0;
}

p:last-child {
  margin: 0;
}

/* -----------------------------------------------------------------------------

# All Common Styles

----------------------------------------------------------------------------- */
.loader {
  bottom: 0;
  height: 100%;
  left: 0;
  position: fixed;
  right: 0;
  top: 0;
  width: 100%;
  z-index: 1111;
  background: #fff;
  overflow-x: hidden;
}

.loader-inner {
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  -o-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  height: 50px;
  width: 50px;
}

.circle {
  width: 8vmax;
  height: 8vmax;
  border-right: 4px solid #000;
  border-radius: 50%;
  -webkit-animation: spinRight 800ms linear infinite;
  animation: spinRight 800ms linear infinite;
}

.circle:before {
  content: '';
  width: 6vmax;
  height: 6vmax;
  display: block;
  position: absolute;
  top: calc(50% - 3vmax);
  left: calc(50% - 3vmax);
  border-left: 3px solid #F28123;
  border-radius: 100%;
  -webkit-animation: spinLeft 800ms linear infinite;
  animation: spinLeft 800ms linear infinite;
}

.circle:after {
  content: '';
  width: 6vmax;
  height: 6vmax;
  display: block;
  position: absolute;
  top: calc(50% - 3vmax);
  left: calc(50% - 3vmax);
  border-left: 3px solid #F28123;
  border-radius: 100%;
  -webkit-animation: spinLeft 800ms linear infinite;
  animation: spinLeft 800ms linear infinite;
  width: 4vmax;
  height: 4vmax;
  top: calc(50% - 2vmax);
  left: calc(50% - 2vmax);
  border: 0;
  border-right: 2px solid #000;
  -webkit-animation: none;
  animation: none;
}

@-webkit-keyframes spinLeft {
  from {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  to {
    -webkit-transform: rotate(720deg);
    transform: rotate(720deg);
  }
}

@keyframes spinLeft {
  from {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  to {
    -webkit-transform: rotate(720deg);
    transform: rotate(720deg);
  }
}

@-webkit-keyframes spinRight {
  from {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
  to {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
}

@keyframes spinRight {
  from {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
  to {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
}

.mt-80 {
  margin-top: 80px;
}

@media only screen and (max-width: 767.96px) {
  .mt-80 {
    margin-top: 50px;
  }
}

.mb-80 {
  margin-bottom: 80px;
}

@media only screen and (max-width: 767.96px) {
  .mb-80 {
    margin-bottom: 50px;
  }
}

.mt-100 {
  margin-top: 100px;
}

@media only screen and (max-width: 767.96px) {
  .mt-100 {
    margin-top: 80px;
  }
}

.mb-100 {
  margin-bottom: 100px;
}

@media only screen and (max-width: 767.96px) {
  .mb-100 {
    margin-bottom: 80px;
  }
}

.mt-150 {
  margin-top: 150px;
}

@media only screen and (max-width: 767.96px) {
  .mt-150 {
    margin-top: 100px;
  }
}

.mb-150 {
  margin-bottom: 150px;
}

@media only screen and (max-width: 767.96px) {
  .mb-150 {
    margin-bottom: 100px;
  }
}

.pt-80 {
  padding-top: 80px;
}

@media only screen and (max-width: 767.96px) {
  .pt-80 {
    padding-top: 50px;
  }
}

.pb-80 {
  padding-bottom: 80px;
}

@media only screen and (max-width: 767.96px) {
  .pb-80 {
    padding-bottom: 50px;
  }
}

.pt-100 {
  padding-top: 100px;
}

@media only screen and (max-width: 767.96px) {
  .pt-100 {
    padding-top: 80px;
  }
}

.pb-100 {
  padding-bottom: 100px;
}

@media only screen and (max-width: 767.96px) {
  .pb-100 {
    padding-bottom: 80px;
  }
}

.pt-150 {
  padding-top: 150px;
}

@media only screen and (max-width: 767.96px) {
  .pt-150 {
    padding-top: 100px;
  }
}

.pb-150 {
  padding-bottom: 150px;
}

@media only screen and (max-width: 767.96px) {
  .pb-150 {
    padding-bottom: 100px;
  }
}

.gray-bg {
  background-color: #f5f5f5;
}

.orange-text {
  color: goldenrod;
}

.blue-bg {
  background-color: #162133;
}

a.boxed-btn {
  font-family: 'Poppins', sans-serif;
  display: inline-block;
  background-color: #F28123;
  color: #fff;
  padding: 10px 20px;
}

a.bordered-btn {
  font-family: 'Poppins', sans-serif;
  display: inline-block;
  color: #fff;
  border: 2px solid #F28123;
  padding: 7px 20px;
}

a.read-more-btn {
  display: inline-block;
  margin-top: 15px;
  color: #051922;
  -webkit-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
  font-weight: 700;
}

a.read-more-btn:hover {
  color: #F28123;
}

a.boxed-btn, a.bordered-btn, a.cart-btn {
  border-radius: 50px;
}

.section-title h3 {
  font-size: 40px;
  position: relative;
  padding-bottom: 15px;
}

.section-title h3:after {
  position: absolute;
  content: '';
  left: 0px;
  right: 0px;
  bottom: 0px;
  width: 50px;
  height: 2px;
  background-color: #F28123;
  margin: 0 auto;
}

.section-title p {
  font-size: 15px;
  width: 530px;
  margin: 0 auto;
  color: #555;
  margin-top: 10px;
  line-height: 1.8;
}

.section-title {
  margin-bottom: 80px;
}
.shop-banner {
  position: relative;
  background-color: black;
  background-image: url(../img/1.jpg);
  background-size: cover;
  padding: 110px 0px 115px;
}

.shop-banner h3 {
  position: relative;
  font-size: 50px;
  line-height: 1.2em;
  margin-bottom: 0px;
color: white;
}

.shop-banner .sale-percent {
  position: relative;
  font-size: 60px;
  font-weight: 700;
  color: goldenrod;
}

.shop-banner .sale-percent span {
  position: relative;
  font-size: 24px;
  line-height: 1.1em;
  color: white;
  font-weight: 400;
  text-align: center;
  margin-right: 10px;
  display: inline-block;
}
.pic
{
margin-top:-320px;
float:right;
width: 310px;
margin-right:-120px;
}
#bt
{
background-color:goldenrod;
color:white;
}
#bt:hover
{
color: black;
border-radius:60px;
}

/* -----------------------------------------------------------------------------
</style>
</head>

<html>

<!-- shop banner -->
	<section class="shop-banner">
    	<div class="container">
        	<h3>December sale is on! <br> with big <span class="orange-text">Discount...</span></h3>
            <div class="sale-percent"><span>Sale! <br> Upto</span>50% <span>off</span></div>
            <a href="shop.html" class="cart-btn btn-lg" id ="bt">Shop Now</a>
<div class ="pic">
        <img src="assets/pic.jpg">
</div>
        </div>
        </div>
    </section>
	<!-- end shop banner -->
</html>