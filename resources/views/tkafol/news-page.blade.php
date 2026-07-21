@section('news-page')
        
        <section class="news-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">

                        @foreach ($posts as $post)
                        <!--News Two Single-->
                        <div class="news-two__single">
                            <div class="news-two__img-box">
                                <div class="news-two__img">
                                    <img src="{{asset($post->image) }}" height="310" width="229" alt="">
                                    <a href="{{route('post',$post->id)}}">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                                <div class="news-two__date">
                                    <p>{{date('d-m-Y', strtotime($post->created_at))}}</p>
                                </div>
                            </div>
                            <div class="news-two__content">
                                <ul class="list-unstyled news-two__meta">
                                    <li><a href="#"><i class="far fa-user-circle"></i> Admin</a></li>
                                    <li><span>/</span></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 2 تعليق</a>
                                    </li>
                                </ul>
                                <h3>
                                    <a href="{{route('post',$post->id)}}"> {{$post->title}} </a>
                                </h3>
                                <p class="news-two__text"> {{Str::limit(strip_tags($post->content), 120) }}  </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">


@endforeach




                </div>
            </div>
        </section>
     

@show