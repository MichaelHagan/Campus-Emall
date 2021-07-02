@extends('layouts.main')
@section('styles')
   <link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
   <link rel="stylesheet" type="text/css" href="css/styles/categories_responsive.css">
@endsection
@section('content')
	<div class="container product_section_container">
     <h3>Shopping Cart</h3>
      <div class="row">
        <div class="col-lg-3 benefit_col">
          <small class="newsletter_text"><b>ITEM</b></small>
          <div class="benefit_item d-flex flex-row align-items-center">
            <div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
            <div class="benefit_content">
              <h6>free shipping</h6>
              <p>Suffered Alteration in Some Form</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 benefit_col">        
          <small class="newsletter_text"><b>QUANTITY</b></small>
          <div class="benefit_item d-flex flex-row align-items-center">
             <div class="quantity">
                            <span class="qty-minus" onclick="var effect = document.getElementById('qty3'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;">
                                <i class="fa fa-minus" aria-hidden="true"></i>
                            </span>
                            <input type="number" class="qty-text" id="qty3" step="1" min="1" max="300" name="quantity" value="1">
                            <span class="qty-plus" onclick="var effect = document.getElementById('qty3'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </span>
                    </div>
          </div>
        </div>
        <div class="col-lg-3 benefit_col">
          <small class="newsletter_text"><b>UNIT PRICE</b></small>
          <div class="benefit_item d-flex flex-row align-items-center">
            <div class="benefit_content">
              <span>$10</span>
            </div>
          </div>
        </div>
        <div class="col-lg-3  benefit_col">
          <small class="newsletter_text"><b>SUB TOTAL</b></small>
          <div class="benefit_item d-flex flex-row align-items-center">
            <div class="benefit_content">          
            <ul class="summary-table">
                <li><span>subtotal:</span> <span>$140.00</span></li>
                <li><span>delivery:</span> <span>Free</span></li>
                <li><span>total:</span> <span>$140.00</span></li>
            </ul>
            </div>
          </div>
        </div>
        {{-- <div class="col-lg-3 benefit_col">
          <div class="benefit_item d-flex flex-row align-items-center">
            <div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
            <div class="benefit_content">
              <h6>opening all week</h6>
              <p>8AM - 09PM</p>
            </div>
          </div>
        </div> --}}
     
    
 
       
      </div>
      <div class="row">
         <div class="col-lg-3 offset-lg-9 benefit_col">
          <small class="newsletter_text"><b>TOTAL</b></small>
          <div class="benefit_item d-flex flex-row align-items-center">
            <div class="benefit_content">
               <ul class="summary-table">
                <li><span>subtotal:</span> <span>$140.00</span></li>
                <li><span>delivery:</span> <span>Free</span></li>
                <li><span>total:</span> <span>$140.00</span></li>
               </ul>
            </div>
          </div>
          <button id="newsletter_submit" style="margin-top: 15px;margin-left: 65px" type="submit" class="newsletter_submit_btn trans_300" value="Submit">CHECKOUT</button>
        </div>
      </div> 
  </div>

@endsection
@section('script')
 	 <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
@endsection