@extends('layouts.app1')
@section('content')
<div id="content">
    <div class="content-admin-main">

        <div class="wt-admin-right-page-header clearfix">
            {{-- <h2>Candidates</h2> --}}
            <div class="breadcrumbs"><a href="#">Home</a><a href="#">Dasboard</a><span>Candidates</span></div>
        </div>
        

        <div class="twm-pro-view-chart-wrap">

            <div class="col-lg-12 col-md-12 mb-4">
                <div class="panel panel-default site-bg-white m-t30">
                    <div class="panel-heading wt-panel-heading p-a20">
                        <h4 class="panel-tittle m-a0"><i class="far fa-list-alt"></i>All Candidates</h4>
                    </div>
                    <div class="panel-body wt-panel-body">
                        <div class="twm-D_table p-a20 table-responsive">
                            <table id="candidate_data_table" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" onclick="checkAll(this)"></th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Skills</th>
                                        <th>Designition</th>
                                        <th>Bookmark</th>
                                        <th>Action</th>
                                       

                                    </tr>
                                </thead>
                                <tbody>
                                    <!--1-->
                                    @foreach($resumes as $resume)
                                    <tr>
                                        <td><input type="checkbox" ></td>
                                        <td>
                                            <div class="twm-DT-candidates-list">

                                                <div class="twm-mid-content">
                                                    <a href="#" class="twm-job-title">
                                                        <h4>{{$resume->name}} </h4>
                                                        {{-- <p class="twm-candidate-address">
                                                            <i class="feather-map-pin"></i>New York
                                                        </p> --}}
                                                    </a>

                                                </div>
                                             

                                            </div>
                                        </td>
                                        <td>{{$resume->email}}</td>
                                        <td>{{$resume->phone}}</td>
                                        <td><div class="skills">
                                            <div class="visible-skills">{{$resume->skills}}</div>
                                            {{-- <div class="hidden-skills" style="display:none;"></div>
                                            <button id="show-more-btn" class="btn btn-primary">Show more</button> --}}
                                            
                                          </div>
                                          {{-- <script>
                                                $(document).ready(function() {
                                                var skillsList = "Skill 1, Skill 2, Skill 3, Skill 4, Skill 5, Skill 6, Skill 7, Skill 8";
                                                var skillsArray = skillsList.split(", ");
                                                var visibleSkills = skillsArray.slice(0, 3);
                                                var hiddenSkills = skillsArray.slice(3);

                                                $.each(visibleSkills, function(index, value) {
                                                $('.visible-skills').append('<div class="skill">' + value + '</div>');
                                                });

                                                $.each(hiddenSkills, function(index, value) {
                                                $('.hidden-skills').append('<div class="skill">' + value + '</div>');
                                                });

                                                $('#show-more-btn').on('click', function() {
                                                $('.hidden-skills > .skill').slideToggle();
                                                $(this).text(function(i, text){
                                                return text === "Show more" ? "Show less" : "Show more";
                                                });
                                                });
                                                });

                                            </script> --}}
                                          
                                        </td>
                                        <td>{{$resume->designition}}</td>
                                        <td><div class="twm-jobs-category"><span class="fa fa-eye"></span></div></td>
                                        <td>
                                            <div class="twm-table-controls">
                                                <ul class="twm-DT-controls-icon list-unstyled">
                                                    <li>
                                                        
                                                        <button title="View profile" data-bs-toggle="tooltip" data-bs-placement="top">
                                                            <span class="fa fa-eye">
                                                         
                                                            <div>
                                                                
                                                                {{-- <a href="{{ route('resume.download', ['filename' => $resume->filename]) }}">Download</a> --}}
                                                            </div>

                                                        </span>


                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button title="Download CV" data-bs-toggle="tooltip" data-bs-placement="top">
                                                            <span class="fa fa-download"></span>
                                                        </button>
                                                    </li>
                                                    <li><form action="{{ route('resume.destroy', $resume->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button title="Delete" type="submit" data-bs-toggle="tooltip" data-bs-placement="top">
                                                            <span class="far fa-trash-alt"></span>
                                                        </button>
                                                    {{-- </form>
                                                        <form action="{{ route('resume.destroy', $resume->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit">Delete Resume</button>
                                                        </form> --}}
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>

                                        

                                    </tr>
                                    @endforeach


                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Skills</th>
                                        <th>Designition</th>
                                        
                                        <th>Bookmark</th>
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>




    </div>

</div>
@endsection