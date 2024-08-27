<div class="container">
    <h1 class="services_taital">Admin Posts</h1>
    <div class="services_section_2">
        <div class="row" style="margin:auto;">
            @if(isset($post) && $post->count())
            @foreach ($post as $singlePost)
            <div class="col-md-4">
                <div><img src="/postimage/{{$singlePost->image}}" class="services_img"></div>
                <h4>{{$singlePost->title}}</h4>
                <p>{{$singlePost->usertype}}</p>
                <div class="btn_main">
                    <a href="#">Read more</a>
                </div>
            </div>
            @endforeach
            @else
            <p>No posts available.</p>
            @endif
        </div>
    </div>
</div>