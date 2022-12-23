@extends('layouts.app')
@section('title', 'Master User')
@section('content')
<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Master User</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        <li class="breadcrumb-item active">Master User</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card border border-dark card-animate">
                <div class="card-body">
                    <h5 class="card-title mb-0">User Aktif</h5>
                    <p>Displays the people you selected on the form</p>
                    <div id="customerList">
                        <div class="table-responsive mt-3 mb-1">
                            <table id="datatable-v" class="table table-nowrap">
                                <thead>
                                    <tr>
                                        <th scope="col">ID USer</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">User Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Job Title</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Dibuat</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($users as $i => $row)
                                    <tr>
                                        <td>{{ $row->id }}</td>
                                        <td>
                                            @if($row->status == "1")
                                            <span class="badge badge-outline-primary">Aktif</span>
                                            @else
                                            <span class="badge badge-outline-danger">Non Aktif</span>
                                            @endif

                                        </td>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->email }}</td>
                                        <td>{{ $row->job_title }}</td>
                                        <td>{{ !empty($row->roles->first()->name) ? $row->roles->first()->name : '-' }}</td>
                                        <td>{{ $row->created_at }}</td>
                                        <td>
                                            <button index="{{$i}}" type="button" class="btn btn-primary edit_button">
                                                <i class="ri-edit-2-fill align-bottom me-1"></i>
                                            </button>

                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{$row->id}}">
                                                <i class="ri-delete-bin-2-fill align-bottom"></i>
                                            </button>

                                            @include('apps.users.components.modal-delete')
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td>Data tidak ada</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
</div>

<!-- model add user -->
@include('apps.users.components.modal-add')
@include('apps.users.components.modal-edit')
@stop
@push('js')
<script>
    $(document).ready(function() {

        var users = <?php echo $data['users']; ?>;

        $('#datatable-v').DataTable({
            dom: 'Bfrtip',
            buttons: {
                buttons: [
                {
                    text: '<i class="ri-add-line align-bottom me-1"></i> Add Data',
                    className: 'btn btn-primary',
                    action: function (e, node, config) {
                        $('#addModal').modal('show')
                    }
                },
                ]},
            });

        $('#datatable-v tbody').on('click', '.edit_button', function () {
            var index = $(this).attr('index');

            $('#edit_name').val(users[index].name);
            $('#edit_email').val(users[index].email);
            $('#edit_job_title').val(users[index].job_title);
            $('#edit_status').val(users[index].status);

            var role = users[index].role_id
            if (role == '1') {
                role = 'Admin'
            }else{
                role = 'User'
            }

            $('#edit_role').val(role);
            $('#formeditModal').attr('action', `/users/${users[index].id}`);

            var hak_akses = JSON.parse(users[index].hak_akses);

            $('#hak_akses_edit').empty();

            $('#editModal').modal('show');
        });

        var array = [];
        $('#edit-btn-submit').click(function(){
            array = [];
            $("input:checkbox[name=hak_akses_edit]:checked").each(function(){
                array.push($(this).val());
            });

            $('#input_edit_hak_akses').val(JSON.stringify(array));
            $('#formeditModal').submit();
        });
        
        
    });
</script>
@endpush
