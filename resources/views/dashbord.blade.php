@extends('welcome')

@section('container')
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Dashboard</h1>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="far fa-user"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total User</h4>
            </div>
            <div class="card-body">
              10
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-danger">
            <i class="far fa-newspaper"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Inventaris</h4>
            </div>
            <div class="card-body">
              42
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-warning">
            <i class="far fa-file"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Reports</h4>
            </div>
            <div class="card-body">
              1,201
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-success">
            <i class="fas fa-circle"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Online Users</h4>
            </div>
            <div class="card-body">
              47
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8 col-md-12 col-12 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4>Data Inventory</h4>
            <div class="card-header-action">
            </div>
          </div>
          <div class="card-body">
            <canvas id="myChart" height="182"></canvas>
            <div class="statistic-details mt-sm-4">
              <div class="statistic-details-item">
                <span class="text-muted"><span class="text-primary"><i class="fas fa-caret-up"></i></span></span>
                <div class="detail-value">243 Unit</div>
                <div class="detail-name">Head Office</div>
              </div>
              <div class="statistic-details-item">
                <span class="text-muted"><span class="text-primary"><i class="fas fa-caret-up"></i></span></span>
                <div class="detail-value">200 Unit</div>
                <div class="detail-name">Payakumbuh</div>
              </div>
              <div class="statistic-details-item">
                <span class="text-muted"><span class="text-primary"><i class="fas fa-caret-up"></i></span></span>
                <div class="detail-value">200 Unit</div>
                <div class="detail-name">Dharmasraya</div>
              </div>
              <div class="statistic-details-item">
                <span class="text-muted"><span class="text-primary"><i class="fas fa-caret-up"></i></span></span>
                <div class="detail-value">200 Unit</div>
                <div class="detail-name">Dharmasraya</div>
              </div>
              <div class="statistic-details-item">
                <span class="text-muted"><span class="text-primary"><i class="fas fa-caret-up"></i></span></span>
                <div class="detail-value">200 Unit</div>
                <div class="detail-name">Pasaman Barat</div>
              </div>
              <div class="statistic-details-item">
                <span class="text-muted"><span class="text-primary"><i class="fas fa-caret-up"></i></span></span>
                <div class="detail-value">200 Unit</div>
                <div class="detail-name">Body&Paint</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 col-12 col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h4>Data Users</h4>
                  <div class="card-header-action">
                    <a href="#" class="btn btn-primary">View All</a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table table-striped mb-0">
                      <thead>
                        <tr>
                          <th>Title</th>
                          <th>Author</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            Laravel 5 Tutorial - MVC
                            <div class="table-links">
                              in <a href="#">Web Development</a>
                              <div class="bullet"></div>
                              <a href="#">View</a>
                            </div>
                          </td>
                          <td>
                            <a href="#" class="font-weight-600"><img src="../assets/img/avatar/avatar-1.png" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Laravel 5 Tutorial - MVC
                            <div class="table-links">
                              in <a href="#">Web Development</a>
                              <div class="bullet"></div>
                              <a href="#">View</a>
                            </div>
                          </td>
                          <td>
                            <a href="#" class="font-weight-600"><img src="../assets/img/avatar/avatar-1.png" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Laravel 5 Tutorial - Migration
                            <div class="table-links">
                              in <a href="#">Web Development</a>
                              <div class="bullet"></div>
                              <a href="#">View</a>
                            </div>
                          </td>
                          <td>
                            <a href="#" class="font-weight-600"><img src="../assets/img/avatar/avatar-1.png" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Laravel 5 Tutorial - Deploy
                            <div class="table-links">
                              in <a href="#">Web Development</a>
                              <div class="bullet"></div>
                              <a href="#">View</a>
                            </div>
                          </td>
                          <td>
                            <a href="#" class="font-weight-600"><img src="../assets/img/avatar/avatar-1.png" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Laravel 5 Tutorial - Closing
                            <div class="table-links">
                              in <a href="#">Web Development</a>
                              <div class="bullet"></div>
                              <a href="#">View</a>
                            </div>
                          </td>
                          <td>
                            <a href="#" class="font-weight-600"><img src="../assets/img/avatar/avatar-1.png" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
            </div>
      </div>
    </div>


          <div class="">
              <div classs="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Request Users</h4>
                    <div class="card-header-action">
                      <a href="#" class="btn btn-danger">View More <i class="fas fa-chevron-right"></i></a>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive table-invoice">
                      <table class="table table-striped">
                        <tr>
                          <th>Lokasi</th>
                          <th>Pengguna</th>
                          <th>Status</th>
                          <th>Due Date</th>
                          <th>Action</th>
                        </tr>
                        <tr>
                          <td><a href="#">INV-87239</a></td>
                          <td class="font-weight-600">Kusnadi</td>
                          <td><div class="badge badge-warning">Unpaid</div></td>
                          <td>July 19, 2018</td>
                          <td>
                            <a href="#" class="btn btn-primary">Detail</a>
                          </td>
                        </tr>
                        <tr>
                          <td><a href="#">INV-48574</a></td>
                          <td class="font-weight-600">Hasan Basri</td>
                          <td><div class="badge badge-success">Paid</div></td>
                          <td>July 21, 2018</td>
                          <td>
                            <a href="#" class="btn btn-primary">Detail</a>
                          </td>
                        </tr>
                        <tr>
                          <td><a href="#">INV-76824</a></td>
                          <td class="font-weight-600">Muhamad Nuruzzaki</td>
                          <td><div class="badge badge-warning">Unpaid</div></td>
                          <td>July 22, 2018</td>
                          <td>
                            <a href="#" class="btn btn-primary">Detail</a>
                          </td>
                        </tr>
                        <tr>
                          <td><a href="#">INV-84990</a></td>
                          <td class="font-weight-600">Agung Ardiansyah</td>
                          <td><div class="badge badge-warning">Unpaid</div></td>
                          <td>July 22, 2018</td>
                          <td>
                            <a href="#" class="btn btn-primary">Detail</a>
                          </td>
                        </tr>
                        <tr>
                          <td><a href="#">INV-87320</a></td>
                          <td class="font-weight-600">Ardian Rahardiansyah</td>
                          <td><div class="badge badge-success">Paid</div></td>
                          <td>July 28, 2018</td>
                          <td>
                            <a href="#" class="btn btn-primary">Detail</a>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
          {{--  End Tabe  --}}
          </div>
    </div>
    <div class="row">

    </div>
  </section>
</div>
<footer class="main-footer">
  <div class="footer-left">
    Copyright &copy; 2022 <div class="bullet"></div> Design By <a href="">ITSD</a>
  </div>
  <div class="footer-right">
    1.0.0
  </div>
</footer>
</div>
</div>
@endsection
