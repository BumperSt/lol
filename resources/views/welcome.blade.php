@extends('layouts.master')

@section('content')
    <h1  style="margin-top: 13%;" align="center" >League Of Legends</h1>
    <div align="center">
        <div class="col-lg12">
            <form action="user" align="center" method="GET" style="margin-top: 30%;">
                <input class="form-control" placeholder="Nick.." type="text" name="nick" /><br/>
                <input align="center" class="btn btn-primary btn-lg" type="submit" value="DEMACIA" />
            </form>
        </div>
    </div>
@endsection
