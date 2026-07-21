@section('main-slider')


<section class="main-slider main-slider-two">
    <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                        "effect": "fade",
                        "pagination": {
                        "el": "#main-slider-pagination",
                        "type": "bullets",
                        "clickable": true
                        },
                        "navigation": {
                        "nextEl": "#main-slider__swiper-button-next",
                        "prevEl": "#main-slider__swiper-button-prev"
                        },
                        "autoplay": {
                        "delay": 5000
                        }}'>
        <div class="swiper-wrapper">

          @if (isset($sliders))


            @foreach($sliders as $slider)
            <div class="swiper-slide">
                <div class="image-layer"
                    style="background-image: url({{asset($slider->image)}});">
                </div>
                <div class="image-layer-overlay"></div>

                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="main-slider__content">
                                <p>   {{$slider->description}}    </p>
                                <h2>       {{$slider->title}}  </h2>
                                <a href=" {{$slider->target}}" class="thm-btn"><i class="fas fa-arrow-circle-right"></i>  {{$slider->presstitle}}  </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


@endforeach

@endif

        </div>

        <!-- If we need navigation buttons -->
        <div class="swiper-pagination" id="main-slider-pagination"></div>
        <div class="main-slider__nav">
            <div class="swiper-button-prev" id="main-slider__swiper-button-next"><i
                    class="icon-right-arrow icon-left-arrow"></i>
            </div>
            <div class="swiper-button-next" id="main-slider__swiper-button-prev"><i
                    class="icon-right-arrow"></i>
            </div>
        </div>
    </div>
</section>


@show
