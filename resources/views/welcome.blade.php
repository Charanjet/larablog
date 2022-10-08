@include('layout.header');
    <!-- main slider -->
    <div id="maincarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#maincarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#maincarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item">
                <img class="d-block w-100" src="./assets/images/banner1.jpg" alt="swamp">
            </div>
            <div class="carousel-item active">
                <img class="d-block w-100" src="./assets/images/banner2.jpg" alt="flight">
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#maincarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#maincarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button

    </div>
    <!-- main slider end-->
    <!-- posts listing -->
    <h2 class="text-center mt-5"> Blog </h2>
    @foreach ($posts as $post)
        <div class="posts-wrapper m-5">
            <a href="post/{{ $post->id }}" class="row">
                <div class="col-md-4">
                    <img src="./assets//images/comp2.jpeg" alt="" class="w-100">
                </div>
                <div class="col-md-7">
                        <div class="post-title h2"> {{ $post->title }}</div>
                        <div class="post-author h5">By: {{ $post->user->name }}</div>
                        <div class="post-date h6">On: {{ $post->created_at }}</div>

                        <div class="post-excerpt">{{ $post->excerpt }}</div>
                </div>
            </a>
        </div>
    @endforeach
    <!-- posts listing end-->

@include('layout.footer')