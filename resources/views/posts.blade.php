@extends('index_static')
@section('content')
    <section class="ls section_padding_top_100 section_padding_bottom_100 columns_padding_25">
        <div class="container">
            <div class="row">

                <div class="col-sm-7 col-md-8 col-lg-8">
                    {{--.post--}}
                    @forelse($posts as $post)
                        <article class="post format-small-image with_shadow rounded overflow-hidden">

                            <div class="side-item content-padding">

                                <div class="row">

                                    <div class="col-md-5">
                                        <div class="item-media entry-thumbnail">
                                            <img src="images/events/05.jpg" alt="">
                                        </div>
                                    </div>

                                    <div class="col-md-7">
                                        <div class="item-content">

                                            <p class="content-justify item-meta">

											<span class="entry-date highlight3 small-text">
                                                {{ $post->created_at }}
                                                {{--<time class="entry-date" datetime="2017-03-13T08:50:40+00:00">--}}
                                                {{--March 9, 2017--}}
                                                {{--</time>--}}
											</span>
                                            </p>

                                            <h4 class="entry-title hover-color3">
                                                <a href="blog-single-right.html" rel="bookmark">{{ $post->title }}</a>
                                            </h4>

                                            @foreach($post->categories as $category)
                                                <i>{{ $category->title }}</i>
                                        @endforeach


                                        <!-- .entry-meta -->

                                            <p>{{ $post->description }}</p>


                                        </div>
                                    </div>

                                </div>
                            </div>

                        </article>
                    @empty
                        <p>Нет постов</p>
                        <!-- .post -->
                    @endforelse

                    <div class="row topmargin_60">
                        <div class="col-sm-12 text-center">
                            <ul class="pagination highlightlinks">

                                @if($posts->currentPage()>1)
                                    <li>
                                        <a href="?page={{ $posts->currentPage()-1 }}">
                                            <span class=" sr-only">Prev</span>
                                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                @endif
                                @for($i=1;$i<=$total;$i++)
                                    <li
                                            @if($i == $posts->currentPage())
                                            class="active"
                                            @endif
                                    ><a href="?page={{ $i }}">{{ $i }}</a></li>
                                @endfor

                                @if($posts->currentPage() < $total)
                                    <li>
                                        <a href="?page={{ $posts->currentPage()+1 }}">
                                            <span class="sr-only">Next</span>
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </a>
                                    </li>

                                @endif
                            </ul>
                        </div>
                    </div>

                </div>
                <!--eof .col-sm-8 (main content)-->

                <!-- sidebar -->
                <aside class="col-sm-5 col-md-4 col-lg-4">

                    <div class="widget widget_apsc_widget">
                        <h3 class="widget-title poppins">Get In Touch</h3>
                        <div class="apsc-icons-wrapper clearfix apsc-theme-4">
                            <div class="apsc-each-profile">
                                <a class="apsc-facebook-icon clearfix" href="#">
                                    <div class="apsc-inner-block">
												<span class="social-icon">
													<i class="fa fa-facebook apsc-facebook"></i>
													<span class="media-name">Facebook</span>
												</span>
                                        <span class="apsc-count">9.8K</span>
                                        <span class="apsc-media-type">Fans</span>
                                    </div>
                                </a>
                            </div>
                            <div class="apsc-each-profile">
                                <a class="apsc-twitter-icon clearfix" href="#">
                                    <div class="apsc-inner-block">
												<span class="social-icon">
													<i class="fa fa-twitter apsc-twitter"></i>
													<span class="media-name">Twitter</span>
												</span>
                                        <span class="apsc-count">4.9K</span>
                                        <span class="apsc-media-type">Followers</span>
                                    </div>
                                </a>
                            </div>
                            <div class="apsc-each-profile">
                                <a class="apsc-google-plus-icon clearfix" href="#">
                                    <div class="apsc-inner-block">
												<span class="social-icon">
													<i class="apsc-googlePlus fa fa-google-plus"></i>
													<span class="media-name">google+</span>
												</span>
                                        <span class="apsc-count">10.1M</span>
                                        <span class="apsc-media-type">Followers</span>
                                    </div>
                                </a>
                            </div>
                            <div class="apsc-each-profile">
                                <a class="apsc-instagram-icon clearfix" href="#">
                                    <div class="apsc-inner-block">
												<span class="social-icon">
													<i class="apsc-instagram fa fa-instagram"></i>
													<span class="media-name">Instagram</span>
												</span>
                                        <span class="apsc-count">4</span>
                                        <span class="apsc-media-type">Followers</span>
                                    </div>
                                </a>
                            </div>
                            <div class="apsc-each-profile">
                                <a class="apsc-youtube-icon clearfix" href="#">
                                    <div class="apsc-inner-block">
												<span class="social-icon">
													<i class="apsc-youtube fa fa-youtube"></i>
													<span class="media-name">Youtube</span>
												</span>
                                        <span class="apsc-count">2.2K</span>
                                        <span class="apsc-media-type">Subscriber</span>
                                    </div>
                                </a>
                            </div>
                            <div class="apsc-each-profile">
                                <a class="apsc-soundcloud-icon clearfix" href="#">
                                    <div class="apsc-inner-block">
												<span class="social-icon">
													<i class="apsc-soundcloud fa fa-soundcloud"></i>
													<span class="media-name">Soundcloud</span>
												</span>
                                        <span class="apsc-count">8K</span>
                                        <span class="apsc-media-type">Followers</span>
                                    </div>
                                </a>
                            </div>
                            <div class="apsc-each-profile">
                                <a class="apsc-dribble-icon clearfix" href="#">
                                    <div class="apsc-inner-block">
												<span class="social-icon">
													<i class="apsc-dribbble fa fa-dribbble"></i>
													<span class="media-name">dribble</span>
												</span>
                                        <span class="apsc-count">0</span>
                                        <span class="apsc-media-type">Followers</span>
                                    </div>
                                </a>
                            </div>
                            <div class="apsc-each-profile">
                                <a class="apsc-edit-icon clearfix" href="#">
                                    <div class="apsc-inner-block">
												<span class="social-icon">
													<i class="apsc-posts fa fa-edit"></i>
													<span class="media-name">Post</span>
												</span>
                                        <span class="apsc-count">1</span>
                                        <span class="apsc-media-type">Post</span>
                                    </div>
                                </a>
                            </div>
                            <div class="apsc-each-profile">
                                <a class="apsc-comment-icon clearfix" href="#">
                                    <div class="apsc-inner-block">
												<span class="social-icon">
													<i class="apsc-comments fa fa-comments"></i>
													<span class="media-name">Comment</span>
												</span>
                                        <span class="apsc-count">0</span>
                                        <span class="apsc-media-type">Comments</span>
                                    </div>
                                </a>
                            </div>

                        </div>

                    </div>

                    <div class="widget widget_mailchimp">

                        <h3 class="widget-title poppins">Newsletter</h3>

                        <form class="signup" action="./" method="get">
                            <div class="form-group">
                                <input name="email" type="email" class="mailchimp_email form-control"
                                       placeholder="Email Address">
                            </div>
                            <button type="submit" class="theme_button">Send</button>
                            <div class="response"></div>
                            <p>
                                Subscribe to our Newsletter right now to be updated. We promice not to spam!
                            </p>

                        </form>

                    </div>

                    <div class="widget widget_flickr">

                        <h3 class="widget-title poppins">Flickr Widget</h3>
                        <ul id="flickr"></ul>
                    </div>

                    <div class="widget widget_recent_posts">

                        <h3 class="widget-title poppins">Recent Posts</h3>
                        <ul class="media-list">
                            <li class="media">
                                <div class="media-left media-middle">
                                    <img src="images/recent_post1.jpg" alt=""/>
                                </div>
                                <div class="media-body media-middle">
                                    <h4>
                                        <a href="blog-single-left.html">
                                            Tail cupim officia short loin frankfurter alcatra
                                        </a>
                                    </h4>
                                    <span class="entry-date highlight3 small-text">
												<time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
													March 12, 2017
												</time>
											</span>
                                </div>
                            </li>

                            <li class="media">
                                <div class="media-left media-middle">
                                    <img src="images/recent_post2.jpg" alt=""/>
                                </div>
                                <div class="media-body media-middle">
                                    <h4>
                                        <a href="blog-single-left.html">
                                            Biltong venison beef swine. Corned beef pork ham
                                        </a>
                                    </h4>
                                    <span class="entry-date highlight3 small-text">
												<time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
													March 13, 2017
												</time>
											</span>
                                </div>
                            </li>

                            <li class="media">
                                <div class="media-left media-middle">
                                    <img src="images/recent_post3.jpg" alt=""/>
                                </div>
                                <div class="media-body media-middle">
                                    <h4>
                                        <a href="blog-single-left.html">
                                            Prosciutto hamburger filet mignon
                                        </a>
                                    </h4>
                                    <span class="entry-date highlight3 small-text">
												<time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
													March 14, 2017
												</time>
											</span>
                                </div>
                            </li>


                        </ul>
                    </div>

                    <div class="widget widget_search">
                        <h3 class="widget-title poppins">Search on Website</h3>
                        <form method="get" class="searchform" action="./">
                            <!-- <div class="form-group-wrap"> -->
                            <div class="form-group">
                                <label class="sr-only" for="widget-search">Search for:</label>
                                <input id="widget-search" type="text" value="" name="search" class="form-control"
                                       placeholder="Search Keyword">
                            </div>
                            <button type="submit" class="theme_button color1">Search</button>
                            <!-- </div> -->
                        </form>
                    </div>


                </aside>
                <!-- eof aside sidebar -->

            </div>
        </div>
    </section>

@endsection