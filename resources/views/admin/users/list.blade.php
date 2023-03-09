@extends('layouts.admin.app')
@section('style')
    <link href="{{ asset('admin-end/plugins/tables/css/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">User List</h4>
                    <div class="table-responsive">
                        <table id="tablesid" class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $row)
                                    <tr>
                                        <td>{{ $row->first_name }}</td>
                                        <td>{{ $row->last_name }}</td>
                                        <td>{{ $row->email }}</td>
                                        <td>
                                            @if ($row->is_athlete)
                                                Athlete
                                            @else
                                                Brand
                                            @endif
                                        </td>

                                        <td>
                                            @if ($row->is_approved == '0')
                                                <button type="button" id="approveUser" data-id="{{ $row->id }}"
                                                    data-status="1" class="btn mb-1 btn-rounded btn-primary">
                                                    Approve</button>
                                                <button type="button" id="approveUser" data-id="{{ $row->id }}"
                                                    data-status="2" class="btn mb-1 btn-rounded color-white btn-warning">
                                                    Deny</button>
                                            @elseif ($row->is_approved == '1')
                                                <button type="button"
                                                    class="btn mb-1 btn-rounded color-white btn-success">Approved</button>
                                            @else
                                                <button type="button"
                                                    class="btn mb-1 btn-rounded btn-danger">Denied</button>
                                            @endif
                                        </td>
                                        <td>
                                            <button type="button" id="deleteUser" data-id="{{ $row->id }}"
                                                class="btn mb-1 btn-rounded color-white btn-danger">
                                                Delete
                                            </button>

                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ asset('admin-end/plugins/tables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin-end/plugins/tables/js/datatable/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin-end/plugins/tables/js/datatable-init/datatable-basic.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#tablesid").on("click", "button#approveUser", function() {
                event.preventDefault();
                var id = $(this).data("id");
                var status = $(this).data("status");
                var text = (status) ? "You want to approve the user" : "You want to un-block the user";
                swal({
                        title: 'Are you sure?',
                        text: text,
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonClass: "btn-primary",
                        confirmButtonText: "Yes!",
                        closeOnConfirm: false
                    },
                    function() {
                        var token = $("meta[name='csrf-token']").attr("content");
                        var url = '{{ url('/admin/user/approval/change') }}' + '/' + id + "/" + status;
                        $.ajax({
                            url: url,
                            type: 'GET',
                            // data: {
                            //     "id": id,
                            //     "status": status,
                            //     "_token": token,
                            // },
                            beforeSend: function() {
                                $("#preloader").show();
                            },
                            complete: function() {
                                $("#preloader").hide();
                            },
                            success: function(response) {
                                var result = jQuery.parseJSON(response);
                                var typeOfResponse = result['type'];
                                var res = result['msg'];
                                if (typeOfResponse == 0) {
                                    swal('Error', res, 'error');
                                } else if (typeOfResponse == 1) {
                                    swal({
                                            title: 'Success',
                                            text: res,
                                            icon: 'success',
                                            type: 'success',
                                            showCancelButton: false, // There won't be any cancel button
                                            showConfirmButton: true // There won't be any confirm button
                                        },
                                        function() {
                                            location.reload();
                                        });
                                }
                            }
                        });
                    });
            });

            $("#tablesid").on("click", "button#deleteUser", function() {
                event.preventDefault();
                var id = $(this).data("id");
                var text = "You want to delete this user";
                swal({
                        title: 'Are you sure?',
                        text: text,
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonClass: "btn-primary",
                        confirmButtonText: "Yes!",
                        closeOnConfirm: false
                    },
                    function() {
                        var token = $("meta[name='csrf-token']").attr("content");
                        var url = '{{ url('/admin/user/delete') }}' + '/' + id;
                        $.ajax({
                            url: url,
                            type: 'DELETE',
                            data: {
                                "id": id,
                                //     "status": status,
                                "_token": token,
                            },
                            beforeSend: function() {
                                $("#preloader").show();
                            },
                            complete: function() {
                                $("#preloader").hide();
                            },
                            success: function(response) {
                                var result = jQuery.parseJSON(response);
                                var typeOfResponse = result['type'];
                                var res = result['msg'];
                                if (typeOfResponse == 0) {
                                    swal('Error', res, 'error');
                                } else if (typeOfResponse == 1) {
                                    swal({
                                            title: 'Success',
                                            text: res,
                                            icon: 'success',
                                            type: 'success',
                                            showCancelButton: false, // There won't be any cancel button
                                            showConfirmButton: true // There won't be any confirm button
                                        },
                                        function() {
                                            location.reload();
                                        });
                                }
                            }
                        });
                    });
            });
        });
    </script>
@endsection
