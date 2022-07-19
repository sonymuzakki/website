@extends('welcome')


@section('container')

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
                        <div class="mb-3">
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
                        @include('sweetalert::alert')
                    </form>
                </div>
            </div>
        </div>

    </div>

</section>


@endsection
