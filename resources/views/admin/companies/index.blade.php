@dump($companies)
@extends('layouts.app')

@section('title', 'Companies')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <th>id</th>
                        <th>logo</th>
                        <th>name</th>
                        <th>vat number</th>
                    </thead>
                    <tbody>
                        @foreach ($companies as $company)
                        <tr>
                            <td>
                                <p>
                                    {{$company->id}}
                                </p>
                            </td>
                            <td>
                                <p>
                                    {{$company->logo}}
                                </p>
                            </td>
                            <td>
                                <p>
                                    {{$company->name}}
                                </p>
                            </td>
                            <td>
                                <p>
                                    {{$company->vat_number}}
                                </p>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
