<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="ja">
<head>
    <meta http-equiv="Content-Language" content="ja">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title></title>
    <meta http-equiv="Content-Style-Type" content="text/css">
</head>
<body bgcolor="#f4f4f4" link="398bce" marginwidth="0" marginheight="0" style="background:#f4f4f4;margin:0;padding:0">
    <table cellpadding="0" cellspacing="0" border="0" height="100%" width="100%" bgcolor="#f4f4f4" style="border-spacing:0;background:#f4f4f4">
        <tbody>
            <tr>
                <td height="30" style="font-size:0;line-height:0;border-collapse:collapse">&nbsp;</td>
            </tr>
            <tr>
                <td style="border-collapse:collapse">
                    <table border="0" width="80%" cellpadding="0" cellspacing="0" align="center" style="border-spacing:0;background:#ffffff;border:1px solid #e5e5e5" bgcolor="#ffffff">
                        <tbody>
                            <tr>
                                <td style="border-bottom-width:1px;border-bottom-color:#e5e5e5;border-bottom-style:solid;border-collapse:collapse">
                                    <span class="HOEnZb">
                                        <font color="#888888"></font>
                                    </span>
                                    <table border="0" width="100%" cellpadding="0" cellspacing="0" align="center" style="border-spacing:0">
                                        <tbody>
                                            <tr>
                                                <td style="font-family:sans-serif;font-size:16px;line-height:25px;color:#666666;border-collapse:collapse;padding:30px">
                                                    @yield('content')
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <span class="HOEnZb"><font color="#888888"></font></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <span class="HOEnZb">
                        <font color="#888888">
                            <table border="0" width="100%" cellpadding="0" cellspacing="0" align="center" style="border-spacing:0">
                                <tbody>
                                    <tr>
                                        <td style="text-align:center;font-family:Helvetica,Arial,sans-serif;font-size:12px;line-height:18px;color:#888888;border-collapse:collapse;padding:20px 0px 5px" align="center">
                                            <a style="color:#888888; text-decoration: none;" href="{{ route('dashboard') }}" target="_blank">© {{ trans('frontend/labels.site_name') }}</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </font>
                    </span>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>