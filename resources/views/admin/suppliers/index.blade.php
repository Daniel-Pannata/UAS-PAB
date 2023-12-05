@extends('layouts.app2')
@section('title','Suppliers')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-header">Suppliers</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/suppliers/create') }}" class="btn btn-success btn-sm" title="Add New Supplier">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Nama</th><th>Alamat</th><th>Email</th><th>No Telp</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($suppliers as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama }}</td><td>{{ $item->alamat }}</td><td>{{ $item->email }}</td><td>{{ $item->notelp }}</td>
                                        <td>
                                            <a href="{{ url('/admin/suppliers/' . $item->id) }}" title="View Supplier"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/admin/suppliers/' . $item->id . '/edit') }}" title="Edit Supplier"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/admin/suppliers' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Supplier" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{-- <div class="pagination-wrapper"> {!! $suppliers->appends(['search' => Request::get('search')])->render() !!} </div> --}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
