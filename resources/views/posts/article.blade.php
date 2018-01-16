@extends('layouts.app')

@section('content')

    <div class="container">

    <table class="table table-bordered table-dark">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Titre</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <tr>

            <th scope="row"></th>
            <td></td>
            <td></td>
            <td>
                <div class="form-group">
                <a href="">Supprimer</a>
                <a href="">Edit</a>
                <a href="">Show</a>
                </div>
            </td>

        </tr>


        </tbody>
    </table>
    </div>
    @endsection

