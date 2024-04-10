<?php

namespace App\Http\Controllers\Admin;


use App\Http\Requests\Course\StoreCourseRequest;
use App\Http\Requests\Course\UpdateCourseRequest;
use App\Models\Course;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class CourseController extends BaseController
{
    public function __construct()
    {
       parent:: __construct();
    }
    public function index()
    {
        abort_if(
            Gate::denies('course_access'),
            ResponseAlias::HTTP_FORBIDDEN,
            '403 Forbidden | you are not allowed to access this resource'
        );
        $courses = Course::latest()->get();
        return view('admin.course.index', compact('courses'));
    }

    public function create()
    {
        abort_if(
            Gate::denies('course_create'),
            ResponseAlias::HTTP_FORBIDDEN,
            '403 Forbidden | you are not allowed to access this resource'
        );
       return view('admin.course.create');
    }

    public function store(StoreCourseRequest $request)
    {
        abort_if(
            Gate::denies('course_create'),
            ResponseAlias::HTTP_FORBIDDEN,
            '403 Forbidden | you are not allowed to access this resource'
        );
       Course::create($request->validated());
        return redirect(route('admin.course.index'))->with('success', 'Courses Added');

    }

    public function show(Course $course)
    {

    }

    public function edit(Course $course)
    {
        abort_if(
            Gate::denies('course_edit'),
            ResponseAlias::HTTP_FORBIDDEN,
            '403 Forbidden | you are not allowed to access this resource'
        );
        return view('admin.course.edit', compact('course'));
    }

    public function update(UpdateCourseRequest $request, Course $course)
    {
        abort_if(
            Gate::denies('course_edit'),
            ResponseAlias::HTTP_FORBIDDEN,
            '403 Forbidden | you are not allowed to access this resource'
        );
       $course->update($request->validated());
        return redirect(route('admin.course.index'))->with('success', 'Courses Updated');

    }

    public function destroy(Course $course)
    {
        abort_if(
            Gate::denies('course_delete'),
            ResponseAlias::HTTP_FORBIDDEN,
            '403 Forbidden | you are not allowed to access this resource'
        );
        $course->delete();
        return redirect(route('admin.course.index'))->with('success', 'Courses Deleted');
    }
}
