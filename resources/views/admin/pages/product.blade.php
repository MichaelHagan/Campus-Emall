@extends('layouts.admin')
@section('title',' Product management')
@section('content')
    <div class="card horizontal">
        <div class="card-stacked">
            <div class="card-content">
                <div class="container">

                        <h4 class="header blue-text text-accent-2"><span class="fa fa-stethoscope"></span> All Products {{-- ({{ count($vitals) }}) --}}</h4>
                        <p class="caption">Table displays all products recorded.</p>


                    <div class="divider"></div>

                    <!--Data Table-->
                    <div id="table-datatables" style="margin-top: 20px;">
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Product ID</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Size</th>
                                        <th>Category</th>
                                        <th>Available</th>
                                        <th>Description</th>
                                        <th>Created</th>
                                        <th>Updated</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>

                                    <tfoot>
                                    <tr>
                                        <th>Product ID</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Size</th>
                                        <th>Category</th>
                                        <th>Available</th>
                                        <th>Description</th>
                                        <th>Created</th>
                                        <th>Updated</th>
                                        <th>Actions</th>
                                    </tr>
                                    </tfoot>

                                    <tbody>
                                    @foreach($products as $product)
                                        <tr>
                                            <td>{{ $product->id }}
                                            </td>
                                            <td>
                                                    {{ $product->productName }}
                                            </td>
                                            <td>
                                                    {{ $product->Price }}
                                            </td>
                                            <td>{{ $product->discount }}
                                            </td>
                                            <td>{{$product->category->name}}
                                            </td>
                                            <td>
                                              {{ $product->available }}
                                            </td>
                                            <td>{{ $product->description}}
                                            </td>
                                            <td>{{ date('l, jS \of F, Y, h:ia ', strtotime($product->created_at)) }}
                                            </td>
                                            <td>
                                                {{ date('l, jS \of F, Y, h:ia ', strtotime($product->updated_at)) }}
                                            </td>
                                            <td>
                                                <a href="{{ route('delete.product',['product_id'=> $product->id]) }}" class="btn btn-flat btn-floating waves-effect waves-light red"><i class="fa fa-trash-o white-text"></i> </a>
                                                <button data-target="modal2" 
                                                class="editProduct btn btn-flat btn-floating waves-effect waves-light purple"><i class=" fa fa-eye white-text"></i>
                                                    <li style="display: none;" id="id">
                                                        {{ $product->id }}
                                                   </li>
                                                   <li style="display: none" id="name">{{ $product->productName }}</li>
                                                   <li style="display: none" id="price">{{ $product->Price }}</li>
                                                   <li style="display: none;" id="discount">{{ $product->discount }}</li>
                                                   <li style="display: none;" id="cat">{{-- {{$product->category->name}} --}}</li>
                                                   <li style="display: none;" id="available">{{$product->available}}</li>
                                                   <li style="display: none;" id="description">{{ $product->description}}</li> 
                                                   <li style="display: none;" id="image1">{{ $product->image1}}</li> 
                                                   <li style="display: none;" id="image2">{{ $product->image2}}</li> 
                                                   <li style="display: none;" id="image3">{{ $product->image3}}</li> 
                                                   <li style="display: none;" id="image4">{{ $product->image4}}</li> 
                                               </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                     <!-- Floating Action Button -->
                    <div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
                        <a class="btn-floating btn-large indigo">
                            <i class="fa fa-align-justify white-text"></i>
                        </a>
                        <ul>
                            <li><button data-target="modal1" class="add btn-floating waves-effect waves-light red" title="Add a new product"><i class="fa fa-plus-square-o"></i></button></li>
                        </ul>
                    </div>

                    <!-- Modal Structure -->
                      <div id="modal1" class="modal">
                        <div class="modal-content">
                            <h5 ><center><b class="title">Add Product</b></center></h5>
                         <div class="row">
                             <form class="col s12" action="{{ route('create.product') }}" id="createProduct" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                               <div class="row">
                                 <div class="input-field col s6">
                                   <input placeholder="Placeholder" id="name" type="text" name="product" class="productEdit validate">
                                   <label for="Name">Product Name</label>
                                 </div>
                                 <div class="input-field col s6">
                                   <input id="Price" type="text" name="price" class="priceEdit validate">
                                   <label for="Price">Price</label>
                                 </div>
                               </div>
                               <div class="row">
                                 <div class="input-field col s6">
                                   <input id="Discount" type="text" name="discountedPrice" class="discountEdit validate">
                                   <label for="Price">Discounted Price</label>
                                 </div>
                                 <div class="input-field col s6">
                                   <label class="select"></label>
                                   <select id="Category" class="browser-default" name="categoryId" required>
                                    <option value="null"  disabled selected>Select Category</option>
                                    @foreach($categories as $category)
                                     <option  value="{{ $category->id }}">{{ $category->name }}</option>
                                     @endforeach
                                   </select>
                                 </div>
                               </div>
                                <div class="row">
                                 <div class="input-field col s6">
                                   <input id="available" type="text" name="available" class="availableEdit validate">
                                   <label for="Available">Stock</label>
                                 </div>
                                 <div class="input-field col s6">
                                   <input id="description" type="text" name="description" class="descriptionEdit validate">
                                   <label for="Description">Description</label>
                                 </div>
                                 <div class="input-field col s6">
                                       <div class="file-field input-field">
                                           <div class="btn">
                                              <span>Image 1<i class="fa fa-camera-retro fa-1x right"></i></span>
                                              <input name="image1" class="image1" type="file">
                                           </div>
                                           <div class="file-path-wrapper">
                                               <input class="file-path validate" type="text" name="image1">
                                           </div>
                                       </div>
                                 </div>
                                 <div class="input-field col s6">
                                   <div class="file-field input-field">
                                         <div class="btn">
                                           <span>Image 2</span>
                                           <input type="file" name="image2">
                                         </div>
                                         <div class="file-path-wrapper">
                                           <input class="file-path validate" name="image2" type="text">
                                         </div>
                                       </div>
                                 </div>
                                 <div class="input-field col s6">
                                   <div class="file-field input-field">
                                         <div class="btn">
                                           <span>Image 3</span>
                                           <input type="file" name="image3">
                                         </div>
                                         <div class="file-path-wrapper">
                                           <input class="file-path validate" name="image3" type="text">
                                         </div>
                                       </div>
                                 </div>
                                 <div class="input-field col s6">
                                   <div class="file-field input-field">
                                         <div class="btn">
                                           <span>Image 4</span>
                                           <input type="file" name="image4">
                                         </div>
                                         <div class="file-path-wrapper">
                                           <input class="file-path validate" name="image4" type="text">
                                         </div>
                                       </div>
                                 </div>
                               </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="sendProduct modal-action {{-- modal-close --}} waves-effect waves-green btn-flat">Send</button>
                          <button type="submit" class="edit modal-action {{-- modal-close --}} waves-effect waves-green btn-flat">Edit</button>
                        </div>
                        </form>
                      </div>

                </div>
            </div>


          

            <!-- Modal Structure for Edit Product -->
            <div id="modal2" class="modal">
              <div class="modal-content">
                <h4>Modal Header</h4>
                <div class="row">
                             <form class="col s12" action="{{ route('update.product') }}" id="createProduct" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="text" class="id" name="id" style="display: none;">
                               <div class="row">
                                 <div class="input-field col s6">
                                   <input placeholder="Placeholder" id="name" type="text" name="product" class="productEdit validate">
                                   <label for="Name">Product Name</label>
                                 </div>
                                 <div class="input-field col s6">
                                   <input id="Price" type="text" name="price" class="priceEdit validate">
                                   <label for="Price">Price</label>
                                 </div>
                               </div>
                               <div class="row">
                                 <div class="input-field col s6">
                                   <input id="Discount" type="text" name="discountedPrice" class="discountEdit validate">
                                   <label for="Price">Discounted Price</label>
                                 </div>
                                 <div class="input-field col s6">
                                   <label class="select"></label>
                                   <select id="Category" class="browser-default" name="categoryId" required>
                                    <option value="null"  disabled selected>Select Category</option>
                                    @foreach($categories as $category)
                                     <option  value="{{ $category->id }}">{{-- {{ $category->name }} --}}</option>
                                     @endforeach
                                   </select>
                                 </div>
                               </div>
                                <div class="row">
                                 <div class="input-field col s6">
                                   <input id="available" type="text" name="available" class="availableEdit validate">
                                   <label for="Available">Stock</label>
                                 </div>
                                 <div class="input-field col s6">
                                   <input id="description" type="text" name="description" class="descriptionEdit validate">
                                   <label for="Description">Description</label>
                                 </div>
                                 <div class="input-field col s6">
                                       <div class="file-field input-field">
                                           <div class="btn">
                                              <span>Image 1<i class="fa fa-camera-retro fa-1x right"></i></span>
                                              <input name="image1" class="image1" type="file">
                                           </div>
                                           <div class="file-path-wrapper">
                                               <input class="file-path validate" type="text" name="image1">
                                           </div>
                                       </div>
                                 </div>
                                 <div class="input-field col s6">
                                   <div class="file-field input-field">
                                         <div class="btn">
                                           <span>Image 2</span>
                                           <input type="file" name="image2">
                                         </div>
                                         <div class="file-path-wrapper">
                                           <input class="file-path validate" name="image2" type="text">
                                         </div>
                                       </div>
                                 </div>
                                 <div class="input-field col s6">
                                   <div class="file-field input-field">
                                         <div class="btn">
                                           <span>Image 3</span>
                                           <input type="file" name="image3">
                                         </div>
                                         <div class="file-path-wrapper">
                                           <input class="file-path validate" name="image3" type="text">
                                         </div>
                                       </div>
                                 </div>
                                 <div class="input-field col s6">
                                   <div class="file-field input-field">
                                         <div class="btn">
                                           <span>Image 4</span>
                                           <input type="file" name="image4">
                                         </div>
                                         <div class="file-path-wrapper">
                                           <input class="file-path validate" name="image4" type="text">
                                         </div>
                                       </div>
                                 </div>
                               </div>
                           </div>
                             <div class="modal-footer">
                               <button type="submit" class=" modal-action {{-- modal-close --}} waves-effect waves-green btn-flat">Edit</button>
                             </div>
                           </form>
                           </div>
                        </div>
                    </div>        
                  </div>
               </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        /*Show entries on click hide*/
        $(document).ready(function(){

            $(".dropdown-content.select-dropdown li").on( "click", function() {
                var that = this;
                setTimeout(function(){
                    if($(that).parent().hasClass('active')){
                        $(that).parent().removeClass('active');
                        $(that).parent().hide();
                    }
                },100);
            });
            
            
        });
        
    </script>
   {{--  <script type="text/javascript">
        var form = document.querySelector('form');
        var request = new XMLHttpRequest();
        form.addEventListener('submit',function(event){
            event.preventDefault();
            var formdata = new FormData(form);
            request.open('post','submit');
            request.send(formdata);
            console.log('checking');
        });
    </script> --}}
@endsection