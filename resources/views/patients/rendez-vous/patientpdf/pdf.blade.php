@php
use Carbon\Carbon;
@endphp
<!DOCTYPE html>
<html lang="zxx" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hôpital Régional de Labe</title>
    <link href="https://up2client.com/envato/digital-invoice-2.0/main-file/assets/images/logo/Fevicon.ico" rel="icon">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('pdfassets/css/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('pdfassets/css/media-query.css') }}">
    <link href="{{ asset('assets/build/assets/iconfonts/icons.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Invoice Wrap Start here -->
    <div class="invoice-wrap">
        <div class="invoice-container">

            <div class="invoice-content-wrap" id="download_section">
                <div class="invoice-owner-conte-wra" style="text-align: center">
                       <div class="invoice-to-content">
                           <h3 class="invo-to inter-700 medium-font mtb-2">RECU DE RENDEZ VOUS :</h3>
                        </div>
                </div>
                <!--Invoice content start here -->
                <section class="agency-service-content hotel-booking-content" id="hotel_invoice">
                    <div class="container">
                        <!--invoice owner name content -->
                        <div class="row">
                            <div class="invoice-owner-conte-wra" style="text-align: center">
                                 <div class="invoice-to-content">
                                     <p class="invo-to inter-700 medium-font mtb-2">INFORMATION MEDECIN:</p>
                                </div>
                             </div>
                            <div class="col-md-5">
                                <table class="table-info">
                                    <tr>
                                        <th>Nom et Prenom du Medecin</th>
                                        <th>Telehone</th>
                                    </tr>
                                    <tr>
                                        <td>{{ $rendezvous->medecin->user->prenom }} {{ $rendezvous->medecin->user->nom }}</td>
                                        <td>{{ $rendezvous->medecin->user->telephone }}</td>

                                    </tr>
                                </table>
                            </div>
                            <div class="invoice-owner-conte-wra" style="text-align: center">
                                <div class="invoice-to-content">
                                    <p class="invo-to inter-700 medium-font mtb-2">INFORMATION PATIENT:</p>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <table class="table-info">
                                    <tr>
                                        <th>Nom et Prenom du patient</th>
                                        <th>Telehone</th>
                                    </tr>
                                    <tr>
                                        <td>{{ $rendezvous->patient->user->prenom }} {{ $rendezvous->patient->user->nom }}</td>
                                        <td>{{ $rendezvous->patient->user->telephone }}</td>

                                    </tr>
                                </table>

                            </div>
                        </div>
                        <!--invoice owner name end here -->

                        <!--Booking Information start here -->
                        <div class="invoice-owner-conte-wra" style="text-align: center">
                            <div class="invoice-to-content">
                                <p class="invo-to inter-700 medium-font mtb-2">DÉTAILS DU RENDEZ-VOUS :</p>
                            </div>
                        </div>
                        <div class="invo-hotel-book-wrap">
                            <div class="booking-content-wrap">
                                <table class="table-info">
                                    <tr>
                                        <th>Jour</th>
                                        <th>Date</th>
                                        <th>Heure</th>
                                        <th>Numéro d'Ordre</th>
                                    </tr>
                                    <tr>
                                        <td>{{ Carbon::parse($rendezvous->dateRdv)->translatedFormat('l') }}</td>
                                        <td>{{ Carbon::parse($rendezvous->dateRdv)->format('d/m/Y') }}</td>
                                        <td>{{ Carbon::parse($rendezvous->heure)->format('H:i') }}</td>
                                        <td>{{ $orderNumber }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!--Booking Information end here -->
                          <!--QR Code Start here -->
                       <!-- QR Code Start here -->
                        <div class="invoice-owner-conte-wrap" style="text-align: center; margin-top: 20px;">
                            <div class="invoice-to-content">
                                <p class="invo-to inter-700 medium-font mtb-2">Vérification de la sécurité:</p>
                                <div>
                                    <img src="data:image/png;base64, {!! base64_encode($qrCode) !!}" alt="QR Code">
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <!--Invoice content end here -->
            </div>
        </div>
    </div>
    <!-- Invoice Wrap End here -->
    <style>
        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .invoice-wrap {
            padding: 20px;
        }
        .invoice-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-bottom: 20px;
            border-bottom: 1px solid #ddd;
        }
        .invoice-logo img {
            max-width: 150px;
        }
        .invoice-header-contact {
            text-align: right;
        }
        .invoice-content-wrap {
            margin-top: 20px;
        }
        .invoice-to-content, .invoice-pay-content {
            margin-bottom: 20px;
        }
        .invo-to, .invo-to-owner, .invo-owner-address {
            margin: 0;
        }
        .invoice-owner-conte-wrap {
            margin-bottom: 20px;
        }
        .invo-book-detail {
            margin-bottom: 10px;
        }
        .table-info {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 18px;
            text-align: left;
        }

        .table-info th, .table-info td {
            border: 1px solid #dddddd;
            padding: 8px;
        }

        .table-info th {
            background-color: #f2f2f2;
        }
    </style>
</body>
</html>
