@php
$page_title =  'Profile';
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
                                        <a href="{{route('user.dashboard')}}">{{trans('frontend.Dashboard')}}</a>
                                    </li>
                                    <li>
                                        <a href="{{route('user.transactions')}}" >{{trans('frontend.Transactions')}}</a>
                                    </li>
                                    <li>
                                        <a href="{{route('user.profile')}}" class="active">{{trans('frontend.Profile')}}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10">
                      <div class="p-4 mt-4 mb-4 border">
                        <form action="{{route('user.update')}}" method="post" enctype="multipart/form-data">

                            @csrf



                            <h3>{{trans('frontend.Information')}}</h3>

                            <div class="mb-3">
                                <label for="formFile" class="form-label">{{trans('frontend.Avatar')}}</label>
                                <div class="upload-preview">
                                    <img src="{{@$user->avatar ? asset(@$user->avatar) : asset('assets/frontend/images/user.png')}}" alt="Avatar" class="avatar-preview">
                                </div>
                                <input class="form-control" name="avatar" type="file" id="formFile" onchange="previewFile(this)">
                            </div>

                            <div class="form-group mb-2">
                                <label for="">{{trans('frontend.Name')}}</label>
                                <input type="text" class="form-control" name="name"
                                     value="{{@$user->name}}">
                            </div>
                            <div class="form-group mb-2">
                                <label for="">{{trans('frontend.Email')}}</label>
                                <input type="email" class="form-control" name="email"
                                     value="{{@$user->email}}" disabled>
                            </div>
                            <div class="form-group mb-2">
                                <label for="">{{trans('frontend.Phone')}}</label>
                                <input type="text" class="form-control" name="phone" required
                                     value="{{@$user->phone}}">
                            </div>
                            <div class="form-group mb-2">
                                <label for="">{{trans('frontend.Password')}}</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <h3 class="mt-4">{{trans('frontend.Address')}}</h3>
                            <div class="form-group mb-2">
                                <label for="">{{trans('frontend.Country')}}</label>
                                <select class="form-control" name="country" >
                                    <option>-- {{trans('frontend.Country')}} ---</option>
                                    @foreach (Countries() as $item)
                                        <option @if (@$user->address->country == $item)
                                            selected
                                        @endif value="{{$item}}"> {{$item}} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mb-2">
                              <label for="">{{trans('frontend.City')}}</label>
                              <input type="text"
                                class="form-control" name="city"   value="{{@$user->address->city}}">
                            </div>
                            <div class="form-group mb-2">
                                <label for="">{{trans('frontend.Postal Code')}}</label>
                                <input type="text"
                                  class="form-control" name="post_code"   value="{{@$user->address->post_code}}">
                              </div>
                              <div class="form-group mb-2">
                                <label for="">{{trans('frontend.Full Address')}}</label>
                                <textarea type="text"
                                  class="form-control" name="address"   value="">{!! @filterTag(clean($user->address->address)) !!}</textarea>
                              </div>
                              <button class="btn btn-theme-colored1 mt-2" type="submit">{{trans('frontend.Save')}}</button>
                        </form>
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

@push('scripts')

<script>
    function previewFile(input){
        var file = $("input[type=file]").get(0).files[0];

        if(file){
            var reader = new FileReader();
            reader.onload = function(){
                $(".avatar-preview").attr("src", reader.result);
            }
            reader.readAsDataURL(file);
        }
    }
</script>

@endpush
