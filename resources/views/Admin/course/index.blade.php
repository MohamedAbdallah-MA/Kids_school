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
                                            <h4>Courses Table</h4>
                                            <a href="{{route('admin.course.create')}}" class="btn btn-primary">Add New Course</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-4">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Price</th>
                                                    <th>Description</th>
                                                    <th>Image</th>
                                                    <th>Delete</th>
                                                    <th>Edit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($courses as $course)
                                                <tr>
                                                    <td>{{$course->name}}</td>
                                                    <td>{{$course->price}}</td>
                                                    <td>{{$course->description}}</td>
                                                    <td><img width="75px" height="75px" src="{{asset($course->image)}}"></td>
                                                    <td class="text-center">
                                                        <form method="post" action="{{route('admin.course.delete')}}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <input type="hidden" name="courseId" value="{{$course->id}}">
                                                            <button class="badge outline-badge-danger">Delete</button>
                                                        </form>
                                                    </td>
                                                    <td>
                                                        <a class="badge outline-badge-primary" href="{{route('admin.course.edit' , $course->id )}}">Edit</a>
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
