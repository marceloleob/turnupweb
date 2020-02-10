@extends('emails.layouts.main')

@section('content')

	<table cellpadding="0" cellspacing="0" width="100%" role="presentation">
		<tr>
			<td>
				<h2>{!! trans('pages/contact.email.company.title') !!}</h2>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>
				<p>{!! trans('pages/contact.email.company.name') !!}: {!! $name !!}</p>
				<p>{!! trans('pages/contact.email.company.email') !!}: {!! $email !!}</p>
				<p>{!! trans('pages/contact.email.company.phone') !!}: {!! $phone !!}</p>
				<p>{!! trans('pages/contact.email.company.subject') !!}: {!! $subject !!}</p>
				<p>{!! trans('pages/contact.email.company.text') !!}: {!! nl2br($text) !!}</p>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
		</tr>
	</table>

@stop
