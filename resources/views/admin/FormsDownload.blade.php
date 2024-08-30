<!DOCTYPE html>
<html>

<head>
    <style>
        .survey-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .survey-table th,
        .survey-table td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        .survey-table th {
            background-color: #f0f0f0;
        }

        .survey-table select,
        .survey-table textarea {
            width: 100%;
            padding: 5px;
            margin: 0;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        .btn-submit,
        .btn-download {
            display: inline-block;
            padding: 10px 20px;
            margin-right: 10px;
            font-size: 16px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
        }

        .btn-submit:hover,
        .btn-download:hover {
            background-color: #0056b3;
        }
    </style>

    @include('admin.css')
</head>

<body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">

        <!-- Sidebar Navigation-->
        @include('admin.sidebar')
        <!-- Sidebar Navigation end-->

        <div class="page-content">
            <div class="container">
                <h1 class="blog_taital">See Survey</h1>

                <form id="survey-form">
                    <table class="survey-table">
                        <tr>
                            <th>Survey Question</th>
                            <th>Response</th>
                        </tr>
                        <!-- Add your survey questions here -->
                        <tr>
                            <td>Job Satisfaction</td>
                            <td>
                                <select name="job_satisfaction">
                                    <option value="Very Satisfied">Very Satisfied</option>
                                    <option value="Satisfied">Satisfied</option>
                                    <option value="Neutral">Neutral</option>
                                    <option value="Dissatisfied">Dissatisfied</option>
                                    <option value="Very Dissatisfied">Very Dissatisfied</option>
                                    <option value="Other">Other</option>
                                </select>
                            </td>
                        </tr>
                        <!-- Add other questions similarly -->
                        <tr>
                            <td>Additional Feedback</td>
                            <td>
                                <textarea name="additional_feedback" rows="4" cols="50" placeholder="Enter your feedback"></textarea>
                            </td>
                        </tr>
                    </table>
                    <button type="button" id="publish-btn" class="btn-download">Publish Survey</button>
                </form>
            </div>
        </div>

        @include('admin.footer')

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const form = document.getElementById('survey-form');
                const publishBtn = document.getElementById('publish-btn');

                function submitSurveyData() {
                    const formData = new FormData(form);

                    fetch('/submit-survey', {
                            method: 'POST',
                            body: formData,
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                            }
                        })
                        .then(response => response.json())
                        .then(data => {
                            console.log('Success:', data);
                            alert('Survey data published successfully!');
                        })
                        .catch(error => {
                            console.error('Error:', error);
                        });
                }

                publishBtn.addEventListener('click', function() {
                    submitSurveyData();
                });
            });
        </script>
    </div>
</body>

</html>