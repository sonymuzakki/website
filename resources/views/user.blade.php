@extends('welcome')

@section('container')
<div class="main-content">
    <section class="section">
      <div class="section-header">
         <h1>Form Input Users</h1>
      </div>
          <section class="Form">
      <div class="card">
          <div class="col-8">
              <div class="card">
                  <div class="card-body">
                      <form action="" method="POST" enctype="multipart/form-data">
                      @csrf
                          <div class="mb-3">
                              <label for="exampleInputEmail" class="form-label">Pengguna</label>
                              <input type="text" name="hostname" class="form-control" id="exampleFormControlInput1" placeholder="">
                          </div>
                          <div class="mb-3">
                              <label  for="ExampleInputEmail" class="form-label">Lokasi</label>
                              <select class="form-control" name="jenis" aria-label="Default Select example">
                              <option>Select Option ..</option>
                              <option value="Head Office">Head Office</option>
                              <option value="Payakumbuh">Payakumbuh</option>
                              <option value="Dharmasraya">Dharmasraya</option>
                              <option value="Pasaman Barat">Pasaman Barat</option>
                              <option value="Body&Paint">Body&Paint</option>
                              </select>
                          </div>
                          <div class="mb-3">
                              <label  for="ExampleInputEmail" class="form-label">Divisi</label>
                              <select class="form-control" name="jenis" aria-label="Default Select example">
                              <option>Select Option ..</option>
                              <option value="Umum">Umum</option>
                              <option value="Admin">Admin</option>
                              <option value="Bengkel">Bengkel</option>
                              <option value="Sales">Sales</option>
                              <option value="Body&Paint">Body&Paint</option>
                              </select>
                          </div>
                          <button type="submit" class="btn btn-success btn-lg mb-2"</button>Submit</button>
                          {{--  @include('sweetalert::alert')  --}}
                      </form>
                  </div>
              </div>

          </div>
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
    </div>



            </section>

            </section>

            @endsection
