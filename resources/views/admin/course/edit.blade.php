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

    <div class="card-style mb-30">
        <form action="{{route('admin.course.update', $course)}}" method="POST"
              enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-md-6">
                    <div class="input-style-1">
                        <label for="title">शीर्षक</label>
                        <input type="text" id="title" name="title"
                               placeholder="शीर्षक" value="{{old('title', $course->title)}}">
                        @error('title')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                @if(config('default.dual_language'))
                    <div class="col-md-6">
                        <div class="input-style-1">
                            <label for="title_en">शीर्षक English</label>
                            <input type="text" id="title_en" name="title_en"
                                   placeholder="शीर्षक English" value="{{old('title_en', $course->title_en)}}">
                            @error('title_en')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                @endif
                <div class="col-md-6">
                    <div class="input-style-1">
                        <label for="icon">Course Icon</label>
                        <input type="file" id="icon" name="icon">
                        @error('icon')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="input-style-1">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" cols="30" rows="10" class="summernote">{{$course->description}}</textarea>
                        @error('description')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                @if(config('default.dual_language'))
                    <div class="col-md-12">
                        <div class="input-style-1">
                            <label for="description_en">Description English</label>
                            <textarea name="description_en" id="description_en" cols="30" rows="10" class="summernote">{{$course->description_en}}</textarea>
                            @error('description_en')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                @endif
                <div class="col-md-12">
                    <button type="submit" class="btn btn-sm btn-primary">
                        Submit
                    </button>
                </div>
            </div>
        </form>
    </div>

    @push('script')
        {{-- summernote js --}}
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.summernote').summernote({
                    placeholder: 'Description',
                    tabsize: 2,
                    height: 300
                });
            });
        </script>
    @endpush
@endsection
