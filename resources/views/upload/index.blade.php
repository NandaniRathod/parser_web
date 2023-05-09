@extends('layouts.app1')
@section('content')
<div id="content">
    <div class="content-admin-main">

             <!-- FOR EMPLOYEE START -->
             <div class="site-bg-white">
                <div class="container">

                    <div class="section-content">
                        <div class="row">

                            {{-- <div class="col-lg-5 col-md-12">
                                <div class="twm-explore-media-wrap">
                                    <div class="twm-media">
                                        <img src="{{ url_for('static', filename='images/boy-large.png') }}" alt="">
                                    </div>
                                </div>
                            </div> --}}

                            <div class="col-lg-12 col-md-12">
                                <div class="twm-explore-content-outer-3">

                                    <div class="twm-explore-content-1">
                                        {{-- <div class="twm-title-small site-text-primary">Explore New Technologies With Us</div> --}}
                                        <div class="twm-title-small site-text-secondary">
                                            <h3>Upload resumes here to parse</h3>
                                            <p></p>
                                        </div>
                                        <div class="twm-upload-file">
                                           
                                            
                                            <form id="upload-form twm-upload-file" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label for="employee-id">Employee ID:</label>
                                                    <input type="text" class="form-control" id="employee-id" value="1" name="employee_id" required>
                                                </div>
                                                <div class="form-group twm-upload-file">
                                                    <label for="resume-input">Upload Resumes:</label>
                                                    <input type="file" class="form-control-file" id="resume-input" name="resume[]" multiple>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </form>
                                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                                            <script>
                                               $(document).ready(function() {
                                                    $('#upload-form').submit(function(event) {
                                                        event.preventDefault();
                                                        var form = $('#upload-form')[0];
                                                        var data = new FormData(form);
                                                        data.append('_token', '{{ csrf_token() }}');
                                                        $.ajax({
                                                            url: 'http://localhost:5000/upload',
                                                            type: 'POST',
                                                            enctype: 'multipart/form-data',
                                                            data: data,
                                                            processData: false,
                                                            contentType: false,
                                                            success: function(response) {
                                                                console.log(response);
                                                            },
                                                            error: function(jqXHR, textStatus, errorThrown) {
                                                                console.log(textStatus, errorThrown);
                                                            }
                                                        });
                                                    });
                                                });

                                            </script>
                                              
                                            <br>
                                            <div id="progress-container" style="display: none;">
                                                <h3>Parsing resumes...</h3>
                                                <div id="progress-bar-container" style="width: 500px; border: 1px solid black; height: 20px;">
                                                    <div id="progress-bar" style="background-color: green; width: 0%; height: 100%;"></div>
                                                </div>
                                                <br>
                                                <div id="logs"></div>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="twm-l-line-1"></div>
                                    <div class="twm-l-line-2"></div>

                                </div>
                            </div>

                        </div>
                    </div>
                   
                </div>
            </div>
            <!-- FOR EMPLOYEE END -->



    </div>

</div>
@endsection