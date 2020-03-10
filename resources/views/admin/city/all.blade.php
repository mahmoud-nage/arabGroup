@extends('admin.dashboard')

@section('title')
    {{__('المدن')}}
@endsection

@section('content')

<div class="card">
        <div class="card-header">
            <a class="btn btn-outline-primary" style="width: 100px;" href="{{route('city.create')}}">
                <span class="float-md-left">
                    <i class="fa fa-plus"></i>
                </span>جديد
            </a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>#</th>
              <th>{{__('الاسم')}}</th>
              <th>{{__('البلد')}}</th>
              <th>{{__('الاجراءات')}}</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($records as $record)
                <tr>
                <td>{{$loop->iteration}}</td>
                  <td>{{$record->name}}</td>
                  <td>{{$record->country->name}}</td>
                    <td>
                      <div style="display:inline-flex">
                        <a class="edit" href="{{route('city.edit', $record->id)}}" style="padding: 0 5px">
                        <i class="fas fa-user-edit"></i>
                    </a>
                    <form action="{{route('city.destroy', $record->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                       
                            <button class="delete" onclick="return confirm()" class="" style="background: none;border: none;color: red; display:inline-flex">
                                <i class="fas fa-trash-alt" ></i>
                            </button>
                    </form>
                    </div>
                    </td>
                </tr> 
              @endforeach
          
            </tbody>
            <tfoot>
            <tr>
              <th>#</th>
              <th>{{__('Name')}}</th>
              <th>{{__('Country')}}</th>
              <th>{{__('Action')}}</th>
            </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->



@endsection

@push('scripts')
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
@endpush
