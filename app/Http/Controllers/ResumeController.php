<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use App\Http\Requests\StoreResumeRequest;
use App\Http\Requests\UpdateResumeRequest;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     */

    
    public function index()
    {

        $resumes = Resume::all();
    return view('resume.index', ['resumes' => $resumes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreResumeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreResumeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function show(Resume $resume)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function edit(Resume $resume)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateResumeRequest  $request
     * @param  \App\Models\Resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateResumeRequest $request, Resume $resume)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resume $resume)
    {
        //
    }

    public function download(Request $request, $filename)
    {
        $file = storage_path('app/public/uploads/' . $filename);
        $headers = array(
            'Content-Type: application/pdf',
        );
        return Response::download($file, $filename, $headers);
    }

    public function downloadResume(Request $request, $id)
{
    $resume = Resume::find($id);
    $filepath = $resume->filepath;
    $filename = $resume->filename;
    $headers = array(
        'Content-Type: application/pdf',
    );
    return response()->download($filepath, $filename, $headers);
}

public function showResume(Request $request, $id)
{
    $resume = Resume::find($id);
    return view('resume', ['resume' => $resume]);
}

}
