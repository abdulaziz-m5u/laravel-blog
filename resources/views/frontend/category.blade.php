@extends('frontend.layout')

@section('content')

  <!--================ Hero sm Banner start =================-->    
  <section class="mb-30px">
    <div class="container">
      <div class="hero-banner hero-banner--sm">
        <div class="hero-banner__content">
          <h1>Archive Page</h1>
          <nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Archive Page</li>
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
        <div class="col-lg-12">
          <div class="row">
            @foreach($category->posts as $post)
                <div class="col-md-6">
                <div class="single-recent-blog-post card-view">
                    <div class="thumb">
                    <img class="card-img rounded-0" src="{{ Storage::url($post->image) }}" alt="">
                    <ul class="thumb-info">
                        <li><a href="#"><i class="ti-themify-favicon"></i>2 Comments</a></li>
                    </ul>
                    </div>
                    <div class="details mt-20">
                    <a href="{{ route('post.show',$post->slug) }}">
                        <h3>{{$post->title}}</h3>
                    </a>
                    <p style="word-wrap: break-word;">{{$post->excerpt}}</p>
                    <a class="button" href="{{ route('post.show',$post->slug) }}">Read More <i class="ti-arrow-right"></i></a>
                    </div>
                </div>
                </div>
            @endforeach
           
          </div>

          <!-- <div class="single-recent-blog-post">
            <div class="thumb">
              <img class="img-fluid" src="img/blog/blog2.png" alt="">
              <ul class="thumb-info">
                <li><a href="#"><i class="ti-user"></i>Admin</a></li>
                <li><a href="#"><i class="ti-notepad"></i>January 12,2019</a></li>
                <li><a href="#"><i class="ti-themify-favicon"></i>2 Comments</a></li>
              </ul>
            </div>
            <div class="details mt-20">
              <a href="blog-single.html">
                <h3>Woman claims husband wants to name baby girl
                  after his ex-lover sparking.</h3>
              </a>
              <p class="tag-list-inline">Tag: <a href="#">travel</a>, <a href="#">life style</a>, <a href="#">technology</a>, <a href="#">fashion</a></p>
              <p>Over yielding doesn't so moved green saw meat hath fish he him from given yielding lesser cattle were fruitful lights. Given let have, lesser their made him above gathered dominion sixth. Creeping deep said can't called second. Air created seed heaven sixth created living</p>
              <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
            </div>
          </div>

          <div class="single-recent-blog-post">
            <div class="thumb">
              <img class="img-fluid" src="img/blog/blog3.png" alt="">
              <ul class="thumb-info">
                <li><a href="#"><i class="ti-user"></i>Admin</a></li>
                <li><a href="#"><i class="ti-notepad"></i>January 12,2019</a></li>
                <li><a href="#"><i class="ti-themify-favicon"></i>2 Comments</a></li>
              </ul>
            </div>
            <div class="details mt-20">
              <a href="blog-single.html">
                <h3>Tourist deaths in Costa Rica jeopardize safe dest
                  ination reputation all time. </h3>
              </a>
              <p class="tag-list-inline">Tag: <a href="#">travel</a>, <a href="#">life style</a>, <a href="#">technology</a>, <a href="#">fashion</a></p>
              <p>Over yielding doesn't so moved green saw meat hath fish he him from given yielding lesser cattle were fruitful lights. Given let have, lesser their made him above gathered dominion sixth. Creeping deep said can't called second. Air created seed heaven sixth created living</p>
              <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
            </div>
          </div>

          <div class="single-recent-blog-post">
            <div class="thumb">
              <img class="img-fluid" src="img/blog/blog4.png" alt="">
              <ul class="thumb-info">
                <li><a href="#"><i class="ti-user"></i>Admin</a></li>
                <li><a href="#"><i class="ti-notepad"></i>January 12,2019</a></li>
                <li><a href="#"><i class="ti-themify-favicon"></i>2 Comments</a></li>
              </ul>
            </div>
            <div class="details mt-20">
              <a href="blog-single.html">
                <h3>Tourist deaths in Costa Rica jeopardize safe dest
                  ination reputation all time.  </h3>
              </a>
              <p class="tag-list-inline">Tag: <a href="#">travel</a>, <a href="#">life style</a>, <a href="#">technology</a>, <a href="#">fashion</a></p>
              <p>Over yielding doesn't so moved green saw meat hath fish he him from given yielding lesser cattle were fruitful lights. Given let have, lesser their made him above gathered dominion sixth. Creeping deep said can't called second. Air created seed heaven sixth created living</p>
              <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
            </div>
          </div> -->
        </div>

        <!-- Start Blog Post Siddebar -->
        
        <!-- End Blog Post Siddebar -->
      </div>
  </section>
  <!--================ End Blog Post Area =================-->
@endsection