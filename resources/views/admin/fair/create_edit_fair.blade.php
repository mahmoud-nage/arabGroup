@extends('admin.dashboard')

@section('css')

@endsection

@section('content')
<!-- Input Validation start -->
<section class="input-validation">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
      
        <div class="card-content">
          <div class="card-body">

            @if($record->name == null)
                   {{-- @dd('create') --}}
                   @section('name')
                      {{__('اضافه معرض')}}
                    @endsection
                    <form class="form-horizontal" id="quickForm" method="POST" action="{{route('fair.store')}}" enctype="multipart/form-data">

                @else
                   {{-- @dd('update') --}}
                   @section('name')
                      {{__('تعديل معرض')}}
                   @endsection
                    <form class="form-horizontal" id="quickForm" method="POST" action="{{route('fair.update', $record->id)}}" enctype="multipart/form-data">
                @endif
            @csrf 
              <div class="row">

                <div class="col-md-12 col-lg-6">
                  <div class="form-group">
                    <h5>{{__('الاسم')}}<span class="required" style="color:red">*</span></h5>
                    <div class="controls mb-1">
                      <input value="{{$record->name}}" type="text" name="name" class="form-control @error('name') is-invalid @enderror" @if(!$record->name) required @endif autocomplete="off">
                      @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                  </div>
                </div>

                <div class="col-md-12 col-lg-6">
                  <div class="form-group">
                    <h5>{{__('الموقع')}}<span class="required" style="color:red">*</span></h5>
                    <div class="controls mb-1">
                      <input value="{{$record->location}}" type="text" name="location" class="form-control @error('location') is-invalid @enderror" @if(!$record->location) required @endif autocomplete="off">
                      @error('location')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                  </div>
                </div>

                <div class="col-md-12 col-lg-6">
                  <div class="form-group">
                    <h5>{{__('الفتره الزمنيه')}}<span class="required" style="color:red">*</span></h5>
                    <div class="controls mb-1">
                      <input value="{{$record->date}}" type="text" name="date" class="form-control @error('date') is-invalid @enderror" @if(!$record->date) required @endif autocomplete="off">
                      @error('date')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                  </div>
                </div>


                <div class="col-md-12 col-lg-6">
                  <div class="form-group">
                    <h5>{{__('قائمه الكتب')}}<span class="required" style="color:red">*</span></h5>
                    <div class="controls mb-1">
                      <input value="{{$record->pdf}}" accept="pdf" type="file" id="pdf" name="pdf" class="form-control @error('pdf') is-invalid @enderror" @if(!$record->pdf) required @endif autocomplete="off">
                      @error('pdf')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                  </div>
                </div>

              </div>

                <div class="row">
                  <div class="col-lg-12 col-md-12">
                    <div class="form-group">
                      @if($record->name == null)
                      <button type="submit" class="btn btn-success">{{__('اضافه')}} <i class="fa fa-thumbs-o-up position-right"></i></button>
                  @else
                  @method("PUT")
                  <button type="submit" class="btn btn-success">{{__('تعديل')}} <i class="fa fa-thumbs-o-up position-right"></i></button>
                  @endif
                      <button type="reset" class="btn btn-danger">{{__('Reset')}} <i class="fa fa-refresh position-right"></i></button>
                    </div>
                  </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@push('scripts')
<script type="text/javascript">
  $(document).ready(function () {
    $('#quickForm').validate({
      rules: {
        text: {
          required: true,
        },
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });
  });
  </script>
@endpush
<!-- Input Validation end -->

@endsection