@extends('layouts.main')
@section('layouts.content')
    <!-- contact section -->
<div id="contact">
	<div class="container">
		<div class="row">
            <table border="2" bordercolor ="Pink" align="center" length="1000px" width="1000px">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Designer</th>
                    <th>Keterangan</th>
                </tr>
                <tbody>
                @foreach($blog as $b)
                <tr>
                    <td>{{$b -> id}}</td>
                    <td>{{$b -> nama}}</td>
                    <td>{{$b -> designer}}</td>
                    <td>{{$b -> keterangan}}</td>
                </tr>
                @endforeach
                 </tbody>
            </table>
			
@endsection