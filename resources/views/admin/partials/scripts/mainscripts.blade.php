<!-- ================================================
Scripts
================================================ -->

<!-- jQuery Library -->
<script src="{{ asset('js/jquery-3.2.1.min.js ') }}"></script>
<!--materialize js-->
{{-- <script type="text/javascript" src="{{ asset('admin/js/plugins/jquery-1.11.2.min.js') }}"></script> --}}
<script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>

<!--materialize js-->
{{-- <script type="text/javascript" src="{{ asset('admin/js/materialize.min.js') }}"></script> --}}

<!--scrollbar-->
<script type="text/javascript" src="{{ asset('admin/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script type="text/javascript">
	
  $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();


    //this is the button that pops up the modal for adding a new category
    $(document).on('click','.add',function(event){
      $('.edit').hide();
      $('.send').show();
      $('.itemCheck').val("");
      $('.title').text('Add Category');

    });

    //this is the button that pops up the modal for adding a new product
    $(document).on('click','.add',function(event){
    	$('.edit').hide();
    	$('.send').show();
    	$('.itemCheck').val("");
    	$('.title').text('Add Product');

    });
    
    
   
    //this the button that pops up the edit modal categories
    $(document).on('click','.editChange',function(event){
      $('.send').hide();
      $('.edit').show();
      $('.title').text('Edit Category');
      var text = $(this).find('#itemName').text();
      var id = $(this).find('#itemId').text();
      var text = $.trim(text);
      var id = $.trim(id);
      $('.itemCheck').val(text);
      $('.idCheck').val(id);
      // console.log(text);
      // console.log(id);
    })

    //this the button that pops up the edit modal for product
    $(document).on('click','.editProduct',function(event){
    	$('.send').hide();
      $('.edit').show();
    	$('.title').text('Edit Product');
      var id = $(this).find('#id').text();
    	var text = $(this).find('#name').text();
      var price = $(this).find('#price').text();
      var discount = $(this).find('#discount').text();
      var cat = $(this).find('#cat').text();
      var available = $(this).find('#available').text();
      var description = $(this).find('#description').text();
      var image1 = $(this).find('#image1').text();
      var image2 = $(this).find('#image2').text();
      var image3 = $(this).find('#image3').text();
    	var image4 = $(this).find('#image4').text();

    	var text = $.trim(text);
      var id = $.trim(id);
      var price = $.trim(price);
      var discount = $.trim(discount);
      var cat = $.trim(cat);
      var available = $.trim(available);
      var description = $.trim(description);
      var image1 = $.trim(image1);
      var image2 = $.trim(image2);
      var image3 = $.trim(image3);
    	var image4 = $.trim(image4);

      $('.id').val(id);  
    	$('.productEdit').val(text);
      $('.priceEdit').val(price);
      $('.discountEdit').val(discount);
      $('.catEdit').text(cat);
      $('.availableEdit').val(available);
      $('.descriptionEdit').val(description);
      $('.image1').text(image1);
      // $('.image2').val(id);
      // $('.image3').val(id);
    	// $('.image4').val(id);
    	console.log(text);
      console.log(id);
      console.log(price);
      console.log(discount);
      console.log(cat);
      console.log(available);
      console.log(description);
      console.log(image1);
      console.log(image2);
      console.log(image3);
    	console.log(image4);
      // var frm = document.getElementById('#createProduct');
      // if (frm) {
      //   frm.action = "/update.product"
      // }
    })
    // $('.editProduct').click(function(){
    //   var frm = document.getElementById('#createProduct');
    //   if (frm) {
    //     frm.action = "{{ route('update.product') }}";
    //   }
    // })
      var csrfToken ='{{ csrf_token() }}';

      //this the edit button for editing categories that have already been created
    $('.edit').click(function(e){
      e.preventDefault();
      var text = $('.itemCheck').val();
      var id = $('.idCheck').val();
      // console.log(text);
      // console.log(id);
      if (text == "") {
          alert('please text area cannot be left empty');
      }
      $.post("CategoryUpdate",{'id':id,'text':text, _token:csrfToken},function(data){
          console.log(data);
          $('.ourItem').load(location.href + ' .ourItem');
      });
    })
   
   //this is the send button for posting new categories
    $('.send').click(function(e){
    	e.preventDefault();
    	var text = $('.itemCheck').val();
    	if(text == ""){
    		alert('Text cannot be left empty');
    	}

         $.post("{{route('category.store')}}",{text:text, _token:csrfToken},function(data){
                 console.log(data);
                 $('.ourItem').load(location.href + ' .ourItem');
         });
    });
   $(document).on('click','.add',function(event){
              var id = $(this).find('.getId').text();
              var id = $.trim(id);
              console.log(id);
              $.post('cart',{'id':id,'_token':csrfToken},function(data){
                  console.log(data);
                  // $('.ourItem').load(location.href + ' .ourItem');
                 });
              });
   $(document).on('click','.delete',function(event){
      var id = $(this).find('#DeleteId').text();
      var id = $.trim(id);
      console.log(id);
      $.post("{{route('category.delete')}}",{id:id, _token:csrfToken},function(data){
                 console.log(data);
                 $('.ourItem').load(location.href + ' .ourItem');
         });
    })
       // $('.check').click(function(e){
       //          e.preventDefault();
       //          console.log('checking');
       //  })
  });     

 // var form = document.querySelector('form');
 //        var request = new XMLHttpRequest();
 //        form.addEventListener('submit',function(event){
 //            event.preventDefault();
 //            var formdata = new FormData(form);
 //            request.open('post','submit');
 //            request.send(formdata);
 //            console.log('checking');
 //        });
</script>
<script type="text/javascript">
  // $('body').on('click','.check',function(e){
  //   e.preventDefault();
  //     $(this).parents("form").ajaxForm(options);
  //  });
  //  var options = {
  //   complete: function(response){
  //     if($.isEmptyObject(response.responseJSON.error)){
  //       $("input[name='title']").val('');
  //       alert('successful');
  //     }else{
  //       printErrorMsg(response.responseJSON.error);
  //     }
  //   }
  //  };
  //  function printErrorMsg(msg){
  //     $(".print-error-msg").find('ul').html('');
  //     $(".print-error-msg").css("display","block");
  //     $.each(msg, function(key, value){
  //         $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
  //     });
  //  }

</script>
<!-- chartist -->
{{--<script type="text/javascript" src="{{ asset('admin/js/plugins/chartist-js/chartist.min.js') }}"></script>--}}

<!-- chartjs -->
{{--<script type="text/javascript" src="{{ asset('admin/js/plugins/chartjs/chart.min.js') }}"></script>--}}
{{--<script type="text/javascript" src="{{ asset('admin/js/plugins/chartjs/chart-script.js') }}"></script>--}}

<!-- sparkline -->
<script type="text/javascript" src="{{ asset('admin/js/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/plugins/sparkline/sparkline-script.js') }}"></script>

<!-- google map api -->
{{--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAZnaZBXLqNBRXjd-82km_NO7GUItyKek"></script>--}}

<!--jvectormap-->
{{--<script type="text/javascript" src="{{ asset('admin/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>--}}
{{--<script type="text/javascript" src="{{ asset('admin/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>--}}
{{--<script type="text/javascript" src="{{ asset('admin/js/plugins/jvectormap/vectormap-script.js') }}"></script>--}}

<!--google map-->
{{--<script type="text/javascript" src="js/plugins/google-map/google-map-script.js"></script>--}}


<!--plugins.js - Some Specific JS codes for Plugin Settings-->
<script type="text/javascript" src="{{ asset('admin/js/plugins.min.js') }}"></script>
<!--custom-script.js - Add your own theme custom JS-->
<script type="text/javascript" src="{{ asset('admin/js/custom-script.js') }}"></script>
<!--sweetalert -->
<script type="text/javascript" src="{{ asset('admin/js/plugins/sweetalert/sweetalert.min.js') }}"></script>

<!-- data-tables -->
<script type="text/javascript" src="{{ asset('admin/js/plugins/data-tables/js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/plugins/data-tables/data-tables-script.js') }}"></script>