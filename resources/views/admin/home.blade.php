@extends('en_tete.entete_administrateurs')
@section('contenu')
<div class="main-container container-fluid">
<!-- Start::Row-1 -->
<div class="row">
<div class="col-xxl-9">
<div class="row">
<div class="col-xxl-5 col-xl-12">
   <div class="row">
      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xxl-6">
         <div class="card">
            <div class="card-body">
               <div class="d-flex align-items-start">
                  <div class="flex-grow-1">
                     <p class="mb-0">ADMINISTRATEUR</p>
                     <span class="fs-5">{{$administrateur->count()}}</span>
                  </div>
                  <div class="min-w-fit-content ms-3">
                     <span
                        class="avatar avatar-md br-5 bg-primary-transparent text-primary">
                     <i class="fe fe-user fs-18"></i>
                     </span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xxl-6">
         <div class="card">
            <div class="card-body">
               <div class="d-flex align-items-start">
                  <div class="flex-grow-1">
                     <p class="mb-0">MEDECINS</p>
                     <span class="fs-5">{{$medecincountMedecinAdmin->count()}}</span>

                  </div>
                  <div class="min-w-fit-content ms-3">
                     <span
                        class="avatar avatar-md br-5 bg-secondary-transparent text-secondary">
                     <i class="bi bi-people-fill fs-18"></i>
                     </span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xxl-6">
         <div class="card">
            <div class="card-body">
               <div class="d-flex align-items-start">
                  <div class="flex-grow-1">
                     <p class="mb-0">PERSONNELS</p>
                     <span class="fs-5">{{$personnelcountAdmin->count()}}</span>

                  </div>
                  <div class="min-w-fit-content ms-3">
                     <span
                        class="avatar avatar-md br-5 bg-warning-transparent text-warning">
                     <i class="bi bi-people-fill  fs-18"></i>
                     </span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xxl-6">
         <div class="card">
            <div class="card-body">
               <div class="d-flex align-items-start flex-wrap gap-1">
                  <div class="flex-grow-1">
                     <p class="mb-0">PAITENTS </p>
                     <span class="fs-5">{{$patientAdmin->count()}}</span>
                  </div>
                  <div class="min-w-fit-content">
                     <span class="avatar avatar-md br-5 bg-info-transparent">
                     <i class="fe fe-user-plus fs-18"></i>
                     </span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xxl-6">
        <div class="card">
           <div class="card-body">
              <div class="d-flex align-items-start">
                 <div class="flex-grow-1">
                    <p class="mb-0">TOTAL RDV </p>
                    <span class="fs-5">{{$rdvAdmin->count()}}</span>
                 </div>
                 <div class="min-w-fit-content ms-3">
                    <span
                       class="avatar avatar-md br-5 bg-primary-transparent text-primary">
                    <i class="mdi mdi-alarm-check fs-18"></i>
                    </span>
                 </div>
              </div>
           </div>
        </div>
     </div>
     <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xxl-6">
        <div class="card">
           <div class="card-body">
              <div class="d-flex align-items-start">
                 <div class="flex-grow-1">
                    <p class="mb-0">TEMOIGNANGE PATIENT </p>
                    <span class="fs-5">{{$temoignageAdmin->count()}}</span>
                 </div>
                 <div class="min-w-fit-content ms-3">
                    <span
                       class="avatar avatar-md br-5 bg-primary-transparent text-primary">
                    <i class="icon icon-bubbles fs-18"></i>
                    </span>
                 </div>
              </div>
           </div>
        </div>
     </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
         <div class="card overflow-hidden">
            <div class="card-body p-0">
               <div class="px-3 pt-3">
                  <div class="d-flex align-items-center mb-3">
                     <span
                        class="avatar avatar-md stat-avatar rounded-circle text-bg-primary fs-18 min-w-fit-content me-2">
                     <i class="bi bi-bar-chart"></i>
                     </span>
                     <p class="mb-0 flex-grow-1">SERVICE</p>
                  </div>
                  <span class="fs-5">{{$serviceAdmin->count()}}</span>
               </div>
               <div id="totalRevenue"></div>
            </div>
         </div>
      </div>
      <div class="col-sm-6 col-xxl-2 col-xl-6">
        <div class="card bg-primary img-card box-primary-shadow">
            <div class="card-body">
                <div class="d-flex">
                    <div class="tx-fixed-white">
                        <h2 class="mb-0 number-font">{{$ordonnceAdmin->count()}}</h2>
                        <p class="mb-0">TOTAL MEDICAMENT PRESCITS</p>
                    </div>
                    <div class="ms-auto tx-fixed-white"> <i class="fa fa-user-o fs-30 me-2 mt-2"></i> </div>
                </div>
            </div>
        </div>
        <div class="card bg-secondary img-card box-secondary-shadow">
            <div class="card-body">
                <div class="d-flex">
                    <div class="tx-fixed-white">
                        <h2 class="mb-0 number-font">{{$consultationAdmin->count()}}</h2>
                        <p class="mb-0">TOTAL CONSULTATION</p>
                    </div>
                    <div class="ms-auto tx-fixed-white"> <i class="wi wi-earthquake fs-30 ms-2 mt-2"></i> </div>
                </div>
            </div>
        </div>
        <div class="card  bg-success img-card box-success-shadow">
            <div class="card-body">
                <div class="d-flex">
                    <div class="tx-fixed-white">
                        <h2 class="mb-0 number-font">{{$personnelcountAdmin->count()}}</h2>
                        <p class=" mb-0">Total Personnels</p>
                    </div>
                    <div class="ms-auto tx-fixed-white"> <i class="fa fa-user-o fs-30 me-2 mt-2"></i> </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xxl-2 col-xl-6">
        <div class="row">
           <div class="col-lg-6">
              <div class="card">
                 <div class="card-body">
                    <div class="d-flex align-items-center mb-3 flex-wrap">
                       <span class="avatar avatar-md stat-avatar rounded-circle text-bg-warning fs-18 min-w-fit-content me-2">
                       <i class="fa fa-group"></i>
                       </span>
                       <p class="mb-0 flex-grow-1 text-gray-600">Total Medecin</p>
                       <span class="fs-5"></span>
                    </div>
                    <span class="fs-5"><img src="{{asset('logo/maldoctor2.svg')}}" alt="Total Medecin"></span>
                 </div>
              </div>
           </div>
           <div class="col-lg-6">
              <div class="card">
                 <div class="card-body p-0">
                    <div class="px-3 pt-3">
                       <div class="d-flex align-items-center mb-3">
                          <span class="avatar avatar-md stat-avatar rounded-circle text-bg-primary fs-18 min-w-fit-content me-2">
                          <i class="bi bi-bar-chart"></i>
                          </span>
                          <p class="mb-0 flex-grow-1">Total d'interaction</p>
                       </div>
                       <span class="text-muted fs-12"><span class="text-secondary"><i class="fe fe-arrow-up-circle  text-secondary"></i> 10%</span>
                          Dernière Semaine</span>
                    </div>
                    <div id="totalRevenue2"></div>
                 </div>
              </div>
           </div>
        </div>
     </div>
   </div>
   <!-- End::Row-1 -->
   <!-- header modal  error  -->
   <div class="row">
      <div class="modal fade" id="customPopupModal" tabindex="-1" role="dialog" aria-labelledby="customPopupModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="customPopupModalLabel">Message</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body" id="customPopupContent">
                  <!-- Contenu du message ici -->
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- CONTAINER END -->
<script>
   $(document).ready(function() {
       // Fonction pour centrer la fenêtre modale
       function centerModal() {
           var $modal = $(this);
           var $dialog = $modal.find('.modal-dialog');

           // Centrer verticalement la fenêtre modale
           var offset = ($(window).height() - $dialog.height()) / 2;
           $dialog.css('margin-top', offset);
       }

       // Centrer la fenêtre modale lorsqu'elle est affichée
       $('.modal').on('shown.bs.modal', centerModal);

       // Centrer la fenêtre modale lorsque la taille de la fenêtre est modifiée
       $(window).on('resize', function() {
           $('.modal:visible').each(centerModal);
       });

       // Vérifier si le message de succès est présent dans la session
       var successMessage = '{{ session()->get('success') }}';
       if (successMessage) {
           // Afficher le message dans la fenêtre modale
           $('#customPopupContent').html('<div class="alert alert-success">' + successMessage + '</div>');
           $('#customPopupModal').modal('show');

           // Cacher la fenêtre modale après 7 secondes
           setTimeout(function() {
               $('#customPopupModal').modal('hide');
           }, 2000);
       }
   });
</script>
@endsection
