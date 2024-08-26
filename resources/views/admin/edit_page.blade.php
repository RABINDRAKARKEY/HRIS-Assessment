<!DOCTYPE html>
<html>

<head>
    <base href="/public">
    @include('admin.css')
    <style>
        .post_title {
            font-size: 30px;
            font-weight: bold;
            text-align: center;
            padding: 30px;
            color: #333;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
        }

        .div_center {
            text-align: center;
            padding: 30px;
            margin-bottom: 20px;
            /* Space between form elements */
        }

        label {
            display: inline-block;
            width: 200px;
            text-align: right;
            margin-right: 10px;
        }

        input[type="text"],
        textarea {
            width: 300px;
            /* Input/textarea width */
            padding: 10px;
            /* Inner padding */
            border: 1px solid #ccc;
            /* Border styling */
            border-radius: 5px;
            /* Rounded corners */
        }

        input[type="file"] {
            margin-left: 210px;
            /* Align with labels */
        }

        input[type="submit"] {
            background-color: #007bff;
            /* Button color */
            color: #fff;
            /* Text color */
            padding: 10px 20px;
            /* Button padding */
            border: none;
            /* Remove border */
            border-radius: 5px;
            /* Rounded corners */
            cursor: pointer;
            /* Pointer cursor */
            transition: background-color 0.3s ease;
            /* Hover transition */
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
            /* Hover color */
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
            <!-- <div class="page-header">
                <div class="container-fluid">
                    <h2 class="h5 no-margin-bottom">Dashboard</h2>
                </div>
            </div> -->
            <h1 class="post_title">Update post</h1>


            <form action="{{url('update_post',$post->id)}}" method="post" enctype="multipart/form-data">
                <div class="div_center">
                    <label>Update title</label>
                    <input type="text" name="title" value="{{$post->title}}" placeholder="Enter title">
                </div>
                <!-- Post title... starts here-->

                <!-- For text description related to Post title... starts here-->
                <div class="div_center">
                    <label>Post description</label>
                    <!-- <input type="text" name="" id=""> -->
                    <textarea name="description" value="">{{$post->description}}</textarea>
                </div>
                <!-- For text description related to Post title... ends here-->

                <div class="div_center">
                    <label for="">Old image</label>
                    <img height="100px" width="150px" style="margin: auto;" src="/postimage/{{$post->image}}">
                </div>


                <!-- For image related to title starts here-->
                <div class="div_center">
                    <label>Update old image</label>
                    <input type="file" name="image" id="" placeholder="Enter title">
                </div>
                <!-- For image related to title ends here-->

                <!-- Submit button -->
                <div class="div_center">
                    <input type="submit" class="btn btn-primary">

                </div>
            </form>

        </div>

        <!-- Body code starts from here -->

        @include('admin.footer')
</body>

</html>