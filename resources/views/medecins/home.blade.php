@extends('en_tete.entete_medecin')

@section("contenu")
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start">
                    <div class="flex-grow-1">
                        <p class="mb-0 text-gray-600">Total Rendez-Vous</p>
                        <span class="fs-5">{{$rendezVousMedecin->count()}}</span>
                        <span class="fs-12 text-success ms-1"> <i class="fe fe-align-inset-inline-end fs-18"></i>
                    </div>
                    <div class="min-w-fit-content ms-3">
                        <span class="avatar avatar-md br-5 bg-primary-transparent text-primary">
                            <i class="fe fe-user fs-18"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start">
                    <div class="flex-grow-1">
                        <p class="mb-0 text-gray-600"> Acceptés</p>
                        <span class="fs-5">{{$rendezVousAcceptesMedecin->count()}}</span>
                        <span class="fs-12 text-primary ms-1"> <i class="fe fe-check-circle"></i></span>
                    </div>
                    <div class="min-w-fit-content ms-3">
                        <span class="avatar avatar-md br-5 bg-primary-transparent text-primary">
                            <i class="fe fe-package fs-18"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start">
                    <div class="flex-grow-1">
                        <p class="mb-0 text-gray-600"> Annulés</p>
                        <span class="fs-5">{{$rendezVousRejettesMedecin->count()}}</span>
                        <span class="fs-12 text-secondary ms-1"><i class="ti ti-trending-up mx-1"></i></span>
                    </div>
                    <div class="min-w-fit-content ms-3">
                        <span class="avatar avatar-md br-5 bg-secondary-transparent text-secondary">
                            <i class="fe fe-arrow-up-inset-inline-end"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start">
                    <div class="flex-grow-1">
                        <p class="mb-0 text-warning-600"> En Attente </p>
                        <span class="fs-5">{{$rendezVousEnAttenteMedecin->count()}}</span>
                        <span class="fs-12 text-warning ms-1">
                            <i class="mdi mdi-account-convert mx-1"></i>
                        </span>
                    </div>
                    <div class="min-w-fit-content ms-3">
                        <span class="avatar avatar-md br-5 bg-info-warning">
                            <i class="mdi mdi-account-convert fs-18"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xxl-2 col-xl-6">
        <div class="card bg-primary custom-card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-fill">
                        <p class="mb-1 fs-5 fw-semibold tx-fixed-white">{{$medecincountMedecin->count()}}</p>
                        <p class="mb-0 text-muted">Nombre Total Des Medecins</p>
                        {{-- <p class="mb-0 fs-11"><a href="{{route('medecins.monequipe.index')}}" class="text-success text-decoration-underline">Voir tous</a></p> --}}
                    </div>
                    <div class="ms-2">
                        <span class="avatar tx-fixed-white rounded-circle fs-20"><i class="bi bi-people-fill"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="card text-center">
            <div class="card-body">
                <div class="avatar bg-primary-transparent rounded-circle fs-20 mb-3">
                    <img src="{{asset('storage/'.Auth::user()->photo)}}" class="rounded-circle"  style="height: 50px; width:70px"  alt="profile">
                    {{-- <i class="bi bi-file-earmark-text  project  mx-auto text-secondary "></i> --}}
                </div>
                <h6 class="mb-1 text-muted">{{ Auth::user()->name }} </h6>
                <p class="mb-0 fs-11"><a href="{{route('profilee.edit')}}" class="text-success text-decoration-underline">Mon Profile</a></p>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xxl-2 col-xl-6">
        <div class="card bg-primary img-card box-primary-shadow">
            <div class="card-body">
                <div class="d-flex">
                    <div class="tx-fixed-white">
                        <h2 class="mb-0 number-font">{{$patientCountMedecin->count()}}</h2>
                        <p class="mb-0">Total Patients </p>
                    </div>
                    <div class="ms-auto tx-fixed-white"> <i class="fa fa-user-o fs-30 me-2 mt-2"></i> </div>
                </div>
            </div>
        </div>
        <div class="card bg-secondary img-card box-secondary-shadow">
            <div class="card-body">
                <div class="d-flex">
                    <div class="tx-fixed-white">
                        <h2 class="mb-0 number-font">{{$consultationsCount}}</h2>
                        <p class="mb-0">Total Consultations</p>
                    </div>
                    <div class="ms-auto tx-fixed-white"> <i class="wi wi-earthquake fs-30 ms-2 mt-2"></i> </div>
                </div>
            </div>
        </div>
        <div class="card  bg-success img-card box-success-shadow">
            <div class="card-body">
                <div class="d-flex">
                    <div class="tx-fixed-white">
                        <h2 class="mb-0 number-font">{{$personnelcount->count()}}</h2>
                        <p class=" mb-0">Total Personnels</p>
                    </div>
                    <div class="ms-auto tx-fixed-white"> <i class="fa fa-user-o fs-30 me-2 mt-2"></i> </div>
                </div>
            </div>
        </div>
    </div>
</div>
 @endsection



