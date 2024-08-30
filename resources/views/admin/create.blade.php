<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
</head>

<body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">

        <!-- Sidebar Navigation-->
        @include('admin.sidebar')
        <!-- Sidebar Navigation end-->

        <!-- Body code starts from here -->
        <div class="page-content">
            <div class="page-content">
                <h1>Create Survey Question</h1>

                <form action="{{ route('admin.survey.store') }}" method="POST">
                    @csrf
                    <div>
                        <label for="question_text">Question Text</label>
                        <input type="text" name="question_text" required>
                    </div>

                    <div>
                        <label for="question_type">Question Type</label>
                        <select name="question_type" required>
                            <option value="text">Text</option>
                            <option value="multiple_choice">Multiple Choice</option>
                        </select>
                    </div>

                    <button type="submit">Add Question</button>
                </form>
            </div>
        </div>
        <!-- Body code starts from here -->

        @include('admin.footer')
</body>

</html>