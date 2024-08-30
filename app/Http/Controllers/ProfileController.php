<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    // In your PostController.php

    public function showPosts()
    {
        $posts = Post::all();
        return view('service', compact('posts'));
    }
    // In your PostController.php

    public function deletePost($id)
    {
        $post = Post::findOrFail($id);
        if ($post->image) {
            File::delete(public_path('postimage/' . $post->image));
        }
        $post->delete();
        return redirect()->back()->with('message', 'Survey deleted successfully!');
    }
    // In your PostController.php

    public function addPost(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->usertype = auth()->user()->usertype; // Example of getting the user type

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('postimage'), $imageName);
            $post->image = $imageName;
        }

        $post->save();

        return redirect()->back()->with('message', 'Survey added successfully!');
    }
}
