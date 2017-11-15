@extends('_layout')
@section('title','Thông tin tài khoản')
@section('link')
@parent
<meta name="_token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{!! url('public/css/Account/Index.css') !!}">
@stop
@section('content')
<div class="row">
	<div class="col-xs-12 infomation-account">
		<h4 id="h4Infomation">THÔNG TIN TÀI KHOẢN</h4>
		<h4 id="h4Mesage">THÔNG BÁO CỦA TÔI <span>(5)</span></h4>
		<!-- start content -->
		<div id="infomation-content" class="infomation-content">

		</div>
	</div>
</div>
<!-- end row -->
@stop
@section('script')
@parent
<!-- my script -->
<script type="text/javascript" src="{!! url('public/js/Account/index.js') !!}"></script>
@stop