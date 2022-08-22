<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Validation\Rule;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse;

class JobController extends Controller
{
    public function index(): View
    {
        return view('jobs.index', [
            'jobs' => Job::latest()->filter(request(['tag', 'search']))->paginate(6)
        ]);
    }

    public function show(Job $job): View
    {
        return view('jobs.show', [
            'job' => $job
        ]);
    }

    public function create(): View
    {
        return view('jobs.create');
    }

    public function store(Request $request): Redirector
    {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('jobs', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);


        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $formFields['user_id'] = auth()->id();

        Job::create($formFields);

        return redirect('/')->with('message', 'Job created successfully');
    }

    public function edit(Job $job): View
    {
        return view('jobs.edit', ['job' => $job]);
    }

    public function update(Request $request, Job $job): RedirectResponse
    {
        if ($job->user_id != auth()->id()){
            abort(403, 'Unauthorized');
        }

        $formFields = $request->validate([
            'title' => 'required',
            'company' => 'required',
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);


        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $job->update($formFields);

        return back()->with('message', 'Job updated successfully');
    }

    public function destroy(Job $job): Redirector
    {
        $job->delete();
        return redirect('/')->with('message', 'Job deleted successfully');
    }

    public function manage(): View
    {
        return view('jobs.manage', ['jobs' => auth()->user()->job()->get()]);
    }

}
