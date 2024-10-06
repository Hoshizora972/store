@extends('layouts.shop')

@section('content')
<x-panier-list :paniers="$paniers"/>
@endsection