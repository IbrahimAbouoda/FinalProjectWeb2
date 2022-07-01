@extends('admin.layout.main')
@section('title')
    Blog
@endsection
@section('titlePage')
   All Commint
@endsection
@section('body')
<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Commint</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                
                    <th style="width: 1%">
                        #
                    </th>
                    <th style="width: 20%">
                       Commint
                    </th>
                   
            
                </thead>
@foreach($commint as $commint)
                <tbody>
                <tr>
                    <td>
                    {{$commint->id}}
                    </td>
                    <td>
                        <a>
                            {{$commint->comint}}
                        </a>
                        <br/>
                        <small>
                            {{$commint->created_at }}
                        </small>
              
                </tr>

                </tbody>
                @endforeach
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
@endsection
