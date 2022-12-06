<!-- Top Sale -->
<?php

    shuffle($product_shuffle);

    // request method post
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if (isset($_POST['top_sale_submit'])){
            // call method addToCart
            $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
        }
    }
?>
<head> 
<style>

<style>
* {
  box-sizing: border-box;
}
body {
  font-family: 'Montserrat', sans-serif;
  color: goldenrod;
  background-color: white;
  overflow-x: hidden;
}

.layout_padding {
  padding: 70px 0;
}

.layout_padding2 {
  padding: 75px 0;
}

.layout_padding2-top {
  padding-top: 75px;
}

.layout_padding2-bottom {
  padding-bottom: 75px;
}

.layout_padding-top {
  padding-top: 90px;
}

.layout_padding-bottom {
  padding-bottom: 90px;
}

h1,
h2 {
  font-family: 'Playfair Display', serif;
}

.heading_container {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: start;
      -ms-flex-align: start;
          align-items: flex-start;
}

.heading_container h2 {
    position: relative;
    margin-bottom: 0;
    font-size: 3.5rem;
    font-weight: bold;
}

.heading_container h2::after {
    content: "";
    display: block;
    width: 70px;
    height: 5px;
    background: goldenrod;
    margin: 10px auto 10px;
    background-color: white;
}

.heading_container h2 span {
  color: goldenrod;
  background-color: white;
}

.heading_container p {
  margin-top: 10px;
  margin-bottom: 0;
}

.heading_container.heading_center {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  text-align: center;
}


.why_section .box {
    text-align: center;
    margin-top: 45px;
    background-color: black;
    padding: 45px 50px;
    border-radius: 5px;
    color: goldenrod;
}

.detail-box h5 {
    font-size: 21px;
    font-weight: 700;
}

.remove_line_bt h2::after {
    display: none;
}

.why_section .box .img-box {
  margin-bottom: 15px;
}

.why_section .box .img-box svg {
  width: 55px;
  height: auto;
  fill: goldenrod;
}

.subscribe_section {
  text-align: center;
}

.subscribe_section .box {
  background-color: black;
  padding: 75px 45px;
}

.subscribe_section .subscribe_form .heading_container {
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  color: goldenrod;
}

.subscribe_section .subscribe_form .heading_container h2 {
  padding: 0 25px;
}

.subscribe_section .subscribe_form form {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.client_section .box {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  text-align: center;
  margin-top: 55px;
}

.client_section .box .img_container {
    width: auto;
    height: auto;
    border-radius: 100%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: end;
    -ms-flex-pack: end;
    justify-content: flex-end;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    background-color: transparent;
}

.client_section .box .img_container .img-box {
    width: auto;
    height: auto;
    border-radius: 100%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    background-color: black;
    margin-right: -1px;
}

.client_section .box .img_container .img-box .img_box-inner {
  width: 150px;
  height: 150px;
  border-radius: 100%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  overflow: hidden;
}

.client_section .box .img_container .img-box .img_box-inner img {
  width: 100%;
}

.client_section .box .detail-box {
  margin-top: 25px;
}

.client_section .box .detail-box h5 {
  font-size: 20px;
  font-weight: 600;
}

.client_section .box .detail-box h6 {
  font-size: 15px;
  color: #999998;
}

.heading_container.heading_center h3 {
    position: relative;
    margin-bottom: 15px;
    font-size: 2.5rem;
    font-weight: bold;
    font-family: 'Playfair Display', serif;
}

.inner_page_head {
    background: #f7444e;
    text-align: center;
    color: #fff;
    padding-top: 50px;
    padding-bottom: 40px;
}

.inner_page_head h3 {
    font-size: 42px;
    font-weight: 800;
}

.field {
    display: flex;
}

.att{
  color:goldenrod;
}

.snp1
{
  background-color: black;
  color:goldenrod;
}
</style>
</head></style>
</head>
<section class="why_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Why Shop With Us
               </h2>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div class="box ">
                     <div class="img-box">
                        
                     </div>
                     <div class="detail-box">
                        <h5>
                           Fast Delivery
                        </h5>
                        <p>
                           We deliver in 3 working days 
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="box ">
                     <div class="img-box">
                                    </div>
                     <div class="detail-box">
                        <h5>
                           Free Shiping
                        </h5>
                        <p>
                           We offer free shipping 
                        
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="box ">
                     <div class="img-box">
                     </div>
                     <div class="detail-box">
                        <h5>
                           Best Quality
                        </h5>
                        <p>
                           Our products are genuine
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
<br></br>
      </section>

<!-- !Top Sale -->