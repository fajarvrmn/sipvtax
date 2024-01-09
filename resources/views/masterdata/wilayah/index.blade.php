@extends('layouts.adminv2')
@section('content')

            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Wilayah SIPVTAX</h4>
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
                         <input type="text" class="form-control" placeholder="masukan kata kunci" aria-label="Recipient's username">
                      <div class="input-group-append">&nbsp;&nbsp;
                        <button class="btn btn-sm btn-primary"  type="button">Search</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      </div>
                         <button type="button" class="btn btn-outline-primary btn-fw" data-bs-toggle="modal" data-bs-target="#addUsersModal">Add</button> &nbsp;&nbsp;
                         <!-- <button type="button" class="btn btn-outline-success btn-fw">XLS</button>&nbsp;&nbsp;
                         <button type="button" class="btn btn-outline-danger btn-fw">PDF</button> -->
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
                            Kode Area
                          </th>
                          <th>
                            Kab/kota
                          </th>
                          <th>
                            Provinsi
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
                          <td>
                            {{ $index->kode }}
                          </td>
                          <td>
                            {{ $index->namawilayah }}
                          </td>
                          <td>
                            {{ $index->provinsi }}
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

            <!-- MODAL -->
                <div class="modal fade" id="addUsersModal" tabindex="-1" role="dialog" aria-labelledby="addUsersModal" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="addUsersModal">Modal title</h5>
                          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p>Modal body text goes here.</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-success">Submit</button>
                          <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Modal Ends -->
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
  });

</script>

@endpush
