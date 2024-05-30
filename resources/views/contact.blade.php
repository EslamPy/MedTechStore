@extends('Layouts.master')

@section('static')
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- title -->
    <title>Contact Me</title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">

</head>
    <body>
        <!-- search area -->
        <div class="search-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <span class="close-btn"><i class="fas fa-window-close"></i></span>
                        <div class="search-bar">
                            <div class="search-bar-tablecell">
                                <h3>Search For:</h3>
                                <input type="text" placeholder="Keywords">
                                <button type="submit">Search <i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end search arewa -->

        <!-- breadcrumb-section -->
        <div class="breadcrumb-section breadcrumb-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="breadcrumb-text">
                            <p>Get 24/7 Support</p>
                            <h1>Contact us</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end breadcrumb section -->

        <!-- contact form -->
        <div class="contact-from-section mt-150 mb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="form-title">
                            <h2>Have you any question?</h2>
                            <p>Please submit your question here, and we will contact you as soon as possible. Our team is
                                here to assist you with any inquiries or concerns you may have. Feel free to reach out, and
                                we'll get back to you promptly.</p>
                        </div>
                        <div id="form_status"></div>
                        <div class="contact-form">
                            <form type="POST" id="fruitkha-contact" onSubmit="return valid_datas( this );">
                                <p>
                                    <input type="text" placeholder="Name" name="name" id="name">
                                    <input type="email" placeholder="Email" name="email" id="email">
                                </p>
                                <p>
                                    <input type="tel" placeholder="Phone" name="phone" id="phone">
                                    <input type="text" placeholder="Subject" name="subject" id="subject">
                                </p>
                                <p>
                                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                </p>
                                <input type="hidden" name="token" value="FsWga4&@f6aw" />
                                <p><input type="submit" value="Submit"></p>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact-form-wrap">
                            <div class="contact-form-box">
                                <h4><i class="fas fa-map"></i> Shop Address</h4>
                                <p>34 Maadi Street<br> Cairo, Egypt.
                            </div>
                            <div class="contact-form-box">
                                <h4><i class="far fa-clock"></i> Shop Hours</h4>
                                <p>MON - FRIDAY: 8 to 9 PM <br> SAT - SUN: 10 to 8 PM </p>
                            </div>
                            <div class="contact-form-box">
                                <h4><i class="fas fa-address-book"></i> Contact</h4>
                                <p>Phone: +00 111 222 3333 <br> Email: samdev@outlook.de</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end contact form -->

        <!-- find our location -->
        <div class="find-location blue-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p> <i class="fas fa-map-marker-alt"></i> Find Our Location</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end find our location -->

        <!-- google map section -->
        <div class="embed-responsive embed-responsive-21by9">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6105.768961789208!2d31.235716262408486!3d30.044387285589836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0:0x0!5zQsO5YsO5Q!5e0!3m2!1sen!2seg!4v1643256047258"
                width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                class="embed-responsive-item"></iframe>
        </div>
        <!-- end google map section -->
    @endsection
