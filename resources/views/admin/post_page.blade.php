<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Page</title>
</head>
<body>
    this is the "Post page" where admin can post something new with title, description and a image....
</body>
</html> -->

<!DOCTYPE html>
<html>

<head>
    <!-- contains all the meta tags and css related titles and links starts-->
    @include('admin.css')
    <!-- contains all the meta tags and css related titles and links ends here-->
    <style>
        .post_title {
            font-size: 30px;
            font-weight: bold;
            text-align: center;
            padding: 30px;
            color: #333;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
        }

        /* Form styling */
        .div_center {
            text-align: left;
            padding: 20px;
            margin-bottom: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
        }

        input[type="text"],
        textarea,
        input[type="file"] {
            width: 100%;
            max-width: 500px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
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
        <!-- Body code starts from here -->
        <div class="page-content">

            @if(session()->has('message'));

            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
            </div>

            {{session()->get('message')}}


            @endif

            <h1 class="post_title">Add survey</h1>


            <form action="{{url('add_post')}}" method="POST" enctype="multipart/form-data">

                @csrf
                <!--  Post title... starts here-->
                <div class="div_center">
                    <label>Survey title</label>
                    <input type="text" name="title" id="" placeholder="Enter title">
                </div>
                <!-- Post title... starts here-->

                <!-- For text description related to Post title... starts here-->
                <div class="div_center">
                    <label>Survey Link</label>
                    <!-- <input type="text" name="" id=""> -->
                    <textarea name="description"></textarea>
                </div>
                <!-- For text description related to Post title... ends here-->

                <!-- For image related to title starts here-->
                <div class="div_center">
                    <label>Add an image</label>
                    <input type="file" name="image" id="" placeholder="Enter title">
                </div>
                <!-- For image related to title ends here-->

                <!-- Submit button -->
                <div class="div_center">
                    <input type="submit" class="btn btn-primary">

                </div>
                <!-- Submit button -->
            </form>
        </div>

    </div>



    @include('admin.footer')
</body>

</html>