@extends('frontend.layouts.app')

@section('title') {{$$module_name_singular->name}} @endsection

@section('content')

<section class="bg-gray-100 text-gray-600 body-font px-6 sm:px-20">
    <div class="container mx-auto flex py-8 sm:py-16 md:flex-row flex-col items-center">
        <div class="lg:flex-grow sm:w-4/12 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left items-center text-center">
            <h1 class="sm:text-4xl text-3xl mb-4 font-medium text-gray-800">
                {{$$module_name_singular->name}}
            </h1>
            @if($$module_name_singular->intro != "")
            <p class="mb-8 leading-relaxed">
                {{$$module_name_singular->intro}}
            </p>
            @endif

            @include('frontend.includes.messages')
        </div>
        <div class="w-full sm:w-8/12 mb-4 sm:mb-0">
            <img class="object-cover object-center rounded shadow-md" alt="{{$$module_name_singular->name}}" src="{{$$module_name_singular->featured_image}}">
        </div>
    </div>
</section>
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

        <div class="row">

            <div class="col-lg-8 entries">

                <article class="entry entry-single">

                    <div class="entry-img">
                        <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                    </div>
                    @php $title_text = $$module_name_singular->name; @endphp
                    @php
                        $details_url = route("frontend.$module_name.show",[encode_id($$module_name_singular->id), $$module_name_singular->slug]);
                    @endphp

                    <h2 class="entry-title">
                        <a href="{{ $details_url }}">{{ $title_text }}</a>
                    </h2>

                    <div class="entry-meta">
                        <ul>
                            <li class="d-flex align-items-center"><i class="bi bi-person"></i>
                                <a>
                                    {{isset($$module_name_singular->created_by_alias)? $$module_name_singular->created_by_alias : $$module_name_singular->created_by_name}}
                                </a>
                            </li>
                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a><time datetime="{{$$module_name_singular->published_at->isoFormat('llll')}}">{{$$module_name_singular->published_at->isoFormat('llll')}}</time></a></li>
                            <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li>
                        </ul>
                    </div>

                    <div class="entry-content">
                        {!!$$module_name_singular->content!!}
                    </div>

                    <div class="entry-footer">
                        <i class="bi bi-folder"></i>
                        <ul class="cats">
                            <li><a href="#">Business</a></li>
                        </ul>

                        <i class="bi bi-tags"></i>
                        <ul class="tags">
                            <li><a href="#">Creative</a></li>
                            <li><a href="#">Tips</a></li>
                            <li><a href="#">Marketing</a></li>
                        </ul>
                    </div>

                </article><!-- End blog entry -->

                <div class="blog-author d-flex align-items-center">
                    <img src="assets/img/blog/blog-author.jpg" class="rounded-circle float-left" alt="">
                    <div>
                        <h4>Jane Smith</h4>
                        <div class="social-links">
                            <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                            <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                            <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                        </div>
                        <p>
                            Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.
                        </p>
                    </div>
                </div><!-- End blog author bio -->

                <div class="blog-comments">

                    <h4 class="comments-count">8 Comments</h4>

                    <div id="comment-1" class="comment">
                        <div class="d-flex">
                            <div class="comment-img"><img src="assets/img/blog/comments-1.jpg" alt=""></div>
                            <div>
                                <h5><a href="">Georgia Reader</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                                <time datetime="2020-01-01">01 Jan, 2020</time>
                                <p>
                                    Et rerum totam nisi. Molestiae vel quam dolorum vel voluptatem et et. Est ad aut sapiente quis molestiae est qui cum soluta.
                                    Vero aut rerum vel. Rerum quos laboriosam placeat ex qui. Sint qui facilis et.
                                </p>
                            </div>
                        </div>
                    </div><!-- End comment #1 -->

                    <div id="comment-2" class="comment">
                        <div class="d-flex">
                            <div class="comment-img"><img src="assets/img/blog/comments-2.jpg" alt=""></div>
                            <div>
                                <h5><a href="">Aron Alvarado</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                                <time datetime="2020-01-01">01 Jan, 2020</time>
                                <p>
                                    Ipsam tempora sequi voluptatem quis sapiente non. Autem itaque eveniet saepe. Officiis illo ut beatae.
                                </p>
                            </div>
                        </div>

                        <div id="comment-reply-1" class="comment comment-reply">
                            <div class="d-flex">
                                <div class="comment-img"><img src="assets/img/blog/comments-3.jpg" alt=""></div>
                                <div>
                                    <h5><a href="">Lynda Small</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                                    <time datetime="2020-01-01">01 Jan, 2020</time>
                                    <p>
                                        Enim ipsa eum fugiat fuga repellat. Commodi quo quo dicta. Est ullam aspernatur ut vitae quia mollitia id non. Qui ad quas nostrum rerum sed necessitatibus aut est. Eum officiis sed repellat maxime vero nisi natus. Amet nesciunt nesciunt qui illum omnis est et dolor recusandae.

                                        Recusandae sit ad aut impedit et. Ipsa labore dolor impedit et natus in porro aut. Magnam qui cum. Illo similique occaecati nihil modi eligendi. Pariatur distinctio labore omnis incidunt et illum. Expedita et dignissimos distinctio laborum minima fugiat.

                                        Libero corporis qui. Nam illo odio beatae enim ducimus. Harum reiciendis error dolorum non autem quisquam vero rerum neque.
                                    </p>
                                </div>
                            </div>

                            <div id="comment-reply-2" class="comment comment-reply">
                                <div class="d-flex">
                                    <div class="comment-img"><img src="assets/img/blog/comments-4.jpg" alt=""></div>
                                    <div>
                                        <h5><a href="">Sianna Ramsay</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                                        <time datetime="2020-01-01">01 Jan, 2020</time>
                                        <p>
                                            Et dignissimos impedit nulla et quo distinctio ex nemo. Omnis quia dolores cupiditate et. Ut unde qui eligendi sapiente omnis ullam. Placeat porro est commodi est officiis voluptas repellat quisquam possimus. Perferendis id consectetur necessitatibus.
                                        </p>
                                    </div>
                                </div>

                            </div><!-- End comment reply #2-->

                        </div><!-- End comment reply #1-->

                    </div><!-- End comment #2-->

                    <div id="comment-3" class="comment">
                        <div class="d-flex">
                            <div class="comment-img"><img src="assets/img/blog/comments-5.jpg" alt=""></div>
                            <div>
                                <h5><a href="">Nolan Davidson</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                                <time datetime="2020-01-01">01 Jan, 2020</time>
                                <p>
                                    Distinctio nesciunt rerum reprehenderit sed. Iste omnis eius repellendus quia nihil ut accusantium tempore. Nesciunt expedita id dolor exercitationem aspernatur aut quam ut. Voluptatem est accusamus iste at.
                                    Non aut et et esse qui sit modi neque. Exercitationem et eos aspernatur. Ea est consequuntur officia beatae ea aut eos soluta. Non qui dolorum voluptatibus et optio veniam. Quam officia sit nostrum dolorem.
                                </p>
                            </div>
                        </div>

                    </div><!-- End comment #3 -->

                    <div id="comment-4" class="comment">
                        <div class="d-flex">
                            <div class="comment-img"><img src="assets/img/blog/comments-6.jpg" alt=""></div>
                            <div>
                                <h5><a href="">Kay Duggan</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                                <time datetime="2020-01-01">01 Jan, 2020</time>
                                <p>
                                    Dolorem atque aut. Omnis doloremque blanditiis quia eum porro quis ut velit tempore. Cumque sed quia ut maxime. Est ad aut cum. Ut exercitationem non in fugiat.
                                </p>
                            </div>
                        </div>

                    </div><!-- End comment #4 -->

                    <div class="reply-form">
                        <h4>Leave a Reply</h4>
                        <p>Your email address will not be published. Required fields are marked * </p>
                        <form action="">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input name="name" type="text" class="form-control" placeholder="Your Name*">
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="email" type="text" class="form-control" placeholder="Your Email*">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col form-group">
                                    <input name="website" type="text" class="form-control" placeholder="Your Website">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col form-group">
                                    <textarea name="comment" class="form-control" placeholder="Your Comment*"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Post Comment</button>

                        </form>

                    </div>

                </div><!-- End blog comments -->

            </div><!-- End blog entries list -->

            <!--- Sidebar--->
            @include('article::frontend.posts.blocks.right-sidebar')
            <!-- End blog sidebar -->

        </div>

    </div>
</section><!-- End Blog Single Section -->


{{--<section class="py-6 sm:py-10 px-6 sm:px-20">--}}
{{--    <div class="container mx-auto flex md:flex-row flex-col">--}}
{{--        <div class="flex flex-col lg:flex-grow sm:w-8/12 sm:pr-8">--}}
{{--            <div class="pb-5">--}}
{{--                <p>--}}
{{--                    {!!$$module_name_singular->content!!}--}}
{{--                </p>--}}
{{--            </div>--}}

{{--            <hr>--}}

{{--            <div class="py-5">--}}
{{--                <div class="flex flex-col sm:flex-row justify-between">--}}
{{--                    <div class="pb-2">--}}
{{--                        {{__('Written by')}}: {{isset($$module_name_singular->created_by_alias)? $$module_name_singular->created_by_alias : $$module_name_singular->created_by_name}}--}}
{{--                    </div>--}}
{{--                    <div class="pb-2">--}}
{{--                        {{__('Published at')}}: {{$$module_name_singular->published_at->isoFormat('llll')}}--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="flex flex-row justify-between py-5">--}}
{{--                <div>--}}
{{--                    <span class="font-weight-bold">--}}
{{--                        @lang('Category'):--}}
{{--                    </span>--}}
{{--                    <x-frontend.badge :url="route('frontend.categories.show', [encode_id($$module_name_singular->category_id), $$module_name_singular->category->slug])" :text="$$module_name_singular->category_name" />--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            @if (count($$module_name_singular->tags))--}}
{{--            <div class="py-5">--}}
{{--                <span class="font-weight-bold">--}}
{{--                    @lang('Tags'):--}}
{{--                </span>--}}

{{--                @foreach ($$module_name_singular->tags as $tag)--}}
{{--                <x-frontend.badge :url="route('frontend.tags.show', [encode_id($tag->id), $tag->slug])" :text="$tag->name" />--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--            @endif--}}

{{--            <div class="py-5">--}}
{{--                <div class="flex flex-row justify-around content-center items-center ">--}}
{{--                    <h6 class="">Share with others</h6>--}}

{{--                    <div>--}}
{{--                        @php $title_text = $$module_name_singular->name; @endphp--}}

{{--                        <button data-title='Share on Twitter' data-placement="top" class="tooltip p-2 m-2 hover:shadow-lg transition ease-out duration-300 border border-gray-400 hover:border-gray-600 hover:bg-gray-100 rounded-sm" data-sharer="twitter" data-via="muktolibrary" data-title="{{$title_text}}" data-hashtags="muktolibrary" data-url="{{url()->full()}}" data-toggle="tooltip" title="Share on Twitter" data-original-title="Share on Twitter">--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">--}}
{{--                                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />--}}
{{--                            </svg>--}}
{{--                        </button>--}}

{{--                        <button data-title='Share on Facebook' data-placement="top" class="tooltip p-2 m-2 hover:shadow-lg transition ease-out duration-300 border border-gray-400 hover:border-gray-600 hover:bg-gray-100 rounded-sm" data-sharer="facebook" data-hashtag="muktolibrary" data-url="{{url()->full()}}" data-toggle="tooltip" title="Share on Facebook" data-original-title="Share on Facebook">--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">--}}
{{--                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />--}}
{{--                            </svg>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="py-5">--}}
{{--                @include('article::frontend.posts.blocks.comments')--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="flex flex-col sm:w-4/12">--}}
{{--            <div class="py-5 sm:pt-0">--}}
{{--                <livewire:recent-posts />--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

@endsection

@push ("after-style")

@endpush

@push ("after-scripts")
<script type="module" src="https://cdn.jsdelivr.net/npm/sharer.js@latest/sharer.min.js"></script>
@endpush
