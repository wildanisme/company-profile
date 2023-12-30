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
