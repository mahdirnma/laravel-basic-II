@extends('layout.app')
@section('title')
    dashboard
@endsection
@section('content')
    <div class="w-full h-1/6"></div>
    <div class="w-full h-auto flex justify-between">
        <h2 class="tracking-wide font-medium">ALL RECORDS</h2>
    </div>
    <div class="max-h-96">
        <table class="w-full mt-10">
            <thead>
            <tr class="pb-10">
                <th class="font-mono text-base text-gray-400 pb-7">books</th>
                <th class="font-mono text-base text-gray-400 pb-7">writers</th>
                <th class="font-mono text-base text-gray-400 pb-7">trusts</th>
                <th class="font-mono text-base text-gray-400 pb-7">categories</th>
            </tr>
            </thead>
            <tbody>
            <tr class="border-b">
                <td class="text-center py-2.5">{{$books}}</td>
                <td class="text-center py-2.5">{{$writers}}</td>
                <td class="text-center py-2.5">{{$trusts}}</td>
                <td class="text-center py-2.5">{{$categories}}</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
