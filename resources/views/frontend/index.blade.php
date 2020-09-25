@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
    <section class="bg-dark h-full w-full relative pt-12">
        <div class="container w-11/12 mx-auto relative">
            <div class="flex justify-beetwen">
                <img src="{{ asset('img/assets_dev/aegis.png') }}" class="w-80 z-10"/>
            </div>
        </div>
        <img src="{{ asset('img/assets_dev/flek.png') }}" class="absolute z-0 w-80 bottom-0"/>
    </section><!--row-->
@endsection
