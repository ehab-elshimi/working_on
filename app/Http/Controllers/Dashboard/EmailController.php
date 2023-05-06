<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Traits\HttpResponses;
use App\Services\EmailService;
use App\Http\Controllers\Controller;
use App\Models\Emails;
use Illuminate\Support\Facades\Validator;

class EmailController extends Controller
{
    use HttpResponses;
    protected EmailService $emailService;
    protected $model;

    public function __construct(EmailService $emailService)
    {
        $this->emailService = $emailService;
        $this->model = new Emails();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $emails = $this->emailService->retrieve($this->model);
        return view('dashboard.pages.emails.index', compact('emails'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validation the request
        $validator =  Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (!$validator->fails()) {
            return redirect()->back()->with('error','error in create email');
        }

        // store the email
        $this->emailService->store($this->model, $request->toArray());

        return redirect()->route('dashboard.emails.index')->with('success','email created successfully');
    }
    /**
     * Display the specified resource.
     */
    public function show(Emails $email)
    {
        $email = $this->emailService->show($this->model, $email->id);
        return view('dashboard.pages.emails.show', compact('email'));
    }
    /**
     * Display the specified resource.
     */
    public function edit(Emails $email)
    {
        $emailData = $this->emailService->show($this->model, $email->id);
        return view('dashboard.pages.emails.edit', compact('emailData'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Emails $email)
    {
         // validation the request
         $validator =  Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (!$validator->fails()) {
            return redirect()->back()->with('error','error in create email');
        }

        // update the email
        $this->emailService->update($this->model,$email->id, $request->all());

        return redirect()->route('dashboard.emails.index')->with('success','email created successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Emails $email)
    {
        $deleteemail = $this->emailService->delete($this->model, $email->id);

        if (!$deleteemail) {
            return $this->success(null, "email Deleted Successfully", 200);
        }
    }
}
