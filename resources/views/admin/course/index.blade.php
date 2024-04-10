@extends('layouts.app')
@section('content')
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title mb-30">
                    <h2>Course</h2>
                </div>
            </div>
            <!-- end col -->
            <div class="col-md-6">
                <div class="breadcrumb-wrapper mb-30">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('admin.dashboard')}}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Course</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Course
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>



    <div class="row">
        <div class="col-lg-12">
            <div class="card-style mb-30">
                <div style="display: flex;justify-content: space-between">
                    <h6>Course List</h6>
                    <a href="{{route('admin.course.create')}}"
                       class="btn btn-sm btn-primary"> Add New
                    </a>
                </div>
                <div class="table-wrapper table-responsive table-hover">
                    <table class="table">
                        <thead>
                        <tr>
                            <th><h6>Title</h6></th>
                            <th><h6>Icon</h6></th>
                        </tr>
                        <!-- end table row-->
                        </thead>
                        <tbody>
                        @foreach($courses as $course)
                            <tr>
                                <td class="min-width">
                                    <p>{{$course->title}}</p>
                                </td>
                                <td class="min-width">
                                    <img src="{{$course->icon}}" alt="{{$course->title}}" width="80">
                                </td>


                                <td>
                                    <div class="action">
                                        <a href="{{route('admin.course.edit', $course)}}" class="text-info">
                                            <i class="lni lni-pencil"></i>
                                        </a>
                                        <form action="{{route('admin.course.destroy',$course)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="text-danger show_confirm" type="submit">
                                                <i class="lni lni-trash-can"></i>
                                            </button>
                                        </form>

                                    </div>
                                </td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                    <!-- end table -->
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
@endsection
