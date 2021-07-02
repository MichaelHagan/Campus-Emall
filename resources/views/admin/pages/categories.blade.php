@extends('layouts.admin')
@section('title',' Product management')
@section('content')
    <div class="card horizontal">
        <div class="card-stacked">
            <div class="card-content">
                <div class="container">
                        <h4 class="header blue-text text-accent-2"><span class="fa fa-stethoscope"></span> All Categories {{-- ({{ count($vitals) }}) --}}</h4>
                        <p class="caption">Table displays all categories created.</p>


                    <div class="divider"></div>

                    <!--Data Table-->
                    <div id="table-datatables" style="margin-top: 20px;">
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <table id="data-table-simple" class="responsive-table display ourItem" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Category ID</th>
                                        <th>Name</th>
                                        <th>Created</th>
                                        <th>Updated</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>

                                    <tfoot>
                                    <tr>
                                         <th>Category ID</th>
                                        <th>Name</th>
                                        <th>Created</th>
                                        <th>Updated</th>
                                        <th>Actions</th>
                                    </tr>
                                    </tfoot>

                                    <tbody >
                                    @foreach($categorys as $category)
                                        <tr >
                                            <td>
                                                {{ $category->id }}
                                            </td>
                                            <td id="catName">
                                                {{ $category->name }}
                                            </td>
                                            <td>
                                               {{ date('l, jS \of F, Y, h:ia ', strtotime($category->created_at)) }}
                                            </td>
                                            <td>{{ date('l, jS \of F, Y, h:ia ', strtotime($category->updated_at)) }}
                                            </td>
                                            <td>
                                               {{--  <a class="btn btn-flat btn-floating waves-effect waves-light red"><i class="fa fa-trash-o white-text"></i> </a> --}}
                                               
                                              <button {{-- href="{{route('category.delete',['category_id'=> $category->id])}}" --}} class="delete btn-floating left-fab waves-effect waves-light red"><i class="fa fa-trash-o fa-2x indigo-text text-darken-4" ></i><li id="DeleteId" style="display: none;">
                                                        {{ $category->id }}
                                                    </li></button>
                                                <button data-target="modal1" class="editChange  btn btn-flat btn-floating waves-effect waves-light purple" title="edit"><i class=" fa fa-eye white-text"></i>
                                                    <li id="itemName" style="display: none;">
                                                        {{ $category->name }}
                                                    </li>
                                                    <li id="itemId" style="display: none;">
                                                        {{ $category->id }}
                                                    </li>
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
                            <li><button data-target="modal1" class="add btn-floating waves-effect waves-light red" title="Add a new category"><i class="fa fa-plus-square-o"></i></button></li>
                        </ul>
                    </div>
                    <!-- Modal Structure -->
                      <div id="modal1" class="modal">
                        <div class="modal-content">
                            <h5 ><b class="title">Add Category</b></h5>
                         <div class="row">
                             <form class="acceptData col s12" action="" method="POST">
                                {{ csrf_field() }}
                               <div class="row">
                                 <div class="input-field col s12">
                                   <input placeholder="Category" id="name" type="text" name="CategoryName" class="itemCheck validate">
                                   <input type="text" class="idCheck" name="id" style="display: none;" value="">
                                   <label for="Name">Category Name</label>
                                 </div>
                               </div>
                               <div class="modal-footer">
                                  <button type="submit" class="send  modal-action modal-close waves-effect waves-green btn-flat" {{-- data-dismiss="modal" --}}>Send</button>
                                  <button type="submit" class="edit modal-action modal-close waves-effect waves-green btn-flat">Edit</button>
                               </div>
                            </form>
                           </div>
                        </div>
                        
                      </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
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
@endsection