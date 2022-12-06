<?php
    ob_start();
    // include header.php file
    include ('header.php');
?>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Contact</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- main style -->
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">
<style>
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
  color: #051922;
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
}

a:hover {
  color: #F28123;
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
  color: #051922;
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
  color: #051922;
  margin: 0 0 1.25rem 0;
}

p:last-child {
  margin: 0;
}

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
  color: #F28123;
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

.form-title {
  margin-bottom: 25px;
}

.form-title h2 {
  font-size: 25px;
}

.form-title p {
  font-size: 15px;
  line-height: 1.8;
}

.contact-form form p input[type=text], .contact-form form p input[type=tel], .contact-form form p input[type=email] {
  width: 49%;
  padding: 15px;
  border: 1px solid #ddd;
  border-radius: 3px;
}

.contact-form form p textarea {
  border: 1px solid #ddd;
  padding: 15px;
  height: 200px;
  border-radius: 3px;
  width: 100%;
  resize: none;
}

.contact-form-wrap {
  background-color: #FBFBFB;
  padding: 45px 30px;
  border-radius: 5px;
}

.contact-form-box {
  padding-left: 40px;
  margin-bottom: 30px;
}

.contact-form-box h4 {
  font-size: 20px;
  font-weight: 600;
  position: relative;
  margin-bottom: 10px;
}

.contact-form-box h4 i {
  position: absolute;
  left: -13%;
  color: #F28123;
  top: 2px;
}

.contact-form-box p {
  line-height: 1.8;
  opacity: 0.8;
}

.contact-form-wrap .contact-form-box:last-child {
  margin: 0;
}

.find-location p {
  color: #fff;
  font-size: 40px;
  margin: 0;
  font-weight: 600;
  padding: 95px 0;
}

.find-location p i {
  margin-right: 10px;
  color: #F28123;
}

#form_status span {
  color: #fff;
  font-size: 14px;
  font-weight: normal;
  background: #E74C3C;
  width: 100%;
  text-align: center;
  display: inline-block;
  padding: 10px 0px;
  border-radius: 3px;
  margin-bottom: 18px;
}

#form_status span.loading {
  color: #333;
  background: #eee;
  border-radius: 3px;
  padding: 18px 0px;
}

#form_status span.notice {
  color: yellow;
}

#form_status .success {
  color: #fff;
  text-align: center;
  background: #2ecc71;
  border-radius: 3px;
  padding: 30px 0px;
}

#form_status .success i {
  color: #fff;
  font-size: 45px;
  margin-bottom: 14px;
}

#form_status .success h3 {
  color: #fff;
  margin-bottom: 10px;
}

</style>
</head>
<body>
	
	<!-- contact form -->
	
<div class="contact-from-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mb-5 mb-lg-0">
					<div class="form-title">
						<h2>Have you any question?</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, ratione! Laboriosam est, assumenda. Perferendis, quo alias quaerat aliquid. Corporis ipsum minus voluptate? Dolore, esse natus!</p>
					</div>
				 	<div id="form_status"></div>
					<div class="contact-form">
						<form type="POST" id="fruitkha-contact" onSubmit="return valid_datas( this );">
							<p>
								<input type="text" placeholder="Name" name="name" id="name">
								<input type="email" placeholder="Email" name="email" id="email">
							</p>
							<p>
								<input type="tel" placeholder="Phone" name="phone" id="phone">
								<input type="text" placeholder="Subject" name="subject" id="subject">
							</p>
							<p><textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea></p>
							<input type="hidden" name="token" value="FsWga4&@f6aw" />
							<p><input type="submit" value="Submit"></p>
						</form>
					</div>
				</div>
<br></br>
				<div class="col-lg-4" id="box">
					<div class="contact-form-wrap">
						<div class="contact-form-box">
							<h4><i class="fas fa-map">
<br></br>

</i> Shop Address</h4>
							<p>34/8, East Hukupara <br> Gifirtok, Sadan. <br> Country Name</p>
						</div>
						<div class="contact-form-box">
							<h4><i class="far fa-clock"></i> Shop Hours</h4>
							<p>MON - FRIDAY: 8 to 9 PM <br> SAT - SUN: 10 to 8 PM </p>
						</div>
						<div class="contact-form-box">
							<h4><i class="fas fa-address-book"></i> Contact</h4>
							<p>Phone: +00 111 222 3333 <br> Email: support@fruitkha.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end contact form -->

	<br></br>
	<!-- google map section -->
	<div class="embed-responsive embed-responsive-21by9">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26432.42324808999!2d-118.34398767954286!3d34.09378509738966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2bf07045279bf%3A0xf67a9a6797bdfae4!2sHollywood%2C%20Los%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1576846473265!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" class="embed-responsive-item"></iframe>
	</div>
	<!-- end google map section -->


</html>


<?php
// include footer.php file
include ('footer.php');
?>