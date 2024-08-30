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
            <h1>Edit Survey Question</h1>

            <form action="{{ route('admin.survey.update', $question->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div>
                    <label for="question_text">Question Text</label>
                    <input type="text" name="question_text" value="{{ $question->question_text }}" required>
                </div>

                <div>
                    <label for="question_type">Question Type</label>
                    <select name="question_type" required>
                        <option value="text" {{ $question->question_type == 'text' ? 'selected' : '' }}>Text</option>
                        <option value="multiple_choice" {{ $question->question_type == 'multiple_choice' ? 'selected' : '' }}>Multiple Choice</option>
                    </select>
                </div>

                <button type="submit">Update Question</button>
            </form>
        </div>
        <!-- Body code starts from here -->

        @include('admin.footer')
</body>

</html>