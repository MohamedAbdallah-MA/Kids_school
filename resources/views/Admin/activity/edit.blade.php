@include('Admin.assets.navbar')



<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="container">

        <div class="container">

            <div class="row layout-top-spacing">

                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <h4>{{$error}}</h4>
                    @endforeach
                @endif

                <div id="basic" class="col-lg-12 col-sm-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Edit Teacher</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">

                            <form method="post" action="{{route('admin.activity.update')}}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <input type="hidden" value="{{$activity->id}}" name="activityId">
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Icon</span>
                                    </div>
                                    <input type="file" class="form-control" name="icon" id="imgInp" aria-label="With textarea">
                                    <img id="blah" src="{{asset($activity->icon)}}" alt="your icon" style="width: 100px; height: 100px;" />

                                </div>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Title</span>
                                    </div>
                                    <input class="form-control" value="{{$activity->title}}" name="title" aria-label="With textarea">
                                </div>

                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Slug</span>
                                    </div>
                                    <textarea class="form-control" name="slug"  aria-label="With textarea">{{$activity->slug}}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>

                            </form>


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
<script>
    imgInp.onchange = evt => {
        const [file] = imgInp.files
        if (file) {
            blah.src = URL.createObjectURL(file)
        }
    }
</script>
@include('Admin.assets.footer')
