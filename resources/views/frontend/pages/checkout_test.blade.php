
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dragon Web Store</title>
    <!-- Roboto Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700&display=swap">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('assets/new/css/bootstrap.min.css')}}">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/new/css/mdb-pro.min.css')}}">
    <!-- Material Design Bootstrap Ecommerce -->
    <link rel="stylesheet" href="{{asset('assets/new/css/mdb.ecommerce.min.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/new/css/algolia.css') }}">


    <script src="https://js.stripe.com/v3/"></script>

</head>

<body class="skin-light">


<!--Main Navigation-->
<header>

    <!-- Navbar -->
@include('layouts.header')
<!-- Navbar -->

    <div class="jumbotron color-grey-light mt-70">
        <div class="d-flex align-items-center h-100">
            <div class="container text-center py-5">
                <h3 class="mb-0">Checkout</h3>
            </div>
        </div>
    </div>

</header>

<main>
    <div class="container">

        <div class="container">

            @if (session()->has('success_message'))
                <div class="spacer"></div>
                <div class="alert alert-success">
                    {{ session()->get('success_message') }}
                </div>
            @endif

            @if(count($errors) > 0)
                <div class="spacer"></div>
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{!! $error !!}</li>
                        @endforeach
                    </ul>
                </div>
        @endif
        <!--Section: Block Content-->
            <section class="mt-5 mb-4">

                <!--Grid row-->
                <div class="row">


                    <!--Grid column-->
                    <div class="col-lg-8 mb-4">

                        <!-- Card -->
                        <div class="card wish-list pb-1">
                            <div class="card-body">

                                <h5 class="mb-2">Billing details</h5>
                                <form action="{{route('checkout.store')}}" method="post">
                                {{csrf_field()}}
                                <!-- Grid row -->
                                    <div class="row">

                                        <!-- Grid column -->
                                        <div class="col-lg-6">
                                            <!-- First name -->
                                            <div class="md-form md-outline mb-0 mb-lg-4">
                                                <input type="text" id="firstName" name="fname"  value="{{ old('fname')}}"class="form-control mb-0
                                        mb-lg-2">
                                                <label for="firstName">First name</label>
                                            </div>
                                        </div>
                                        <!-- Grid column -->
                                        <!-- Grid column -->
                                        <div class="col-lg-6">
                                            <!-- Last name -->
                                            <div class="md-form md-outline">
                                                <input type="text" name="lname" id="lastName" value="{{ old('lname')
                                        }}"class="form-control">
                                                <label for="lastName">Last name</label>
                                            </div>

                                        </div>
                                        <!-- Grid column -->

                                    </div>

                                    <!-- Address Part 1 -->
                                    <div class="md-form md-outline mt-0">
                                        <input type="text" id="form14"name="address" placeholder="House number and street name"
                                               class="form-control" value="{{ old('address')}}">
                                        <label for="form14">Address</label>
                                    </div>


                                    <!-- Postcode / ZIP -->
                                    <div class="md-form md-outline">
                                        <input type="text"name="postcode" id="form16" class="form-control">
                                        <label for="form16" value="{{ old('postcode')}}">Postcode / ZIP</label>
                                    </div>

                                    <!-- Town / City -->
                                    <div class="md-form md-outline">
                                        <input type="text" id="form17" name="city" class="form-control" value="{{ old('city')
                                }}">
                                        <label for="form17">Town / City</label>
                                    </div>

                                    <!-- Phone -->
                                    <div class="md-form md-outline">
                                        <input type="number"name="phone" id="form18" class="form-control" value="{{ old('phone')
                                }}">
                                        <label for="form18">Phone</label>
                                    </div>

                                    <!-- Email address -->
                                    <div class="md-form md-outline">
                                        <label for="form19">Email address</label>
                                        @if (auth()->user())
                                            <input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}" readonly>
                                        @else
                                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                                        @endif
                                    </div>

                                    <!-- Additional information -->
                                    <div class="md-form md-outline">
                                <textarea id="form76" name="info" class="md-textarea form-control" rows="4" value="{{
                                 old('info')}}"></textarea>
                                        <label for="form76">Additional information</label>
                                    </div>

                                    <h2>Payment Details</h2>

                                    <div class="form-group">
                                        <label for="name_on_card">Name on Card</label>
                                        <input type="text" class="form-control" id="name_on_card" name="name_on_card" value="">
                                    </div>

                                    <div class="form-group">
                                        <label for="card-element">
                                            Credit or debit card
                                        </label>
                                        <div id="card-element">
                                            <!-- a Stripe Element will be inserted here. -->
                                        </div>

                                        <!-- Used to display form errors -->
                                        <div id="card-errors" role="alert"></div>
                                    </div>
                                    <div class="spacer"></div>
                                    <div class="form-check pl-0 mb-4 mb-lg-0">
                                        <input type="checkbox" class="form-check-input filled-in" id="new3">
                                        <label class="form-check-label small text-uppercase card-link-secondary" for="new3">Create an
                                            account?</label>
                                    </div>
                                    <button type="submit" id="complete-order" class="btn btn-primary btn-block waves-effect waves-light">Complete Order</button>

                                </form>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                    <!--Grid column-->


                    <!--Grid column-->
                    <div class="col-lg-4">

                        <!-- Card -->
                        <div class="card mb-4">
                            <div class="card-body">

                                <h5 class="mb-3">The total amount of</h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                        Temporary amount
                                        <span>${{Cart::subtotal()}}</span>
                                    </li>
                                    @if (session()->has('coupon'))

                                        <li class="list-group-item d-flex justify-content-between align-items-center border-0
                                 px-0 pb-0" style="">
                                            Code ({{ session()->get('coupon')['name'] }})
                                            <form action="{{ route('coupon.destroy') }}" method="POST" style="display:block">
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}
                                                <button type="submit" title="Remove" class="btn btn-link
                                            material-tooltip-main"><i
                                                        class="fas fa-times"></i></button>
                                            </form>
                                            <hr>
                                            <span>-${{ session()->get('coupon')['discount']}}</span>
                                            @endif
                                        </li>

                                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                            Taxes(10%)
                                            <span>${{Cart::tax()}}</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                            Shipping
                                            <span>Gratis</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                            <div>
                                                <strong>The total amount of</strong>
                                                <strong>
                                                    <p class="mb-0">(including VAT)</p>
                                                </strong>
                                            </div>
                                            <span><strong>${{Cart::total()}}</strong></span>
                                        </li>
                                </ul>
                                @if (! session()->has('coupon'))

                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <form action="{{route('coupon.store')}}" method="post">
                                                {{csrf_field()}}
                                                <a class="dark-grey-text d-flex justify-content-between" data-toggle="collapse" href="#collapseExample"
                                                   aria-expanded="false" aria-controls="collapseExample">
                                                    Add a discount code (optional)
                                                    <span><i class="fas fa-chevron-down pt-1"></i></span>
                                                </a>
                                                <div class="collapse" id="collapseExample">
                                                    <div class="mt-3">
                                                        <div class="md-form md-outline mb-0">
                                                            <input type="text" id="coupon-code" class="form-control font-weight-light"
                                                                   name="coupon_code" placeholder="Enter discount code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit">Apply</button>
                                            </form>
                                        </div>
                                    </div>
                                @endif

                                <button type="button" class="btn btn-primary btn-block waves-effect waves-light">Make purchase</button>

                            </div>
                        </div>
                        <!-- Card -->

                        <!--Grid column-->

                    </div>
                    <!--Grid row-->
                </div>
            </section>

            <div>

                <h2>Payment Details</h2>

                <div class="form-group">
                    <label for="name_on_card">Name on Card</label>
                    <input type="text" class="form-control" id="name_on_card" name="name_on_card" value="">
                </div>

                <div class="form-group">
                    <label for="card-element">
                        Credit or debit card
                    </label>
                    <div id="card-element">
                        <!-- a Stripe Element will be inserted here. -->
                    </div>

                    <!-- Used to display form errors -->
                    <div id="card-errors" role="alert"></div>
                </div>
                <div class="spacer"></div>

                <button type="submit" id="complete-order" class="button-primary full-width">Complete Order</button>


                </form>

                {{--                    @if ($paypalToken)--}}
                {{--                        <div class="mt-32">or</div>--}}
                {{--                        <div class="mt-32">--}}
                {{--                            <h2>Pay with PayPal</h2>--}}

                {{--                            <form method="post" id="paypal-payment-form" action="{{ route('checkout.paypal') }}">--}}
                {{--                                @csrf--}}
                {{--                                <section>--}}
                {{--                                    <div class="bt-drop-in-wrapper">--}}
                {{--                                        <div id="bt-dropin"></div>--}}
                {{--                                    </div>--}}
                {{--                                </section>--}}

                {{--                                <input id="nonce" name="payment_method_nonce" type="hidden" />--}}
                {{--                                <button class="button-primary" type="submit"><span>Pay with PayPal</span></button>--}}
                {{--                            </form>--}}
                {{--                        </div>--}}
                {{--                    @endif--}}
            </div>

        </div>
        <!--Section: Block Content-->

    </div>
</main>
<!--Main layout-->
<!-- Footer -->
@include('layouts.footer')
<!-- Footer -->


<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="{{asset('assets/new/js/jquery-3.4.1.min.js')}}"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{asset('assets/new/js/popper.min.js')}}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{asset('assets/new/js/bootstrap.min.js')}}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{asset('assets/new/js/mdb.min.js')}}"></script>
<!-- MDB Ecommerce JavaScript -->
<script type="text/javascript" src="{{asset('assets/new/js/mdb.ecommerce.min.js')}}"></script>


<!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
<script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
<script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
<script src="{{ asset('assets/new/js/algolia.js') }}"></script>
<script src="https://js.braintreegateway.com/web/dropin/1.13.0/js/dropin.min.js"></script>

<script>
    (function(){
        // Create a Stripe client
        var stripe = Stripe('{{ config('services.stripe.key') }}');

        // Create an instance of Elements
        var elements = stripe.elements();

        // Custom styling can be passed to options when creating an Element.
        // (Note that this demo uses a wider set of styles than the guide below.)
        var style = {
            base: {
                color: '#32325d',
                lineHeight: '18px',
                fontFamily: '"Roboto", Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        };

        // Create an instance of the card Element
        var card = elements.create('card', {
            style: style,
            hidePostalCode: true
        });

        // Add an instance of the card Element into the `card-element` <div>
        card.mount('#card-element');

        // Handle real-time validation errors from the card Element.
        card.addEventListener('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });

        // Handle form submission
        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            // Disable the submit button to prevent repeated clicks
            document.getElementById('complete-order').disabled = true;

            var options = {
                name: document.getElementById('name_on_card').value,
                address_line1: document.getElementById('address').value,
                address_city: document.getElementById('city').value,
                address_state: document.getElementById('province').value,
                address_zip: document.getElementById('postalcode').value
            }

            stripe.createToken(card, options).then(function(result) {
                if (result.error) {
                    // Inform the user if there was an error
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;

                    // Enable the submit button
                    document.getElementById('complete-order').disabled = false;
                } else {
                    // Send the token to your server
                    stripeTokenHandler(result.token);
                }
            });
        });

        function stripeTokenHandler(token) {
            // Insert the token ID into the form so it gets submitted to the server
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);

            // Submit the form
            form.submit();
        }

</script>
</body>

</html>
