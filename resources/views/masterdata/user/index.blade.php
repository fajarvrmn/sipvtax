@extends('layouts.adminv2')
@section('content')

            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data User SIPVTAX</h4>
                  <p class="card-description">
                    Add untuk menambahkan user <code>tombol Add</code> | 
                    XLS untuk cetak format Excel <code>tombol XLS</code> | 
                    PDF untuk cetak format PDF <code>tombol PDF</code>
                  </p>
                  <p class="card-description">
                    View untuk melihat detail <code>icon mata</code> |
                    Edit untuk mengubah user <code>icon file</code> |
                    Delete untuk menghapus user <code>icon trash</code>
                  </p>

                  <br>
                  <div class="d-grid gap-4 d-md-flex justify-content-md-end">
                         <input type="text" class="form-control" id="search" name="search" placeholder="masukan kata kunci" aria-label="Recipient's username">
                      <div class="input-group-append">&nbsp;&nbsp;
                        <button class="btn btn-sm btn-primary"  type="button">Search</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      </div>
                         <button type="button" class="btn btn-outline-primary btn-fw" data-toggle="modal" data-target="#addUsersModal">Add</button> &nbsp;&nbsp;
                         <button type="button" class="btn btn-outline-success btn-fw" data-toggle="modal" data-target="#xlsUsersModal">XLS</button>&nbsp;&nbsp;
                         <button type="button" class="btn btn-outline-danger btn-fw" data-toggle="modal" data-target="#pdfUsersModal">PDF</button>
                    </div>
                    <br><br>
                  <div class="table-responsive">
                    <table class="table table-striped data-table">
                      <thead align="center">
                        <tr>
                          <th>
                            No
                          </th>
                          <th>
                            Foto
                          </th>
                          <th>
                            Username
                          </th>
                          <th>
                            Nama
                          </th>
                          <th>
                            Telepon
                          </th>
                          <th>
                            Alamat
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            Role
                          </th>
                          <th>
                            Aksi
                          </th>
                        </tr>
                      </thead>
                      <tbody align="center">
                        @foreach ($data as $index)
                        <tr>
                          <td>
                            {{ $index->id }}
                          </td>
                          <td class="py-1">
                            <img src="../../images/faces/face1.jpg" alt="image"/>
                          </td>
                          <td>
                            {{ $index->username }}
                          </td>
                          <td>
                            {{ $index->nama }}
                          </td>
                          <td>
                            {{ $index->notelp }}
                          </td>
                          <td>
                            {{ $index->alamat }}
                          </td>
                          <td>
                            {{ $index->email }}
                          </td>
                          <td>
                            {{ $index->namarole }}
                          </td>
                          <td><center>
                                    <form action="/" method="POST">
                                        <!-- <button type="button" href="/" class="btn btn-inverse-info btn-icon">
                                          <i class="ti-eye"></i>
                                        </button>  -->
                                        <button type="button" href="/" class="btn btn-inverse-success btn-icon">
                                          <i class="ti-file"></i>
                                        </button>
                                        @csrf
                                        <!-- @method('DELETE') -->
                                        <button type="submit" href="/" class="btn btn-inverse-danger btn-icon">
                                          <i class="ti-trash"></i>
                                        </button>
                                    </form>
                              </center>
                           </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <br>
                    <div class="pagination d-flex flex-wrap pagination-info">
                    {!! $data->links() !!}
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- MODAL add -->
                <div class="modal fade" id="addUsersModal" tabindex="-1" role="dialog" aria-labelledby="addUsersModal" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Tambah data user</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <form class="form-sample">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Username</label>
                          <div class="col-sm-9">
                            <input type="text" id="username" name="username" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Email</label>
                          <div class="col-sm-9">
                            <input type="email" name="email" id="email" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                          <div class="col-sm-9">
                            <input type="text" id="nama" name="nama" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label" for="role_id">Role</label>
                          <div class="col-sm-9">
                            <select name="role_id" id="role_id" class="form-control">
                              <option selected>Pilih role</option>
                                @foreach(getRole() as $role)
                                <option value="{{$role->id}}">{{$role->role_name}}</option>
                                @endforeach
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">No Telepon</label>
                          <div class="col-sm-9">
                            <input type="number" id="notelp" name="notelp" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Upload Foto</label>
                          <div class="col-sm-9">
                            <input type="file" name="foto" class="file-upload-default">
                            <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Foto">
                            <span class="input-group-append">
                              <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                          </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Alamat</label>
                          <div class="col-sm-9">
                            <input type="text" id="alamat" name="alamat" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Password</label>
                          <div class="col-sm-9">
                            <input type="password" name="password" id="password" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success">Save</button>
              </div>
            </div>
          </div>
        </div>
 <!-- Modal Ends -->

                <div class="modal fade" id="xlsUsersModal" tabindex="-1" role="dialog" aria-labelledby="xlsUsersModal" aria-hidden="true">
                  <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title">Coming Soon !!</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                          <div class="modal-body">
                            Belum difungsikan !
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="modal fade" id="pdfUsersModal" tabindex="-1" role="dialog" aria-labelledby="pdfUsersModal" aria-hidden="true">
                  <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title">Coming Soon !!</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                          <div class="modal-body">
                            Belum difungsikan !
                          </div>
                        </div>
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

    /*-- form tambah --*/
    $('#addUsersModal').click(function () {
            $('#valAction').val('create');
            $('#id').val("");
            // $('#formCRUD').trigger("reset");
            $('#modelHeading').html("Tambah Data");
            $('#ajaxModel').modal('show');
        });

    $('#xlsUsersModal').click(function () {
            $('#valAction').val('create');
            $('#id').val("");
            $('#modelHeading').html("error");
            $('#ajaxModel').modal('show');
        });

    $('#pdfUsersModal').click(function () {
            $('#valAction').val('create');
            $('#id').val("");
            $('#modelHeading').html("error");
            $('#ajaxModel').modal('show');
        });

  });

</script>

@endpush
