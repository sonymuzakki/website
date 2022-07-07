@extends('welcome')

@section('container')
{{--  <div class="main-content">


    <section class="section">
      <div class="section-header">
        <h1>Form Input </h1>
      </div>
            <section class="Form">
                <div class="card">
                    <form action="/insert" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="card-header">
                        <h4>INPUT INVENTORY</h4>
                    </div>
                        <div class="container">
                            <div class="row">
                                <div class="col">


                    </div>
                    <div class="form-group">
                        <label>Jenis</label>
                        <select class="form-control" name="jenis">
                          <option>Select Option ..</option>
                          <option value="Laptop">Laptop</option>
                          <option value="PC">PC</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Merk</label>
                        <input type="text" name="merk" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>Processor</label>
                        <input type="text" name="processor" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Ram</label>
                        <input type="text" name="ram" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Graphic</label>
                        <input type="text"  name="graphic "class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Hardisk</label>
                        <input type="text"  name="hardisk "class="form-control">
                    </div>
                    <div class="form-group">
                        <label>SSD</label>
                        <input type="text"  name="ssd "class="form-control">
                    </div>
                    <div class="form-group">
                        <label>OS</label>
                        <select class="form-control" name="os">
                          <option>Select Option ..</option>
                          <option value="Win 10">Win 10</option>
                          <option value="Win 7">Win 7</option>
                          <option value="Win Server">Win Server</option>
                          <option value="Win 11">Win 11</option>
                        </select>
                    </div>
                </div>
                {{--  <div class="col">
                            <div class="form-group">
                                <label>Legal OS</label>
                                <select class="form-control" name="isLegalOs">
                                  <option>Select Option ..</option>
                                  <option value="Yes">Yes</option>
                                  <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Office</label>
                                <select class="form-control" name="office">
                                  <option>Select Option ..</option>
                                  <option value="365">365</option>
                                  <option value="2019">2019</option>
                                  <option value="2018">2018</option>
                                  <option value="Open-Office">Open-Office</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Akun Office</label>
                                <input type="text" class="form-control" name="akunOffice">
                            </div>
                            <div class="form-group">
                                <label>INTERNET</label>
                                <select class="form-control" name="internet">
                                  <option>Select Option ..</option>
                                  <option value="Yes">Yes</option>
                                  <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Ip Address</label>
                                <input type="text" class="form-control" name="IpAddress">
                            </div>
                            <div class="form-group">
                                <label>IAMS</label>
                                <select class="form-control" name="IAMS">
                                  <option>Select Option ..</option>
                                  <option value="Yes">Yes</option>
                                  <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Company email</label>
                                <input type="text" class="form-control"name="CompanyEmail">
                            </div>
                            <div class="form-group">
                                <label>User Account</label>
                                <input type="text" class="form-control"name="UserAccount">
                            </div>
                            <div class="form-group">
                                <label>Anydesk Id</label>
                                <input type="text" class="form-control"name="AnydeskId">
                            </div>
                        </div>  --}}
                        {{--  </div>  --}}

                        {{--  <button type="submit" class="btn btn-success btn-lg mb-2"</button>Submit</button>
                    </div>

                </div>  --}}
    {{--  </div>
    <div class="section-body">

      </div>
    </section>  --}}
    <div class="main-content">


        <section class="section">
          <div class="section-header">
            <h1>Form Input </h1>
          </div>
    <section class="Form">
    <div class="card">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <form action="/insert" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail" class="form-label">Hostname</label>
                            <input type="text" name="hostname" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="">
                            <label  for="ExampleInputEmail" class="form-label">Jenis</label>
                            <select class="form-control" name="jenis" aria-label="Default Select example">
                              <option>Select Option ..</option>
                              <option value="1">PC</option>
                              <option value="2">Laptop</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Merk</label>
                            <input type="text" class="form-control" name="merk" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Processor</label>
                            <input type="text" class="form-control" name="processor" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">RAM</label>
                            <input type="text" class="form-control" name="ram" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Graphic</label>
                            <input type="text" class="form-control" name="graphic" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">hardisk</label>
                            <input type="text" class="form-control" name="hardisk" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">SSD</label>
                            <input type="text" class="form-control" name="ssd" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label  for="ExampleInputEmail" class="form-label">OS</label>
                            <select class="form-control" name="os" aria-label="Default Select example">
                              <option>Select Option ..</option>
                              <option value="1">Win 11</option>
                              <option value="2">Win 10</option>
                              <option value="3">Win 7</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success btn-lg mb-2"</button>Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
