@extends('layout')
@section('judul','Contact us')
@section('section')

<!-- <div class="container-fluid"> -->
<div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="row"></div>
                        <div class="card border-light mb-3 col kontak">
                            <div class="row m-2">
                                <p class="card-header"><b>Location</b></p>
                                <p>Jalan Raya Lapan No 5, RT 014 RW 001, Pekayon, Pasar Rebo, Jakarta Timur, (Dalam Jong Cafe)</p>
                            </div>
                            <div class="row m-2">
                                <p class="card-header"><b>Hours</b></p>
                                <p>Monday - Friday : 08.00 - 20.00</p>
                                <p>Saturday - Sunday : 09.00 - 22.00</p>
                            </div>
                            <div class="row m-2">
                                <p class="card-header"><b>Contact</b></p>
                                <p>Phone : +628 2273 8233 00</p>
                                <p>Email : abc@gmail.com</p>
                            </div>
                        </div>
                    </div>
                <div class="col-md-8 maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.4044915730074!2d106.86095961471744!3d-6.341627395410791!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec55a891bad1%3A0x5c60913b1506a541!2sJl.%20Raya%20Lapan%20No.5%2C%20RT.8%2FRW.1%2C%20Pekayon%2C%20Kec.%20Ps.%20Rebo%2C%20Kota%20Jakarta%20Timur%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2013710!5e0!3m2!1sen!2sid!4v1641627558830!5m2!1sen!2sid" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                </div>
            </div>
        </div>

        <div class="container">
            <section class="get-in-touch">
                <h1 class="title">Feedback or Question</h1>
                <form class="contact-form row">
                <div class="form-field col-lg-12">
                    <input id="name" class="input-text js-input" type="text" required>
                    <label class="label" for="name">Name</label>
                </div>
                <div class="form-field col-lg-12">
                    <input id="email" class="input-text js-input" type="email" required>
                    <label class="label" for="email">E-mail</label>
                </div>
                <div class="form-field col-lg-12">
                    <input id="company" class="input-text js-input" type="text" required>
                    <label class="label" for="company">Subject</label>
                </div>
                    <div class="form-field col-lg-12">
                    <input id="phone" class="input-text js-input" type="text" required>
                    <label class="label" for="phone">Massage</label>
                </div>
                <div class="form-field col-lg-12 text-center">
                    <input class="submit-btn" type="submit" value="Submit">
                </div>
                </form>
            </section>
        </div>
    <!-- </div> -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

@endsection