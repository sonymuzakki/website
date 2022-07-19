@extends('welcome')

@section('container')

    <div class="main-content">
         <section class="section">
          <div class="section-header">
            <h1>Details Data</h1>
          </div>
        <section class="Form">
        <div class="card">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action="/details/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="exampleInputEmail" class="form-label">Hostname</label>
                            <input type="text" name="hostname"  class="form-control" id="exampleFormControlInput1" placeholder="" value="{{ $data->hostname }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label  for="ExampleInputEmail" class="form-label">Jenis</label>
                            <select class="form-control" aria-label="Default Select example" disabled>
                              <option selected> {{ $data->jenis }}</option>
                              <option value="PC">PC</option>
                              <option value="Laptop">Laptop</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Merk</label>
                            <input type="text" class="form-control" name="merk" id="exampleFormControlInput1" placeholder="" value="{{ $data->merk }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Processor</label>
                            <input type="text" class="form-control" name="processor" id="exampleFormControlInput1" placeholder="" value="{{ $data->processor }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">RAM</label>
                            <input type="text" class="form-control" name="ram" id="exampleFormControlInput1" placeholder="" value="{{ $data->ram }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Graphic</label>
                            <input type="text" class="form-control" name="graphic" id="exampleFormControlInput1" placeholder="" value="{{ $data->graphic }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">hardisk</label>
                            <input type="text" class="form-control" name="hardisk" id="exampleFormControlInput1" placeholder="" value="{{ $data->hardisk }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">SSD</label>
                            <input type="text" class="form-control" name="ssd" id="exampleFormControlInput1" placeholder="" value="{{ $data->ssd }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label  for="ExampleInputEmail" class="form-label">OS</label>
                            <select class="form-control" name="os" aria-label="Default Select example" disabled>
                              <option selected>{{ $data->os }}</option>
                              <option value="Win 11">Win 11</option>
                              <option value="Win 10">Win 10</option>
                              <option value="Win 7">Win 7</option>
                            </select>
                        </div>
                        {{--  <button type="submit" class="btn btn-success btn-lg mb-2"</button>Submit</button>  --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
