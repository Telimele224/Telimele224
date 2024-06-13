
<!DOCTYPE html>
<html lang="zxx" dir="ltr">

<!-- Mirrored from up2client.com/envato/digital-invoice-2.0/main-file/Light-Invoice/hotel_booking.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 May 2024 02:56:10 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Hoptial Regional de Labe</title>
	<link href="https://up2client.com/envato/digital-invoice-2.0/main-file/assets/images/logo/Fevicon.ico" rel="icon">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&amp;display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('pdfassets/css/custom.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('pdfassets/css/media-query.css')}}">
    <link href="{{asset('assets/build/assets/iconfonts/icons.css')}}" rel="stylesheet">

</head>
<body>
	<!--Invoice Wrap Start here -->
	<div class="invoice_wrap">
		<div class="invoice-container">
			<div class="invoice-content-wrap" id="download_section">
				<!--Header Start Here -->

				<!--Header End Here -->
				<!--Invoice content start here -->
				<section class="agency-service-content hotel-booking-content" id="hotel_invoice">
					<div class="container">
						<!--invoice owner name content -->
						<div class="invoice-owner-conte-wrap">
							<div class="invo-to-wrap">
								<div class="invoice-to-content">
									<p class="invo-to inter-700 medium-font mtb-0">Information Patient:</p>
									<h1 class="invo-to-owner inter-700 md-lg-font">{{ $patient->nom }} {{ $patient->prenom }} </h1>
									<p class="invo-owner-address medium-font inter-400 mtb-0"> <strong> Age :</strong> {{ $patient->age }} <br>  <strong>Téléphone :</strong>{{ $patient->telephone }}</p>
								</div>
							</div>
							<div class="invo-pay-to-wrap">
								<div class="invoice-pay-content">
									<p class="invo-to inter-700 medium-font mtb-0">Information du Medecin:</p>
									<h2 class="invo-to-owner inter-700 md-lg-font"> {{ $medecin->nom }} {{ $medecin->prenom }}</h2>
									<p class="invo-owner-address medium-font inter-400 mtb-0"> <strong>Télphone :</strong> {{$medecin->telephone}}<br> <strong>Email : {{ $medecin->email }}</strong> </p>
								</div>
							</div>
						</div>
						<!--invoice owner name end here -->

						<!--Booking Information start here -->
                        <div class="invoice-owner-conte-wrap">
                            <div class="invoice-to-content">
                                <p class="invo-to inter-700 medium-font mtb-2">INFORMATION DE LA PRESCRIPTION :</p>
                            </div>
                        </div>
                        @foreach($ordonances as $ordonance)
                        <div class="invo-hotel-book-wrap ">
                            <div class="booking-content-wrap ">
                                <div class="invo-book-detail detail-col">
                                    <span class="invo-hotel-title book-id inter-700 b-text">Nom du Médicament :</span>
                                    <span class="invo-hotel-desc inter-400 second-color"> {{ $ordonance->name }}</span>
                                </div>
                                <div class="invo-book-detail detail-col">
                                    <span class="invo-hotel-title check-in inter-700 b-text">Posologie :</span>
                                    <span class="invo-hotel-desc second-color"> {{ $ordonance->posologie }}</span>
                                </div>
                                <div class="invo-book-detail detail-col">
                                    <span class="invo-hotel-title nights inter-700 b-text">Mode d'utilisation :</span>
                                    <span class="invo-hotel-desc second-color">{{ $ordonance->mode_utilisation }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach

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
							    <span class="ion ion-printer">&nbsp;&nbsp;&nbsp;Imprimmer</span>
							</a>
						</div>
                        <div class="invo-down-btn invo-btns">
                            <a class="download-btn" id="generatePDF"  href="{{route('medecin.pdf')}}">
                                <span class="fa fa-file-pdf-o">&nbsp;&nbsp;&nbsp;Pdf</span>
                            </a>
                        </div>
                        {{-- <div class="invo-down-btn invo-btns">
                            <a class="download-btn" id="generatePDF" href="{{route('export')}}">
                                <span class="ion ion-printer">&nbsp;&nbsp;&nbsp; Excel</span>
                            </a>
                        </div> --}}
					</div>
                </div>
            </section>
            <!--bottom content end here -->
        </div>
    </div>
    <!--Invoice Wrap End here -->
    <script src="{{asset('pdfassets/js/jquery.min.js')}}"></script>
    <script src="{{asset('pdfassets/js/jspdf.min.js')}}"></script>
    <script src="{{asset('pdfassets/js/html2canvas.min.js')}}"></script>
    <script src="{{asset('pdfassets/js/custom.js')}}"></script>
</body>

<!-- Mirrored from up2client.com/envato/digital-invoice-2.0/main-file/Light-Invoice/hotel_booking.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 May 2024 02:56:15 GMT -->
</html>


