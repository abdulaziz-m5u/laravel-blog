@extends('frontend.layout')

@section('content')
  <!--================ Hero sm Banner start =================-->
  <section class="mb-30px">
      <div class="container">
        <div class="hero-banner hero-banner--sm">
          <div class="hero-banner__content">
            <h1>Blog details</h1>
            <nav aria-label="breadcrumb" class="banner-breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                  Blog Details
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>
    <!--================ Hero sm Banner end =================-->

    <!--================ Start Blog Post Area =================-->
    <section class="blog-post-area section-margin">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="main_blog_details">
              <img class="img-fluid" src="{{ Storage::url($post->image) }}" alt="" />
                <h4 style="word-wrap: break-word;">
                 {{ $post->title }}
                </h4>
                <div class="card border-0">
                  {!! $post->description !!}
                </div>
                <div class="news_d_footer flex-column flex-sm-row">
                </div>
                {!! Share::currentPage($post->title)
                    ->facebook()
                    ->twitter()
                    ->linkedin()
                !!}
                <div class="news_d_footer flex-column flex-sm-row">
                </div>

                <div id="disqus_thread"></div>
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
                <h4 class="single-sidebar-widget__title">Category</h4>
                <ul class="cat-list mt-20">
                    @foreach($categories as $category)
                        <li>
                        <a href="{{ route('category.index',$category->slug) }}" class="d-flex justify-content-between">
                            <p>{{ $category->title }}</p>
                            <p>({{ $category->posts_count }})</p>
                        </a>
                        </li>
                    @endforeach
                </ul>
              </div>

              <div class="single-sidebar-widget popular-post-widget">
                <h4 class="single-sidebar-widget__title">Popular Post</h4>
                <div class="popular-post-list">
                    @foreach($posts as $post)
                        <div class="single-post-list">
                            <div class="thumb">
                            <img
                                class="card-img rounded-0"
                                src="{{ Storage::url($post->image) }}"
                                alt=""
                            />
                            </div>
                            <div class="details mt-20 card border-0 bg-transparent">
                            <a style="word-wrap: break-word;" href="{{ route('post.show', $post->slug) }}">
                                <h6 style="word-wrap: break-word;">
                               {{ $post->title }}
                                </h6>
                            </a>
                            </div>
                        </div>
                    @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Blog Post Siddebar -->
      </div>
    </section>
    <!--================ End Blog Post Area =================-->
@endsection

@push('style-alt')
<style>
  .social-links {
    background-color: black !important;
  }
  #social-links ul {
    display: flex;
    column-gap: .5rem;
  }

  #social-links ul li {
    border-radius: 2px;
  }

  #social-links ul li:nth-child(1) {
    background-color: #6788ce;
  }
  #social-links ul li:nth-child(2) {
    background-color: #29c5f6;
  }
  #social-links ul li:nth-child(3) {
    background-color: #3a9bdc;
  }

  #social-links ul li a {
    padding: 9px 5px;
    width: 90px;
    text-align: center;
  }

  #social-links ul li a span {
    color: #fff;
    font-size: 1.75rem;
  }

  .media div {
    width: 100%;
  }

</style>
@endpush


@push('script-alt')
<script>
              /**
              *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
              *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
              /*
              var disqus_config = function () {
              this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
              this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
              };
              */
              (function() { // DON'T EDIT BELOW THIS LINE
              var d = document, s = d.createElement('script');
              s.src = '{{ env('DISQUS') }}/embed.js';
              s.setAttribute('data-timestamp', +new Date());
              (d.head || d.body).appendChild(s);
              })();
          </script>
          <!-- <script>
            const embed = document.getElementsByTagName("oembed")[0];
            const url = embed.getAttribute("url");
            function getId(url) {
                var regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/;
                var match = url.match(regExp);

                if (match && match[2].length == 11) {
                    return match[2];
                } else {
                    return 'error';
                }
            }

            var videoId = getId(url);

            var iframeMarkup = '<iframe width="560" height="315" src="//www.youtube.com/embed/' 
                + videoId + '" frameborder="0" allowfullscreen></iframe>';

            embed.insertAdjacentHTML('beforeend', iframeMarkup);
          </script> -->
@endpush