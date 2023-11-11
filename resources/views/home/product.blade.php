<section class="product_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Our <span>products</span>
            </h2>
        </div>
        <div class="row">
            @foreach($product as $products)
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="box">
                    <div class="option_container">
                        <div class="options">
                            <a href="{{url('product_details',$products->id)}}" class="option1">
                                ProductDetails
                            </a>
                            <a href="" class="option2">
                                Buy Now
                            </a>
                        </div>
                    </div>
                    <div class="img-box">
                        <img width="150px" height="150px" src="/product/{{$products->image}}" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            {{$products->title}}
                        </h5>
                        @if($products->discount_price != null)
                        <h6 style="color: red;">
                            {{$products->discount_price}} Đồng
                        </h6>
                        <h6 style="text-decoration: line-through;">
                            {{$products->price}}
                        </h6>
                        @else
                        <h6>
                            {{$products->quantity}}
                        </h6>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
            <span>
                {!!$product->withQueryString()->links('pagination::bootstrap-5')!!}
            </span>
        </div>

    </div>
</section>