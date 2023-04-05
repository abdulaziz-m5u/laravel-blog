@extends('frontend.layout')

@section('content')
<main class="site-main">
      <!--================Hero Banner start =================-->
      <section class="mb-30px">
        <div class="container">
          <div class="hero-banner">
            <div class="hero-banner__content">
              <h3>Learn something new everyday</h3>
              <h1>& build something useful</h1>
              <h4>For Society</h4>
            </div>
          </div>
        </div>
      </section>
      <!--================Hero Banner end =================-->

      <!--================ Blog slider start =================-->
      <section>
        <div class="container">
          <div class="owl-carousel owl-theme blog-slider">
            @foreach($categories as $category)
                <div class="card blog__slide text-center">
                <div class="blog__slide__img">
                    <img
                    class="card-img rounded-0"
                    src="{{ Storage::url($category->image) }}"
                    alt=""
                    />
                </div>
                <div class="blog__slide__content">
                    <a class="blog__slide__label" href="{{ route('category.index', $category->slug) }}">{{ $category->title }}</a>
                </div>
                </div>
            @endforeach
          </div>
        </div>
      </section>
      <!--================ Blog slider end =================-->

      <!--================ Start Blog Post Area =================-->
      <section class="blog-post-area section-margin mt-4">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              @foreach($posts as $post)
                <div class="single-recent-blog-post">
                  <div class="thumb">
                    <img class="img-fluid" src="{{ Storage::url($post->image) }}" alt="" />
                    <ul class="thumb-info">
                      <li>
                        <a href="{{ route('post.show',$post->slug) }}/#disqus_thread"
                          ></a
                        >
                      </li>
                    </ul>
                  </div>
                  <div class="details mt-20">
                    <a href="{{ route('post.show', $post->slug) }}">
                      <h3>
                      {{ $post->title }}
                      </h3>
                    </a>
                    <p>
                      {{ $post->excerpt }}
                    </p>
                    <a class="button" href="{{ route('post.show', $post) }}"
                      >Read More <i class="ti-arrow-right"></i
                    ></a>
                  </div>
                </div>
              @endforeach
              <div class="row">
                <div class="col-12">
                  {{ $posts->links() }}
                </div>
              </div>
            </div>
            <!-- Start Blog Post Siddebar -->
            <div class="col-lg-4 sidebar-widgets">
              <div class="widget-wrap">
                <div class="single-sidebar-widget newsletter-widget">
                  <h4 class="single-sidebar-widget__title">Newsletter</h4>
                  <div class="form-group mt-30">
                    <div class="col-autos">
                      <input
                        type="text"
                        class="form-control"
                        id="inlineFormInputGroup"
                        placeholder="Enter email"
                        onfocus="this.placeholder = ''"
                        onblur="this.placeholder = 'Enter email'"
                      />
                    </div>
                  </div>
                  <button class="bbtns d-block mt-20 w-100">Subcribe</button>
                </div>

                <div class="single-sidebar-widget post-category-widget">
                  <h4 class="single-sidebar-widget__title">Catgory</h4>
                  <ul class="cat-list mt-20">
                    @foreach($categories as $category)
                        <li>
                        <a href="{{ route('category.index', $category->slug) }}" class="d-flex justify-content-between">
                            <p>{{ $category->title }}</p>
                            <p>({{ $category->posts_count }})</p>
                        </a>
                        </li>
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- End Blog Post Siddebar -->
        </div>
      </section>
      <!--================ End Blog Post Area =================-->
    </main>
@endsection

@push('script-alt')
<script id="dsq-count-scr" src="{{ env('DISQUS') }}/count.js" async></script>
@endpush