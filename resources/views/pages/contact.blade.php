@extends('main')

@section('content')
    <div class="container">

        <!-- Hero -->
        <div class="container py-5">
            <h1 class="display-2 pb-2 text-focus-in">Contact Me</h1>
            <hr class="border-3 border-white my-4 ml-0 text-left w-25" role="presentation">
            <div class="row">
                <div class="col-lg-8">
                    <p class="font-serif lead mb-4 text-secondary">Please reach me via email for any questions or offers</p>
                </div>
            </div>
        </div>
    <div class="row form-row">
        <div class="col-md-12">
            <form action="{{ url('contact') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group col-md-6">
                    <label name="email">Email:</label>
                    <input id="email" name="email" class="form-control" placeholder="Your email">
                </div>

                <div class="form-group col-md-6">
                    <label name="subject">Subject:</label>
                    <input id="subject" name="subject" class="form-control" placeholder="Email subject">
                </div>

                <div class="form-group col-md-6">
                    <label name="message">Message:</label>
                    <textarea id="message" name="message" class="form-control">Type your message here...</textarea>
                </div>

                <input type="submit" value="Send Message" class="btn-warning">
            </form>
        </div>
    </div>

</div>
@endsection
