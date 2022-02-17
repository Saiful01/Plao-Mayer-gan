@extends('layouts.admin')
@section('title', 'Applicants')
@section('page', 'Applicants')

@section('content')
    <style>
        .modal-dialog,
        .modal-content {
            /* 80% of window height */
            height: 100%;
        }

        .modal-body {
            /* 100% = dialog height, 120px = header + footer */
            max-height: calc(100% - 120px);
            overflow-y: scroll;
        }

        .rotater {
            transition: all 0.3s ease;
            border: 0.0625em solid #f3f3f3;
        }

        label {
            padding: 0px 31px;
        }
    </style>

    <script>
        let rotateAngle = 90;

        function rotate(image) {
            image.setAttribute("style", "transform: rotate(" + rotateAngle + "deg)");
            rotateAngle = rotateAngle + 90;
        }
    </script>


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Status Applicants</h4>

                    <table id="datatable-buttonss" class="table table-striped table-bordered dt-responsive nowrap"
                           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th> #</th>
                            <th> Name</th>
                            <th>Phone</th>
                            <th>Status</th>
                            <th>Active</th>
                            <th>Action</th>




                        </tr>
                        </thead>


                        <tbody>
                        <?php
                        $i = $start_number;
                        ?>
                        @foreach($data as $res)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$res->name}}</td>
                                <td>{{$res->phone}}</td>

                                <td>
                                    @if($res->fb_link != null)
                                        <iframe
                                            src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/DainikJugantor/posts/{{$res->fb_link}}&show_text=true&width=500"
                                            width="100%" height="200px" style="border:none;overflow:hidden"
                                            scrolling="no" frameborder="0" allowfullscreen="true"
                                            allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">

                                        </iframe>
                                    @else
                                        <p> {!! $res->status !!}</p>
                                    @endif

                                </td>
                                <td>

                                    @if($res->is_active==1)
                                        <span class="badge badge-success">Yes</span>
                                        <a href="/admin/status/inactive/{{$res->id}}" class="btn btn-sm btn-danger">Inactive</a>
                                    @else
                                        <span class="badge badge-warning">No</span>
                                        <a href="/admin/status/active/{{$res->id}}" class="btn btn-sm btn-success">active</a>
                                    @endif
                                </td>
                                <td><a href="/admin/status/delete/{{$res->id}}"><i class="fa fa-trash"></i> </a>

                                </td>


                            </tr>
                        @endforeach
                        {{ $data->appends(Request::except('page'))->links("pagination::bootstrap-4") }}
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->


@endsection
