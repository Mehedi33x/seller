@extends('frontend.master')
@section('content')

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container" style="margin-bottom: 200px">
        <!-- row -->
        <div style="margin-bottom: 20px" >
            <a class="btn btn-success" style="margin-right: 40px" href="">Products</a>
            <a href="{{route('product.add')}}" class="btn btn-success"style="margin-right: 40px">Add Product +
            </a>
            <a class="btn btn-primary" style="margin-right: 40px" href="{{route('order.list')}}">Orders</a>
            <a class="btn btn-warning" style="margin-right: 40px" href="{{route('transaction.list')}}">Transactions</a>
        </div>
        
        <div class="row">
            <div id="store" class="col-md-9">

                <div class="row">
                    <div class="clearfix visible-sm visible-xs"></div>

                    <!-- product -->
                    <div class="col-md-4 col-xs-6">
                        <div class="product">
                            <div class="product-img">
                                <img src="./img/product03.png" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Category</p>
                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                <h4 class="product-price">$980.00</h4>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                      Action
                                    </button>
                                    <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="#">Edit</a></li>
                                      <li><a class="dropdown-item" href="#">Delete</a></li>
                                      
                                    </ul>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <!-- /product -->
                </div>
               
            </div>
        </div>
    </div>
</div>

    
@endsection