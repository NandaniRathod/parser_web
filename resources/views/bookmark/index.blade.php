@extends('layouts.app1')
@section('content')
<div id="content">
    <div class="content-admin-main">

        <div class="wt-admin-right-page-header clearfix">
            {{-- <h2>Candidates</h2> --}}
            <div class="breadcrumbs"><a href="#">Home</a><a href="#">Dasboard</a><span>Bookmark Resume</span></div>
        </div>
       

        <div class="twm-pro-view-chart-wrap">

            <div class="col-lg-12 col-md-12 mb-4">
                <div class="panel panel-default site-bg-white m-t30">
                    <div class="panel-heading wt-panel-heading p-a20">
                        <h4 class="panel-tittle m-a0"><i class="far fa-list-alt"></i></h4>
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
                                    <!--add here table body-->
                                   


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