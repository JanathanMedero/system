@extends('layouts.dashboard')

@section('title')
<title>Tabla de clientes de Pyscom</title>
@endsection


@section('content')

<div class="row">
	<div class="col-12">
		<div class="card mb-4">
			<div class="card-body">
				<h4 class="mb-0 text-center"><strong>{{ $client->name }}</strong></h4>
			</div>
		</div>
	</div>
</div>

<div class="row mt-4">
	<div class="col-md-6 col-xl-4">
		<div class="card shadow-none bg-transparent border border-primary mb-3">
			<div class="card-body">
				<h4 class="card-title text-center"><strong>Ordenes de venta</strong></h4>
				<div class="mt-4">
					<button type="button" class="btn btn-success">Nueva orden de venta</button>
				</div>
				@if($client->saleOrder->count() > 0)
				<div class="mt-4">
					<button type="button" class="btn btn-info">Mostrar ordenes de venta</button>
				</div>
				@else
				<p class="card-text mt-4"><strong>Este cliente no tiene ordenes de venta</strong></p>
				@endif
			</div>
		</div>
	</div>

	<div class="col-md-6 col-xl-4">
		<div class="card shadow-none bg-transparent border border-success mb-3">
			<div class="card-body">
				<h4 class="card-title text-center"><strong>Ordenes de servicio</strong></h4>
				<div class="mt-4">
					<button type="button" class="btn btn-success">Nueva orden de servicio</button>
				</div>
				@if($client->serviceOrder->count() > 0)
				<div class="mt-4">
					<button type="button" class="btn btn-info">Mostrar ordenes de servicio</button>
				</div>
				@else
				<p class="card-text mt-4"><strong>Este cliente no tiene ordenes de servicio</strong></p>
				@endif
			</div>
		</div>
	</div>

	<div class="col-md-6 col-xl-4">
		<div class="card shadow-none bg-transparent border border-warning mb-3">
			<div class="card-body">
				<h4 class="card-title text-center"><strong>Ordenes de servicio en sitio</strong></h4>
				<div class="mt-4">
					<button type="button" class="btn btn-success">Nueva orden de servicio en sitio</button>
				</div>
				@if($client->serviceSite->count() > 0)
				<div class="mt-4">
					<button type="button" class="btn btn-info">Mostrar ordenes de servicio en sitio</button>
				</div>
				@else
				<p class="card-text mt-4"><strong>Este cliente no tiene ordenes de servicio en sitio</strong></p>
				@endif
			</div>
		</div>
	</div>
</div>

@endsection