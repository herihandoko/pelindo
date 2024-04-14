@php
$page_title = trans('admin.Admin | Edit social link');
@endphp
@push('style')
    <link rel="stylesheet" href="{{asset('assets/admin/css/mediamanager.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/css/bootstrap-iconpicker.min.css')}}">

@endpush
@extends('admin.layouts.master')
@section('content')
    {{-- Main Content --}}
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>S{{trans('admin.Edit Social Link')}}</h1>
            </div>
            <a class="btn btn-primary mb-4" href="{{route('admin.social-link.index')}}" role="button"><i class="fas fa-arrow-circle-left    "></i> {{trans('admin.Back')}}</a>
            <div class="section-body">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('admin.social-link.update', $social->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="">{{trans('admin.Link')}}</label>
                                <input type="text" class="form-control" name="link"
                                    value="{{$social->link}}" required>
                            </div>
                            <div class="form-group">
                                <label for="">{{trans('admin.Icon')}}</label>
                                <div id="icon" name="icon"></div>
                            </div>
                            <div class="form-group">
                                <div class="control-label">{{trans('admin.Show on header')}}</div>
                                <label class="custom-switch pl-0 mt-2">
                                    <input type="checkbox" name="on_header" class="custom-switch-input"  @if ($social->on_header == 1) checked @endif>
                                    <span class="custom-switch-indicator"></span>
                                    <span class="custom-switch-description">{{trans('admin.OFF')}} / {{trans('admin.ON')}}</span>
                                </label>
                            </div>
                            <div class="form-group">
                                <div class="control-label">{{trans('admin.Show on footer')}}</div>
                                <label class="custom-switch pl-0 mt-2">
                                    <input type="checkbox" name="on_footer" class="custom-switch-input"  @if ($social->on_footer == 1) checked @endif>
                                    <span class="custom-switch-indicator"></span>
                                    <span class="custom-switch-description">{{trans('admin.OFF')}} / {{trans('admin.ON')}}</span>
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block" href="#" role="button"> {{trans('admin.Save')}} </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @include('admin.layouts.mediaModal')
@endsection
@push('script')
    <script type="text/javascript" src="{{asset('assets/admin/js/bootstrap-iconpicker.bundle.min.js')}}"></script>
    <script>
        $('#icon').iconpicker({
            align: 'left', // Only in div tag
            arrowClass: 'btn-primary',
            arrowPrevIconClass: 'fas fa-angle-left',
            arrowNextIconClass: 'fas fa-angle-right',
            cols: 5,
            footer: true,
            header: true,
            icon: '{{$social->icon}}',
            iconset: 'fontawesome5',
            labelHeader: '{0} of {1} pages',
            labelFooter: '{0} - {1} of {2} icons',
            placement: 'bottom', // Only in button tag
            rows: 5,
            search: true,
            searchText: 'Search',
            selectedClass: 'btn-primary',
            unselectedClass: 'btn-dark',
        });
        $('input[name=icon]').val('{{$social->icon}}');
    </script>
    @include('admin.layouts.mediaJs')
@endpush
