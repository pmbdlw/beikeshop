@extends('layout.master')
@section('body-class', 'page-categories-home')

@section('content')
  <div class="container">
    {{ $breadcrumb->render() }}
    <div class="row">
      <div class="col-lg-9 col-12">
        <div class="card mb-4 shadow-sm p-3 h-min-600">
          <div class="card-body">
            @foreach ($active_pages as $page)
              <div>
                <h5 class="card-title mb-2"><a class="text-black" href="{{ shop_route('pages.show', [$page->id]) }}">{{ $page->description->title }}</a></h5>
                <p class="fs-6 mb-3 text-secondary">{{ $page->created_at }}</p>
                @if ($page->description->summary)
                  <p class="card-text mb-3">{{ $page->description->summary ?? '' }}</p>
                @endif
                <div class="text-danger"><a href="{{ shop_route('pages.show', [$page->id]) }}">{{ __('shop/account.check_details') }}<i class="bi bi-arrow-right-short"></i></a></div>
              </div>

              @if (!$loop->last)
                <hr class="my-4">
              @endif
            @endforeach
          </div>
        </div>
      </div>

      @if ($active_page_categories)
        <div class="col-lg-3 col-12">
          <div class="card mb-3 shadow-sm">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h5 class="card-title">{{ __('product.category') }}</h5>
            </div>
            <div class="card-body">
              <ul class="list-group list-group-flush">
                @foreach ($active_page_categories as $category)
                  <li class="list-group-item p-0">
                    <a href="{{ shop_route('page_categories.show', [$category->id]) }}"
                      class="p-2 list-group-item-action nav-link">{{ $category->description->title }}</a>
                  </li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
      @endif
    </div>
  </div>
@endsection
