@extends('Layouts.master')

@section('static')
<!DOCTYPE html>
    <body>
        <!-- search area -->
        <div class="search-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <span class="close-btn"><i class="fas fa-window-close"></i></span>
                        <div class="search-bar">
                            <div class="search-bar-tablecell">
                                <h3>Search For:</h3>
                                <input type="text" placeholder="Keywords">
                                <button type="submit">Search <i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end search arewa -->

        <!-- breadcrumb-section -->
        <div class="breadcrumb-section breadcrumb-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="breadcrumb-text">
                            <p>TECHNICAL AND EFFICIENT</p>
                            <h1>Shop</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end breadcrumb section -->

        <!-- products -->
        <div class="product-section mt-150 mb-150">
            <div class="container">

                
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-filters">
                            <ul>
                                <li class="active" data-filter="*">CPU</li>
                                <li data-filter=".GPU">GPU</li>
                                <li data-filter=".RAM">RAM</li>
                                <li data-filter=".Case">CASE</li>
                                <li data-filter=".Motherboard">Motherboard</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row product-lists">
                    @foreach ($_category as $item)
                    <div class="col-lg-4 col-md-6 text-center PC">
                        <div class="single-product-item">
                            <div class="product-image">
                                <img src="{{ url($item->imgpath) }}" style="max-height: 250px !important; min-height: 250px !important" alt="">
                            </div>
                            <h3>{{ $item->name }}</h3>
                            <p class="product-price">${{ $item->price }}</p>
                            <!-- Styled anchor tag to mimic button -->
                            <a href="#" class="cart-btn add-to-cart-btn" data-product-id="{{ $item->id }}"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                        </div>
                    </div>
                    @endforeach
                </div>
                    
                    <div class="row">
                        <div class="col-lg-12 text-center">
                        </div>
                    </div>
                </div>
            </div>
            <!-- end products -->




            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script>
            $(document).ready(function(){
                $(".add-to-cart-btn").click(function(e){
                    e.preventDefault(); // Prevent the default action of anchor tag
            
                    var productId = $(this).data('product-id');
            
                    // AJAX call to add product to cart
                    $.ajax({
                        url: "{{ route('cart.add') }}",
                        method: 'POST',
                        data: { product_id: productId, _token: '{{ csrf_token() }}' },
                        success: function(response) {
                            // Redirect to cart page after product is added
                            window.location.href = "{{ route('cart') }}";
                        },
                        error: function(xhr, status, error) {
                            console.error(error);
                        }
                    });
                });
            });
            </script>
        @endsection
