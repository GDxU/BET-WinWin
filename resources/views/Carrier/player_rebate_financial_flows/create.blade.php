@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Player Rebate Financial Flow
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'playerRebateFinancialFlows.store']) !!}

                        @include('player_rebate_financial_flows.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
