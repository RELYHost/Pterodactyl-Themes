{{-- Pterodactyl - Panel --}}
{{-- Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com> --}}

{{-- This software is licensed under the terms of the MIT license. --}}
{{-- https://opensource.org/licenses/MIT --}}
@extends('layouts.admin')

@section('title')
    Administration
@endsection

@section('content-header')
    <h1>Administrative Overview<small>A quick glance at your system.</small></h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.index') }}">Admin</a></li>
        <li class="active">Index</li>
    </ol>
@endsection

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box
            @if($version->isLatestPanel())
                box-success
            @else
                box-danger
            @endif
        ">
            <div class="box-header with-border">
                <h3 class="box-title">System Information</h3>
            </div>
            <div class="box-body">
                @if ($version->isLatestPanel())
                    The panel is currently <code>{{ config('app.version') }}</code>. No changes needed here ;)
                @else
                    FUCK! The panel is outdated! Give Chris a heads up will ya.
                @endif
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-6 col-sm-3 text-center">
        <a href="https://rely.host/"><button class="btn btn-warning" style="width:100%;"><i class="fa fa-fw fa-support"></i>RELY website</small></button></a>
    </div>
    <div class="col-xs-6 col-sm-3 text-center">
        <a href="https://discord.gg/rayGxFm"><button class="btn btn-primary" style="width:100%;"><i class="fa fa-fw fa-link"></i> RELY discord</button></a>
    </div>
    <div class="clearfix visible-xs-block">&nbsp;</div>

</div>
@endsection
