@extends('en_tete.entete_patient')
@section('contenu')
<div class="main-container container-fluid">
   <!-- Start::Row-1 -->
   <div class="row">
      <div class="col-xxl-9">
         <div class="row">
            <div class="col-xxl-5 col-xl-12">
               <div class="row">
                  <div class="row container-fluid">
                     <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xxl-6">
                        <div class="card">
                           <div class="card-body">
                              <div class="d-flex align-items-start">
                                 <div class="flex-grow-1">
                                    <p class="mb-0">Mes Rendez Vous</p>
                                    <span class="fs-5">{{ $rendezVous->count() }}</span>
                                 </div>
                                 <div class="min-w-fit-content ms-3">
                                    <span class="avatar avatar-md br-5 bg-primary-transparent text-primary">
                                    <i class="fe fe-align-inset-inline-end fs-18"></i>
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
                                    <p class="mb-0">Acceptés</p>
                                    <span class="fs-5">{{ $rendezVousAcceptes->count() }}</span>
                                 </div>
                                 <div class="min-w-fit-content ms-3">
                                    <span class="avatar avatar-md br-5 bg-primary-transparent text-primary">
                                    <i class="fe fe-check-circle"></i>
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
                                    <p class="mb-0">Annuler</p>
                                    <span class="fs-5">{{  $rendezVousRejettes->count() }}</span>
                                 </div>
                                 <div class="min-w-fit-content ms-3">
                                    <span class="avatar avatar-md br-5 bg-secondary-transparent text-secondary">
                                    <i class="fe fe-shield-off"></i>
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
                                    <p class="mb-0">En attentes </p>
                                    <span class="fs-5">{{ $rendezVousEnAttente->count() }}</span>
                                 </div>
                                 <div class="min-w-fit-content">
                                    <span class="avatar avatar-md br-5 bg-warning-transparent">
                                    <i class="fe fe-arrow-up-inset-inline-end"></i>
                                    </span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Other cards -->
               </div>
            </div>
         </div>
      </div>
       <div class="row">
         <div class="col-lg-12 col-xl-6">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card tx-fixed-white card-bg-img">
                        <div class="card-body position-relative d-flex justify-content-between">
                            <div>
                                <div class="flex-grow-1">
                                    <p>Dossier Médical</p>
                                </div>
                               <span class="fs-4">{{ isset($dossier_count) ? $dossier_count : '0' }}</span>
                                  {{-- <span class="fs-4">0</span> --}}
                                <span class="fs-12 op-9 ms-1 d-inline-flex align-items-center"><i class="ti ti-trending-up me-1"></i>0.5%</span>
                            </div>
                            <div class="min-w-fit-content">
                                <div class="h-60 w-60p">
                                    <img src="{{ asset('assets/build/assets/images/png/6.png') }}" class="op-8" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card overfl">
                        <div class="card-body">
                            <div class="d-fle">
                                <div class="mt-2">
                                    <h6 class="">Total Témoignage</h6>
                                       <h3 class="mb-0">{{ isset($temoignages_count) ? $temoignages_count : '0' }}</h3>

                                </div>
                                <div class="ms-auto">
                                    <div id="w"></div>
                                </div>
                            </div>
                            <span class="text-muted fs-12"><span class="text-secondary"><i class="fe fe-arrow-up-circle text-secondary"></i> 5%</span> Dernière Semaine</span>
                        </div>
                    </div>
                </div>

               <div class="col-lg-6">
                  <div class="card tx-fixed-white card-bg-img card-img-secondary">
                     <div class="card-body position-relative d-flex justify-content-between">
                        <div>
                           <div class="flex-grow-1">
                              <p>Statistique d'article publié</p>
                           </div>
                            <span class="fs-4">{{ isset($actualite_count) ? $actualite_count : '0' }}</span>

                           <span class="fs-12 op-9 ms-1 d-inline-flex align-items-center"><i class="ti ti-trending-up me-1"></i>0.5%</span>
                        </div>
                        <div class="min-w-fit-content">
                           <div class="h-60 w-60p">
                              <img src="{{ asset('assets/build/assets/images/png/6.png') }}" class="op-8" alt="img">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card overflow-hidden">
                     <div class="card-body">
                        <div class="d-flex">
                           <div class="mt-2">
                              <h6 class="">Total Ordonnance</h6>
                               <h3 class="mb-0">{{ isset($ordonnances_count) ? $ordonnances_count : '0' }}</h3>

                           </div>
                           <div class="ms-auto">
                              <div id="total-orders"></div>
                           </div>
                        </div>
                        <span class="text-muted fs-12"><span class="text-secondary"><i class="fe fe-arrow-up-circle  text-secondary"></i> 5%</span>
                        Dernière Semaine</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-12 col-xl-6">
            <div class="row">
               <div class="col-lg-6">
                  <div class="card">
                     <div class="card-body">
                        <div class="d-flex align-items-center mb-3 flex-wrap">
                           <span class="avatar avatar-md stat-avatar rounded-circle text-bg-warning fs-18 min-w-fit-content me-2">
                           <i class="fa fa-group"></i>
                           </span>
                           <p class="mb-0 flex-grow-1 text-gray-600">Total Medecin</p>
                          <span class="fs-5">{{ isset($medecin_count) ? $medecin_count : '0' }}</span>

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
