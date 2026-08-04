<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>New Message - Bradleys Law</title>
</head>

<body style="margin:0; padding:20px 0; background:#f5f6fa; font-family:'Segoe UI', Arial, Helvetica, sans-serif;">

  <div style="max-width:600px; margin:0 auto; background:#ffffff; border-radius:8px; overflow:hidden; box-shadow:0 4px 12px rgba(0,0,0,0.08);">

    <!-- HEADER WITH GOLDEN ACCENT -->
    <div class="backdrop-blur-xl bg-white/40" style=" padding:25px 20px 20px; text-align:center; position:relative; border-bottom:4px solid #d4af37;">
      <div style="background:#d4af37; width:80px; height:4px; margin:0 auto 15px; border-radius:2px;"></div>
      <img src="https://clgcontractors.com/bradleyslaw%20light.png" 
           alt="Bradleys Law" 
           style="max-height:60px; display:block; margin:0 auto;">
    </div>

    <!-- TITLE BAR -->
    <div style="background:#1a2b4a; color:#ffffff; padding:16px 20px; text-align:center; font-size:18px; font-weight:600; letter-spacing:0.5px; position:relative;">
      <span style="color:#d4af37; margin-right:8px;">✦</span> New Website Message
    </div>

    <!-- CONTENT -->
    <div style="padding:30px 25px;">

      <div style="display:flex; align-items:center; margin-bottom:20px;">
        <div style="background:#0a1a3a; width:4px; height:24px; border-radius:2px; margin-right:12px;"></div>
        <h2 style="color:#0a1a3a; margin:0; font-size:22px; font-weight:600;">
          Message Details
        </h2>
      </div>

      <div style="background:#f8f9fc; border:1px solid #e1e6f0; border-radius:6px; padding:20px; margin-bottom:25px; box-shadow:0 2px 4px rgba(0,0,0,0.03);">
        <div style="display:flex; margin-bottom:15px;">
          <div style="flex:1; padding-right:10px;">
            <p style="margin:0; font-size:14px; color:#2c3e50;">
              <strong style="color:#0a1a3a;">Name:</strong><br>
              <span style="color:#0a1a3a; font-weight:600; font-size:15px;">{{ $data['name'] }}</span>
            </p>
          </div>
          <div style="flex:1; padding-left:10px;">
            <p style="margin:0; font-size:14px; color:#2c3e50;">
              <strong style="color:#0a1a3a;">Email:</strong><br>
              <a href="mailto:{{ $data['email'] }}" 
                 style="color:#0a1a3a; text-decoration:none; font-weight:600; font-size:15px;">
                 {{ $data['email'] }}
              </a>
            </p>
          </div>
        </div>
      </div>

      <div style="display:flex; align-items:center; margin-bottom:15px;">
        <div style="background:#d4af37; width:4px; height:20px; border-radius:2px; margin-right:10px;"></div>
        <h3 style="color:#0a1a3a; margin:0; font-size:18px; font-weight:600;">Message</h3>
      </div>

      <div style="background:#f8f9fc; border-left:4px solid #d4af37; padding:20px; margin-bottom:25px; border-radius:0 4px 4px 0; box-shadow:0 2px 4px rgba(0,0,0,0.03);">
        <p style="margin:0; color:#2c3e50; line-height:1.6; white-space:pre-line; font-size:15px;">
          {{ $data['message'] }}
        </p>
      </div>

      <div style="text-align:center; margin-top:30px; padding-top:20px; border-top:1px solid #eaeef5;">
        <p style="color:#7b8a9c; font-size:13px; margin:0;">
          This message was sent from your Bradleys Law website contact form.
        </p>
      </div>

    </div>

    <!-- FOOTER -->
    <div style="background:#1a1f2e; padding:20px; text-align:center; font-size:12px; color:#a0a8b8; border-top:1px solid #2d3444;">
      <p style="margin:0 0 8px 0;">
        <span style="color:#d4af37; font-weight:600;">Bradleys Law</span> • Professional Legal Services
      </p>
      <p style="margin:0; font-size:11px;">
        © {{ date('Y') }} Bradleys Law. All rights reserved.
      </p>
    </div>

  </div>

</body>
</html>