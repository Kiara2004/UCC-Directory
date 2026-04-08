@extends('layout')

@section('title', 'Faculty & Staff Directory')

@section('content')
<div class="container">
    <h2>Faculty & Staff Directory</h2>
    <p style="color: var(--text-light); margin: 1rem 0;">Find contact information for faculty and staff members</p>
    
    @if($staff->isEmpty())
        <p style="text-align: center; color: var(--text-light); padding: 2rem;">No staff members found.</p>
    @else
        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 2rem; margin-top: 2rem;">
            @foreach($staff as $member)
                <div style="border: 1px solid #ddd; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 4px rgba(0,0,0,0.1); transition: transform 0.3s, box-shadow 0.3s;" class="staff-card">
                    @if($member->photo_url)
                        <img src="{{ $member->photo_url }}" alt="{{ $member->name }}" style="width: 100%; height: 200px; object-fit: cover; background-color: var(--bg-light);">
                    @else
                        <div style="width: 100%; height: 200px; background: linear-gradient(135deg, var(--primary-color), var(--accent-color)); display: flex; align-items: center; justify-content: center; color: white; font-size: 3rem;">👤</div>
                    @endif
                    
                    <div style="padding: 1.5rem;">
                        <h3 style="margin: 0 0 0.5rem 0; color: var(--primary-color);">{{ $member->name }}</h3>
                        @if($member->title)
                            <p style="margin: 0 0 0.5rem 0; color: var(--text-light); font-size: 0.9rem;">{{ $member->title }}</p>
                        @endif
                        @if($member->department)
                            <p style="margin: 0 0 1rem 0; color: var(--text-light); font-size: 0.85rem;">{{ $member->department }}</p>
                        @endif
                        
                        <div style="display: flex; flex-direction: column; gap: 0.75rem;">
                            @if($member->email)
                                <a href="mailto:{{ $member->email }}" style="display: flex; align-items: center; gap: 0.5rem; color: var(--accent-color); text-decoration: none; font-size: 0.9rem;">
                                    ✉️ {{ $member->email }}
                                </a>
                            @endif
                            @if($member->phone)
                                <a href="tel:{{ $member->phone }}" style="display: flex; align-items: center; gap: 0.5rem; color: var(--accent-color); text-decoration: none; font-size: 0.9rem;">
                                    📞 {{ $member->phone }}
                                </a>
                            @endif
                        </div>
                        
                        @if($member->bio)
                            <p style="margin: 1rem 0 0 0; padding-top: 1rem; border-top: 1px solid #eee; font-size: 0.85rem; color: var(--text-light);">{{ Str::limit($member->bio, 100) }}</p>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>

<style>
    .staff-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 16px rgba(0,0,0,0.15);
    }
</style>
@endsection
