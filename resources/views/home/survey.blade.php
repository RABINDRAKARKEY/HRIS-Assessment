<style>
    /* .container {
        width: 80%;
        margin: 0 auto;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    } */

    /* .blog_taital {
        text-align: center;
        margin-bottom: 20px;
    } */

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

<div class="container">
    <h1 class="blog_taital">See Survey</h1>

    <form id="survey-form">
        <table class="survey-table">
            <tr>
                <th>Survey Question</th>
                <th>Response</th>
            </tr>
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
            <tr>
                <td>Work-Life Balance</td>
                <td>
                    <select name="work_life_balance">
                        <option value="Excellent">Excellent</option>
                        <option value="Good">Good</option>
                        <option value="Fair">Fair</option>
                        <option value="Poor">Poor</option>
                        <option value="Very Poor">Very Poor</option>
                        <option value="Other">Other</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Company Culture</td>
                <td>
                    <select name="company_culture">
                        <option value="Very Positive">Very Positive</option>
                        <option value="Positive">Positive</option>
                        <option value="Neutral">Neutral</option>
                        <option value="Negative">Negative</option>
                        <option value="Very Negative">Very Negative</option>
                        <option value="Other">Other</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Career Growth</td>
                <td>
                    <select name="career_growth">
                        <option value="Yes, definitely">Yes, definitely</option>
                        <option value="Yes, somewhat">Yes, somewhat</option>
                        <option value="Not sure">Not sure</option>
                        <option value="No, not really">No, not really</option>
                        <option value="No, not at all">No, not at all</option>
                        <option value="Other">Other</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Management Support</td>
                <td>
                    <select name="management_support">
                        <option value="Very Supported">Very Supported</option>
                        <option value="Supported">Supported</option>
                        <option value="Neutral">Neutral</option>
                        <option value="Unsupported">Unsupported</option>
                        <option value="Very Unsupported">Very Unsupported</option>
                        <option value="Other">Other</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Communication</td>
                <td>
                    <select name="communication">
                        <option value="Very Effective">Very Effective</option>
                        <option value="Effective">Effective</option>
                        <option value="Neutral">Neutral</option>
                        <option value="Ineffective">Ineffective</option>
                        <option value="Very Ineffective">Very Ineffective</option>
                        <option value="Other">Other</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Work Environment</td>
                <td>
                    <select name="work_environment">
                        <option value="Excellent">Excellent</option>
                        <option value="Good">Good</option>
                        <option value="Fair">Fair</option>
                        <option value="Poor">Poor</option>
                        <option value="Very Poor">Very Poor</option>
                        <option value="Other">Other</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Recognition and Reward</td>
                <td>
                    <select name="recognition_reward">
                        <option value="Always">Always</option>
                        <option value="Sometimes">Sometimes</option>
                        <option value="Never">Never</option>
                        <option value="Other">Other</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Stress Levels</td>
                <td>
                    <select name="stress_levels">
                        <option value="Very High">Very High</option>
                        <option value="High">High</option>
                        <option value="Moderate">Moderate</option>
                        <option value="Low">Low</option>
                        <option value="Very Low">Very Low</option>
                        <option value="Other">Other</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Overall Satisfaction</td>
                <td>
                    <select name="overall_satisfaction">
                        <option value="Very Satisfied">Very Satisfied</option>
                        <option value="Satisfied">Satisfied</option>
                        <option value="Neutral">Neutral</option>
                        <option value="Dissatisfied">Dissatisfied</option>
                        <option value="Very Dissatisfied">Very Dissatisfied</option>
                        <option value="Other">Other</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Additional Feedback</td>
                <td>
                    <textarea name="additional_feedback" rows="4" cols="50" placeholder="Enter your feedback"></textarea>
                </td>
            </tr>
        </table>
        <button type="submit" class="btn-submit">Submit</button>
        <button type="button" id="download-btn" class="btn-download">Download Report</button>
    </form>
</div>