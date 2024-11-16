@extends('layouts.app')
@section('content')


 <!-- Search -->
 <form action="">
     <div class="relative border-2 border-gray-100 m-4 rounded-lg">
         <div class="absolute top-4 left-3">
             <i
                 class="fa fa-search text-gray-400 z-20 hover:text-gray-500"
             ></i>
         </div>
         <input
             type="text"
             name="search"
             class="h-14 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none"
             placeholder="Search Investigations..."
         />
         <div class="absolute top-2 right-2">
            <div class="pull-right">
               
                <a class="btn btn-success" href="#"> Search</a>
           
            </div>
         </div>
     </div>
 </form>

  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Investigation Reports</h1>
    <div class="pull-right">
        @can('forensic-create')
        <a class="btn btn-success" href="{{ route('forensics.create') }}"> Create New Investigations</a>
        @endcan
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List of Investigation Reports</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Number</th>
                            <th>Victim</th>
                            <th>Police</th>
                            <th>Medical</th>
                            <th>Investigation</th>
                            <th>Legal</th>
                            <th>Remarks</th>
                            <th>Date</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Number</th>
                            <th>Victim</th>
                            <th>Police</th>
                            <th>Medical</th>
                            <th>Investigation</th>
                            <th>Legal</th>
                            <th>Remarks</th>
                            <th>Date</th>
                            <th>Edit</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($forensics as $forensic)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td> {{ $forensic->incident->victim }}</td>
                            <td>{{ $forensic->police }}</td>
                            <td>{{ $forensic->medical }}</td>
                            <td>{{ $forensic->status }} </td>
                            <td>{{ $forensic->legal }}</td>
                            <td>{{ $forensic->remarks }}</td>
                            <td> {{ $forensic->updated_at }}</td>
                            <td>
                                <form action="{{ route('forensics.destroy',$forensic->id) }}" method="POST">
                                <a class="btn btn-info" href="{{ route('forensics.show',$forensic->id) }}">Show</a>
                                @can('forensic-edit')
                                <a class="btn btn-primary" href="{{ route('forensics.edit',$forensic->id) }}">Edit</a>
                                @endcan
                                @csrf
                                @method('DELETE')
                                @can('forensic-delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                                @endcan
                                </form>
                            </td>
                        </tr>
                        @endforeach               
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


@endsection