@extends('base')

@section('content')
<div class="form-group">
    <a href="{{url('/')}}" class="btn btn-secondary mb-3"> <i class="fa fa-arrow-left" aria-hidden="true"></i> &nbsp; Back</a>
</div>

<style>
    .form-group a{
        transition: 0.3s;
    }
    .form-group a:hover{
        word-spacing: 1px;
    }
    .form-group a:focus{
        transition: 0.1s;
        word-spacing: 0px;
    }
</style>

    <h1>Create Investor</h1>

    <div class="row">
        <div class="col-md-5">
            <hr>
        {!! Form::open(['url'=>'/investors/create', 'method'=>'post']) !!}

            <div class="form-group">
                {{Form::label('name')}}
                {{Form::text('name', null, ['class'=>'form-control' , 'placeholder'=>'Name'] )}}
            </div>

            <div class="form-group">
                {{Form::label('address')}}
                {{Form::text('address', null, ['class'=>'form-control', 'placeholder'=>'Address'] )}}
            </div>

            <div class="form-group">
                {{Form::label('phone')}}
                {{Form::text('phone', null, ['class'=>'form-control', 'placeholder'=>'Phone'] )}}
            </div>

            <div class="form-group">
                {{Form::label('investment')}}
                {{Form::text('investment', null, ['class'=>'form-control', 'placeholder'=>'00.00'] )}}
            </div>

            <div class="form-group">
                <button class="btn btn-success float-right mt-3">
                    <i class="fa fa-plus" aria-hidden="true"></i> &nbsp; Create Investor
                </button>
            </div>

    {!! Form::close() !!}
        </div>

        <div class="col-md-7">
            @if (count($errors)>0)


                <div class="card">
                    <div class="card-body bg-secondary text-white">
                        <ul>
                            @foreach ($errors->all() as $err)
                                <li>{{$err}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

            @endif
        </div>
    </div>
@endsection
