@include('user.nav')

<style>
    body{
      background-color: #f8f8f8;"
    }
</style>

            <div class="container my-2">
                <br>
                <a href="/paymentmethod" class="btn btn-primary">Add Payments</a>
                <h1 class="text-center my-5 text-dark my-5">Add Appoinments</h1>
                <!-- <div class="input-responsive"> -->
                <form action="/upload_appoinments" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                    <div class="col">
                    <div class="my-3">
                        <input type="text" name="name" placeholder=" Name" class="form-control" required>
                    </div>
                    </div>
                    <div class="col">

                    <div class="my-3">
                        <input type="email" name="email" placeholder=" Email" class="form-control" required>
                    </div>
                    </div>
                    </div>

                    <div class="row">
                    
                    <div class="col">
                    <div class="my-3">
                        <input type="text" name="phone" placeholder=" Number" class="form-control" required>
                    </div>
                    </div>

                    <div class="col">

                    <div class="my-3">
                        <input type="text" name="address" placeholder=" Address" class="form-control" required>
                    </div>
                    </div>
                    </div>
                    
                    <div class="row">
                    <div class="col">
                    <div class="my-3">
                        <label for="">Add Your Image</label>
                        <input type="file" name="image" class="form-control" required>
                    </div>
                    </div>

                   
                    <div class="my-3">
                        <button class="btn btn-primary">Add Appoinments</button> <span>
                        </span>
                    
                    </div>
                    </div>
                    

                </form>
                <!-- </div> -->
            </div>



            @include('user.footer')
   


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    @include('user.loader')
    @include('user.js')
</body>

</html>