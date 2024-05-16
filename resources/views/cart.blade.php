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
                            <h1>Cart</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end breadcrumb section -->

        <!-- cart -->
        <div class="cart-section mt-150 mb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="cart-table-wrap">
                            <table class="cart-table">
                                <thead class="cart-table-head">
                                    <tr class="table-head-row">
                                        <th class="product-remove"></th>
                                        <th class="product-image">Product Image</th>
                                        <th class="product-name">Name</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-total">Total</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($cartItems as $item)
                                    <tr class="table-body-row">

                                        <!-- Delete a Product From the Cart -->
                                        <td class="product-remove">
                                            <a href="#" onclick="removeProduct({{ $item['id'] }})"><i class="far fa-window-close"></i></a>
                                        </td>
                                        <!-- Delete a Product From the Cart -->

                                        <td class="product-image"><img src="{{ $item['image'] }}" alt=""></td>
                                        <td class="product-name">{{ $item['name'] }}</td>
                                        <td class="product-price">${{ $item['price'] }}</td>
                                        <td class="product-quantity">
                                            <input type="number" value="{{ $item['quantity'] }}" placeholder="0" class="quantityInput">
                                        </td>
                                        <td class="product-total">${{ $item['price'] * $item['quantity'] }}</td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="total-section">
                            <table class="total-table">
                                <thead class="total-table-head">
                                    <tr class="table-total-row">
                                        <th>Total</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="total-data">
                                        <td><strong>Subtotal: </strong></td>
                                        <td>$500</td>
                                    </tr>
                                    <tr class="total-data">
                                        <td><strong>Shipping: </strong></td>
                                        <td>$45</td>
                                    </tr>
                                    <tr class="total-data">
                                        <td><strong>Total: </strong></td>
                                        <td>$545</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="cart-buttons">
                                <a href="{{ route('cart') }}" class="boxed-btn">Update Cart</a>
                                <a href="{{ route('checkout') }}" class="boxed-btn black">Check Out</a>
                            </div>
                        </div>

                        {{-- <div class="coupon-section">
                            <h3>Apply Coupon</h3>
                            <div class="coupon-form-wrap">
                                <form action="{{ route('welcome') }}">
                                    <p><input type="text" placeholder="Coupon"></p>
                                    <p><input type="submit" value="Apply"></p>
                                </form>
                            </div> --}}
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end cart -->
        
        <script>
            // Get all input elements with the class 'quantityInput'
            var quantityInputs = document.querySelectorAll('.quantityInput');
            
            // Loop through each input element
            quantityInputs.forEach(function(input) {
                // Add event listener to each input field
                input.addEventListener('change', function() {
                    // Parse the input value as a number
                    var quantity = parseInt(this.value);
                    
                    // If the quantity is less than 0, set it to 0
                    if (quantity < 0) {
                        this.value = 0;
                    }
                });
            });
        </script>

<script>
    // Remove product from cart
    function removeProduct(productId) {
        // Confirm with the user before removing the product
        if (confirm("Are you sure you want to remove this product from your cart?")) {
            // Send AJAX request to remove the product
            $.ajax({
                url: '{{ route('cart.remove') }}',
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    product_id: productId
                },
                success: function(response) {
                    // If the product is successfully removed, reload the page to update the cart
                    location.reload();
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        }
    }
</script>
    @endsection
