
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/instantsearch.js@2.6.0/dist/instantsearch.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/instantsearch.js@2.6.0/dist/instantsearch-theme-algolia.min.css">
    <link rel="icon" sizes="192x192" href="{{asset('Pictures_Project/logo/logo.png')}}">

    <!-- Your custom styles (optional) -->
    <style>
        @supports (--css: variables) {
            input[type="range"].mdbMultiRange {
                padding: 0;
                margin: 0;
                display: inline-block;
                vertical-align: top;
            }

            input[type="range"].mdbMultiRange.original {
                position: absolute;
            }

            input[type="range"].mdbMultiRange.original::-webkit-slider-thumb {
                position: relative;
                z-index: 2;
            }

            input[type="range"].mdbMultiRange.original::-moz-range-thumb {
                transform: scale(1);
                z-index: 1;
            }

            input[type="range"].mdbMultiRange::-moz-range-track {
                border-color: transparent;
            }

            input[type="range"].mdbMultiRange.ghost {
                position: relative;
            }

            input[type="range"].mdbMultiRange.ghost:nth-of-type(n+1) {
                position: absolute;
            }

        }


        .multi-range-field {
            position: relative;
        }

        .multi-range-field input[type=range] {
            cursor: pointer;
            position: relative;
            background-color: transparent;
            border: none;
            outline: none;
            width: 100%;
            margin: 15px 0px;
            padding: 0;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border: 1px solid #fff;
            /* fix for FF unable to apply focus style bug  */
        }

        .multi-range-field input[type=range]:focus {
            outline: none;
        }

        .multi-range-field input[type=range]+.thumb {
            position: absolute;
            border: none;
            height: 0;
            width: 0;
            border-radius: 50%;
            background-color: #4285f4;
            top: 10px;
            margin-left: -6px;
            transform-origin: 50% 50%;
            transform: rotate(-45deg);
        }

        .multi-range-field input[type=range]+.thumb .value {
            display: block;
            width: 30px;
            text-align: center;
            color: #4285f4;
            font-size: 0;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        .multi-range-field input[type=range]+.thumb.active {
            -webkit-border-radius: 50% 50% 50% 0;
            border-radius: 50% 50% 50% 0;
        }

        .multi-range-field input[type=range]+.thumb.active .value {
            color: #fff;
            margin-left: -1px;
            margin-top: 8px;
            font-size: 10px;
        }

        .multi-range-field input[type=range]::-webkit-slider-runnable-track {
            height: 3px;
            background: #c2c0c2;
            border: none;
        }

        .multi-range-field input[type=range]::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            border: none;
            height: 14px;
            width: 14px;
            -webkit-border-radius: 50%;
            border-radius: 50%;
            background-color: #4285f4;
            -webkit-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
            margin: -5px 0 0 0;
            -webkit-transition: 0.3s;
            -o-transition: 0.3s;
            transition: 0.3s;
        }

        .multi-range-field input[type=range]:focus::-webkit-slider-runnable-track {
            background: #ccc;
        }

        .multi-range-field input[type=range]::-moz-range-track {
            /*required for proper track sizing in FF*/
            height: 3px;
            background: #c2c0c2;
            border: none;
        }

        .multi-range-field input[type=range]::-moz-range-thumb {
            border: none;
            height: 14px;
            width: 14px;
            border-radius: 50%;
            background: #4285f4;
            margin-top: -5px;
        }

        .multi-range-field input[type=range]:-moz-focusring {
            /*hide the outline behind the border*/
            outline: 1px solid #fff;
            outline-offset: -1px;
        }

        .multi-range-field input[type=range]:focus::-moz-range-track {
            background: #c2c0c2;
        }

        .multi-range-field input[type=range]::-ms-track {
            height: 3px;
            background: transparent;
            /*remove bg colour from the track, we'll use ms-fill-lower and ms-fill-upper instead */
            border-color: transparent;
            /*leave room for the larger thumb to overflow with a transparent border */
            border-width: 6px 0;
            color: transparent;
            /*remove default tick marks*/
        }

        .multi-range-field input[type=range]::-ms-fill-lower {
            background: #c2c0c2;
        }

        .multi-range-field input[type=range]::-ms-fill-upper {
            background: #c2c0c2;
        }

        .multi-range-field input[type=range]::-ms-thumb {
            border: none;
            height: 14px;
            width: 14px;
            border-radius: 50%;
            background: #4285f4;
        }

        .multi-range-field input[type=range]:focus::-ms-fill-lower {
            background: #c2c0c2;
        }

        .multi-range-field input[type=range]:focus::-ms-fill-upper {
            background: #c2c0c2;
        }

        .thumb-horizontal-wrapper {
            position: relative;
            top: 190px;
            transform: rotate(-270deg);
            top: 500px;
        }

        .multi-range-field input[type=range]+.thumb-horizontal .value {
            transform: rotate(315deg) !important;
        }
    </style>
</head>

<body class="skin-light">

<!-- Main Navigation -->
@include('layouts.header')
<!-- Main Navigation -->

<!-- Main layout -->
<main>

    <div class="container">

        <div class="row">
            <div class="col-lg-8">
                <br><br><br><br>
                <div style="margin-left:-10%;margin-right:-35%">
                    <div class="container">
                        @if (session()->has('success_message'))
                            <div class="alert alert-success">
                                {{ session()->get('success_message') }}
                            </div>
                        @endif

                        @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>

                    <div class="search-results-container container">
                        <h1>Search Results</h1>


                        <div class="container">
                            @if (session()->has('success_message'))
                                <div class="alert alert-success">
                                    {{ session()->get('success_message') }}
                                </div>
                            @endif

                            @if(count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>

                        <div class="container">
                            <div class="search-results-container-algolia">
                                <div>
                                    <h2>Search</h2>
                                    <div id="search-box">
                                        <!-- SearchBox widget will appear here -->
                                    </div>

                                    <div id="stats-container"></div>

                                    <div class="spacer"></div>
{{--                                    <h2>Categories</h2>--}}
                                    <div id="refinement-list">
                                        <!-- RefinementList widget will appear here -->
                                    </div>
                                </div>

                                <div  style="margin-right:20%;margin-left: 20%">
                                    <div id="hits">
                                        <!-- Hits widget will appear here -->
                                    </div>

                                    <div style="margin-right: 25%;margin-left:25%;" id="pagination" >
                                        <!-- Pagination widget will appear here -->
                                    </div>
                                </div>
                            </div> <!-- end search-results-container-algolia -->
                        </div> <!-- end container -->

                    </div> <!-- end search-results-container -->
                </div>
            </div>
        </div>

    </div>

</main>
<!-- Main layout -->

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
<script src="https://cdn.jsdelivr.net/npm/instantsearch.js@2.6.0"></script>
<script src="{{ asset('assets/new/js/algolia-instantsearch.js') }}"></script>
<!-- Your custom scripts (optional) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
@include('sweet::alert')
</body>

</html>
