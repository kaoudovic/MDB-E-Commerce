
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
                        <p class="search-results-count">{{ $products->total() }} result(s) for '{{ request()->input('query') }}'</p>
                        @if ($products->total() > 0)
                            <table  width="100%" class="table table-bordered table-striped">
                                <thead class="black white-text">
                                <tr>
                                    <th>Name</th>
                                    <th>Details</th>
                                    <th colspan="3">Description</th>
                                    <th>Price</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <th><a href="{{ route('shop.show', $product->slug) }}">{{ $product->name }}</a></th>
                                        <td>{{ $product->details }}</td>
                                        <td colspan="3">{{ $product->description }}</td>
                                        <td>{{ test_x($product->price) }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            {{ $products->appends(request()->input())->links() }}
                        @endif
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
<!-- Your custom scripts (optional) -->
<script type="text/javascript">
    <script>
        $(document).ready(function () {
        $('.mdb-select').materialSelect();
        $('.select-wrapper.md-form.md-outline input.select-dropdown').bind('focus blur', function () {
        $(this).closest('.select-outline').find('label').toggleClass('active');
        $(this).closest('.select-outline').find('.caret').toggleClass('active');
    });
    });

        $(function () {
        $('.material-tooltip-main').tooltip({
            template: '<div class="tooltip md-tooltip-main"><div class="tooltip-arrow md-arrow"></div><div class="tooltip-inner md-inner-main"></div></div>'
        })
    })

        "use strict";function _instanceof(t,n){return null!=n&&"undefined"!=typeof Symbol&&n[Symbol.hasInstance]?n[Symbol.hasInstance](t):t instanceof n}function _typeof(t){return(_typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}function _toConsumableArray(t){return _arrayWithoutHoles(t)||_iterableToArray(t)||_nonIterableSpread()}function _nonIterableSpread(){throw new TypeError("Invalid attempt to spread non-iterable instance")}function _iterableToArray(t){if(Symbol.iterator in Object(t)||"[object Arguments]"===Object.prototype.toString.call(t))return Array.from(t)}function _arrayWithoutHoles(t){if(Array.isArray(t)){for(var n=0,o=new Array(t.length);n<t.length;n++)o[n]=t[n];return o}}function _classCallCheck(t,n){if(!_instanceof(t,n))throw new TypeError("Cannot call a class as a function")}function _defineProperties(t,n){for(var o=0;o<n.length;o++){var i=n[o];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(t,i.key,i)}}function _createClass(t,n,o){return n&&_defineProperties(t.prototype,n),o&&_defineProperties(t,o),t}!function(t){var n="100%",o="vertical",i=!0,e=!1,s=!1,a=!1,l=null,r=null,u="#4285F4",h="#4285F4",g="#fff",c=["#fff"],p=0,m=100,f="",v="",d=1,b=1,y=0,C=function(){function C(t,T){_classCallCheck(this,C),this.defaults={width:n,direction:o,value:{min:p,max:m},single:{active:i,value:{step:d,symbol:f},counting:s,countingTarget:r,bgThumbColor:u,textThumbColor:g,multi:{active:e,value:{step:b,symbol:v},counting:a,rangeLength:y,countingTarget:l,bgThumbColor:h,textThumbColor:c}}},this.$range=t,this.options=this.assignedOptions(T),this.$rangeWrapper=this.$range.parent().hasClass("multi-range-field")?this.$range.parent():null,this.thumbHtml='<span class="thumb"><span class="value"></span></span>',this.rangeMousedown=!1,this.left,this.init()}return _createClass(C,[{key:"assignedOptions",value:function(n){return t.extend({},this.defaults,n)}},{key:"init",value:function(){this.addThumb(),this.rangeChange(),this.multiRangeInit(),this.inputMouseDown(),this.mouseUponInput(),this.mouseMoveOnInput(),this.mouseOutFromInput(),this.multiRangeValue(),this.multiRangeCSS(),this.inputMultiRange()}},{key:"randomLetter",value:function(){for(var t="",n="abcdefghijklmnopqrstuvwxyz123456789",o=arguments.length,i=new Array(o),e=0;e<o;e++)i[e]=arguments[e];for(var s=0;s<new Number(i);s++)t+=n.charAt(Math.floor(Math.random()*n.length));return t}},{key:"addThumb",value:function(){!0===this.options.single.active?t(this.$range.prop({id:this.randomLetter(10),disabled:!1})).after(t(this.thumbHtml).attr("data-id","")):t(this.$range.prop("disabled",!0)),"horizontal"===this.options.direction&&this.$rangeWrapper.addClass("thumb-horizontal-wrapper")}},{key:"rangeChange",value:function(){var n=this;this.$range.on("change",function(o){o.preventDefault();var i=t(o.target),e=i.siblings(".thumb").find(".value");void 0!==n.options.single.value?e.html("".concat(i.val()," ").concat(n.options.single.value.symbol)):e.html(i.val())})}},{key:"multiRangeInit",value:function(){this.$range.attr({min:this.options.value.min,max:this.options.value.max,step:void 0!==this.options.single.value?this.options.single.value.step:this.defaults.single.value.step,symbol:void 0!==this.options.single.value?this.options.single.value.symbol:this.defaults.single.value.symbol}),this.$range.addClass("mdbMultiRange original"),this.$range.val(this.$range.attr("min"))}},{key:"inputMouseDown",value:function(){var n=this;this.$range.on("input mousedown",function(o){var i=t(o.target),e=i.siblings(".thumb"),s=i.outerWidth();if(e.length||n.addThumb(),e.find(".value").html(i.val()),n.rangeMousedown=!0,i.addClass("active"),e.hasClass("active")||e.css({height:"30px",width:"30px",top:"-23px",marginLeft:"-15px"}),"input"!==o.type){var a=o.pageY,l=i.offset().top;"horizontal"===n.options.direction||(a=o.pageX),"horizontal"===n.options.direction||(l=i.offset().left),n.left=null==a?o.originalEvent.touches[0].pageY-l:a-l,n.left<0?n.left=0:n.left>s&&(n.left=s),e.addClass("active").css("left",n.left)}e.attr("data-id",i.attr("id")),i.hasClass("ghost")?(e.css("background-color",i.data("color")),e.children().css("color",i.data("text-color"))):(e.css("background-color",void 0===n.options.single.bgThumbColor?n.defaults.single.bgThumbColor:n.options.single.bgThumbColor),e.children().css("color",void 0===n.options.single.textThumbColor?n.defaults.single.textThumbColor:n.options.single.textThumbColor)),void 0!==n.options.single.value?e.find(".value").html("".concat(i.val()," ").concat(n.options.single.value.symbol)):e.find(".value").html(i.val())})}},{key:"mouseUponInput",value:function(){var n=this;this.$range.on("mouseup",function(o){n.rangeMousedown=!1,t(o.target).parent().removeClass("active")})}},{key:"mouseMoveOnInput",value:function(){var n=this;this.$range.on("mousemove",function(o){var i=t(o.target),e=i.siblings(".thumb");if(n.left,n.rangeMousedown){e.hasClass("active")||e.css({height:"30px",width:"30px",top:"-23px",marginLeft:"-15px"});var s=i.outerWidth(),a=o.pageY,l=i.offset().top;"horizontal"===n.options.direction||(a=o.pageX),"horizontal"===n.options.direction||(l=i.offset().left),"horizontal"===n.options.direction?e.addClass("active thumb-horizontal"):e.addClass("active"),n.left=null==a?o.originalEvent.touches[0].pageY-l:a-l,n.left<0?n.left=0:n.left>s&&(n.left=s),e.css("left",n.left),i.length<1&&e.find(".value").html("".concat(i.val()," ").concat(n.options.single.value.symbol))}})}},{key:"mouseOutFromInput",value:function(){var n=this;this.$range.on("mouseout",function(o){if(!n.rangeMousedown){var i=t(o.target).siblings(".thumb");i.hasClass("active")&&i.animate({marginLeft:"0px",top:"12px",height:"0px",width:"0px"},230),i.removeClass("active")}})}},{key:"multiRangeValue",value:function(){var n=this;if(null!==this.options.single.countingTarget&&void 0!==this.options.single.countingTarget&&""!==this.options.single.countingTarget&&!0===this.options.single.counting){var o=t("".concat(_toConsumableArray(this.options.single.countingTarget.split(" "))));this.$range.on("input mousedown touchstart",function(){void 0===n.options.single.value||o.is("input")?o.is("input")?o.val("".concat(n.$range.val())):o.html("".concat(n.$range.val())):o.html("".concat(n.$range.val()," ").concat(n.options.single.value.symbol))})}}},{key:"multiRangeCSS",value:function(){this.$range.css("width",this.options.width)}},{key:"inputMultiRange",value:function(){var n=this;if(void 0!==this.options.single.multi&&!0===this.options.single.active&&this.options.single.multi.rangeLength>=1)for(var o=0;o<this.options.single.multi.rangeLength;o++){var i=this.$range.clone(!0,!0).prop("id",this.randomLetter(10));void 0!==this.options.single.multi.bgThumbColor&&void 0!==this.options.single.multi.textThumbColor&&this.options.single.multi.bgThumbColor.length>1?i.attr({"data-color":this.options.single.multi.bgThumbColor.length>1?_toConsumableArray(this.options.single.multi.bgThumbColor)[o]:_toConsumableArray(this.options.single.multi.bgThumbColor)[0],"data-text-color":this.options.single.multi.textThumbColor.length>1?_toConsumableArray(this.options.single.multi.textThumbColor)[o]:_toConsumableArray(this.options.single.multi.textThumbColor)[0]}):i.attr({"data-color":[],"data-text-color":[]}),i.attr({step:void 0!==this.options.single.multi.value?this.options.single.multi.value.step:null,symbol:void 0!==this.options.single.multi.value?this.options.single.multi.value.symbol:null}),i.val(i.attr("max")),i.addClass("mdbMultiRange ghost"),i.prev().css("background-color",this.options.single.multi.bgThumbColor),this.$range.after(i),null!==this.options.single.multi.countingTarget&&void 0!==this.options.single.multi.countingTarget&&"object"===_typeof(this.options.single.multi.countingTarget)&&this.options.single.multi.counting&&function(){var e=t("".concat(Object.values(_toConsumableArray(n.options.single.multi.countingTarget))[o]));i.on("input mousedown",function(o){void 0===n.options.single.multi.value||e.is("input")?e.is("input")?e.val(t(o.target).val()):e.html(t(o.target).val()):e.html("".concat(t(o.target).val()," ").concat(n.options.single.multi.value.symbol))})}()}}}]),C}();t.fn.mdbRange=function(n){return this.each(function(){new C(t(this),n)})}}(jQuery);

        $('#multi').mdbRange({
        single: {
        active: true,
        multi: {
        active: true,
        rangeLength: 1
    },
    }
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
@include('sweet::alert')
</body>

</html>
