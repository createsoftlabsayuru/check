<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Job Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link href="{{asset('css/admin/Add-job.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h5 class="mt-5 underline-heading">Add new job</h5>
        <div class="form-container">
            <form>
                <button type="button" class="btn mb-4 bck" onclick="history.back()"><img src="{{asset('images/img_weuiarrowfilled.svg') }}"
                        alt=""></button>
                <div class="form-group mb-5">
                    <div class="floating-label">
                        <label for="jobTitle" class="form-label">Job title</label>
                        <input type="text" class="form-control" id="jobTitle">
                    </div>
                </div>

                <div class="row g-3">
                    <div class="col">
                        <div class="form-group">
                            <div class="floating-label">
                                <label for="jobField" class="form-label">Job field</label>
                                <input type="text" class="form-control" id="jobField">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group mb-5">
                            <div class="floating-label">
                                <label for="jobType" class="form-label">Job type</label>
                                <input type="text" class="form-control" id="jobType">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group mb-5">
                    <div class="floating-label">
                        <label for="jobDescription" class="form-label">Job description</label>
                        <textarea class="form-control" id="jobDescription"></textarea>
                    </div>
                </div>

                <div class="my-3 mb-5">
                    <div class="floating-label">
                        <label class="quill-label">Key responsibility</label>
                        <div class="quill-wrapper">
                            <div id="editor2" class="quill-container"></div>
                        </div>
                    </div>
                </div>

                <div class="my-3 mb-5">
                    <div class="floating-label">
                        <label class="quill-label">Qualifications</label>
                        <div class="quill-wrapper">
                            <div id="editor3" class="quill-container"></div>
                        </div>
                    </div>
                </div>

                <div class="my-3 mb-4">
                    <div class="floating-label">
                        <label class="quill-label">Benifits</label>
                        <div class="quill-wrapper">
                            <div id="editor4" class="quill-container"></div>
                        </div>
                    </div>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn text-white px-4 btn-primary-custom">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
    <script>
        const quill2 = new Quill('#editor2', { theme: 'snow' });
        const quill3 = new Quill('#editor3', { theme: 'snow' });
        const quill4 = new Quill('#editor4', { theme: 'snow' });
    </script>
</body>

</html>