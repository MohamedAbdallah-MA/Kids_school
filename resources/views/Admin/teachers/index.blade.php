@include('Admin.assets.navbar')

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="container">
                <div class="container">



                    <div class="row layout-top-spacing">
                        <div id="tableSimple" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Teachers Table</h4>
                                            <a href="{{route('admin.teacher.create')}}" class="btn btn-primary">Add New Teacher</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-4">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Description</th>
                                                    <th>Image</th>
                                                    <th>Course</th>
                                                    <th>Delete</th>
                                                    <th>Edit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($teachers as $teacher)
                                                <tr>
                                                    <td>{{$teacher->name}}</td>
                                                    <td>{{$teacher->description}}</td>
                                                    <td><img width="75px" height="75px" src="{{asset($teacher->image)}}"></td>
                                                    <td>{{$teacher->getCourseName($teacher->course_id)}}</td>
                                                    <td class="text-center">
                                                        <form method="post" action="{{route('admin.teacher.delete')}}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <input type="hidden" name="teacherId" value="{{$teacher->id}}">
                                                            <button class="badge outline-badge-danger">Delete</button>
                                                        </form>
                                                    </td>
                                                    <td>
                                                        <a class="badge outline-badge-primary" href="{{route('admin.teacher.edit', $teacher->id)}}">Edit</a>
                                                    </td>
                                                </tr>
                                            @endforeach


                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>



                    </div>

                </div>
            </div>
        </div>
        <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->
@include('Admin.assets.footer')
