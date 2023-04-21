@extends('layouts.master')
@section('content')
   {{-- <!-- Basic -->
   <div class="block block-rounded">
    <div class="block-content block-content-full">
            <div class="row push">
                    <div class="col-lg-5 col-xl-5">
                        <form action="be_forms_elements.html" style="width: 100%" method="POST" enctype="multipart/form-data" onsubmit="return false;">

                        <div class="form-group">
                            <label for="example-text-input">Text</label>
                            <input type="text" class="form-control" id="example-text-input" name="example-text-input" placeholder="Text Input">
                        </div>
                        <div class="form-group">
                            <label for="example-email-input">Email</label>
                            <input type="email" class="form-control" id="example-email-input" name="example-email-input" placeholder="Emai Input">
                        </div>
                        <div class="form-group">
                            <label for="example-password-input">Password</label>
                            <input type="password" class="form-control" id="example-password-input" name="example-password-input" placeholder="Password Input">
                        </div>
                        <div class="form-group">
                            <label for="example-textarea-input">Textarea</label>
                            <textarea class="form-control" id="example-textarea-input" name="example-textarea-input" rows="4" placeholder="Textarea content.."></textarea>
                        </div>
                    </form>
                    </div>

                <div class="col-lg-2 col-xl-2" style="display: flex;justify-content: center;width: 20px">
                    <h1 class="block-title bg-primary" style="height: 100%;"></h1>
                </div>
                <div class="col-lg-5 col-xl-5">
                    <form action="be_forms_elements.html" style="width: 100%" method="POST" enctype="multipart/form-data" onsubmit="return false;">

                        <div class="form-group">
                            <label for="example-text-input">Text</label>
                            <input type="text" class="form-control" id="example-text-input" name="example-text-input" placeholder="Text Input">
                        </div>
                        <div class="form-group">
                            <label for="example-email-input">Email</label>
                            <input type="email" class="form-control" id="example-email-input" name="example-email-input" placeholder="Emai Input">
                        </div>
                        <div class="form-group">
                            <label for="example-password-input">Password</label>
                            <input type="password" class="form-control" id="example-password-input" name="example-password-input" placeholder="Password Input">
                        </div>
                        <div class="form-group">
                            <label for="example-textarea-input">Textarea</label>
                            <textarea class="form-control" id="example-textarea-input" name="example-textarea-input" rows="4" placeholder="Textarea content.."></textarea>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row push">
                <div class="col-lg-2">
                    <p class="font-size-sm text-muted">
                        Browser’s default select boxes, showcasing both simple and multiple selections
                    </p>
                </div>
                <div class="col-lg-10 col-xl-5">
                    <div class="form-group">
                        <label for="example-select">Select</label>
                        <select class="form-control" id="example-select" name="example-select">
                            <option value="0">Please select</option>
                            <option value="1">Option #1</option>
                            <option value="2">Option #2</option>
                            <option value="3">Option #3</option>
                            <option value="4">Option #4</option>
                            <option value="5">Option #5</option>
                            <option value="6">Option #6</option>
                            <option value="7">Option #7</option>
                            <option value="8">Option #8</option>
                            <option value="9">Option #9</option>
                            <option value="10">Option #10</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="example-select-multiple">Multiple Select</label>
                        <select class="form-control" id="example-select-multiple" name="example-select-multiple" size="5" multiple>
                            <option value="1">Option #1</option>
                            <option value="2">Option #2</option>
                            <option value="3">Option #3</option>
                            <option value="4">Option #4</option>
                            <option value="5">Option #5</option>
                            <option value="6">Option #6</option>
                            <option value="7">Option #7</option>
                            <option value="8">Option #8</option>
                            <option value="9">Option #9</option>
                            <option value="10">Option #10</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row push">
                <div class="col-lg-4">
                    <p class="font-size-sm text-muted">
                        Browser’s default checkboxes and radios in various layouts
                    </p>
                </div>
                <div class="col-lg-8 col-xl-5">
                    <div class="form-group">
                        <label>Checkboxes</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="example-checkbox-default1" name="example-checkbox-default1">
                            <label class="form-check-label" for="example-checkbox-default1">Option 1</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="example-checkbox-default2" name="example-checkbox-default2">
                            <label class="form-check-label" for="example-checkbox-default2">Option 2</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="example-checkbox-default3" name="example-checkbox-default3" disabled>
                            <label class="form-check-label" for="example-checkbox-default3">Option 3</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="d-block">Inline Checkboxes</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" value="" id="example-checkbox-inline1" name="example-checkbox-inline1">
                            <label class="form-check-label" for="example-checkbox-inline1">Option 1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" value="" id="example-checkbox-inline2" name="example-checkbox-inline2">
                            <label class="form-check-label" for="example-checkbox-inline2">Option 2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" value="" id="example-checkbox-inline3" name="example-checkbox-inline3" disabled>
                            <label class="form-check-label" for="example-checkbox-inline3">Option 3</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Radios</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="example-radios-default1" name="example-radios-default" value="option1" checked>
                            <label class="form-check-label" for="example-radios-default1">Option 1</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="example-radios-default2" name="example-radios-default" value="option2">
                            <label class="form-check-label" for="example-radios-default2">Option 2</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="example-radios-default3" name="example-radios-default" value="option2" disabled>
                            <label class="form-check-label" for="example-radios-default3">Option 3</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="d-block">Inline Radios</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="example-radios-inline1" name="example-radios-inline" value="option1" checked>
                            <label class="form-check-label" for="example-radios-inline1">Option 1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="example-radios-inline2" name="example-radios-inline" value="option2">
                            <label class="form-check-label" for="example-radios-inline2">Option 2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="example-radios-inline3" name="example-radios-inline" value="option2" disabled>
                            <label class="form-check-label" for="example-radios-inline3">Option 3</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row push">
                <div class="col-lg-4">
                    <p class="font-size-sm text-muted">
                        Browser’s default file inputs, showcasing both single and multiple files
                    </p>
                </div>
                <div class="col-lg-8 col-xl-5 overflow-hidden">
                    <div class="form-group">
                        <label class="d-block" for="example-file-input">File Input</label>
                        <input type="file" id="example-file-input" name="example-file-input">
                    </div>
                    <div class="form-group">
                        <label class="d-block" for="example-file-input-multiple">File Input (Multiple)</label>
                        <input type="file" id="example-file-input-multiple" name="example-file-input-multiple" multiple>
                    </div>
                </div>
            </div>
        </form>
    </div>

</div>
<!-- END Basic --> --}}
   <!-- Basic -->
   <div class="block block-rounded">
    <div class="block-header">
    </div>
    <div class="block-content block-content-full">
        <form action="{{route('dashboard.projects.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row push">
                <div class="col-lg-4">
                        <h1 class="block-title" >Devloper Information</h1>

                </div>
                <div class="col-lg-8 col-xl-5">
                    <div class="row">
                        <div class="form-group">
                            <label for="example-text-input">First Name</label>
                            <input type="text" class="form-control" id="example-text-input" name="first_name" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="example-email-input">Last Name</label>
                            <input type="text" class="form-control" id="example-text-input" name="last_name" placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="example-password-input">Formal Name</label>
                        <input type="text" class="form-control" id="example-text-input" name="formal_name" placeholder="Name Name Name Name">
                    </div>
                    <div class="form-group">
                        <label for="example-textarea-input">Email</label>
                        <input type="email" class="form-control" id="example-email-input" name="email" placeholder="email@email.com">
                    </div>
                    <div class="form-group">
                        <label for="example-textarea-input">Address</label>
                        <input type="text" class="form-control" id="example-text-input" name="address" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="example-textarea-input">Iframe</label>
                        <textarea class="form-control" id="example-textarea-input" name="iframe" rows="4" placeholder=""></textarea>
                    </div>
                    <div class="form-group">
                        <label for="example-textarea-input">Location Url</label>
                        <input type="text" class="form-control" id="example-text-input" name="location_url" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="example-textarea-input">Cv Link Drive</label>
                        <input type="text" class="form-control" id="example-text-input" name="cv_link_drive" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="example-textarea-input">Video Intro Url</label>
                        <input type="file" class="form-control" id="example-text-input" name="video_intro_url" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="example-textarea-input">Footer Message</label>
                        <textarea class="form-control" id="example-textarea-input" name="footer_message" rows="4" placeholder=""></textarea>
                    </div>
                    <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                    <div class="form-group">
                        <input type="submit" class="form-control bg-primary text-light" id="example-text-input" value="save">
                    </div>
                </div>
            </div>
            {{-- <div class="row push">
                <div class="col-lg-4">
                    <p class="font-size-sm text-muted">
                        Browser’s default select boxes, showcasing both simple and multiple selections
                    </p>
                </div>
                <div class="col-lg-8 col-xl-5">
                    <div class="form-group">
                        <label for="example-select">Select</label>
                        <select class="form-control" id="example-select" name="example-select">
                            <option value="0">Please select</option>
                            <option value="1">Option #1</option>
                            <option value="2">Option #2</option>
                            <option value="3">Option #3</option>
                            <option value="4">Option #4</option>
                            <option value="5">Option #5</option>
                            <option value="6">Option #6</option>
                            <option value="7">Option #7</option>
                            <option value="8">Option #8</option>
                            <option value="9">Option #9</option>
                            <option value="10">Option #10</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="example-select-multiple">Multiple Select</label>
                        <select class="form-control" id="example-select-multiple" name="example-select-multiple" size="5" multiple>
                            <option value="1">Option #1</option>
                            <option value="2">Option #2</option>
                            <option value="3">Option #3</option>
                            <option value="4">Option #4</option>
                            <option value="5">Option #5</option>
                            <option value="6">Option #6</option>
                            <option value="7">Option #7</option>
                            <option value="8">Option #8</option>
                            <option value="9">Option #9</option>
                            <option value="10">Option #10</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row push">
                <div class="col-lg-4">
                    <p class="font-size-sm text-muted">
                        Browser’s default checkboxes and radios in various layouts
                    </p>
                </div>
                <div class="col-lg-8 col-xl-5">
                    <div class="form-group">
                        <label>Checkboxes</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="example-checkbox-default1" name="example-checkbox-default1">
                            <label class="form-check-label" for="example-checkbox-default1">Option 1</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="example-checkbox-default2" name="example-checkbox-default2">
                            <label class="form-check-label" for="example-checkbox-default2">Option 2</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="example-checkbox-default3" name="example-checkbox-default3" disabled>
                            <label class="form-check-label" for="example-checkbox-default3">Option 3</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="d-block">Inline Checkboxes</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" value="" id="example-checkbox-inline1" name="example-checkbox-inline1">
                            <label class="form-check-label" for="example-checkbox-inline1">Option 1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" value="" id="example-checkbox-inline2" name="example-checkbox-inline2">
                            <label class="form-check-label" for="example-checkbox-inline2">Option 2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" value="" id="example-checkbox-inline3" name="example-checkbox-inline3" disabled>
                            <label class="form-check-label" for="example-checkbox-inline3">Option 3</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Radios</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="example-radios-default1" name="example-radios-default" value="option1" checked>
                            <label class="form-check-label" for="example-radios-default1">Option 1</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="example-radios-default2" name="example-radios-default" value="option2">
                            <label class="form-check-label" for="example-radios-default2">Option 2</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="example-radios-default3" name="example-radios-default" value="option2" disabled>
                            <label class="form-check-label" for="example-radios-default3">Option 3</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="d-block">Inline Radios</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="example-radios-inline1" name="example-radios-inline" value="option1" checked>
                            <label class="form-check-label" for="example-radios-inline1">Option 1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="example-radios-inline2" name="example-radios-inline" value="option2">
                            <label class="form-check-label" for="example-radios-inline2">Option 2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="example-radios-inline3" name="example-radios-inline" value="option2" disabled>
                            <label class="form-check-label" for="example-radios-inline3">Option 3</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row push">
                <div class="col-lg-4">
                    <p class="font-size-sm text-muted">
                        Browser’s default file inputs, showcasing both single and multiple files
                    </p>
                </div>
                <div class="col-lg-8 col-xl-5 overflow-hidden">
                    <div class="form-group">
                        <label class="d-block" for="example-file-input">File Input</label>
                        <input type="file" id="example-file-input" name="example-file-input">
                    </div>
                    <div class="form-group">
                        <label class="d-block" for="example-file-input-multiple">File Input (Multiple)</label>
                        <input type="file" id="example-file-input-multiple" name="example-file-input-multiple" multiple>
                    </div>
                </div>
            </div> --}}
        </form>
    </div>
</div>
<!-- END Basic -->
@endsection
