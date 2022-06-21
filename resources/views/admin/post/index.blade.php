@extends('admin.layout.main')
@section('title')
    Blog
@endsection
@section('titlePage')
   All Post
@endsection
@section('body')
<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Post</h3>

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
                <tr>
                    <th style="width: 1%">
                        #
                    </th>
                    <th style="width: 20%">
                        Project Name
                    </th>
                    <th style="width: 30%">
                        Team Members
                    </th>
                    <th>
                        Project Progress
                    </th>
                    <th style="width: 8%" class="text-center">
                        Status
                    </th>
                    <th style="width: 20%">
                    </th>
                </tr>
                </thead>
@foreach($post as $post)
                <tbody>
                <tr>
                    <td>
                    {{$post->id}}
                    </td>
                    <td>
                        <a>
                            {{$post->title}}
                        </a>
                        <br/>
                        <small>
                            {{$post->created_at }}
                        </small>
                    </td>
                    <td>
                    <img src="{{asset('storage/'.$post->image)}}" alt="product image" style="width: 80px ;height: 60px ; border-radius: 1px">
                        </td>
 
                   <td>{{$post->auther}}</td>
                    <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                    <td class="project-actions text-right">

                        <form class=""  method="post" action="{{route('post.destroy',[$post->id])}}">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-sm btn-danger inline "><i class="fas fa-pencil-alt">
                                    </i>
                                    Delete</button>

                            </form>
                    </td>
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
