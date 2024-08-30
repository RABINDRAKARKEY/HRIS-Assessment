<nav id="sidebar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
        <div class="title">
            <h1 class="h5">Admin-Page</h1>
            <p>HRIS</p>
        </div>
    </div>
    <!-- Sidebar Navidation Menus-->

    <span class="heading">Main</span>
    <ul class="list-unstyled">
        <li class="active">
            <a> <i class="icon-home"></i>Home
            </a>
        </li>
        <li>
            <a href="{{url('post_page')}}">
                <i class="icon-grid"></i>Add Post
            </a>
        </li>

        <li><a href="{{url('/show_post')}}">
                <i class="fa fa-bar-chart"></i>Show Post
            </a>
        </li>

        <li><a href="{{url('FormsDownload')}}">
                <i class="icon-padnote"></i>Forms
            </a>
        </li>

        <li>
            <a href="{{url('surveyhome')}}">
                <i class="icon-padnote"></i>Survey
            </a>
        </li>

        <li>
            <a href="{{url('create_question')}}">
                <i class="icon-padnote"></i>Create question
            </a>
        </li>

        <li>
            <a href="{{ route('survey.create') }}">
                <i class="icon-plus"></i> Create Survey
            </a>
        </li>

        <li>
            <a href="{{ route('survey.index') }}">
                <i class="icon-list"></i> Manage Surveys
            </a>
        </li>

    </ul>

</nav>