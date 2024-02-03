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
                                            <h4>FAQ's Table</h4>
                                            <a href="{{route('admin.faq.create')}}" class="btn btn-primary">Add New FAQ</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-4">
                                            <thead>
                                                <tr>
                                                    <th>Question</th>
                                                    <th>Answer</th>
                                                    <th>Delete</th>
                                                    <th>Edit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($faqs as $faq)
                                                <tr>
                                                    <td>{{$faq->question}}</td>
                                                    <td>{{$faq->answer}}</td>
                                                    <td class="text-center">
                                                        <form method="post" action="{{route('admin.faq.delete')}}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <input type="hidden" name="faq_id" value="{{$faq->id}}">
                                                            <button class="badge outline-badge-danger">Delete</button>
                                                        </form>
                                                    </td>
                                                    <td>
                                                        <a class="badge outline-badge-primary" href="{{route('admin.faq.edit', [$faq->id])}}">Edit</a>
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
