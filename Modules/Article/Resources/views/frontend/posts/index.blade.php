@extends('frontend.layouts.app')

@section('title') {{ __("Posts") }} @endsection

@section('content')

{{-- <section class="bg-gray-100 text-gray-600 py-20">
    <div class="container mx-auto flex px-5 items-center justify-center flex-col">
        <div class="text-center lg:w-2/3 w-full">
            <h1 class="text-3xl sm:text-4xl mb-4 font-medium text-gray-800">
                {{ __("Articles") }}
            </h1>
            <p class="mb-8 leading-relaxed">
                We publish articles on a number of topics.
                <br>
                We encourage you to read our posts and let us know your feedback. It would be really help us to move forward.
            </p>

            @include('frontend.includes.messages')
        </div>
    </div>
</section>

<section class="bg-white text-gray-600 p-6 sm:p-20">
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
        @foreach ($$module_name as $$module_name_singular)
        @php
        $details_url = route("frontend.$module_name.show",[encode_id($$module_name_singular->id), $$module_name_singular->slug]);
        @endphp
        <x-frontend.card :url="$details_url" :name="$$module_name_singular->name" :image="$$module_name_singular->featured_image">
            @if($$module_name_singular->created_by_alias)
            <div class="flex flex-row items-center my-4">
                <img class="w-5 h-5 sm:w-8 sm:h-8 rounded-full" src="{{asset('img/avatars/'.rand(1, 8).'.jpg')}}" alt="Author profile image">
                <h6 class="text-muted text-sm small ml-2 mb-0">
                    {{ $$module_name_singular->created_by_alias }}
                </h6>
            </div>
            @else
            <div class="flex flex-row items-center my-4">
                <img class="w-5 h-5 sm:w-8 sm:h-8 rounded-full" src="{{asset('img/avatars/'.rand(1, 8).'.jpg')}}" alt="">

                <a href="{{ route('frontend.users.profile', $$module_name_singular->created_by) }}">
                    <h6 class="text-muted text-sm small ml-2 mb-0">
                        {{ $$module_name_singular->created_by_name }}
                    </h6>
                </a>
            </div>
            @endif

            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                {{$$module_name_singular->intro}}
            </p>
            <p>
                <x-frontend.badge :url="route('frontend.categories.show', [encode_id($$module_name_singular->category_id), $$module_name_singular->category->slug])" :text="$$module_name_singular->category_name" />
            </p>
            <p>
                @foreach ($$module_name_singular->tags as $tag)
                <x-frontend.badge :url="route('frontend.tags.show', [encode_id($tag->id), $tag->slug])" :text="$tag->name" />
                @endforeach
            </p>
        </x-frontend.card>
        @endforeach
    </div>
    <div class="d-flex justify-content-center w-100 mt-4">
        {{$$module_name->links()}}
    </div>
</section> --}}
    <section class="bg-gray-100 text-gray-600 py-20">
        <div class="container mx-auto flex px-5 items-center justify-center flex-col">
            <div class="text-center lg:w-2/3 w-full">
                <h1 class="text-3xl sm:text-4xl mb-4 font-medium text-gray-800">
                    {{ __("Articles") }}
                </h1>
                <p class="mb-8 leading-relaxed">
                    We publish articles on a number of topics.
                    <br>
                    We encourage you to read our posts and let us know your feedback. It would be really help us to move forward.
                </p>

                @include('frontend.includes.messages')
            </div>
        </div>
    </section>
    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row">

              <div class="col-lg-8 entries">
                @foreach ($$module_name as $$module_name_singular)
                @php
                $details_url = route("frontend.$module_name.show",[encode_id($$module_name_singular->id), $$module_name_singular->slug]);
                @endphp
                <article class="entry">

                  <div class="entry-img">
                    <img src="{{ $$module_name_singular->featured_image }}" alt="" class="img-fluid">
                  </div>

                    <h2 class="entry-title">
                        <a href="{{ $details_url }}">{{ $$module_name_singular->name }}</a>
                    </h2>

                  <div class="entry-meta">
                    <ul>
                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="{{ route('frontend.users.profile', $$module_name_singular->created_by) }}">{{ $$module_name_singular->created_by_name }}</a></li>
                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a><time >{{ $$module_name_singular->published_at }}</time></a></li>
                        <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="{{ route('frontend.categories.show', [encode_id($$module_name_singular->category_id), $$module_name_singular->category->slug]) }}">{{ $$module_name_singular->category_name }}</a></li>
                    </ul>
                  </div>

                  <div class="entry-content">
                    <p>
                        {{$$module_name_singular->content}}
                    </p>
                    <div class="read-more">
                      <a href="{{ $details_url }}">Read More</a>
                    </div>
                  </div>

                </article><!-- End blog entry -->
                @endforeach
                <div class="blog-pagination">
                  <div class="justify-content-center w-100">
                    {{ $$module_name->links() }}
                  </div>
                </div>

              </div><!-- End blog entries list -->

              <div class="col-lg-4">

                <div class="sidebar">

                  <h3 class="sidebar-title">Search</h3>
                  <div class="sidebar-item search-form">
                    <form action="">
                      <input type="text">
                      <button type="submit"><i class="bi bi-search"></i></button>
                    </form>
                  </div><!-- End sidebar search formn-->

                  <h3 class="sidebar-title">Categories</h3>
                  <div class="sidebar-item categories">
                    <ul>
                        @php
                            $categories = \Modules\Category\Models\Category::all();
                        @endphp
                        @foreach($categories as $category)
                        <li><a href="{{ route('frontend.categories.show',[encode_id($category->id), $category->slug]) }}">{{ $category->name }} <span></span></a></li>
                        @endforeach
                    </ul>
                  </div><!-- End sidebar categories-->

                  <h3 class="sidebar-title">Recent Posts</h3>
                  <div class="sidebar-item recent-posts">
                    <div class="post-item clearfix">
                      <img src="assets/img/blog/blog-recent-1.jpg" alt="">
                      <h4><a href="blog-single.html">Nihil blanditiis at in nihil autem</a></h4>
                      <time datetime="2020-01-01">Jan 1, 2020</time>
                    </div>
                  </div><!-- End sidebar recent posts-->

                  <h3 class="sidebar-title">Tags</h3>
                  <div class="sidebar-item tags">
                      <ul>
                          @foreach($$module_name_singular->tags as $tag)
                          <li><a href="{{ route('frontend.tags.show', [encode_id($tag->id), $tag->slug]) }}">{{ $tag->name }}</a></li>
                          @endforeach
                      </ul>
                  </div><!-- End sidebar tags-->

                </div><!-- End sidebar -->

              </div><!-- End blog sidebar -->

            </div>

        </div>


    </section><!-- End Blog Section -->
@endsection
