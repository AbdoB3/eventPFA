<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') | {{ config('app.name') }}</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@300;400;500;600;700;800&amp;family=Open+Sans:wght@300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Archivo:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">

    <!-- CSS
 ============================================ -->

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style type="text/css">
        .panel-title {
            display: inline;
            font-weight: bold;
        }

        .display-table {
            display: table;
        }

        .display-tr {
            display: table-row;
        }

        .display-td {
            display: table-cell;
            vertical-align: middle;
            width: 61%;
        }
    </style>
</head>

<body>

    @include('layouts.menu')
    <br>
    <br>
    @yield('content')

    <br>
    <br>
    <br>


    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->
    <!-- JS
        ============================================ -->

    <!-- Modernizer & jQuery JS -->
    @include('layouts.footer')

    <script src="{{ asset('assets/js/vendor/modernizr-3.11.7.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Main JS -->


    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/back-to-top.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>


    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script>
        class Hover3D {
            constructor(id) {
                this.id = id;
                this.xOffset = 5;
                this.yOffset = 5;
                this.attack = 0.1;
                this.release = 0.5;
                this.perspective = 200;
                this.create();
            }

            create() {
                document.querySelectorAll(this.id).forEach(element => {
                    const rectTransform = element.getBoundingClientRect();
                    const perspective = "perspective(" + this.perspective + "px) ";
                    element.style.setProperty("transform-style", "preserve-3d");

                    element.addEventListener("mouseenter", e => {
                        element.style.setProperty("transition", "transform " + this.attack + "s");
                    })

                    element.addEventListener("mousemove", e => {
                        let dy = e.clientY - rectTransform.top;
                        let dx = e.clientX - rectTransform.left;
                        let xRot = this.map(dx, 0, rectTransform.width, -this.xOffset, this.xOffset);
                        let yRot = this.map(dy, 0, rectTransform.height, this.yOffset, -this.yOffset);
                        let propXRot = "rotateX(" + yRot + "deg) ";
                        let propYRot = "rotateY(" + xRot + "deg)";

                        element.style.setProperty("transform", perspective + propXRot + propYRot);
                    })

                    element.addEventListener("mouseleave", e => {
                        element.style.setProperty("transition", "transform " + this.release + "s");
                        element.style.setProperty("transform", perspective +
                            "rotateX(0deg) rotateY(0deg)");
                    })
                })
            }
            // Processing map() function
            map(value, istart, istop, ostart, ostop) {
                return ostart + (ostop - ostart) * ((value - istart) / (istop - istart));
            }
        }
    </script>
    <!-- Bootstrap JS -->

    <!-- Plugins JS -->


    <script>
        hljs.initHighlightingOnLoad();
    </script>

    {{-- <script type="text/javascript">
        $(function() {

            var $form = $(".require-validation");

            $('form.require-validation').bind('submit', function(e) {
                var $form = $(".require-validation"),
                    inputSelector = ['input[type=email]', 'input[type=password]',
                        'input[type=text]', 'input[type=file]',
                        'textarea'
                    ].join(', '),
                    $inputs = $form.find('.required').find(inputSelector),
                    $errorMessage = $form.find('div.error'),
                    valid = true;
                $errorMessage.addClass('hide');

                $('.has-error').removeClass('has-error');
                $inputs.each(function(i, el) {
                    var $input = $(el);
                    if ($input.val() === '') {
                        $input.parent().addClass('has-error');
                        $errorMessage.removeClass('hide');
                        e.preventDefault();
                    }
                });

                if (!$form.data('cc-on-file')) {
                    e.preventDefault();
                    Stripe.setPublishableKey($form.data('publishable-key'));
                    Stripe.createToken({
                        number: $('.card-number').val(),
                        cvc: $('.card-cvc').val(),
                        exp_month: $('.card-expiry-month').val(),
                        exp_year: $('.card-expiry-year').val()
                    }, stripeResponseHandler);
                }

            });

            function stripeResponseHandler(status, response) {
                if (response.error) {
                    $('.error')
                        .removeClass('hide')
                        .find('.alert')
                        .text(response.error.message);
                } else {
                    /* token contains id, last4, and card type */
                    var token = response['id'];

                    $form.find('input[type=text]').empty();
                    $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                    $form.get(0).submit();
                }
            }

        });
    </script>
    <!-- Create a HoverEffect object and pass an id/className of HTML element(s) you want to create the effect to -->
    <script>
        let myHover3D = new Hover3D(".card"); // Yep! That's it.
    </script> --}}
</body>
</body>



</html>
