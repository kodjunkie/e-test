@extends('e-test::layouts.app')
@section('title', 'Manage Courses / Subjects')
@section('content')
    <!-- Header -->
    <div class="contact-us">
        <header class="site-header" role="banner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <hgroup class="title-group">
                            <h1 class="bigtitle">Manage Courses / Subjects</h1>
                            <h4>Manage all Courses/Subjects here.</h4>
                        </hgroup>
                    </div>
                </div>
            </div>
        </header>
    </div>

    <!-- Content -->
    <main class="main" role="main">

        <!-- Contact Form / Address -->
        <section class="section contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <!-- Contact Form -->
                        <article class="contact-form clearfix">
                            <div class="col-sm-2">
                                <div class="btn-group-vertical">
                                    <a href="{{ route('e-test.index') }}" class="btn btn-default">&laquo; Back</a>
                                    <a class="btn btn-primary" data-toggle="modal" href="#create_subject">Add Subject</a>
                                </div>
                            </div>
                            <div class="col-sm-9 col-sm-offset-1">
                                <table class="table table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th>Subjects/Courses</th>
                                        <th>Date</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($subjects as $subject)
                                        <tr>
                                            <td><a href="{{ route('subject.show', $subject->slug) }}">{{ $subject->name }}</a></td>
                                            <td>{{ $subject->created_at->format('j M, Y') }}</td>
                                            <td>
                                                <a href="{{ route('test.start', $subject->slug) }}" data-toggle="tooltip" data-placement="top" title="Start">
                                                    <span class="glyphicon glyphicon-ok"></span></a> &middot;
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="Edit">
                                                    <span class="glyphicon glyphicon-edit"></span></a> &middot;
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="View">
                                                    <span class="glyphicon glyphicon-remove"></span></a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3">No records yet!</td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

    </main>

    @include('e-test::subject.modals.create')
@endsection
