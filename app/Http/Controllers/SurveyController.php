<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use App\Models\Question;
use App\Models\Response;
use Illuminate\Http\Request;
use App\Models\QuestionOption;
// use App\Models\Survey;
// use App\Models\Question;
// use Illuminate\Http\Request;

class SurveyController extends Controller
{
    // public function createSurvey(Request $request)
    // {
    //     $request->validate([
    //         'title' => 'required|string|max:255',
    //         'description' => 'nullable|string',
    //         'status' => 'required|in:active,inactive',
    //     ]);

    //     $survey = Survey::create([
    //         'title' => $request->title,
    //         'description' => $request->description,
    //         'status' => $request->status,
    //     ]);

    //     return redirect()->route('survey.edit', $survey->id)->with('success', 'Survey created successfully!');
    // }

    // public function editSurvey(Survey $survey)
    // {
    //     return view('admin.survey.edit', compact('survey'));
    // }

    // public function updateSurvey(Request $request, Survey $survey)
    // {
    //     $request->validate([
    //         'title' => 'required|string|max:255',
    //         'description' => 'nullable|string',
    //         'status' => 'required|in:active,inactive',
    //     ]);

    //     $survey->update($request->all());

    //     return redirect()->back()->with('success', 'Survey updated successfully!');
    // }

    // public function deleteSurvey(Survey $survey)
    // {
    //     $survey->delete();

    //     return redirect()->route('survey.index')->with('success', 'Survey deleted successfully!');
    // }

    public function showSurveys()
    {
        $surveys = Survey::all();
        return view('admin.survey.index', compact('surveys'));
    }

    // public function addQuestion(Survey $survey)
    // {
    //     return view('admin.survey.question.create', compact('survey'));
    // }

    // public function storeQuestion(Request $request, Survey $survey)
    // {
    //     $request->validate([
    //         'text' => 'required|string',
    //         'question_type' => 'required|in:text,multiple_choice,checkbox,radio',
    //     ]);

    //     $question = $survey->questions()->create([
    //         'text' => $request->text,
    //         'question_type' => $request->question_type,
    //     ]);

    //     return redirect()->route('survey.question.edit', [$survey->id, $question->id])->with('success', 'Question added successfully!');
    // }

    public function editQuestion(Survey $survey, Question $question)
    {
        return view('admin.survey.question.edit', compact('survey', 'question'));
    }

    public function updateQuestion(Request $request, Survey $survey, Question $question)
    {
        $request->validate([
            'text' => 'required|string',
            'question_type' => 'required|in:text,multiple_choice,checkbox,radio',
        ]);

        $question->update($request->all());

        return redirect()->route('survey.question.edit', [$survey->id, $question->id])->with('success', 'Question updated successfully!');
    }

    public function deleteQuestion(Survey $survey, Question $question)
    {
        $question->delete();

        return redirect()->back()->with('success', 'Question deleted successfully!');
    }

    public function takeSurvey(Survey $survey)
    {
        return view('survey.take', compact('survey'));
    }

    public function submitSurvey(Request $request, Survey $survey)
    {
        $request->validate([
            'responses.*' => 'required',
        ]);

        $responses = $request->input('responses');

        foreach ($responses as $questionId => $response) {
            Response::create([
                'survey_id' => $survey->id,
                'question_id' => $questionId,
                'response' => $response,
            ]);
        }

        return redirect()->route('survey.thank-you', $survey->id)->with('success', 'Survey submitted successfully!');
    }

    public function thankYou(Survey $survey)
    {
        return view('survey.thank-you', compact('survey'));
    }



    public function createSurvey()
    {
        return view('admin.create');
    }

    public function storeSurvey(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:active,inactive',
        ]);

        $survey = Survey::create([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
        ]);

        return redirect()->route('survey.edit', $survey->id)->with('success', 'Survey created successfully!');
    }

    public function editSurvey(Survey $survey)
    {
        return view('admin.survey.edit', compact('survey'));
    }

    public function updateSurvey(Request $request, Survey $survey)
    {
        // ... (same as before)
    }

    public function deleteSurvey(Survey $survey)
    {
        // ... (same as before)
    }

    // public function addQuestion(Survey $survey)
    // {
    //     return view('admin.survey.question.create', compact('survey'));
    // }

    // public function storeQuestion(Request $request, Survey $survey)
    // {
    //     $request->validate([
    //         'text' => 'required|string',
    //         'question_type' => 'required|in:text,multiple_choice,checkbox,radio',
    //     ]);

    //     $question = $survey->questions()->create([
    //         'text' => $request->text,
    //         'question_type' => $request->question_type,
    //     ]);

    //     // Handle question options based on the question type
    //     if ($request->has('options')) {
    //         foreach ($request->input('options') as $option) {
    //             $question->options()->create([
    //                 'text' => $option,
    //             ]);
    //         }
    //     }

    //     return redirect()->route('survey.question.edit', [$survey->id, $question->id])->with('success', 'Question added successfully!');
    // }


    public function addQuestion(Survey $survey)
    {
        return view('admin.question.create', compact('survey'));
    }

    public function showQuestions(Request $request, Survey $survey)
    {
        // ... (validation and question creation)

        if ($request->question_type === 'multiple_choice') {
            // Handle multiple choice options
            $request->validate([
                'options.*' => 'required|string',
            ]);

            foreach ($request->input('options') as $option) {
                $question->options()->create([
                    'text' => $option,
                ]);
            }
        }

        // ... (rest of the method)
    }
}
