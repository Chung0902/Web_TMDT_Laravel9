<section class="client_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Categories
            </h2>
        </div>
        <div id="carouselExample3Controls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

                @foreach($category as $categorys)
                <div class="carousel-item {{$categorys->id == 1 ? 'active': ''}} ">
                    <div class="box col-lg-10 mx-auto">
                        <div class="img_container">
                            <div class="img-box">
                                <div class="img_box-inner">
                                    <img width="150px" height="150px" src="/product/{{$categorys->category_img}}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="detail-box">
                            <h5>
                                {{$categorys->category_name}}
                            </h5>
                            <h6>
                                Category
                            </h6>
                            <p>
                                Dignissimos reprehenderit repellendus nobis error quibusdam? Atque animi sint unde quis
                                reprehenderit, et, perspiciatis, debitis totam est deserunt eius officiis ipsum ducimus
                                ad labore modi voluptatibus accusantium sapiente nam! Quaerat.
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="carousel_btn_box">
                <a class="carousel-control-prev" href="#carouselExample3Controls" role="button" data-slide="prev">
                    <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExample3Controls" role="button" data-slide="next">
                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>