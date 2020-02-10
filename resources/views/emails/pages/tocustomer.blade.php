@extends('emails.layouts.main')

@section('content')

	<table cellpadding="0" cellspacing="0" width="100%" role="presentation">
		<tr>
			<td class="align-center">
				<h2>{!! trans('pages/contact.email.customer.title', ['name' => $name]) !!}</h2>
			</td>
		</tr>
		<tr>
			<td class="align-center">
				<img src="{!! asset('style/images/concept/concept5.png'); !!}" class="talk" />
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td class="align-center">
				<p>{!! trans('pages/contact.email.customer.msg01') !!}</p>
				<p>{!! trans('pages/contact.email.customer.msg02') !!}</p>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
		</tr>
	</table>

@stop
