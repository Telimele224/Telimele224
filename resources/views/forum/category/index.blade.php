{{-- $category is passed as NULL to the master layout view to prevent it from showing in the breadcrumbs --}}
@extends ('forum.master', ['category' => null])

@section ('content')
    <div class="flex flex-row justify-between my-3">
        <h2 class="grow text-3xl font-medium">{{ trans('Bienvenue au forum de discussion de l\'hôpital régional de labé') }}</h2>

        @can ('createCategories')
            <x-forum.button type="button" data-open-modal="Créer catégorie">
                {{ trans('forum::categories.create') }}
            </x-forum.button>

            @include ('forum.category.modals.create')
        @endcan
    </div>

    @foreach ($categories as $category)
        @include ('forum.category.partials.list', ['titleClass' => 'lead'])
    @endforeach
@stop
