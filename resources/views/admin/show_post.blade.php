<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
    <style>
        /* Title */
        .title_deg {
            font-size: 24px;
            font-weight: bold;
            color: #343a40;
            margin-bottom: 20px;
            text-align: center;
        }

        /* Table styling */
        .table_deg {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .th_deg {
            background-color: #343a40;
            color: white;
            text-align: left;
        }

        .table_deg th,
        .table_deg td {
            padding: 12px;
            border: 1px solid #dee2e6;
        }

        .table_deg tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        /* .table_deg tr:hover {
            background-color: #e9ecef;
        } */

        /* Image styling */
        .img_deg {
            width: 100px;
            height: auto;
            border-radius: 5px;
        }

        /* Button styling */
        .btn {
            padding: 8px 12px;
            font-size: 14px;
            border-radius: 5px;
            text-decoration: none;
            color: white;
            cursor: pointer;
            display: inline-block;
        }

        /* .btn-danger {
            background-color: #dc3545;
            border: none;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        .btn-success {
            background-color: #28a745;
            border: none;
        }

        .btn-success:hover {
            background-color: #218838;
        } */

        /* Alert styling */
        /* .alert {
            padding: 15px;
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
            border-radius: 5px;
            margin-bottom: 20px;
        } */

        /* .alert .close {
            color: #721c24;
            float: right;
            font-size: 20px;
            font-weight: bold;
            line-height: 1;
            cursor: pointer;
        }

        .alert .close:hover {
            color: #491217;
        } */
    </style>
</head>

<body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">

        <!-- Sidebar Navigation-->
        @include('admin.sidebar')
        <!-- Sidebar Navigation end-->

        <!-- Body code starts from here -->

        <div class="page-content">

            @if(session()->has('message'))
            <div class="alert alert-danger">
                <button Type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            </div>

            {{session()->get('message')}}
            @endif


            <h1 class="title_deg">Survey Question</h1>

            <table class="table_deg">
                <tr class="th_deg">
                    <th>Survey title</th>
                    <th>Link to survey</th>
                    <th>Post by</th>
                    <th>Post status</th>
                    <th>User Type</th>
                    <th>Image</th>
                    <th>Delete</th>
                    <!-- <th>Edit</th> -->
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
</body>

</html>