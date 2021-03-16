
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
                <h1 class="mb-0">Product page</h1>
            </div>
        </div>
    </div>

</header>
<!--Main Navigation-->

<!--Main layout-->
<main>
    <div class="container">

        <!--Section: Block Content-->
        <section class="mb-5">

            <div class="row">
                <div class="col-md-6 mb-4 mb-md-0">

                    <div id="mdb-lightbox-ui"></div>

                    <div class="mdb-lightbox">

                        <div class="row product-gallery mx-1">

                            <div class="col-12 mb-0">
                                <figure class="view overlay rounded z-depth-1 main-img" style="max-height: 450px;">
                                    <a  src="{{asset ('Pictures_Project/phone/product/1.webp')}}" data-size="710x823">
                                        <img  src="{{asset('Pictures_Project/phone/product/1.webp')}}"
                                              class="img-fluid z-depth-1" style="margin-top: -30px;">
                                    </a>
                                </figure>
                                <figure class="view overlay rounded z-depth-1" style="visibility: hidden;">
                                    <a  src="{{asset
                                    ('Pictures_Project/phone/product/1.jpg')}}"
                                        data-size="710x823">
                                        src="{{asset
                                    ('Pictures_Project/phone/product/1.jpg.webp')}}"
                                        class="img-fluid z-depth-1">
                                    </a>
                                </figure>
                                <figure class="view overlay rounded z-depth-1" style="visibility: hidden;">
                                    <a src="{{asset
                                    ('Pictures_Project/phone/product/1.jpg')}}"
                                       data-size="710x823">
                                        <img src="{{asset
                                    ('Pictures_Project/phone/product/1.jpg')}}"
                                             class="img-fluid z-depth-1">
                                    </a>
                                </figure>
                                <figure class="view overlay rounded z-depth-1" style="visibility: hidden;">
                                    <a hsrc="{{asset
                                    ('Pictures_Project/phone/product/1.jpg')}}"
                                       data-size="710x823">
                                        <img src="{{asset
                                    ('Pictures_Project/phone/product/1.jpg')}}"
                                             class="img-fluid z-depth-1">
                                    </a>
                                </figure>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="view overlay rounded z-depth-1 gallery-item hoverable">
                                            <img src="{{asset
                                    ('Pictures_Project/phone/product/5.jpg')}}"
                                                 class="img-fluid">
                                            <div class="mask rgba-white-slight"></div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="view overlay rounded z-depth-1 gallery-item hoverable">
                                            <img src="{{asset
                                    ('Pictures_Project/phone/product/4.jpg')}}"
                                                 class="img-fluid">
                                            <div class="mask rgba-white-slight"></div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="view overlay rounded z-depth-1 gallery-item hoverable">
                                            <img src="{{asset
                                    ('Pictures_Project/phone/product/3.jpg')}}"
                                                 class="img-fluid">
                                            <div class="mask rgba-white-slight"></div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="view overlay rounded z-depth-1 gallery-item hoverable">
                                            <img src="{{asset
                                    ('Pictures_Project/phone/product/2.jpg')}}"
                                                 class="img-fluid">
                                            <div class="mask rgba-white-slight"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-md-6">

                    <h5>
                        New Apple iPhone 12 Pro Max (256GB, Pacific Blue) [Locked] + Carrier Subscription
                        by Apple</h5>
                    <p class="mb-2 text-muted text-uppercase small">IPhone</p>
                    <ul class="rating">
                        <li>
                            <i class="fas fa-star fa-sm text-primary"></i>
                        </li>
                        <li>
                            <i class="fas fa-star fa-sm text-primary"></i>
                        </li>
                        <li>
                            <i class="fas fa-star fa-sm text-primary"></i>
                        </li>
                        <li>
                            <i class="fas fa-star fa-sm text-primary"></i>
                        </li>
                        <li>
                            <i class="far fa-star fa-sm text-primary"></i>
                        </li>
                    </ul>
                    <p><span class="mr-1"><strong>$100.00 </strong></span></p>
                    <p class="pt-1">This phone must be purchased with a monthly carrier plan and will be locked to the selected carrier.
                        Get up to $100.00 over 24 months added to your Amazon.com Gift Card balance ($4.17/month every month you’re subscribed). Limit 1 iPhone and wireless plan per account. Learn more.</p>
                    <div class="table-responsive">
                        <table class="table table-sm table-borderless mb-0">
                            <tbody>
                            <tr>
                                <th class="pl-0 w-25" scope="row"><strong>Size: </strong></th>
                                <td>256GB</td>
                            </tr>
                            <tr>
                                <th class="pl-0 w-25" scope="row"><strong>Color</strong></th>
                                <td>Pacific Blue</td>
                            </tr>
                            <tr>
                                <th class="pl-0 w-25" scope="row"><strong>Delivery</strong></th>
                                <td>USA, Europe</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <div class="table-responsive mb-2">
                        <table class="table table-sm table-borderless">
                            <tbody>
                            <tr>
                                <td class="pl-0 pb-0 w-25">Quantity</td>
                                <td class="pb-0">Select size</td>
                            </tr>
                            <tr>
                                <td class="pl-0">
                                    <div class="def-number-input number-input safari_only mb-0">
                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                                class="minus"></button>
                                        <input class="quantity" min="0" name="quantity" value="1" type="number">
                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                                class="plus"></button>
                                    </div>
                                </td>
                                <td>
                                    <div class="mt-1">
                                        <div class="form-check form-check-inline pl-0">
                                            <input type="radio" class="form-check-input" id="small" name="materialExampleRadios" checked>
                                            <label class="form-check-label small text-uppercase card-link-secondary"
                                                   for="small">128GB</label>
                                        </div>
                                        <div class="form-check form-check-inline pl-0">
                                            <input type="radio" class="form-check-input" id="medium" name="materialExampleRadios">
                                            <label class="form-check-label small text-uppercase card-link-secondary"
                                                   for="medium">256GB</label>
                                        </div>
                                        <div class="form-check form-check-inline pl-0">
                                            <input type="radio" class="form-check-input" id="large" name="materialExampleRadios">
                                            <label class="form-check-label small text-uppercase card-link-secondary"
                                                   for="large">512GB</label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <button type="button" class="btn btn-light btn-md mr-1 mb-2"><i class="fas fa-shopping-cart pr-2"></i>Add to
                        cart</button>
                </div>
            </div>

        </section>
        <!--Section: Block Content-->
        <hr>

        <!--Section: Block Content-->
        <section>

            <h3 class="text-center pt-5 mb-0">Our latest collection</h3>

            <!-- Grid row -->
            <div class="row mt-5 mb-4">

                <!-- Card -->
                @foreach($products as $product)

                    <div class="col-md-6 col-lg-3 mb-4">
                      <div class="">

                        <div class="view zoom z-depth-2 rounded">
                            <img class="img-fluid w-100" style="max-height:280px " src="{{asset
                            ('Pictures_Project/phone/Apple/12.jpg')
                            }}"alt="Sample">
                            <a href="{{route('shop.show',$product->slug)}}">
                                <div class="mask waves-effect waves-light"></div>
                            </a>
                        </div>

                        <div class="text-center pt-4">

                            <h5>{{$product->name}}</h5>
                            <h6 class="mb-3">$ {{$product->price}}</h6>

                            <form action="{{route('cart.store')}}" method="POST">
                                {{csrf_field()}}
                                <input type="hidden" name="id" value="{{$product->id}}">
                                <input type="hidden" name="name" value="{{$product->name}}">
                                <input type="hidden" name="price" value=10.00>
                                <button type="submit" class="btn btn-primary btn-sm mr-1 waves-effect waves-light"><i
                                        class="fas fa-shopping-cart pr-2"></i>Add to cart</button>
                                <a href="{{url('/wishlist/')}}">
                                    <button type="button" class="btn btn-danger btn-sm px-3 material-tooltip-main" data-toggle="tooltip"
                                            data-placement="top" title="Add to wishlist"><i class="far fa-heart"></i></button>
                                </a>
                            </form>

                        </div>

                       </div>
                    </div>
                @endforeach

            </div>
            <!-- Grid row -->

        </section>        <!--Section: Block Content-->

    </div>
</main>
<!--Main layout-->



<!-- Footer -->
@include('layouts.footer')

<!-- Footer -->

<!-- SCRIPTS -->
<!-- JQuery -->
<script src="{{asset('assets/new/js/jquery-3.4.1.min.js')}}"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{asset('assets/new/js/popper.min.js')}}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{asset('assets/new/js/bootstrap.js')}}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{asset('assets/new/js/mdb.min.js')}}"></script>
<!-- MDB Ecommerce JavaScript -->
<script type="text/javascript" src="{{asset('assets/new/js/mdb.ecommerce.min.js')}}"></script>


<!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
<script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
<script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
<script src="{{ asset('assets/new/js/algolia.js') }}"></script>

<script>
    $(document).ready(function () {
        // MDB Lightbox Init
        $(function () {
            $("#mdb-lightbox-ui").load("../../../mdb-addons/mdb-lightbox-ui.html");
        });
    });
</script>
</body>

</html>
