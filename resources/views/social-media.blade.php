@extends('layout')

@section('title', 'Social Media')

@section('content')
<div class="container">
    <h2>Follow UCC IT Department</h2>
    <p style="color: var(--text-light); margin: 1rem 0;">Stay connected with us on social media for the latest updates, news, and announcements.</p>
    
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin: 2rem 0;">
        <!-- Facebook -->
        <div style="border: 1px solid #ddd; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
            <div style="background: linear-gradient(135deg, #003d82, #00a3e0); padding: 1.5rem; color: white;">
                <h3 style="margin: 0; display: flex; align-items: center; gap: 0.5rem;">📘 Facebook</h3>
            </div>
            <div style="padding: 1.5rem;">
                <p style="color: var(--text-light); margin-bottom: 1rem;">Follow our official Facebook page for updates and announcements.</p>
                <a href="https://www.facebook.com/uccjamaica" target="_blank" class="btn" style="background-color: #4267B2;">Visit Facebook</a>
            </div>
        </div>
        
        <!-- Twitter -->
        <div style="border: 1px solid #ddd; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
            <div style="background: linear-gradient(135deg, #1DA1F2, #1a91da); padding: 1.5rem; color: white;">
                <h3 style="margin: 0; display: flex; align-items: center; gap: 0.5rem;">𝕏 Twitter / X</h3>
            </div>
            <div style="padding: 1.5rem;">
                <p style="color: var(--text-light); margin-bottom: 1rem;">Get real-time updates and engage with our community on Twitter.</p>
                <a href="https://x.com/UCCjamaica" target="_blank" class="btn" style="background-color: #1DA1F2;">Visit Twitter</a>
            </div>
        </div>
        
        <!-- Instagram -->
        <div style="border: 1px solid #ddd; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
            <div style="background: linear-gradient(135deg, #E4405F, #f5576c); padding: 1.5rem; color: white;">
                <h3 style="margin: 0; display: flex; align-items: center; gap: 0.5rem;">📷 Instagram</h3>
            </div>
            <div style="padding: 1.5rem;">
                <p style="color: var(--text-light); margin-bottom: 1rem;">See photos and stories from our campus life and events.</p>
                <a href="https://www.instagram.com/uccjamaica/?hl=en" target="_blank" class="btn" style="background-color: #E4405F;">Visit Instagram</a>
            </div>
        </div>
    </div>
    
    <div style="background-color: var(--bg-light); padding: 2rem; border-radius: 8px; margin-top: 2rem; border-left: 4px solid var(--accent-color);">
        <h3 style="margin-top: 0;">📱 Stay Connected</h3>
        <p style="color: var(--text-dark); line-height: 1.8;">
            By following us on social media, you'll get access to:
            <ul style="margin: 1rem 0; padding-left: 1.5rem;">
                <li>📢 Latest news and announcements</li>
                <li>🎓 Career opportunities and internships</li>
                <li>📸 Campus events and student highlights</li>
                <li>💡 Tech tips and industry insights</li>
                <li>🤝 Community engagement activities</li>
            </ul>
        </p>
    </div>
    
    <!-- Social Media Embeds (Optional - uncomment to use) -->
    <div style="margin-top: 3rem; display: none;">
        <h3>Recent Posts</h3>
        
        <!-- Facebook Timeline Widget -->
        <!-- Uncomment to enable:
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v18.0" data-nonce="..."></script>
        <div class="fb-page" data-href="https://www.facebook.com/ucc.edu.jm" data-tabs="timeline" data-width="500" data-height="600" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
        -->
        
        <!-- Twitter Timeline Widget -->
        <!-- Uncomment to enable:
        <a class="twitter-timeline" href="https://twitter.com/ucc_Jamaica" data-tweet-limit="3">Tweets by ucc_Jamaica</a>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        -->
    </div>
</div>
@endsection
