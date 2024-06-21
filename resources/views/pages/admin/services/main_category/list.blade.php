@extends('layouts.backend.template')
@section('content')
@php
	$userInfo = Auth::user();
@endphp
	<div class='container mb-5 mt-5'>
		<h3 class='mt-5'>Account</h3>
		<div class="row mt-5">
		   	@if(isMobile() == 1)
			@else
				@include('layouts.backend.admin.left-sidebar')
			@endif
		  <div class="col-md-9 col-xs-12 col-sm-12 border pt-3 roundedCustom16 pb-4">
		    <div class='container'>
		    	<div class='row border-bottom pb-2'>
	                <div class='col-5 pl-0 textBlackNorm'>List</div>
	                <div class='col-7 pr-0 text-end'>
	                	<a href="{{route('service.main.category.add')}}" class='themeColorHardGreen font-weight-500'>
	                    	+ Add Category
	                	</a>
	                </div>
	            </div>
	            <div class='row border-bottom pb-2'>
	            	<table class="display simpleDatatableClass">
					    <thead>
					        <tr>
					            <th>Name</th>
    							@if($userInfo->userType->variable == 'super-admin')
					            	<th>User</th>
    							@endif
					            <th>Action</th>
					        </tr>
					    </thead>
						<tbody>
		                @foreach($serviceMainCategories as $category)
					        <tr>
					            <td>{{$category->name}}</td>
    							@if($userInfo->userType->variable == 'super-admin')
					            	<td>{{$category->userInfo->email}}</td>
    							@endif
					            <td>
					            	<a href="{{route('service.main.category.edit',['id'=>$category->id])}}" class="btn btn-outline-success">Edit</a>
					            	<button data-title="Main category" data-info="Are you sure you want to delete this category? This action is permanent and couldn’t be restored." data-id="{{$category->id}}" data-url="{{route('service.main.category.delete')}}" class="btn btn-outline-danger btnDelete ml-1">Delete</button>
					            </td>
					        </tr>
		                @endforeach
						</tbody>
					</table>
	            </div>
		  	</div>
		  </div>
		</div>
	</div>	
	@include('modals.delete')
@endsection