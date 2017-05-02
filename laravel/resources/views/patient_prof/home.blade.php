@extends('master')
@section('head')
<style type="text/css">
.control-label
{
      font-weight:bold;
}
option,select,textarea
{
      font-weight: normal;
      width: 100%;
}
</style>
@stop
@section('body')
                  <section class="light-gray-bg pv-30 clearfix">
                        <div class="container">
                              <div class="row">
                                    <div class="col-md-3 col-md-offset-1">
                                          <img class="img-responsive" src="{!! '/uploads/'.$user->image !!}" width="100%">
                                    </div>
                                    <div class="col-md-8">
                                          <h2 class="text-center"> <strong>{{$name}}</strong></h2>
                                          <div class="separator"></div>

                                          {{$user->str_address}}</br></br>
                                          {{$user->city}}</br></br>
                                                {{$user->district}}</br></br>
                                          {{$user->state}}</br></br>
                                          {{$user->country}}</br></br>
                                          {{$user->gender}}</br></br>
                                          {{$user->blood_group}}</br></br>
                                          {{$user->identification_mark}}
                                    </div>
                              </div>
                        </div>
                  </section>

@stop