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