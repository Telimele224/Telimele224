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
    <!--Invoice Wrap Start here -->
    <div class="invoice_wrap">
        <div class="invoice-container">
            <div class="invoice-content-wrap" id="download_section">
                <!--Header Start Here -->
                <header class="invoice-header text-invoice content-min-width" id="invo_header">
                    <div class="invoice-logo-content">
                        <div class="invoice-logo">
                            <img src="{{ asset('logo/PdfSideBare.png') }}" alt="invoice logo" style="margin-right: 20%" width="100%">
                        </div>
                    </div>
                    <div class="invoice-header-contact">
                        <div class="invo-cont-wrap invo-contact-wrap">
                            <div class="invo-social-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_6_94)">
                                        <path d="M5 4H9L11 9L8.5 10.5C9.57096 12.6715 11.3285 14.429 13.5 15.5L15 13L20 15V19C20 19.5304 19.7893 20.0391 19.4142 20.4142C19.0391 20.7893 18.5304 21 18 21C14.0993 20.763 10.4202 19.1065 7.65683 16.3432C4.8935 13.5798 3.23705 9.90074 3 6C3 5.46957 3.21071 4.96086 3.58579 4.58579C3.96086 4.21071 4.46957 4 5 4" stroke="#00BAFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M15 7C15.5304 7 16.0391 7.21071 16.4142 7.58579C16.7893 7.96086 17 8.46957 17 9" stroke="#00BAFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M15 3C16.5913 3 18.1174 3.63214 19.2426 4.75736C20.3679 5.88258 21 7.4087 21 9" stroke="#00BAFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_6_94">
                                            <rect width="24" height="24" fill="white"></rect>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div class="invo-social-name">
                                <a href="tel:+12345678899" class="invo-hedaer-contact inter-400">+224 620 00 00 00</a>
                            </div>
                        </div>
                        <div class="invo-cont-wrap">
                            <div class="invo-social-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_6_108)">
                                        <path d="M19 5H5C3.89543 5 3 5.89543 3 7V17C3 18.1046 3.89543 19 5 19H19C20.1046 19 21 18.1046 21 17V7C21 5.89543 20.1046 5 19 5Z" stroke="#00BAFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M3 7L12 13L21 7" stroke="#00BAFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_6_108">
                                            <rect width="24" height="24" fill="white"></rect>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div class="invo-social-name">
                                <a href="mailto:contact@invoice.com" class="invo-hedaer-mail inter-400">contact@hopitalregionaldelabe.com</a>
                            </div>
                        </div>
                    </div>
                </header>
                <!--Header End Here -->
                <!--Invoice content start here -->
                <section class="agency-service-content hotel-booking-content" id="hotel_invoice">
                    <div class="container">
                        <!--invoice owner name content -->
                        <div class="invoice-owner-conte-wrap">
                            <div class="invo-to-wrap">
                                <div class="invoice-to-content">
                                    <p class="invo-to inter-700 medium-font mtb-0">Information Patient:</p>
                                    <h1 class="invo-to-owner inter-700 md-lg-font">{{ $rendezvous->patient->user->prenom }} {{ $rendezvous->patient->user->nom }} </h1>
                                    <p class="invo-owner-address medium-font inter-400 mtb-0"> <strong> Age :</strong> {{ $rendezvous->patient->user->age }} <br>  <strong>Téléphone :</strong>{{ $rendezvous->patient->user->telephone }}</p>
                                </div>
                            </div>
                            <div class="invo-pay-to-wrap">
                                <div class="invoice-pay-content">
                                    <p class="invo-to inter-700 medium-font mtb-0">Information du Medecin:</p>
                                    <h2 class="invo-to-owner inter-700 md-lg-font"> {{ $rendezvous->medecin->user->prenom }} {{ $rendezvous->medecin->user->nom }}</h2>
                                    <p class="invo-owner-address medium-font inter-400 mtb-0"> <strong>Télphone :</strong> {{$rendezvous->medecin->user->telephone}}<br> <strong>Email :</strong> {{ $rendezvous->medecin->user->email }}</p>
                                </div>
                            </div>
                        </div>
                        <!--invoice owner name end here -->

                        <!--Rendez-vous details start here -->
                        <div class="invoice-owner-conte-wra">
                            <div class="invoice-to-content" style="text-align: center">
                                <p class="invo-to inter-700 medium-font mtb-2 " >Détails du Rendez-vous:</p>
                            </div>
                        </div>
                        <div class="invo-hotel-book-wrap">
                            <div class="booking-content-wrap">

                                <div class="invo-book-detail detail-col">
                                    <span class="invo-hotel-title nights inter-700 b-text">Service :</span><br>
                                    <span class="invo-hotel-desc second-color">{{ $rendezvous->medecin->service->nom }}</span>
                                </div>
                                <div class="invo-book-detail detail-col">
                                    <span class="invo-hotel-title nights inter-700 b-text">Jour :</span><br>
                                    <span class="invo-hotel-desc second-color">{{ Carbon::parse($rendezvous->dateRdv)->translatedFormat('l') }}</span>
                                </div>
                                <div class="invo-book-detail detail-col">
                                    <span class="invo-hotel-title nights inter-700 b-text">Date :</span><br>
                                    <span class="invo-hotel-desc second-color">{{ Carbon::parse($rendezvous->dateRdv)->format('d/m/Y') }}</span>
                                </div>
                                <div class="invo-book-detail detail-col">
                                    <span class="invo-hotel-title nights inter-700 b-text">Heure :</span><br>
                                    <span class="invo-hotel-desc second-color">{{ Carbon::parse($rendezvous->heure)->format('H:i') }}</span>
                                </div>
                                <div class="invo-book-detail detail-col">
                                    <span class="invo-hotel-title nights inter-700 b-text">Numéro d'Ordre :</span><br>
                                    <span class="invo-hotel-desc second-color">{{ $orderNumber }}</span>
                                </div>
                            </div>
                        </div>
                        <!--Rendez-vous details end here -->

                        <!--QR Code Start here -->
                        <div class="invoice-owner-conte-wrap" style="text-align: center; margin-top: 20px;">
                            <div class="invoice-to-content">
                                <p class="invo-to inter-700 medium-font mtb-2">Vérification de la sécurité:</p>
                                <div>
                                    {!! $qrCode !!}
                                </div>
                            </div>
                        </div>
                        <!--QR Code End here -->

                    </div>
                </section>
                <!--Invoice content end here -->
            </div>
            <!--bottom content start here -->
            <section class="agency-bottom-content d-print-none" id="agency_bottom">
                <div class="container">
                    <!--print-download content start here -->
                    <div class="invo-buttons-wrap">
                        <div class="invo-print-btn invo-btns">
                            <a href="javascript:window.print()" class="print-btn">
                                <span class="ion ion-printer">&nbsp;&nbsp;&nbsp;Imprimer</span>
                            </a>
                        </div>
                        <div class="invo-down-btn invo-btns">
                            <a class="download-btn" id="generatePDF" href="{{ route('patient_rdv.generatepatientpdf') }}">
                                <span class="fa fa-file-pdf-o">&nbsp;&nbsp;&nbsp;Pdf</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!--bottom content end here -->
        </div>
    </div>
    <!--Invoice Wrap End here -->
    <script src="{{ asset('pdfassets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('pdfassets/js/jspdf.min.js') }}"></script>
    <script src="{{ asset('pdfassets/js/html2canvas.min.js') }}"></script>
    <script src="{{ asset('pdfassets/js/custom.js') }}"></script>
</body>

</html>
