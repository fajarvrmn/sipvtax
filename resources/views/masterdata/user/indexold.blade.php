@extends('layouts.admin')
 
@section('content')

    
    <!-- Striped rows -->


                <div class="row">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div id="striped-rows" class="mb-4">
                      <h2 class="h3 mb-1">Data User</h2>
                      <p>Use <code class="highlighter-rouge">.table-striped</code>
                        to add
                        zebra-striping to any table row within the <code class="highlighter-rouge">&lt;tbody&gt;</code>.
                      </p>
                      
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                         <button type="button" class="btn btn-outline-primary mb-2" data-bs-toggle="modal" data-bs-target="#addUsersModal">Add</button>
                         <button type="button" class="btn btn-outline-success mb-2">XLS</i></i></button>
                         <button type="button" class="btn btn-outline-danger mb-2">PDF</button>
                    </div>
                    </div>
                    <!-- Card -->
                    <div class="card mb-10">
                      
                      <!-- Tab content -->
                    <div class="tab-content p-4" id="pills-tabContent-striped-rows">
                        <div class="tab-pane tab-example-design fade show
                          active" id="pills-striped-rows-design" role="tabpanel"
                          aria-labelledby="pills-striped-rows-design-tab">
                          <div class="table-responsive">
                            <table class="table table-striped data-table">
                                    <thead>
                                    <tr>
                                    <th>No</th>
                                    <th>Username</th>
                                    <th>Nama</th>
                                    <th>Telepon</th>
                                    <th>Alamat</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th width="100px">Action</th>
                                    </tr>
                                    </thead>
                                    </table>
                          </div>
                        </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


  <!-- Modal -->
  <div class="modal fade" id="addUsersModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  
                <form id="formCRUD" name="formCRUD">
                   <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <div class="mb-3">
                        <label class="col-form-label" for="username">Username</label>
                        <input type="text" id="username" name="username" class="form-control" value="" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="mb-3">
                        <label class="form-label" for="nama">Nama Lengkap</label>
                        <input type="text" id="nama" name="nama" class="form-control" value="" maxlength="50" required="">
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="mb-3">
                        <label class="form-label" for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" value="" maxlength="50" required="">
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="mb-3">
                        <label class="form-label" for="telp">Telepon</label>
                        <input type="number" id="telp" name="telp" class="form-control" value="" maxlength="50" required="">
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="mb-3">
                         <label for="alamat" class="form-label">Alamat</label>
                         <textarea class="form-control" id="alamat" name="alamat" rows="5"></textarea>
                       </div>
                    </div>
                    <div class="form-group">
                        <div class="mb-3">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="****************">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="mb-3">
                        <label class="form-label" for="role_id">Role</label>
                         <select name="role_id" id="role_id" class="form-select" aria-label="Default select example">
                           <option selected>Pilih role</option>
                            @foreach(getRole() as $role)
                                <option value="{{$role->id}}">{{$role->role_name}}</option>
                            @endforeach
                         </select>
                        </div>
                    </div>
                </form>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-primary" id="saveBtn">Save</button>
              </div>
              
          </div>
      </div>
  </div>

@endsection
@push('scripts')

<!-- view -->
<script type="text/javascript">
  $(function () {

    $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });
    
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('user.index') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'username', name: 'username'},
             {data: 'nama', name: 'nama'},
            {data: 'notelp', name: 'notelp'},
             {data: 'alamat', name: 'alamat'},
            {data: 'email', name: 'email'},
             {data: 'namarole', name: 'namarole'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
    
  });


/*-- form tambah --*/
$('#addUsersModal').click(function () {
        $('#valAction').val('create');
        $('#id').val("");
        // $('#formCRUD').trigger("reset");
        $('#modelHeading').html("Tambah Data");
        $('#ajaxModel').modal('show');
    });

/*-- save data --*/
$('#saveBtn').click(function (e) {
        e.preventDefault();
        $(this).html('Kirim..');
        var id = $('#id').val();
        var actionIs = $('#saveBtn').val();
        var myUrl = (actionIs == 'create') ? "user/create" : "user/"+id;
        var method = (actionIs == 'create') ? "GET" : "PATCH";

        $.ajax({
          data: $('#formCRUD').serialize(),
          url: myUrl,
          type: method,
          dataType: 'json',
          success: function (data) {
       
              $('#formCRUD').trigger("reset");
              $('#ajaxModel').modal('hide');
              table.draw();
           
          },
          error: function (data) {
              console.log('Error:', data);
              $('#saveBtn').html('Simpan');
          }
      });
});

</script>

@endpush

