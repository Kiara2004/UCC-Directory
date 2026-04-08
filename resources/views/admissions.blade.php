@extends('layout')

@section('title', 'Admissions')

@section('content')
<div class="container">
    <h2>IT Department Admissions</h2>
    
    <div style="background: linear-gradient(135deg, var(--primary-color), var(--accent-color)); color: white; padding: 2rem; border-radius: 8px; margin-bottom: 2rem;">
        <h3 style="margin: 0 0 1rem 0;">Welcome to the UCC IT Program!</h3>
        <p style="margin: 0;">Our Information Technology program prepares students for careers in the rapidly evolving tech industry. We offer cutting-edge curriculum combined with practical hands-on experience.</p>
    </div>
    
    <h3>Admission Requirements</h3>
    <ul style="line-height: 2; color: var(--text-dark);">
        <li>High school diploma or equivalent (CSEC or equivalent qualifications)</li>
        <li>Minimum GPA of 2.5 or equivalent</li>
        <li>Proficiency in English</li>
        <li>Basic Mathematics skills</li>
        <li>Strong interest in Information Technology and problem-solving</li>
        <li>Completed application form with all required documents</li>
        <li>Admission interview (may be required)</li>
    </ul>
    
    <h3 style="margin-top: 2rem;">Required Documents</h3>
    <ul style="line-height: 2; color: var(--text-dark);">
        <li>✅ Official transcripts from high school</li>
        <li>✅ Birth certificate (copy)</li>
        <li>✅ Government-issued ID (copy)</li>
        <li>✅ Two letters of recommendation</li>
        <li>✅ Personal statement (250-500 words)</li>
        <li>✅ Proof of English proficiency (if applicable)</li>
    </ul>
    
    <h3 style="margin-top: 2rem;">Program Duration</h3>
    <p style="font-size: 1.1rem; color: var(--text-dark);">
        <strong>3 Years (6 Semesters)</strong> - Bachelor of Science in Information Technology
    </p>
    
    <h3 style="margin-top: 2rem;">Tuition & Fees</h3>
    <p style="color: var(--text-light); margin-bottom: 1rem;">
        For detailed information on tuition costs, financial aid options, and payment plans, please visit the UCC Admissions Office or contact us.
    </p>
    
    <div style="background-color: #f0f8ff; padding: 1.5rem; border-radius: 8px; border-left: 4px solid var(--accent-color); margin: 2rem 0;">
        <h3 style="margin-top: 0;">Apply Now</h3>
        <p style="margin: 1rem 0;">Ready to start your IT journey? Click the button below to access the complete application form.</p>
        <a href="https://www.ucc.edu.jm/admissions" target="_blank" class="btn" style="display: inline-block; background-color: var(--primary-color);">
            🎓 Apply to UCC IT Program
        </a>
    </div>
    
    <h3 style="margin-top: 2rem;">Contact Information</h3>
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem;">
        <div style="padding: 1rem; background-color: var(--bg-light); border-radius: 8px;">
            <h4 style="margin: 0 0 0.5rem 0; color: var(--primary-color);">📞 Phone</h4>
            <p style="margin: 0; color: var(--text-dark);">+1-876-555-1234</p>
        </div>
        <div style="padding: 1rem; background-color: var(--bg-light); border-radius: 8px;">
            <h4 style="margin: 0 0 0.5rem 0; color: var(--primary-color);">✉️ Email</h4>
            <p style="margin: 0; color: var(--text-dark);"><a href="mailto:admissions@ucc.edu.jm" style="color: var(--accent-color); text-decoration: none;">admissions@ucc.edu.jm</a></p>
        </div>
        <div style="padding: 1rem; background-color: var(--bg-light); border-radius: 8px;">
            <h4 style="margin: 0 0 0.5rem 0; color: var(--primary-color);">🏢 Office</h4>
            <p style="margin: 0; color: var(--text-dark);">Admissions Office, UCC Main Campus</p>
        </div>
    </div>
</div>
@endsection
