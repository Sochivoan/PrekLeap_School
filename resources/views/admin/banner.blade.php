
@extends('my_admin.admin_master')
@section('my_admin')
        <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>
                    <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        All Banner <a  href="" data-toggle="tooltip" data-html="true" title="" data-original-title="<em>Add New</em>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                        </svg></a>
                    </div>
                    <div class="card-body">
                        <table  class="table table-responsive-sm table-bordered table-striped table-sm">
                        <thead>
                          <tr>
                                <th>No.</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Description</th>
                                <th>Reference</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Created By</th>
                                <th>Created At</th>
                                <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>

                            <tr class="align-middle">
                              <td class="align-middle">1</td>
                              <td class="align-middle">HTML</td>
                              <td class="align-middle">HTML5</td>
                              <td class="align-middle">Description</td>
                              <td class="align-middle">WWW</td>
                              <td class="align-middle" style="text-align: center;">
                                <a target="_blank" href=""><i class="cil-image1"></i></a>
                              <td class="align-middle">
                                  <span class="badge badge-pill" style="padding:4px 5px;border-radius:5px">

                                  </span>
                              </td>
                              <td class="align-middle">Voan</td>
                              <td class="align-middle">12/77/090</td>
                              <td class="align-middle">
                                <a href="" data-toggle="tooltip" data-html="true" title="" data-original-title="<em>Edit</em>"><i class="cil-pencil"></i></a>
                                <a href="" data-toggle="tooltip" data-html="true" title="" data-original-title="<em>View</em>"><i class="cil-chart-pie"></i></a>
                                <a style="display: inline-block;" data-toggle="tooltip" data-html="true" title="" data-original-title="<em>Delete</em>">
                                  <form action="" method="POST">

                                      <button style="border: none; background: none; color: #321fdb; margin-left: -6px;" type="submit"><i class="cil-trash"></i></button>
                                  </form>
                                </a>
                              </td>
                            </tr>
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
