@php
$page_title =  'My orders';
@endphp
@extends('frontend.layouts.master')
@section('content')
    <div id="wrapper" class="clearfix">
        <!-- Header -->
        @include(getHeader())
        <!-- Start main-content -->
        <div class="main-content-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <div class="mt-4 mb-4">
                            <div class="user-profile mb-4">
                                <img src="{{@$user->avatar ? asset(@$user->avatar) : asset('assets/frontend/images/user.png')}}" alt="user">
                                <h1 class="user-name"> {{Auth::user()->name}} </h1>
                            </div>
                            <div class="side-nav">
                                <ul>
                                    <li>
                                        <a href="{{route('user.dashboard')}}" class="active">{{trans('frontend.Dashboard')}}</a>
                                    </li>
                                    <li>
                                        <a href="{{route('user.transactions')}}">{{trans('frontend.Transactions')}}</a>
                                    </li>
                                    <li>
                                        <a href="{{route('user.profile')}}">{{trans('frontend.Profile')}}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="table-responsive">
                            <table class="table table-bordered w-100 mt-4 mb-4">
                                <thead class="thead-inverse">
                                    <tr>
                                        <th>{{trans('frontend.#id')}}</th>
                                        <th>{{trans('frontend.Products ')}}</th>
                                        <th>{{trans('frontend.Tax')}}</th>
                                        <th>{{trans('frontend.Shipping')}}</th>
                                        <th>{{trans('frontend.Amount')}}</th>
                                        <th>{{trans('frontend.Status')}}</th>
                                        <th>{{trans('frontend.Date')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($orders as $index=>$order  )
                                        <tr>
                                            <td>
                                                {!! clean( $orders->firstItem() +$index) !!}
                                            </td>
                                            <td>
                                                @foreach ($order->items as $item)
                                                    <div class="order-item d-flex">
                                                        <img class="order-item-image"
                                                            src="{{asset(MediaImage($item->item->image, 1))}}">
                                                        <div class="order-item-name">
                                                            <b>{{@$item->item->name}}</b>
                                                            <br>
                                                            <small>
                                                                {{@$item->item_qty}} x {{GetSetting('site_currency_icon')}} {{@$item->item_price}}
                                                            </small>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </td>
                                            <td>{{GetSetting('site_currency_icon'). ' '. numberFormat($order->tax)}}</td>
                                            <td>{{GetSetting('site_currency_icon'). ' '. numberFormat($order->shipping_fee)}}</td>
                                            <td>{{GetSetting('site_currency_icon'). ' '. numberFormat($order->total_amount)}}</td>
                                            <td>
                                                @if ($order->status == 'pending')
                                                <span class="badge bg-secondary">{{trans('frontend.Pending ')}}</span>
                                                @endif

                                                @if ($order->status == 'shipping')
                                                <span class="badge bg-primary">{{trans('frontend.Shipping')}}</span>
                                                @endif

                                                @if ($order->status == 'cancelled')
                                                <span class="badge bg-danger">{{trans('frontend.Cancelled')}}</span>
                                                @endif

                                                @if ($order->status == 'completed')
                                                <span class="badge bg-success">{{trans('frontend.Complete')}}</span>
                                                @endif
                                            </td>
                                            <td>
                                                {{Carbon\Carbon::parse($order->created_at)->format('Y M h:i a');}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="mb-4">
                                {{$orders->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end main-content -->
        @include(getFooter())
        <a class="scrollToTop" href="javascript::void()"><i class="fa fa-angle-up"></i></a>
    </div>
    <!-- end wrapper -->
@endsection
