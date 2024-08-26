<!DOCTYPE html>
<html>

<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @include('admin.css')

    <style>
        .title_deg {
            font-size: 30px;
            font-weight: bold;
            color: aliceblue;
            padding: 30px;
            text-align: center;
        }

        .table_deg {
            border: 1px solid white;
            width: 80%;
            text-align: center;
            margin-left: 70px;
        }

        .th_deg {
            background-color: burlywood;
            color: Black;
        }

        .img_deg {
            width: 150px;
            height: 100px;
            padding: 10px;
        }
    </style>
</head>

<body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">

        <!-- Sidebar Navigation-->
        @include('admin.sidebar')
        <!-- Sidebar Navigation end-->

        <!-- Body code starts from here -->
        <!-- @include('admin.body') -->

        <div class="page-content">

            @if(session()->has('message'))
            <div class="alert alert-danger">
                <button Type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            </div>

            {{session()->get('message')}}
            @endif


            <h1 class="title_deg">All Post</h1>

            <table class="table_deg">
                <tr class="th_deg">
                    <th>Post title</th>
                    <th>Description</th>
                    <th>Post by</th>
                    <th>Post status</th>
                    <th>User Type</th>
                    <th>Image</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>

                @foreach ($post as $post)
                <tr>
                    <td>{{$post->title}}</td>
                    <td>{{$post->description}}</td>
                    <td>{{$post->name}}</td>
                    <td>{{$post->usertype}}</td>
                    <td>{{$post->post_status}}</td>
                    <td>
                        <!-- {{$post->image}} -->
                        <img class="img_deg" src="/postimage/{{$post->image}}">
                    </td>
                    <td>
                        <a href="{{url('delete_post',$post->id)}}" class="btn btn-danger" onclick="confirmation(event)">Delete</a>
                    </td>

                    <!-- <td>
                        <a href="{{url('edit_page',$post->id)}}"class="btn btn-success">Edit</a>
                    </td> -->
                </tr>
                @endforeach

            </table>

        </div>

        <!-- Body code starts from here -->

        @include('admin.footer')

        <script type="text/javascript">
            function confirmation(event) {
                event.preventDefault();
                // if (confirm("Are you sure you want to delete this post?"));
                var urlToReddirect = event.currentTarget.getAttribute('href');
                console.log(urlToReddirect);
                swal({
                        title: "Are you sure to delete this",
                        text: "Once deleted, you will not be able to recover this post",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })

                    .then((willCancel) => {
                        if (willCancel) {
                            window.location.href = urlToReddirect;
                        }
                    });
            }
        </script>
</body>

</html>