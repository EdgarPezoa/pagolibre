@extends('layouts.pago_libre.backend.master')
@section('title', 'Dashboard')
@section('pageHeader')

@endsection

@section('content')
<div class="content content-boxed">
    <!-- Demo Content -->
    <div class="block block-rounded">
        <div class="block-header">
            <ul class="block-options">
                <li>
                    <button type="button"><i class="si si-settings"></i></button>
                </li>
            </ul>
            <h3 class="block-title">Demo Content</h3>
        </div>
        <div class="block-content block-content-full block-content-narrow">
            <div class="push-30 push-30-t">
                {{ print_r($response) }}
            </div>
        </div>
    </div>
    <!-- END Demo Content -->
</div>
@endsection