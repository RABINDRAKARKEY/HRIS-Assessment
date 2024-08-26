<div class="container">
    <h1 class="services_taital">Admin posts </h1>
    <!-- <p class="services_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p> -->
    <div class="services_section_2">
        <div class="row">
            @foreach ( $post as $post )
            <div class="col-md-4">
                <div><img src="/postimage/{{$post->image}}" class="services_img"></div>
                <h4>{{$post->title}}</h4>
                <p>{{$post->usertype}}</p>
                <div class="btn_main"><a href="#">Read more</a></div>
            </div>
            <div style="height: 5px; width:450px; color:black;background-color:black;"></div>
            @endforeach
            <!-- <div class="col-md-4">
                <div><img src="images/img-2.png" class="services_img"></div>
                <div class="btn_main active"><a href="#">Hiking</a></div>
            </div>
            <div class="col-md-4">
                <div><img src="images/img-3.png" class="services_img"></div>
                <div class="btn_main"><a href="#">Camping</a></div>
            </div> -->
        </div>
    </div>
</div>