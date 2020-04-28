@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Listing <a  href="/dashboard" class="float-right btn btn-dark btn-sm">Go back</a></div>
 
             <div class="card-body">
             {!! Form::open(['action'=>'ListingsController@store','method'=>'POST'])!!}

             {{Form::bsText('name','',['placeholder'=>'Company Name'])}}
             {{Form::bsText('address','',['placeholder'=>'Business Address'])}}
             {{Form::bsText('website','',['placeholder'=>'Company website'])}}
             {{Form::bsText('email','',['placeholder'=>'Contact Email'])}}
             {{Form::bsText('phone','',['placeholder'=>'Contact Phone'])}}
             {{Form::bsTextArea('bio','',['placeholder'=>'About This Business'])}}
             {{Form::bsSubmit('submit',['class'=>'btn btn-primary'])}}


             {!! Form::close()!!}
             

                   
                </div>
            </div>
        </div>
    </div>

@endsection