<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Thankyou!</title>
    <style type="text/css">

        @media only screen and (max-width: 600px){
            body{font-size:12px !important;}
            table{width: 1000px;}

        }
    </style>
</head>
<body style="font-family: 'Open Sans', sans-serif; color:#000; font-size:15px;" leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
<table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" style="width:100%;">
    <tr>
        <td  align="center">
            <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" style="max-width:600px; width:100%;">
                <tr>
                    <td>
                        <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" style="width:100%; background-color:#fff; border: 1px solid #ddd;padding: 0px 20px;">
                            <tr style="float:left;width:100%;padding: 20px 0px;">
                                <td style="float:left;width:100%;" align="center">
                                    <a style="" href=""><img style="width: 50%;" src="{{ asset('assets/logo/logo.png') }}"></a>
                                </td>
                            </tr>
                            <tr style="float:left;width:100%;padding-bottom:20px;">
                                <td style="float:left;width:100%;" align="center">
                                    <h1 style="font-size: 40px;margin-top: 0px;margin-bottom: 10px;">New Appointment Created</h1>
                                </td>
                            </tr>
                            <tr style="float:left;width:100%;padding-bottom:20px;">
                                <td style="float:left;width:100%;" align="center">
                                    <p style="line-height: 25px;font-size: 16px;margin-top: 0px;font-style: italic;"><strong>Hi Admin!, </strong> New Appointment Created! Please respond.</p> <br>
                                    @isset($details->service_id)
                                        @php
                                            $service = \App\Models\Service::where('id',$details->service_id)->first();
                                            @endphp
                                        <p style="line-height: 25px;font-size: 16px;margin-top: 0px;font-style: italic;"><strong>Service :</strong>{{$service->service_name ?? ''}}</p>
                                    @endisset
                                    @isset($details->name)
                                    <p style="line-height: 25px;font-size: 16px;margin-top: 0px;font-style: italic;"><strong>Name :</strong>{{$details->name ?? ''}}</p>
                                    @endisset
                                    @isset($details->phone)
                                    <p style="line-height: 25px;font-size: 16px;margin-top: 0px;font-style: italic;"><strong>Phone :</strong>{{$details->phone ?? ''}}</p>
                                    @endisset
                                    @isset($details->email)
                                    <p style="line-height: 25px;font-size: 16px;margin-top: 0px;font-style: italic;"><strong>Email :</strong>{{$details->email ?? ''}}</p>
                                    @endisset
                                    @isset($details->address)
                                    <p style="line-height: 25px;font-size: 16px;margin-top: 0px;font-style: italic;"><strong>Address :</strong>{{$details->address ?? ''}}</p>
                                    @endisset
                                    @isset($details->appointmentDateTime)
                                    <p style="line-height: 25px;font-size: 16px;margin-top: 0px;font-style: italic;"><strong>Appointment Date Time :</strong>{{$details->appointmentDateTime ?? ''}}</p>
                                    @endisset
                                    @isset($details->appointmentDetail)
                                    <p style="line-height: 25px;font-size: 16px;margin-top: 0px;font-style: italic;"><strong>Appointment Detail :</strong>{{$details->appointmentDetail ?? ''}}</p>
                                    @endisset

                                </td>
                            </tr>
                            <tr style="float:left;width:100%;padding-bottom:40px;">
                                <td style="float:left;width:100%;" align="center">
                                    <a style="background: #99ca3b;color: #fff;text-decoration: none;border-radius: 40px;padding: 10px 30px;font-size: 20px;font-weight: 600;" href="{{url('/login')}}">Login</a>
                                </td>
                            </tr>
                            <tr style="float:left;width:100%;padding-bottom:20px;">
                                <td style="float:left;width:100%;" align="left;">
                                    <p style="line-height: 25px;font-size: 16px;margin-top: 0px;font-style: italic;">Thanks,<br><strong>UstadHere</strong></p>
                                </td>
                            </tr>
                            <!--  <tr style="background: #efefef;float:left;width:100%;padding: 20px 0px;">
                                <td style="float:left;width:100%;font-size: 14px;color: #666;" align="center">
                                   <address>
                                      2347, Melbourne. Australia<br>
                                      +123 456 789 000 <br>
                                      ebul@gmail.com
                                   </address>
                                </td>
                             </tr> -->
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>
