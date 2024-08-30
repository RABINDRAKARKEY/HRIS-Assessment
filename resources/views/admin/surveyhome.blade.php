<!-- <h1>Survey Questions</h1>

<form action="{{ route('survey.response') }}" method="POST">
    @csrf
    @foreach ($questions as $question)
    <div>
        <label>{{ $question->text }}</label>
        <input type="hidden" name="question_id" value="{{ $question->id }}">
        <input type="text" name="response_text" required>
    </div>
    @endforeach
    <button type="submit">Submit Responses</button>
</form> -->


<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
    <style>
        form {
            display: flex;
            flex-direction: column;
        }

        form div {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #007bff;
            color: white;
            /* width:100px; */
            width: auto;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
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
        <div class="page-content">
            <h1>Survey Questions</h1>

            <form action="{{ route('survey.response') }}" method="POST">
                @csrf
                <!-- @foreach ($questions as $question) -->
                <div>
                    <label>{{ $question->text }}</label>
                    <input type="hidden" name="question_id" value="{{ $question->id }}">
                    <input type="text" name="response_text" required>
                </div>
                <!-- @endforeach -->
                <button type="submit">Submit Responses</button>
            </form>
        </div>
        <!-- Body code starts from here -->

        @include('admin.footer')
</body>

</html>