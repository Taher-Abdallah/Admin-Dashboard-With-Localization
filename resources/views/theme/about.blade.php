@section('web-title', 'About')
@section('hero-title', 'About Us')
@section('about-active', 'active')

@extends('theme.master')
        <!-- Navbar & Hero Start -->
        @include('theme.layout.nav')
        @include('theme.layout.hero')
        <!-- Navbar & Hero End -->


        <!-- About Start -->
        @include('theme.layout.about-start')
        <!-- About End -->


        <!-- Features Start -->
        @include('theme.layout.Features')
        <!-- Features End -->


        <!-- Team Start -->
        @include('theme.layout.team')
        <!-- Team End -->
