<!DOCTYPE html>
<html>

<head>
    <base href="/public">
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="">
    <title>Ecommerce</title>
    <link href="home/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="home/css/responsive.css" rel="stylesheet" />
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
    <!-- font awesome style -->
    <link href="home/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->

</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        @include('home.header')
        <!-- end header section -->

        <!-- product_details -->
        <div class="mx-auto row mb-5" style="width: 50%">
            <div class="img-box col-md-6 shadow p-4" style="height: 350px;">
                <img class="" width="300px" height="300px" src="/product/{{$product->image}}" alt="">
            </div>
            <div class="detail-box col-md-6 mt-2 d-flex flex-column">
                <h4 class="text-center fs-1" style="font-size: x-large;font-weight: bold;">
                    {{$product->title}}
                </h4>

                <div>
                    @if($product->discount_price != null)
                    <h6 style=" color: red;float: left;">
                        Giá: {{$product->discount_price}}
                    </h6>
                    <h6 style="text-decoration: line-through;float: right;color: blue">
                        {{$product->price}}
                    </h6>

                    @else
                    <h6>
                        Giá: {{$product->price}}
                    </h6>
                    @endif
                </div>
                <div>
                    Số lượng: {{$product->quantity}}
                </div>
                <div>
                    Thể loại: {{$product->category}}
                </div>
                <div>
                    <strong>Giới thiệu:</strong> {{$product->description}}
                </div>

                <div class="mt-2">
                    <form action="{{url('add_cart',$products->id)}}" method="Post">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <input type="number" name="quantity" value="1" min="1" style="width: 100px">
                            </div>
                            <div class="col-md-4">
                                <input type="submit" value="Add To Cart">
                            </div>
                        </div>
                    </form>
                    <a class="btn btn-success float-start" href="{{url('update_product',$product->id)}}">Edit</a>
                </div>
            </div>
        </div>
        <!-- product_details -->
        <!-- footer start -->
        @include('home.footer')
        <!-- footer end -->
        <div class=" cpy_">
            <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html
                    Templates</a><br>

                Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>

            </p>
        </div>
        <!-- jQery -->
        <script src="home/js/jquery-3.4.1.min.js"></script>
        <!-- popper js -->
        <script src="home/js/popper.min.js"></script>
        <!-- bootstrap js -->
        <script src="home/js/bootstrap.js"></script>
        <!-- custom js -->
        <script src="home/js/custom.js"></script>
</body>

</html>