<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Site Visit Request</title>
</head>
<body style="margin: 0; padding: 0; background: #f3f4f6; font-family: 'Segoe UI', 'Helvetica Neue', Helvetica, Arial, sans-serif;">

    <table width="100%" cellpadding="0" cellspacing="0" style="background: #f3f4f6; padding: 40px 0;">
        <tr>
            <td align="center">
                <table width="600" cellpadding="0" cellspacing="0" style="background: #ffffff; border-radius: 8px; box-shadow: 0 2px 15px rgba(0,0,0,0.07); overflow: hidden;">

                    <!-- Header -->
                    <tr>
                        <td style="background-color: #6b46c1; padding: 30px 20px; color: #ffffff; text-align: center;">
                            <h1 style="margin: 0; font-size: 24px;">New Site Visit Request</h1>
                            <p style="margin: 5px 0 0; font-size: 14px;">You’ve received a new message via your website</p>
                        </td>
                    </tr>

                    <!-- Content Section -->
                    <tr>
                        <td style="padding: 30px 40px; color: #333;">
                            <table width="100%" style="font-size: 16px; line-height: 1.6;">
                                <tr>
                                    <td style="padding: 10px 0; border-bottom: 1px solid #e5e7eb;">
                                        <strong>Name:</strong><br>{{ $data['name'] }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 10px 0; border-bottom: 1px solid #e5e7eb;">
                                        <strong>Email:</strong><br>{{ $data['email'] }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 10px 0; border-bottom: 1px solid #e5e7eb;">
                                        <strong>Phone:</strong><br>{{ $data['phone'] }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 10px 0; border-bottom: 1px solid #e5e7eb;">
                                        <strong>Preferred Time:</strong><br>{{ $data['time'] }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 10px 0;">
                                        <strong>Message:</strong><br>{{ $data['message'] }}
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="background-color: #f9fafb; padding: 20px 30px; text-align: center; font-size: 13px; color: #888;">
                            <p style="margin: 0;">This email was sent automatically from the <strong>Shubh Anandam</strong> website.</p>
                            <p style="margin: 0;">Need help? <a href="mailto:support@shubhanandam.com" style="color: #6b46c1; text-decoration: none;">Contact Support</a></p>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>

</body>
</html>
