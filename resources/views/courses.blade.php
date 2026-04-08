@extends('layout')

@section('title', 'Courses')

@section('content')
<div class="container">
    <h2>IT Department Courses</h2>
    <p style="color: var(--text-light); margin: 1rem 0;">Browse courses offered by the Information Technology Department</p>
    
    @if($courses->isEmpty())
        <p style="text-align: center; color: var(--text-light); padding: 2rem;">No courses available at the moment.</p>
    @else
        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 2rem; margin-top: 2rem;">
            @foreach($courses as $course)
                <div style="border-left: 4px solid var(--secondary-color); background-color: #f9f9f9; border-radius: 4px; padding: 1.5rem; box-shadow: 0 2px 4px rgba(0,0,0,0.08); transition: box-shadow 0.3s;" class="course-card">
                    <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 1rem;">
                        <h3 style="margin: 0; color: var(--primary-color); flex: 1;">{{ $course->name }}</h3>
                        <span style="background-color: var(--secondary-color); color: white; padding: 0.25rem 0.75rem; border-radius: 20px; font-size: 0.8rem; font-weight: bold; white-space: nowrap; margin-left: 0.5rem;">{{ $course->code }}</span>
                    </div>
                    
                    <p style="margin: 0.5rem 0; font-size: 0.9rem; color: var(--text-light);">
                        <strong>Credits:</strong> {{ $course->credits }}
                    </p>
                    
                    @if($course->prerequisites)
                        <p style="margin: 0.5rem 0; font-size: 0.9rem; color: var(--text-light);">
                            <strong>Prerequisites:</strong> {{ $course->prerequisites }}
                        </p>
                    @endif
                    
                    @if($course->description)
                        <p style="margin: 1rem 0 0 0; padding-top: 1rem; border-top: 1px solid #ddd; font-size: 0.9rem; color: var(--text-dark); line-height: 1.6;">
                            {{ Str::limit($course->description, 150) }}
                        </p>
                    @endif
                </div>
            @endforeach
        </div>
    @endif
</div>

<style>
    .course-card:hover {
        box-shadow: 0 4px 12px rgba(0,0,0,0.12);
    }
</style>
@endsection
