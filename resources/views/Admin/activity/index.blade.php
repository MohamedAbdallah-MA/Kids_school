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
                                            <h4>Activities Table</h4>
                                            <a href="{{route('admin.activity.create')}}" class="btn btn-primary">Add New Activity</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-4">
                                            <thead>
                                                <tr>
                                                    <th>Title</th>
                                                    <th>Slug</th>
                                                    <th>Icon</th>
                                                    <th>Delete</th>
                                                    <th>Edit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($activities as $activity)
                                                <tr>
                                                    <td>{{$activity->title}}</td>
                                                    <td>{{$activity->slug}}</td>
                                                    <td><img width="75px" height="75px" src="{{asset($activity->icon)}}"></td>
                                                    <td class="text-center">
                                                            <form action="{{route('admin.activity.delete')}}" method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="hidden" name="activityId" value="{{$activity->id}}">
                                                                <button type="submit" class="badge outline-badge-danger">Delete</button>
                                                            </form>
                                                    </td>
                                                    <td>
                                                        <a class="badge outline-badge-primary" href="{{route('admin.activity.edit' , [$activity->id] ) }}">Edit</a>
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
