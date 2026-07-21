@section('news_details')


 
    <!--News Details Start-->
    <section class="news-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="news-details__left">
                        <div class="news-details__img">
                            <img src="{{asset($post->image)}}" alt="">
                        </div>
                        <div class="news-details__content">

                            <h3 class="news-details__title">{{$post->title}}           </h3>
                            <p class="news-details__text-one" >

                          
                                {!!html_entity_decode($post->content)!!}
                            </p>
                        </div>
                        <div class="news-details__bottom">
                            <p class="news-details__tags">
                                <span>كلمات مفتاحية:</span>

                                <?php $array = explode(' ', $post->title);
                                foreach ($array as $value) {
                                   echo' <a href="../main">'.$value.'</a>';
                                }
                                ?>
                                
                             
                            </p>
                            <div class="news-details__social-list">
                                <a href="#" class="fnod"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-dribbble"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="sidebar">
                        <div class="sidebar__single sidebar__search">
                            <form action="#" class="sidebar__search-form">
                                <input type="search" placeholder="بحث">
                                <button type="submit"><i class="icon-magnifying-glass"></i></button>
                            </form>
                        </div>
                        <div class="sidebar__single sidebar__post">
                            <h3 class="sidebar__title">أحدث الاخبار</h3>
                            <ul class="sidebar__post-list list-unstyled">
                                @foreach ($recent as $item)
                                

                              {{-- <li>
                                <div class="sidebar__post-image">
                                    <img src="{{asset($item->image)}}" height="60" width="60" alt="">
                                </div>
                                <div class="sidebar__post-content">
                                    <h3>

                                        <a href="{{route('post',$item->id)}}">   {{$item->title}}</a>                                    </h3>
                                </div>
                            </li> --}}

                            <li>
                                <div class="sidebar__post-image">
                                    <img src="{{asset($item->image)}}" height="60" width="60" alt="">
                                </div>
                                <div class="sidebar__post-content">
                                    <h3>

                                        <a href="{{route('post',$item->id)}}">  
                                            <?php 
                                            $title = $item->title ;
                                            $length = strlen($item->title);
                                                for ($i=0; $i < 22; $i++) { 
                                                    $title.='&nbsp; '  ;
                                                        }
                                                      echo   $title ;
                                                ?>
                                            
                                                 </a>
                                    </h3>
                                </div>
                            </li>

                                @endforeach

                                 
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--News Details End-->

@show